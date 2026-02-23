<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - South-West Airlines</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">

    <?php include 'header.php'; ?>

    <main class="container mx-auto px-6 py-16">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">Get In Touch</h1>
            
            <div class="grid md:grid-cols-2 gap-10 bg-white p-8 rounded-lg shadow-md">
                <!-- Contact Information -->
                <div class="space-y-6">
                    <h2 class="text-2xl font-bold text-gray-800">Contact Information</h2>
                    <p class="text-gray-600">We're here to help! Whether you have a question about a booking, a fare, or our services, feel free to reach out. Our team is available 24/7.</p>
                    
                    <div class="flex items-center space-x-4">
                        <i class="fas fa-phone-alt text-2xl text-blue-600"></i>
                        <div>
                            <h3 class="font-semibold text-gray-700">Phone</h3>
                            <a href="tel:<?php echo CONTACT_PHONE; ?>" class="text-blue-600 hover:underline"><?php echo CONTACT_PHONE; ?></a>
                        </div>
                    </div>
                     <div class="flex items-center space-x-4">
                        <i class="fas fa-envelope text-2xl text-blue-600"></i>
                        <div>
                            <h3 class="font-semibold text-gray-700">Email</h3>
                            <a href="mailto:support@southwest-placeholder.com" class="text-blue-600 hover:underline">support@southwest-placeholder.com</a>
                        </div>
                    </div>
                     <div class="flex items-center space-x-4">
                        <i class="fas fa-map-marker-alt text-2xl text-blue-600"></i>
                        <div>
                            <h3 class="font-semibold text-gray-700">Address</h3>
                            <p class="text-gray-600">123 Flight Avenue, Travel City, 12345, World</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                     <h2 class="text-2xl font-bold text-gray-800 mb-4">Send Us a Message</h2>
                     <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2" required>
                        </div>
                         <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2" required>
                        </div>
                         <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <input type="text" id="subject" name="subject" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2" required>
                        </div>
                         <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                                Send Message
                            </button>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
