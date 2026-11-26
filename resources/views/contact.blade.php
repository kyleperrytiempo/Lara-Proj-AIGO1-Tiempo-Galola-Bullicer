@extends('layouts.app')

@section('content')
<main class="fe-contact-page">
    <section class="fe-contact-hero" aria-labelledby="fe-contact-title">
        <div class="fe-contact-hero__content">
            <span class="fe-eyebrow">FOR EYES · HERE FOR YOUR VISION</span>
            <h1 id="fe-contact-title">Let's get in <span>touch.</span></h1>
            <p>Have a question about an eye exam, our frames, or your prescription? We would be happy to help. Visit us or send our team a message.</p>
            <a class="fe-hero-link" href="#fe-contact-form">Send us a message <span aria-hidden="true">↘</span></a>
        </div>
        <div class="fe-contact-hero__art" aria-hidden="true">
            <div class="fe-lens fe-lens--one"></div>
            <div class="fe-lens fe-lens--two"></div>
            <span class="fe-art-caption">A clearer view<br>starts here.</span>
        </div>
    </section>

    <section class="fe-contact-main" aria-label="Contact For Eyes">
        <div class="fe-contact-intro">
            <span class="fe-eyebrow fe-eyebrow--blue">WE'RE EASY TO REACH</span>
            <h2>How can we <span>help you?</span></h2>
            <p>Whether you need help choosing the right frames or have a question about our services, our friendly team is ready to assist.</p>
        </div>

        <div class="fe-contact-grid">
            <aside class="fe-details-column" aria-label="For Eyes contact details">
                <div class="fe-details-card fe-details-card--primary">
                    <span class="fe-card-kicker">COME SAY HELLO</span>
                    <h3>Visit our shop</h3>
                    <p class="fe-details-lead">We'd love to help you find your perfect pair.</p>
                    <div class="fe-detail-item">
                        <span class="fe-detail-icon" aria-hidden="true">⌖</span>
                        <div>
                            <h4>Our address</h4>
                            <p>123 Main Street, Poblacion<br>(beside the pharmacy)</p>
                        </div>
                    </div>
                    <div class="fe-detail-item">
                        <span class="fe-detail-icon" aria-hidden="true">◷</span>
                        <div>
                            <h4>Opening hours</h4>
                            <p>Monday – Saturday<br>9:00 AM – 6:00 PM</p>
                        </div>
                    </div>
                </div>

                <div class="fe-details-card fe-details-card--light">
                    <span class="fe-card-kicker">GET IN CONTACT</span>
                    <h3>Talk to our team</h3>
                    <div class="fe-detail-item">
                        <span class="fe-detail-icon" aria-hidden="true">☎</span>
                        <div>
                            <h4>Telephone</h4>
                            <a href="tel:+63885550123">(088) 555-0123</a>
                        </div>
                    </div>
                    <div class="fe-detail-item">
                        <span class="fe-detail-icon" aria-hidden="true">▣</span>
                        <div>
                            <h4>Mobile</h4>
                            <a href="tel:+639173751423">0917-375-1423</a>
                        </div>
                    </div>
                    <div class="fe-detail-item">
                        <span class="fe-detail-icon" aria-hidden="true">✉</span>
                        <div>
                            <h4>Email</h4>
                            <a href="mailto:hello@foreyes.ph">hello@foreyes.ph</a>
                        </div>
                    </div>
                </div>

                <div class="fe-help-note">
                    <p><strong>Clear vision, friendly service.</strong><br>For Eyes has been helping our community see clearly since 2015.</p>
                </div>
            </aside>
            <section class="fe-form-card" aria-labelledby="fe-form-title">
                <div class="fe-card-heading">
                    <div>
                        <span class="fe-card-kicker">WRITE TO OUR TEAM</span>
                        <h3 id="fe-form-title">Send a message</h3>
                    </div>
                    <span class="fe-heading-mark" aria-hidden="true">✉</span>
                </div>
                <p class="fe-form-note">Fill out the form below and make sure your contact details are correct.</p>

                <form id="fe-contact-form" class="fe-contact-form" novalidate>
                    <div class="fe-field">
                        <label for="fe-name">Full name</label>
                        <input id="fe-name" name="name" type="text" placeholder="e.g. Juan Dela Cruz" autocomplete="name" required aria-describedby="fe-name-error">
                        <small class="fe-field-error" id="fe-name-error"></small>
                    </div>

                    <div class="fe-field">
                        <label for="fe-email">Email address</label>
                        <input id="fe-email" name="email" type="email" placeholder="you@example.com" autocomplete="email" required aria-describedby="fe-email-error">
                        <small class="fe-field-error" id="fe-email-error"></small>
                    </div>

                    <div class="fe-field">
                        <label for="fe-subject">Subject</label>
                        <input id="fe-subject" name="subject" type="text" placeholder="What would you like to ask us?" required aria-describedby="fe-subject-error">
                        <small class="fe-field-error" id="fe-subject-error"></small>
                    </div>

                    <div class="fe-field">
                        <label for="fe-message">Message</label>
                        <textarea id="fe-message" name="message" rows="5" placeholder="Write your message here..." required aria-describedby="fe-message-error"></textarea>
                        <small class="fe-field-error" id="fe-message-error"></small>
                    </div>

                    <button class="fe-submit-button" type="submit">
                        <span>Validate message</span>
                        <span aria-hidden="true">→</span>
                    </button>
                    <p id="fe-form-feedback" class="fe-form-feedback" role="status" aria-live="polite"></p>
                    <p class="fe-form-disclaimer">Demo form: it checks your entries in the browser. It is not connected to an email service, so no message will be sent or stored.</p>
                </form>
            </section>

        </div>
    </section>
</main>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}?v=20261122-fonts">
@endpush

@push('scripts')
    <script src="{{ asset('js/contact.js') }}?v=20261122-fonts" defer></script>
@endpush
