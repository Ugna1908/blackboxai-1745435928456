<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - McAfee Cancellation Support</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-red-600">McAfee</span>
                    <span class="text-sm ml-1">®</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Thank You Content -->
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-2xl mx-auto text-center">
            <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <i class="fas fa-check-circle text-green-500 text-6xl mb-6"></i>
                <h1 class="text-3xl font-bold mb-4">Thank You for Contacting Us!</h1>
                <p class="text-gray-600 mb-6">
                    We have received your request and our expert team will contact you shortly to assist with your McAfee subscription cancellation.
                </p>
                <div class="bg-gray-50 p-6 rounded-lg mb-6">
                    <h2 class="text-xl font-semibold mb-4">What Happens Next?</h2>
                    <ul class="text-left space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-red-600 mt-1 mr-3"></i>
                            <span>You will receive a confirmation email shortly</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone text-red-600 mt-1 mr-3"></i>
                            <span>Our support team will call you within 24 hours</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-clipboard-check text-red-600 mt-1 mr-3"></i>
                            <span>We will guide you through the cancellation process</span>
                        </li>
                    </ul>
                </div>
                <a href="index.html" class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition duration-300">
                    Return to Homepage
                </a>
            </div>
            <?php else: ?>
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <i class="fas fa-exclamation-circle text-red-500 text-6xl mb-6"></i>
                <h1 class="text-3xl font-bold mb-4">Oops! Something Went Wrong</h1>
                <p class="text-gray-600 mb-6">
                    We apologize, but there was an error processing your request. Please try again or contact our support team directly.
                </p>
                <a href="index.html" class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition duration-300">
                    Return to Homepage
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-16">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-400">&copy; 2024 McAfee Cancellation Support. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
