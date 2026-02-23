<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - South-West Airlines</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">

    <?php include 'header.php'; // Reusing the header ?>

    <main class="container mx-auto px-6 py-16">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-4xl font-bold text-gray-800 mb-6 border-b pb-4">About South-West Airlines</h1>
            
            <div class="text-gray-700 space-y-6">
                <p class="text-lg">Welcome to South-West Airlines, your trusted partner in connecting you to the world. We are a premier online travel agency dedicated to making your flight booking experience simple, seamless, and affordable.</p>
                
                <h2 class="text-2xl font-bold text-gray-800 pt-4">Our Mission</h2>
                <p>Our mission is to empower travelers by providing a user-friendly platform that offers a comprehensive selection of flights at competitive prices. We strive to eliminate the hassle of travel planning, allowing you to focus on the journey ahead. Whether it's a business trip, a family vacation, or a spontaneous getaway, we are here to ensure you find the best deals with ease and confidence.</p>
                
                <h2 class="text-2xl font-bold text-gray-800 pt-4">Our Vision</h2>
                <p>We envision a world where travel is accessible to everyone. By leveraging cutting-edge technology and fostering strong partnerships within the aviation industry, we aim to be the go-to resource for travelers worldwide, recognized for our reliability, exceptional customer service, and unwavering commitment to value.</p>
                
                <h2 class="text-2xl font-bold text-gray-800 pt-4">Why Choose Us?</h2>
                <ul class="list-disc list-inside space-y-2 pl-4">
                    <li><strong>Extensive Network:</strong> Access to thousands of flights from a wide range of airlines across the globe.</li>
                    <li><strong>Competitive Pricing:</strong> Our advanced search technology finds the best available fares, saving you time and money.</li>
                    <li><strong>User-Friendly Interface:</strong> A clean, intuitive, and responsive website that makes booking a breeze.</li>
                    <li><strong>Dedicated Support:</strong> Our customer service team is available around the clock to assist you with any inquiries or concerns.</li>
                    <li><strong>Secure Transactions:</strong> We use industry-standard security measures to protect your personal and payment information.</li>
                </ul>

                <p class="pt-6">Thank you for choosing South-West Airlines. We look forward to helping you embark on your next great adventure.</p>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; // Reusing the footer ?>

</body>
</html>
