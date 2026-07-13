// keyword and synonym search for the student questions
const form = document.getElementById("chatForm");
const input = document.getElementById("question");
const messages = document.getElementById("chatMessages");

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
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken
            },
            body: JSON.stringify({
                question: question
            })

        });
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
    bubble.innerHTML = text.replace(/\n/g, "<br>");

    if (links && links.length > 0) {
        const list = document.createElement("div");

        list.className = "chat-links";
        links.forEach(link => {
            const a = document.createElement("a");
            a.href = link.url;
            a.target = "_blank";
            a.innerText = link.title;
            list.appendChild(a);
            list.appendChild(document.createElement("br"));
        });

        bubble.appendChild(document.createElement("br"));
        bubble.appendChild(list);
    }

    message.appendChild(bubble);
    messages.appendChild(message);
}

function scrollToBottom() {
    messages.scrollTop = messages.scrollHeight;
}