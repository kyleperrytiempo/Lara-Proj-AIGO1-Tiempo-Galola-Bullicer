@extends('layouts.app')

@section('title', 'About | For Eyes')

@section('content')
    <div class="about-wrapper">

        {{-- Hero --}}
        <section class="AboutPage_1 reveal">
            <h1 class="card">For Eyes</h1>
            <div class="hero-copy">
                <p>For Eyes is a local optical shop located in the central city of Fontaine.</p>
                <p>We have been helping the community see the world in clarity since 2015.</p>
            </div>
        </section>

        {{-- Offers --}}
        <section class="offers reveal" aria-labelledby="offers-title">
            <h2 id="offers-title">What We Offer</h2>
            <ul class="OffersList">
                <li>Comprehensive eye exams</li>
                <li>A wide selection of stylish frames</li>
                <li>Quality prescription lenses</li>
            </ul>
            <p class="offers-and">And more!</p>
            <h3>All at prices that anyone can afford.</h3>
        </section>

        {{-- Staff --}}
        <section class="About Staff reveal" aria-labelledby="staff-title">
            <h2 id="staff-title">The People Who Started It All</h2>

            <div class="image-row">

                <article class="image-Item" id="AboutZandik">
                    <img src="{{ asset('images/Dr.IlDottore1.jpg') }}" alt="Portrait of Dr. Zandik" title="Dr. Zandik" loading="lazy">
                    <h3>Dr. Zandik</h3>
                    <p class="staff-role">Founder &amp; Lead Optometrist</p>
                    <div class="bio" id="bio-Zandik" hidden>
                        <ul>
                            <li>Age: 32</li>
                            <li>2nd of the 11 Fatui Harbingers of Snezhnaya</li>
                            <li>Studied at the Sumeru Akademiya</li>
                        </ul>
                    </div>
                    <button class="read-more-btn" data-target="bio-Zandik">More About Dr. Zandik</button>
                </article>

                <article class="image-Item" id="AboutGregory">
                    <img src="{{ asset('images/Dr.House.png') }}" alt="Portrait of Dr. Gregory" title="Dr. Gregory" loading="lazy">
                    <h3>Dr. Gregory</h3>
                    <p class="staff-role">Licensed Optician</p>
                    <div class="bio" id="bio-Gregory" hidden>
                        <ul>
                            <li>Age: 50</li>
                            <li>2nd of the 11 Fatui Harbingers of Snezhnaya</li>
                            <li>Studied at Johns Hopkins University</li>
                            <li>Trained at the University of Michigan</li>
                        </ul>
                    </div>
                    <button class="read-more-btn" data-target="bio-Gregory">More About Dr. Gregory</button>
                </article>

                <article class="image-Item" id="AboutKyle">
                    <img src="{{ asset('images/Kyle.jpg') }}" alt="Portrait of Kyle Perry" title="Kyle Perry" loading="lazy">
                    <h3>Kyle Perry</h3>
                    <p class="staff-role">Customer Care &amp; Frame Stylist</p>
                    <div class="bio" id="bio-Kyle" hidden>
                        <ul>
                            <li>Age: 23</li>
                            <li>Graduate of Carage State University</li>
                            <li>Took part in the Fontaine Research Institute</li>
                        </ul>
                    </div>
                    <button class="read-more-btn" data-target="bio-Kyle">More About Kyle</button>
                </article>

            </div>
        </section>

        {{-- Shop facts with animated counters --}}
        <section id="shop-facts" class="shop-facts reveal" aria-label="Shop facts">
            <p class="facts-numbers">
                <span class="fact"><span class="fact-number" data-target="5000">0</span>+ Happy Customers</span>
                <span class="sep">•</span>
                <span class="fact"><span class="fact-number" data-target="10">0</span>+ Years of Service</span>
                <span class="sep">•</span>
                <span class="fact"><span class="fact-number" data-target="150">0</span>+ Frames</span>
                <span class="sep">•</span>
                <span class="fact"><span class="fact-number" data-target="3">0</span> Branches</span>
            </p>
            <p>Discover our shop, learn about our story and values, and find an easy way to reach us.</p>
        </section>

    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
