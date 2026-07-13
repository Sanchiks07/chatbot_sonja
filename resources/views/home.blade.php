<x-layout>
    <section class="hero">
        <div class="hero-content">
            <div class="hero-brand">
                <img src="{{ asset('img/epd-logo-2.png') }}" alt="European Projects Development logo" class="brand-logo">
            </div>

            <p class="eyebrow">European Projects Development</p>
            <h1>Welcome to Sonja</h1>
            <p class="subtitle">
                Your Erasmus+ assistant for life in Portugal.
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
                <span class="icon" aria-hidden="true">AC</span>
                <h3>Accommodation</h3>
                <p>
                    Information about housing, common issues, and useful tips for your stay.
                </p>
            </div>

            <div class="card">
                <span class="icon" aria-hidden="true">TR</span>
                <h3>Transport</h3>
                <p>
                    Bus routes, travel cards, getting around, and transportation advice.
                </p>
            </div>

            <div class="card">
                <span class="icon" aria-hidden="true">SH</span>
                <h3>Shopping</h3>
                <p>
                    Supermarkets, pharmacies, shopping centres, and everyday essentials.
                </p>
            </div>

            <div class="card">
                <span class="icon" aria-hidden="true">FD</span>
                <h3>Food & Cafés</h3>
                <p>
                    Discover restaurants, cafés, local food, and student-friendly places.
                </p>
            </div>

            <div class="card">
                <span class="icon" aria-hidden="true">HC</span>
                <h3>Healthcare</h3>
                <p>
                    Find hospitals, pharmacies, emergency contacts, and medical information.
                </p>
            </div>

            <div class="card">
                <span class="icon" aria-hidden="true">SV</span>
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

        <div class="question-marquee" aria-label="Frequently asked student questions">
            <div class="question-row question-row--ltr">
                <div class="question-track">
                    <div class="question-set">
                        <div class="question-chip">Where is the meeting point?</div>
                        <div class="question-chip">How do I contact the EPD office?</div>
                        <div class="question-chip">How do I get a transport card?</div>
                        <div class="question-chip">Where can I buy cheap groceries?</div>
                        <div class="question-chip">What is the nearest pharmacy?</div>
                        <div class="question-chip">How do I find student discounts?</div>
                        <div class="question-chip">Where is the closest laundry?</div>
                        <div class="question-chip">How can I register at my university?</div>
                        <div class="question-chip">How do I top up my phone plan?</div>
                        <div class="question-chip">Where can I print documents?</div>
                    </div>

                    <div class="question-set" aria-hidden="true">
                        <div class="question-chip">Where is the meeting point?</div>
                        <div class="question-chip">How do I contact the EPD office?</div>
                        <div class="question-chip">How do I get a transport card?</div>
                        <div class="question-chip">Where can I buy cheap groceries?</div>
                        <div class="question-chip">What is the nearest pharmacy?</div>
                        <div class="question-chip">How do I find student discounts?</div>
                        <div class="question-chip">Where is the closest laundry?</div>
                        <div class="question-chip">How can I register at my university?</div>
                        <div class="question-chip">How do I top up my phone plan?</div>
                        <div class="question-chip">Where can I print documents?</div>
                    </div>
                </div>
            </div>

            <div class="question-row question-row--rtl">
                <div class="question-track">
                    <div class="question-set">
                        <div class="question-chip">What should I do in an emergency?</div>
                        <div class="question-chip">Which restaurants are affordable?</div>
                        <div class="question-chip">How do I open a bank account?</div>
                        <div class="question-chip">Where is the nearest hospital?</div>
                        <div class="question-chip">How can I join local events?</div>
                        <div class="question-chip">What apps should I install in Portugal?</div>
                        <div class="question-chip">How do I reach Lisbon from Montijo?</div>
                        <div class="question-chip">Where can I study quietly?</div>
                        <div class="question-chip">How do I get to the airport?</div>
                        <div class="question-chip">What are emergency phone numbers?</div>
                    </div>

                    <div class="question-set" aria-hidden="true">
                        <div class="question-chip">What should I do in an emergency?</div>
                        <div class="question-chip">Which restaurants are affordable?</div>
                        <div class="question-chip">How do I open a bank account?</div>
                        <div class="question-chip">Where is the nearest hospital?</div>
                        <div class="question-chip">How can I join local events?</div>
                        <div class="question-chip">What apps should I install in Portugal?</div>
                        <div class="question-chip">How do I reach Lisbon from Montijo?</div>
                        <div class="question-chip">Where can I study quietly?</div>
                        <div class="question-chip">How do I get to the airport?</div>
                        <div class="question-chip">What are emergency phone numbers?</div>
                    </div>
                </div>
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