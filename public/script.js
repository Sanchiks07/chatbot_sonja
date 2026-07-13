// keyword and synonym search for the student questions
const form = document.getElementById("chatForm");
const input = document.getElementById("question");
const messages = document.getElementById("chatMessages");
const searchRoute = form?.dataset.searchRoute;
const csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    ?.getAttribute("content");

form.addEventListener("submit", async function (e) {
    e.preventDefault();
    const question = input.value.trim();
    if (question === "") return;
    addMessage(question, "user");
    input.value = "";
    scrollToBottom();

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
            const errorData = await response.json().catch(() => ({}));
            const errorMessage = errorData.message || "Sorry, something went wrong. Please try again later.";

            addMessage(errorMessage, "bot");
            scrollToBottom();
            return;
        }

        const data = await response.json();
        addMessage(data.answer, "bot", data.links);

    } catch (error) {
        console.error(error);
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
    const parts = String(text ?? "").split(/\n/);

    parts.forEach((part, index) => {
        if (index > 0) {
            bubble.appendChild(document.createElement("br"));
        }

        bubble.appendChild(document.createTextNode(part));
    });

    if (links && links.length > 0) {
        const list = document.createElement("div");

        list.className = "chat-links";
        links.forEach(link => {
            if (!isSafeUrl(link.url)) {
                return;
            }

            const a = document.createElement("a");
            a.href = link.url;
            a.target = "_blank";
            a.rel = "noopener noreferrer";
            a.innerText = link.title;
            list.appendChild(a);
            list.appendChild(document.createElement("br"));
        });

        if (list.childNodes.length > 0) {
            bubble.appendChild(document.createElement("br"));
            bubble.appendChild(list);
        }
    }

    message.appendChild(bubble);
    messages.appendChild(message);
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