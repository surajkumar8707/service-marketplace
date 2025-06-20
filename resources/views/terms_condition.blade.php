@extends('layouts.app') <!-- or your preferred layout -->

@section('title', 'Terms and Conditions')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Terms and Conditions</h1>
        <p><strong>Effective Date:</strong> {{ now()->format('F d, Y') }}</p>

        <h3>1. Use of Our Service</h3>
        <p>
            By accessing and using {{ config('app.name') }}, you confirm that you are at least 18 years old and agree to be
            bound by these Terms and Conditions.
            You are responsible for all activity under your account. Any information you provide must be accurate and up to
            date.
        </p>

        <h3>2. Limitation of Liability</h3>
        <p>
            We shall not be liable for any direct, indirect, incidental, special, or consequential damages resulting from
            the use or inability to use our website or services.
            You assume full responsibility for any costs arising from service, repair, or corrections related to your use of
            our platform.
        </p>

        <h3>3. Disclaimer of Warranties</h3>
        <p>
            All services are provided "as is" and "as available" with no warranties of any kind. We do not guarantee that
            services will be uninterrupted, secure, or error-free.
            We make no guarantees about the quality, safety, or legality of services provided by users on our platform.
        </p>

        <h3>4. Service Provider and User Content</h3>
        <p>
            We do not verify user-submitted qualifications or claims beyond contact details. It is your responsibility to
            validate the credibility and quality of any service provider you engage with.
        </p>

        <h3>5. Account Responsibilities</h3>
        <p>
            You are responsible for keeping your account credentials secure. Notify us immediately if you suspect
            unauthorized access or misuse of your account.
        </p>

        <h3>6. Modifications to These Terms</h3>
        <p>
            We may revise these Terms at our sole discretion. Material changes will be announced with at least 30 days'
            notice. Continued use after such changes constitutes acceptance.
        </p>

        <h3>7. Entire Agreement</h3>
        <p>
            These Terms represent the entire agreement between you and {{ config('app.name') }} and supersede all prior
            agreements or understandings. Additional terms may apply when using certain features or services.
        </p>

        <h3>8. Governing Law</h3>
        <p>
            These Terms are governed by the laws of [Your State/Country]. Any disputes shall be resolved in the courts of
            [Your Jurisdiction].
        </p>

        <h3>9. Contact Us</h3>
        <p>
            If you have any questions about these Terms, please contact us at:
        </p>
        <ul>
            <li>Email: support@yourwebsite.com</li>
            <li>Phone: +91-XXXXXXXXXX</li>
            <li>Address: Your Company Address, City, State, ZIP</li>
        </ul>
    </div>
@endsection
