const form = document.getElementById("chatForm");
const input = document.getElementById("question");
const messages = document.getElementById("chatMessages");

const searchRoute = form?.dataset.searchRoute;
const csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    ?.getAttribute("content");

let typingBubble = null;

form.addEventListener("submit", async function (e) {

    e.preventDefault();

    const question = input.value.trim();

    if (question === "") {
        return;
    }

    // Show student's message immediately
    addMessage(question, "user");

    // Clear input
    input.value = "";

    scrollToBottom();

    // Show Sonja typing immediately
    showTyping();

    try {

        const response = await fetch(searchRoute, {

            method: "POST",

            headers: {
                "Accept": "application/json",
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken
            },

            body: JSON.stringify({
                question: question
            })

        });

        if (!response.ok) {

            removeTyping();

            const errorData = await response.json().catch(() => ({}));

            addMessage(
                errorData.message ||
                "Sorry, something went wrong. Please try again later.",
                "bot"
            );

            scrollToBottom();

            return;
        }

        const data = await response.json();

        // Make Sonja feel more natural
        await new Promise(resolve => setTimeout(resolve, 800));

        removeTyping();

        addMessage(data.answer, "bot", data.links);

    }
    catch (error) {

        console.error(error);

        removeTyping();

        addMessage(
            "Sorry, something went wrong. Please try again later.",
            "bot"
        );

    }

    scrollToBottom();

});

function addMessage(text, sender, links = [])
{
    const message = document.createElement("div");
    message.className = `message ${sender}`;

    const bubble = document.createElement("div");
    bubble.className = "bubble";

    const parts = String(text ?? "").split("\n");

    parts.forEach((part, index) => {

        if (index > 0) {
            bubble.appendChild(document.createElement("br"));
        }

        bubble.appendChild(document.createTextNode(part));

    });

    if (links && links.length > 0) {

        const linksContainer = document.createElement("div");
        linksContainer.className = "chat-links";

        links.forEach(link => {

            if (!isSafeUrl(link.url)) {
                return;
            }

            const a = document.createElement("a");

            a.href = link.url;
            a.target = "_blank";
            a.rel = "noopener noreferrer";
            a.textContent = "🔗 " + link.title;

            linksContainer.appendChild(a);

        });

        if (linksContainer.childNodes.length > 0) {

            bubble.appendChild(document.createElement("br"));
            bubble.appendChild(linksContainer);

        }

    }

    message.appendChild(bubble);

    messages.appendChild(message);
}

function showTyping()
{
    if (typingBubble) {
        return;
    }

    typingBubble = document.createElement("div");

    typingBubble.className = "message bot typing-message";

    typingBubble.innerHTML = `
        <div class="bubble typing-bubble">
            <span></span>
            <span></span>
            <span></span>
        </div>
    `;

    messages.appendChild(typingBubble);

    scrollToBottom();
}

function removeTyping() {
    if (typingBubble) {
        typingBubble.remove();
        typingBubble = null;
    }
}

function isSafeUrl(url) {
    try {
        const parsed = new URL(url, window.location.origin);
        return ["http:", "https:"].includes(parsed.protocol);
    } catch {
        return false;
    }
}

function scrollToBottom() {
    messages.scrollTop = messages.scrollHeight;
}