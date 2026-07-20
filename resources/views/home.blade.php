<x-layout>
    <!-- ========== HERO ========== -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-brand">
                <img src="{{ asset('img/epd-logo-2.png') }}" alt="European Projects Development logo" class="brand-logo">
                <p class="eyebrow">European Projects Development</p>
            </div>

            <h1>Welcome to Sonja</h1>
            <p class="subtitle">Your Erasmus guide for life in Portugal.</p>
            <p class="description">Need help with accommodation, transport, healthcare or everyday questions? Just ask.</p>

            <form class="hero-search" action="{{ route('chat') }}" method="GET">
                <input
                    type="text" name="q" class="hero-search-input"
                    placeholder="Ask about buses, housing, supermarkets…"
                    autocomplete="off" aria-label="Ask Sonja a question"
                >
                <button type="submit" class="hero-search-btn">Ask Sonja</button>
            </form>
        </div>
    </section>

    <!-- ========== POPULAR TOPICS ========== -->
    <div class="band-subtle">
        <section class="features">
            <h2>Popular Topics</h2>

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
                    <p>Check-in, repairs, rules, and housing help.</p>
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
                    <p>Buses, ferries, travel cards, and getting around.</p>
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
                    <p>Supermarkets, malls, and everyday essentials.</p>
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
                    <p>Restaurants, local dishes, and delivery options.</p>
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
                    <p>Hospitals, pharmacies, and medical advice.</p>
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
                    <p>Beaches, museums, parks, and day trips.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- ========== USEFUL TODAY ========== -->
    <section class="useful-today">
        <p class="section-eyebrow">Useful today</p>
        <h2>Get quick answers</h2>
        <div class="useful-grid">
            <a href="{{ route('chat') }}?q=How+do+I+get+a+transport+card" class="useful-card">
                <span class="useful-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 4a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1l0 -4"/><path d="M16 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/><path d="M10 5h7c2.761 0 5 3.134 5 7v5h-2"/><path d="M16 17h-8"/><path d="M16 5l1.5 7h4.5"/><path d="M9.5 10h7.5"/><path d="M12 5v5"/><path d="M5 9v11"/></svg></span>
                <span class="useful-label">Get a transport card</span>
            </a>
            <a href="{{ route('chat') }}?q=What+are+the+emergency+numbers+in+Portugal" class="useful-card">
                <span class="useful-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"/><path d="M15 6h6m-3 -3v6"/></svg></span>
                <span class="useful-label">Emergency numbers</span>
            </a>
            <a href="{{ route('chat') }}?q=Where+can+I+find+supermarkets+nearby" class="useful-card">
                <span class="useful-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/><path d="M15 19a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/><path d="M17 17h-11v-14h-2"/><path d="M6 5l14 1l-1 7h-13"/></svg></span>
                <span class="useful-label">Find supermarkets</span>
            </a>
            <a href="{{ route('chat') }}?q=Where+is+the+orientation+meeting+point" class="useful-card">
                <span class="useful-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"/><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0"/></svg></span>
                <span class="useful-label">Orientation meeting point</span>
            </a>
            <a href="{{ route('chat') }}?q=Where+is+the+nearest+pharmacy" class="useful-card">
                <span class="useful-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20.207 3.793a5.95 5.95 0 0 1 0 8.414l-8 8a5.95 5.95 0 0 1 -8.414 -8.414l8 -8a5.95 5.95 0 0 1 8.414 0m-7 1.414l-4.294 4.293l5.586 5.586l4.294 -4.292a3.95 3.95 0 1 0 -5.586 -5.586"/></svg></span>
                <span class="useful-label">Nearest pharmacy</span>
            </a>
            <a href="{{ route('chat') }}?q=Where+can+I+withdraw+cash" class="useful-card">
                <span class="useful-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 6m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"/><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/><path d="M7 12l0 0"/><path d="M17 12l0 0"/></svg></span>
                <span class="useful-label">Withdraw cash</span>
            </a>
        </div>
    </section>

    <!-- ========== POPULAR TOPICS ========== -->
    <div class="band-subtle">
        <section class="questions">
            <p class="section-eyebrow">Popular questions</p>
            <h2>Not sure where to start?</h2>
            <p>Browse questions students ask every day.</p>

            <div class="question-marquee-wrap">
                <div class="question-marquee" aria-label="Frequently asked student questions">
                    <div class="question-row question-row--ltr">
                        <div class="question-track">
                            <div class="question-set">
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I check in to my accommodation?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I buy groceries nearby?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I get a transport card?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> What should I do in an emergency?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where is the nearest pharmacy?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I contact the EPD office?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I eat traditional Portuguese food?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> What places should I visit on the weekend?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I do my laundry?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I find cheap shopping?</div>
                            </div>

                            <div class="question-set" aria-hidden="true">
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I check in to my accommodation?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I buy groceries nearby?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I get a transport card?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> What should I do in an emergency?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where is the nearest pharmacy?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I contact the EPD office?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I eat traditional Portuguese food?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> What places should I visit on the weekend?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I do my laundry?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I find cheap shopping?</div>
                            </div>
                        </div>
                    </div>

                    <div class="question-row question-row--rtl">
                        <div class="question-track">
                            <div class="question-set" aria-hidden="true">
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I use public transport?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> What should I do if I lose my passport?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where is the nearest supermarket?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I get to the meeting point?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I withdraw cash?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I call an ambulance?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> What should I do if I feel sick?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> What are the best beaches nearby?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I buy souvenirs?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I contact my coordinator?</div>
                            </div>

                            <div class="question-set" aria-hidden="true">
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I use public transport?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> What should I do if I lose my passport?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where is the nearest supermarket?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I get to the meeting point?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I withdraw cash?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I call an ambulance?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> What should I do if I feel sick?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> What are the best beaches nearby?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> Where can I buy souvenirs?</div>
                                <div class="question-chip"><span class="chip-icon" aria-hidden="true">💬</span> How do I contact my coordinator?</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>