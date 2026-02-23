<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Policy - South-West Airlines</title>
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
            <h1 class="text-4xl font-bold text-gray-800 mb-6 border-b pb-4">Cookie Policy</h1>
            
            <div class="text-gray-700 policy-content">
                <p><strong>Last Updated:</strong> <?php echo date('F j, Y'); ?></p>

                <p>South-West Airlines ("we", "our", "us") uses cookies on our website to help provide you with a better experience. This policy explains what cookies are, how we use them, the types of cookies we use, and your choices regarding cookies.</p>

                <h2>What Are Cookies?</h2>
                <p>Cookies are small text files that are stored on your computer or mobile device when you visit a website. They allow the website to recognize your device and remember information about your visit, such as your preferences, to make your next visit easier and the site more useful to you.</p>

                <h2>How We Use Cookies</h2>
                <p>We use cookies for a variety of reasons detailed below. Unfortunately, in most cases, there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site.</p>
                <ul>
                    <li><strong>Essential Cookies:</strong> These cookies are necessary for the website to function properly. They enable core functionality such as page navigation, access to secure areas, and the flight search process. The website cannot function properly without these cookies.</li>
                    <li><strong>Performance and Analytics Cookies:</strong> These cookies help us understand how visitors interact with our website by collecting and reporting information anonymously. This helps us to improve the way our website works, for example, by ensuring that users are finding what they are looking for easily.</li>
                    <li><strong>Functionality Cookies:</strong> These cookies are used to recognize you when you return to our website. They enable us to personalize our content for you and remember your preferences (for example, your choice of language or region).</li>
                    <li><strong>Advertising Cookies:</strong> These cookies are used to track visitors across websites. The intention is to display ads that are relevant and engaging for the individual user and thereby more valuable for publishers and third-party advertisers.</li>
                </ul>

                <h2>Your Choices Regarding Cookies</h2>
                <p>You have the right to decide whether to accept or reject cookies. You can exercise your cookie preferences by setting or amending your web browser controls to accept or refuse cookies. If you choose to reject cookies, you may still use our website though your access to some functionality and areas may be restricted.</p>
                <p>Most web browsers allow some control of most cookies through the browser settings. To find out more about cookies, including how to see what cookies have been set, visit <a href="http://www.aboutcookies.org" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">www.aboutcookies.org</a> or <a href="http://www.allaboutcookies.org" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">www.allaboutcookies.org</a>.</p>

                <h2>Changes to This Policy</h2>
                <p>We may update our Cookie Policy from time to time. We will notify you of any changes by posting the new Cookie Policy on this page. You are advised to review this policy periodically for any changes.</p>

            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
