const form = document.getElementById("chatForm");
const input = document.getElementById("question");
const messages = document.getElementById("chatMessages");

const searchRoute = form?.dataset.searchRoute;
const csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    ?.getAttribute("content");

let typingBubble = null;

// Null guard: script.js runs on every page; chatForm only exists on the chat page.
if (form) {
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
        } catch (error) {
            console.error(error);
            removeTyping();

            if (!navigator.onLine) {
                addMessage(
                    "📶 It looks like you're currently offline.\n\nI need an internet connection to search my knowledge base and answer your questions.\n\nPlease reconnect to the internet and try again.",
                    "bot"
                );
            } else {
                addMessage(
                    "Sorry, something went wrong while processing your request. Please try again in a moment.",
                    "bot"
                );
            }
        }

        scrollToBottom();
    });

    // Auto-send a question pre-filled from the home page search or quick-action cards.
    // Must come AFTER addEventListener so the handler is already registered.
    const initialQuestion = form.dataset.initialQuestion?.trim();
    if (initialQuestion) {
        input.value = initialQuestion;
        form.dispatchEvent(new Event("submit", { bubbles: true, cancelable: true }));
    }
}

function addMessage(text, sender, links = []) {
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

function showTyping() {
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


/* ------ SERVICE WORKER UPLOAD ------ */
if ("serviceWorker" in navigator) {
    window.addEventListener("load", () => {
        navigator.serviceWorker
            .register("/sw.js")
            .then(registration => {
                console.log("Service Worker registered:", registration);
            })
            .catch(error => {
                console.error("Service Worker registration failed:", error);
            });
    });
}


/* ------ SPLASH SCREEN------ */
const splash = document.getElementById("splash-screen");
const loadingText = document.getElementById("loading-text");

const loadingMessages = [
    "Preparing Sonja...",
    "Loading student resources...",
    "Getting everything ready...",
    "Almost there..."
];

let messageIndex = 0;

const loadingInterval = setInterval(() => {
    if (!loadingText) return;
    messageIndex++;

    loadingText.textContent = loadingMessages[messageIndex % loadingMessages.length];
}, 900);

window.addEventListener("load", () => {
    setTimeout(() => {
        splash.classList.add("hidden");
        clearInterval(loadingInterval);

        setTimeout(() => {
            splash.remove();
        }, 600);
    }, 1200);
});