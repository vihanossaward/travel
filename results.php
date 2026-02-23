<?php
// Include the configuration file to access constants
include 'config.php';

// --- DATA HANDLING ---
// Sanitize POST data to prevent XSS attacks. A real app would have more robust validation.
$from = htmlspecialchars($_POST['from'] ?? 'Not Provided');
$to = htmlspecialchars($_POST['to'] ?? 'Not Provided');
$departure_date_raw = $_POST['departure-date'] ?? date('Y-m-d');
$return_date_raw = $_POST['return-date'] ?? '';
$passengers = htmlspecialchars($_POST['passengers'] ?? '1 Adult, Economy');

// Format dates for display
$departure_date = date("D, j M Y", strtotime($departure_date_raw));
$return_date = !empty($return_date_raw) ? date("D, j M Y", strtotime($return_date_raw)) : 'N/A';

// --- REFERENCE CODE GENERATION ---
// Generate a simple random alphanumeric reference code.
function generateReferenceCode($length = 8) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}

$reference_code = generateReferenceCode();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Inquiry - South-West Airlines</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-6 py-3">
            <a href="/" class="text-2xl font-bold text-blue-800">South-West Airlines</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-6 py-12 md:py-20 flex items-center justify-center">
        <div class="max-w-md w-full bg-white rounded-xl shadow-2xl overflow-hidden">
            <div class="p-8">
                <div class="text-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Your Inquiry is Received!</h1>
                    <p class="text-gray-500">Call us now to confirm your booking and get a special discount.</p>
                </div>

                <!-- Booking Details Card -->
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="font-bold text-gray-700 text-lg"><?php echo $from; ?></span>
                        <i class="fas fa-plane text-blue-500"></i>
                        <span class="font-bold text-gray-700 text-lg"><?php echo $to; ?></span>
                    </div>

                    <div class="text-sm text-gray-600 space-y-3">
                        <div class="flex justify-between">
                            <span>Departure Date:</span>
                            <span class="font-medium text-gray-800"><?php echo $departure_date; ?></span>
                        </div>
                        <div class="flex justify-between">
                            <span>Return Date:</span>
                            <span class="font-medium text-gray-800"><?php echo $return_date; ?></span>
                        </div>
                        <div class="flex justify-between">
                            <span>Passengers:</span>
                            <span class="font-medium text-gray-800"><?php echo $passengers; ?></span>
                        </div>
                        <hr class="my-3">
                        <div class="flex justify-between items-center">
                            <span class="text-xs">Reference Code:</span>
                            <span class="font-mono text-lg bg-gray-200 text-gray-800 px-2 py-1 rounded"><?php echo $reference_code; ?></span>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="mt-8 text-center">
                    <a href="tel:<?php echo CONTACT_PHONE; ?>" class="w-full inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-6 rounded-lg text-xl shadow-lg transform hover:scale-105 transition-transform duration-300 animate-pulse">
                        <i class="fas fa-phone-alt mr-2"></i>
                        Call Now for 50% Off!
                    </a>
                    <p class="text-sm text-gray-500 mt-2">Our agents are available 24/7.</p>
                    <p class="text-lg font-semibold text-gray-800 mt-2"><?php echo CONTACT_PHONE; ?></p>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <!-- Font Awesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
