@extends('layouts.app') <!-- or your preferred layout -->

@section('title', getSettings()->app_name . ':: About Page')

@section('content')
    <main class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">About Us</h2>
        <div class="space-y-6 text-gray-700 leading-relaxed">
            <p>Welcome to <strong>{{ getSettings()->app_name }}</strong>, your trusted platform for promoting services across India. Our
                mission is to empower professionals, small businesses, and entrepreneurs by offering them a space to
                showcase their services and reach a wider audience.</p>

            <p>Founded with the vision of simplifying service discovery and enhancing online visibility for providers,
                {{ getSettings()->app_name }} bridges the gap between those offering services and those seeking them. Whether you're a
                freelancer, agency, or local business, we provide a simple and effective platform to advertise your
                offerings.</p>

            <div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">What We Do</h3>
                <p>We specialize in service advertisements. Users can post their services on our platform, customize
                    listings with detailed information, and improve discoverability through targeted ad placement options.
                    We do not sell any services directly but facilitate service visibility for providers across various
                    industries.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Our Vision</h3>
                <p>Our vision is to become the go-to digital platform in India for discovering and promoting services of all
                    kinds—from home repairs and tutors to IT services and freelance professionals. We believe in creating
                    equal opportunities for service providers, no matter their size or location.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Why Choose {{ getSettings()->app_name }}</h3>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Simple and user-friendly interface to post and manage ads</li>
                    <li>Flexible ad placement options to suit your budget and visibility needs</li>
                    <li>Secure and transparent platform – no hidden fees or commissions</li>
                    <li>Dedicated support for advertisers with timely assistance</li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Contact Us</h3>
                <p>If you have any questions, suggestions, or need help getting started, feel free to reach out to our
                    support team at
                    <a href="mailto:{{ getSettings()->email }}"
                        class="text-blue-600 hover:underline">{{ getSettings()->email }}</a>.
                </p>
            </div>

            <p>Thank you for choosing {{ getSettings()->app_name }} — let's grow your service presence together!</p>
        </div>
    </main>
@endsection
