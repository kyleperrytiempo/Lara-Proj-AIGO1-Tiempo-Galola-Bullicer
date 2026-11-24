@extends('layouts.app')

@section('title', 'Home | For Eyes')

@section('content')
    <section class="hero">
        <div class="slider" id="slider">
            <div class="slide active" 
            style="background-image: URL('resources\Images\Glasses.jpg'); background-size: cover;">
                <div class="slide-content">
                    <h1>See the World Clearly</h1>
                    <p>Premium prescription lenses fitted by licensed optometrists — at prices your family can afford.</p>
                </div>
            </div>
            <div class="slide" style="background: linear-gradient(135deg, #f72585, #b5179e);">
                <div class="slide-content">
                    <h1>Frames That Fit Your Style</h1>
                    <p>Over 150 frame styles — from classic to trendy — with free fitting and lifetime adjustments.</p>
                </div>
            </div>
            <div class="slide" style="background: linear-gradient(135deg, #06d6a0, #118ab2);">
                <div class="slide-content">
                    <h1>Free Eye Checkups</h1>
                    <p>Walk in for a comprehensive eye exam, Monday to Saturday, 9 AM to 6 PM.</p>
                </div>
            </div>
        </div>

        <button class="slider-btn prev" id="prevBtn">&#10094;</button>
        <button class="slider-btn next" id="nextBtn">&#10095;</button>
        <div class="dots" id="dots"></div>
    </section>

    <section class="intro">
        <h2>Welcome to For Eyes</h2>
        <p>For Eyes is your neighborhood optical shop — where clear vision meets style.
           Since 2015, we've helped over 5,000 customers find the perfect eyewear.
           From free eye checkups to the latest frame trends, we help you see the world beautifully.</p>
    </section>

    <section class="features">
        <div class="feature-card">
            <div class="feature-icon">👁️</div>
            <h3>Eye Exams</h3>
            <p>Free comprehensive eye tests by our licensed in-house optometrist.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🕶️</div>
            <h3>Stylish Frames</h3>
            <p>150+ frames for kids, adults, and seniors — all with free adjustments for life.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">⚡</div>
            <h3>Same-Day Lenses</h3>
            <p>Standard prescriptions ready the same day. No waiting, no hassle.</p>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush