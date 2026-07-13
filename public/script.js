const form = document.getElementById("chatForm");
const input = document.getElementById("question");
const messages = document.getElementById("chatMessages");

let typingBubble = null;

form.addEventListener("submit", async function (e) {

    e.preventDefault();

    const question = input.value.trim();

    if (question === "")
        return;

    // Show student's message
    addMessage(question, "user");

    // Clear input
    input.value = "";

    scrollToBottom();

    try {

        const response = await fetch(searchRoute, {

            method: "POST",

            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken
            },

            body: JSON.stringify({
                question: question
            })

        });

        // Show typing indicator while waiting
        showTyping();

        const data = await response.json();

        // Keep typing indicator visible for a short time
        await new Promise(resolve => setTimeout(resolve, 800));

        removeTyping();

        // Show Sonja's answer
        addMessage(data.answer, "bot", data.links);

    } catch (error) {

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

    message.className = "message " + sender;

    const bubble = document.createElement("div");

    bubble.className = "bubble";

    bubble.innerHTML = text.replace(/\n/g, "<br>");

    if (links && links.length > 0)
    {
        const linksContainer = document.createElement("div");

        linksContainer.className = "chat-links";

        links.forEach(link => {

            const a = document.createElement("a");

            a.href = link.url;
            a.target = "_blank";
            a.rel = "noopener noreferrer";

            a.innerHTML = "🔗 " + link.title;

            linksContainer.appendChild(a);

        });

        bubble.appendChild(document.createElement("br"));
        bubble.appendChild(linksContainer);
    }

    message.appendChild(bubble);

    messages.appendChild(message);
}

function showTyping()
{
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

function removeTyping()
{
    if (typingBubble)
    {
        typingBubble.remove();
        typingBubble = null;
    }
}

function scrollToBottom()
{
    messages.scrollTop = messages.scrollHeight;
}