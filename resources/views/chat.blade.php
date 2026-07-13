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

                    <a href="{{ route('home') }}" class="back-btn">
                        Home
                    </a>
                </div>

                <div class="chat-messages">
                    <!-- Sonja -->
                    <div class="message bot">
                        <div class="bubble">
                            Hello! 👋

                            <br><br>

                            I'm Sonja, your Erasmus assistant.

                            Ask me anything about accommodation, transport, healthcare, 
                            supermarkets, restaurants or anything related
                            to your Erasmus experience.
                        </div>
                    </div>

                    <!-- User Example -->
                    {{--
                    <div class="message user">
                        <div class="bubble">
                            Where can I buy a bus card?
                        </div>
                    </div>

                    <div class="message bot">
                        <div class="bubble">
                            You can buy one at...
                        </div>
                    </div>
                    --}}
                </div>

                <form class="chat-input">
                    <input type="text" placeholder="Ask Sonja anything...">
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>