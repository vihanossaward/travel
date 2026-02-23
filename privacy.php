<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - South-West Airlines</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .policy-content h2 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1f2937;
            margin-top: 1.5rem;
            margin-bottom: 0.5rem;
        }
        .policy-content p {
            margin-bottom: 1rem;
        }
        .policy-content ul {
            list-style-type: disc;
            padding-left: 2rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body class="bg-gray-50">

    <?php include 'header.php'; ?>

    <main class="container mx-auto px-6 py-16">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-4xl font-bold text-gray-800 mb-6 border-b pb-4">Privacy Policy</h1>
            
            <div class="text-gray-700 policy-content">
                <p><strong>Last Updated:</strong> <?php echo date('F j, Y'); ?></p>

                <p>South-West Airlines ("we", "our", "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website.</p>

                <h2>Information We Collect</h2>
                <p>We may collect information about you in a variety of ways. The information we may collect on the Site includes:</p>
                <ul>
                    <li><strong>Personal Data:</strong> Personally identifiable information, such as your name, email address, and telephone number, and demographic information, such as your age, gender, and hometown, that you voluntarily give to us when you use our flight search form or contact us.</li>
                    <li><strong>Derivative Data:</strong> Information our servers automatically collect when you access the Site, such as your IP address, your browser type, your operating system, your access times, and the pages you have viewed directly before and after accessing the Site.</li>
                    <li><strong>Financial Data:</strong> We do not collect or store any financial information, such as credit card numbers. Our "Call Now" feature initiates a phone call, and any financial transactions are handled over the phone with our agents, not through the website.</li>
                </ul>

                <h2>How We Use Your Information</h2>
                <p>Having accurate information about you permits us to provide you with a smooth, efficient, and customized experience. Specifically, we may use information collected about you via the Site to:</p>
                <ul>
                    <li>Facilitate your flight search and connect you with our booking agents.</li>
                    <li>Respond to your inquiries and offer customer support.</li>
                    <li>Monitor and analyze usage and trends to improve your experience with the Site.</li>
                    <li>Prevent fraudulent transactions, monitor against theft, and protect against criminal activity.</li>
                </ul>

                <h2>Disclosure of Your Information</h2>
                <p>We do not share, sell, rent, or trade your personal information with third parties for their commercial purposes.</p>
                <p>We may share information we have collected about you in certain situations. Your information may be disclosed as follows:</p>
                <ul>
                    <li><strong>By Law or to Protect Rights:</strong> If we believe the release of information about you is necessary to respond to legal process, to investigate or remedy potential violations of our policies, or to protect the rights, property, and safety of others, we may share your information as permitted or required by any applicable law, rule, or regulation.</li>
                    <li><strong>Third-Party Service Providers:</strong> We may share your information with third parties that perform services for us or on our behalf, including data analysis, hosting services, and customer service.</li>
                </ul>

                <h2>Security of Your Information</h2>
                <p>We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable, and no method of data transmission can be guaranteed against any interception or other type of misuse.</p>

                <h2>Your Privacy Rights</h2>
                <p>Depending on your location, you may have the right to access, correct, or delete your personal data. To make such a request, please contact us using the contact information provided below.</p>

                <h2>Contact Us</h2>
                <p>If you have questions or comments about this Privacy Policy, please contact us at:</p>
                <p>Email: <a href="mailto:privacy@southwest-placeholder.com" class="text-blue-600 hover:underline">privacy@southwest-placeholder.com</a></p>
                
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
