<x-layout>
    <section class="hero">
        <div class="hero-content">
            <h1>Meet Sonja</h1>
            <p class="subtitle">
                Your personal Erasmus assistant.
            </p>

            <p class="description">
                Whether you've just arrived or have already settled in, I'm here to help you
                find answers to your questions. From transport and accommodation to healthcare, 
                restaurants, and local recommendations, simply ask and I'll do my best to help.
            </p>

            <a href="{{ route('chat') }}" class="primary-btn">
                Start Chatting
            </a>
        </div>
    </section>

    <section class="features">
        <h2>How I Can Help</h2>

        <div class="feature-grid">
            <div class="card">
                <span class="icon">🏠</span>
                <h3>Accommodation</h3>
                <p>
                    Information about housing, common issues, and useful tips for your stay.
                </p>
            </div>

            <div class="card">
                <span class="icon">🚌</span>
                <h3>Transport</h3>
                <p>
                    Bus routes, travel cards, getting around, and transportation advice.
                </p>
            </div>

            <div class="card">
                <span class="icon">🛒</span>
                <h3>Shopping</h3>
                <p>
                    Supermarkets, pharmacies, shopping centres, and everyday essentials.
                </p>
            </div>

            <div class="card">
                <span class="icon">🍽️</span>
                <h3>Food & Cafés</h3>
                <p>
                    Discover restaurants, cafés, local food, and student-friendly places.
                </p>
            </div>

            <div class="card">
                <span class="icon">🏥</span>
                <h3>Healthcare</h3>
                <p>
                    Find hospitals, pharmacies, emergency contacts, and medical information.
                </p>
            </div>

            <div class="card">
                <span class="icon">🏛️</span>
                <h3>Sights & Activities</h3>
                <p>
                    Discover local attractions, cultural sites, and must-see places in the Lisbon and Montijo area.
                </p>
            </div>
        </div>
    </section>

    <section class="questions">
        <h2>Not Sure What to Ask?</h2>

        <p>
            Here are some questions students frequently ask:
        </p>

        <div class="question-list">
            <div class="question-chip">
                Where can I buy a bus card?
            </div>

            <div class="question-chip">
                Where is the nearest supermarket?
            </div>

            <div class="question-chip">
                What should I do in an emergency?
            </div>

            <div class="question-chip">
                Where can I print documents?
            </div>

            <div class="question-chip">
                Which restaurants are affordable?
            </div>

            <div class="question-chip">
                How do I contact the EPD office?
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-box">
            <h2>About Sonja</h2>

            <p>
                Sonja was created to make everyday student life easier. Instead of searching
                through long documents or waiting for a reply, you can simply ask your question
                and receive guidance in seconds.
            </p>

            <p>
                While I can't replace your Erasmus coordinator, I can answer many of the
                questions students ask every day and point you in the right direction whenever
                you need help.
            </p>

            <a href="{{ route('chat') }}" class="secondary-btn">
                Ask Sonja
            </a>
        </div>
    </section>
</x-layout>