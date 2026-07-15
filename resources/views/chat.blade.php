<x-layout>
    <div class="chat-page">
        <div class="chat-shell">
            <img src="{{ asset('img/sonja-zzz.png') }}" alt="Sleeping Sonja" class="sleeping-sonja" aria-hidden="true">
            <div class="chat-container">
                <div class="chat-header">
                    <div class="chat-brand">
                        <img src="{{ asset('img/Sonja-logo.png') }}" alt="Sonja chat mascot" class="chat-avatar">
                        <div>
                            <p>European Projects Development • Erasmus+ Portugal</p>
                        </div>
                    </div>
                    <a href="{{ route('home') }}" class="back-btn">Home</a>
                </div>

                <div class="chat-messages" id="chatMessages">
                    <div class="message bot">
                        <div class="bubble">
                            Hello! 👋

                            <br><br>

                            I'm Sonja, your Erasmus assistant.
                            Ask me anything about accommodation, transport, healthcare, supermarkets, restaurants 
                            or anything related to your Erasmus experience.
                        </div>
                    </div>
                </div>

                <form class="chat-input" id="chatForm" data-search-route="{{ route('chat.search') }}">
                    @csrf

                    <input type="text" id="question" placeholder="Ask Sonja anything..." autocomplete="off" maxlength="500" required>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>