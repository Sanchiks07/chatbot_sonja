<x-layout>
    <section class="hero">
        <div class="hero-content">
            <div class="hero-brand">
                <img src="{{ asset('img/epd-logo-2.png') }}" alt="European Projects Development logo" class="brand-logo">
                <p class="eyebrow">European Projects Development</p>
            </div>

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
            <div class="card card-accommodation">
                <div class="card-animation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="currentColor" class="animation-icon">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12.707 2.293l9 9c.63 .63 .184 1.707 -.707 1.707h-1v6a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-6h-1c-.89 0 -1.337 -1.077 -.707 -1.707l9 -9a1 1 0 0 1 1.414 0m.793 8.707h-3a1.5 1.5 0 0 0 -1.5 1.5v3a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5 -1.5v-3a1.5 1.5 0 0 0 -1.5 -1.5" />
                    </svg>
                </div>
                <span class="icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12.707 2.293l9 9c.63 .63 .184 1.707 -.707 1.707h-1v6a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-6h-1c-.89 0 -1.337 -1.077 -.707 -1.707l9 -9a1 1 0 0 1 1.414 0m.793 8.707h-3a1.5 1.5 0 0 0 -1.5 1.5v3a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5 -1.5v-3a1.5 1.5 0 0 0 -1.5 -1.5" />
                    </svg>
                </span>
                <h3>Accommodation</h3>
                <p>
                    Information about housing, common issues, and useful tips for your stay.
                </p>
            </div>

            <div class="card card-transport">
                <div class="card-animation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="animation-icon animation-icon-transport">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M17 4c3.4 0 6 3.64 6 8v5a1 1 0 0 1 -1 1h-1.171a3.001 3.001 0 0 1 -5.658 0h-6.342a3.001 3.001 0 0 1 -5.658 0h-1.171a1 1 0 0 1 -1 -1v-11a2 2 0 0 1 2 -2zm-11 12a1 1 0 1 0 0 2a1 1 0 0 0 0 -2m12 0a1 1 0 1 0 0 2a1 1 0 0 0 0 -2m-.76 -9.989l1.068 4.989h2.636c-.313 -2.756 -1.895 -4.82 -3.704 -4.989m-11.24 -.011h-3v3h3zm5 0h-3v3h3zm4.191 0h-2.191v3h2.834z" />
                    </svg>
                </div>
                <span class="icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M17 4c3.4 0 6 3.64 6 8v5a1 1 0 0 1 -1 1h-1.171a3.001 3.001 0 0 1 -5.658 0h-6.342a3.001 3.001 0 0 1 -5.658 0h-1.171a1 1 0 0 1 -1 -1v-11a2 2 0 0 1 2 -2zm-11 12a1 1 0 1 0 0 2a1 1 0 0 0 0 -2m12 0a1 1 0 1 0 0 2a1 1 0 0 0 0 -2m-.76 -9.989l1.068 4.989h2.636c-.313 -2.756 -1.895 -4.82 -3.704 -4.989m-11.24 -.011h-3v3h3zm5 0h-3v3h3zm4.191 0h-2.191v3h2.834z" />
                    </svg>
                </span>
                <h3>Transport</h3>
                <p>
                    Bus routes, travel cards, getting around, and transportation advice.
                </p>
            </div>

            <div class="card card-shopping">
                <div class="card-animation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="animation-icon">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304" />
                        <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                    </svg>
                </div>
                <span class="icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="22" height="22">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304" />
                        <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                    </svg>
                </span>
                <h3>Shopping</h3>
                <p>
                    Supermarkets, pharmacies, shopping centres, and everyday essentials.
                </p>
            </div>

            <div class="card card-food">
                <div class="card-animation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="animation-icon">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 14c.83 .642 2.077 1.017 3.5 1c1.423 .017 2.67 -.358 3.5 -1c.83 -.642 2.077 -1.017 3.5 -1c1.423 -.017 2.67 .358 3.5 1" />
                        <path d="M8 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                        <path d="M12 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                        <path d="M3 10h14v5a6 6 0 0 1 -6 6h-2a6 6 0 0 1 -6 -6v-5" />
                        <path d="M16.746 16.726a3 3 0 1 0 .252 -5.555" />
                    </svg>
                </div>
                <span class="icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="22" height="22">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 14c.83 .642 2.077 1.017 3.5 1c1.423 .017 2.67 -.358 3.5 -1c.83 -.642 2.077 -1.017 3.5 -1c1.423 -.017 2.67 .358 3.5 1" />
                        <path d="M8 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                        <path d="M12 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                        <path d="M3 10h14v5a6 6 0 0 1 -6 6h-2a6 6 0 0 1 -6 -6v-5" />
                        <path d="M16.746 16.726a3 3 0 1 0 .252 -5.555" />
                    </svg>
                </span>
                <h3>Food & Cafés</h3>
                <p>
                    Discover restaurants, cafés, local food, and student-friendly places.
                </p>
            </div>

            <div class="card card-healthcare">
                <div class="card-animation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="animation-icon">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l18 0" />
                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                        <path d="M10 9l4 0" />
                        <path d="M12 7l0 4" />
                    </svg>
                </div>
                <span class="icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="22" height="22">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l18 0" />
                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                        <path d="M10 9l4 0" />
                        <path d="M12 7l0 4" />
                    </svg>
                </span>
                <h3>Healthcare</h3>
                <p>
                    Find hospitals, pharmacies, emergency contacts, and medical information.
                </p>
            </div>

            <div class="card card-activities">
                <div class="card-animation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="animation-icon">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                        <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                    </svg>
                </div>
                <span class="icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="22" height="22">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                        <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                    </svg>
                </span>
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
                        <div class="question-chip">How do I check in to my accommodation?</div>
                        <div class="question-chip">Where can I buy groceries nearby?</div>
                        <div class="question-chip">How do I get a transport card?</div>
                        <div class="question-chip">What should I do in an emergency?</div>
                        <div class="question-chip">Where is the nearest pharmacy?</div>
                        <div class="question-chip">How do I contact the EPD office?</div>
                        <div class="question-chip">Where can I eat traditional Portuguese food?</div>
                        <div class="question-chip">What places should I visit on the weekend?</div>
                        <div class="question-chip">Where can I do my laundry?</div>
                        <div class="question-chip">Where can I find cheap shopping?</div>
                    </div>

                    <div class="question-set">
                        <div class="question-chip">How do I check in to my accommodation?</div>
                        <div class="question-chip">Where can I buy groceries nearby?</div>
                        <div class="question-chip">How do I get a transport card?</div>
                        <div class="question-chip">What should I do in an emergency?</div>
                        <div class="question-chip">Where is the nearest pharmacy?</div>
                        <div class="question-chip">How do I contact the EPD office?</div>
                        <div class="question-chip">Where can I eat traditional Portuguese food?</div>
                        <div class="question-chip">What places should I visit on the weekend?</div>
                        <div class="question-chip">Where can I do my laundry?</div>
                        <div class="question-chip">Where can I find cheap shopping?</div>
                    </div>
                </div>
            </div>

            <div class="question-row question-row--rtl">
                <div class="question-track">
                    <div class="question-set" aria-hidden="true">
                        <div class="question-chip">How do I use public transport?</div>
                        <div class="question-chip">What should I do if I lose my passport?</div>
                        <div class="question-chip">Where is the nearest supermarket?</div>
                        <div class="question-chip">How do I get to the meeting point?</div>
                        <div class="question-chip">Where can I withdraw cash?</div>
                        <div class="question-chip">How do I call an ambulance?</div>
                        <div class="question-chip">What should I do if I feel sick?</div>
                        <div class="question-chip">What are the best beaches nearby?</div>
                        <div class="question-chip">Where can I buy souvenirs?</div>
                        <div class="question-chip">How do I contact my coordinator?</div>
                    </div>

                    <div class="question-set" aria-hidden="true">
                        <div class="question-chip">How do I use public transport?</div>
                        <div class="question-chip">What should I do if I lose my passport?</div>
                        <div class="question-chip">Where is the nearest supermarket?</div>
                        <div class="question-chip">How do I get to the meeting point?</div>
                        <div class="question-chip">Where can I withdraw cash?</div>
                        <div class="question-chip">How do I call an ambulance?</div>
                        <div class="question-chip">What should I do if I feel sick?</div>
                        <div class="question-chip">What are the best beaches nearby?</div>
                        <div class="question-chip">Where can I buy souvenirs?</div>
                        <div class="question-chip">How do I contact my coordinator?</div>
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