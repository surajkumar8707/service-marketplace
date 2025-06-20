@extends('layouts.app') <!-- or your layout file -->

@section('title', 'Privacy Policy')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Privacy Policy</h1>
        <p><strong>Effective Date:</strong> {{ now()->format('F d, Y') }}</p>

        <p>
            At {{ config('app.name') }}, we are committed to protecting your privacy. This Privacy Policy explains how we
            collect, use, and safeguard your information when you visit our website or use our services.
        </p>

        <h3>1. Information We Collect</h3>
        <p>We may collect the following types of information:</p>
        <ul>
            <li><strong>Personal Information:</strong> Name, email address, phone number, address, and other identifying
                details.</li>
            <li><strong>Account Information:</strong> Login credentials, profile details, service history.</li>
            <li><strong>Payment Information:</strong> Billing details (via secure third-party payment processors).</li>
            <li><strong>Usage Data:</strong> Device info, IP address, browser type, pages visited, and interaction logs.
            </li>
        </ul>

        <h3>2. How We Use Your Information</h3>
        <p>We use your information to:</p>
        <ul>
            <li>Provide and maintain our services</li>
            <li>Verify user identities and contact details</li>
            <li>Process transactions and service bookings</li>
            <li>Improve customer experience and website functionality</li>
            <li>Send service-related notifications, promotions, or updates (with your consent)</li>
        </ul>

        <h3>3. Sharing Your Information</h3>
        <p>We do not sell your personal data. We may share your information with:</p>
        <ul>
            <li>Service providers you engage through the platform</li>
            <li>Trusted third-party vendors (e.g., payment processors, analytics providers)</li>
            <li>Authorities, if required by law or for legal proceedings</li>
        </ul>

        <h3>4. Cookies and Tracking Technologies</h3>
        <p>
            We use cookies and similar technologies to enhance user experience, analyze traffic, and track usage patterns.
            You may disable cookies in your browser settings, but some features may not function properly.
        </p>

        <h3>5. Data Security</h3>
        <p>
            We implement appropriate security measures to protect your data. However, no method of transmission over the
            Internet is 100% secure. We cannot guarantee absolute security.
        </p>

        <h3>6. Your Rights</h3>
        <p>You have the right to:</p>
        <ul>
            <li>Access, update, or delete your personal information</li>
            <li>Withdraw consent where applicable</li>
            <li>Request information about how we use your data</li>
        </ul>
        <p>To exercise these rights, please contact us using the details below.</p>

        <h3>7. Third-Party Links</h3>
        <p>
            Our site may contain links to third-party websites. We are not responsible for the privacy practices or content
            of those sites. Please review their policies before providing personal information.
        </p>

        <h3>8. Children's Privacy</h3>
        <p>
            Our services are not intended for children under the age of 13. We do not knowingly collect data from children.
            If you believe we have collected such information, please contact us for immediate deletion.
        </p>

        <h3>9. Updates to This Policy</h3>
        <p>
            We may update this Privacy Policy from time to time. Changes will be posted on this page with the updated
            effective date. Continued use of the Service constitutes your acceptance of the updated policy.
        </p>

        <h3>10. Contact Us</h3>
        <p>If you have any questions or concerns about this Privacy Policy, contact us at:</p>
        <ul>
            <li>Email: support@yourwebsite.com</li>
            <li>Phone: +91-XXXXXXXXXX</li>
            <li>Address: Your Company Address, City, State, ZIP</li>
        </ul>
    </div>
@endsection
