<?php
// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);
    
    // Check form type (main form or popup)
    $form_type = isset($_POST['form_type']) ? sanitize_input($_POST['form_type']) : 'main';
    
    if ($form_type == 'main') {
        // Additional fields for main form
        $subscription_id = isset($_POST['subscription_id']) ? sanitize_input($_POST['subscription_id']) : '';
        $reason = isset($_POST['reason']) ? sanitize_input($_POST['reason']) : '';
        $comments = isset($_POST['comments']) ? sanitize_input($_POST['comments']) : '';
        
        // Email subject and message for main form
        $subject = "New McAfee Cancellation Request";
        $message = "New cancellation request details:\n\n";
        $message .= "Name: $name\n";
        $message .= "Email: $email\n";
        $message .= "Phone: $phone\n";
        $message .= "Subscription ID: $subscription_id\n";
        $message .= "Reason for Cancellation: $reason\n";
        $message .= "Additional Comments: $comments\n";
    } else {
        // Email subject and message for popup form
        $subject = "New Urgent Assistance Request";
        $message = "New urgent assistance request details:\n\n";
        $message .= "Name: $name\n";
        $message .= "Email: $email\n";
        $message .= "Phone: $phone\n";
    }

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Email address to receive leads
    $to = "abhiwebstudio@gmail.com";

    // Send email
    if(mail($to, $subject, $message, $headers)) {
        // Redirect to thank you page
        header("Location: thanks.php?status=success");
        exit();
    } else {
        header("Location: thanks.php?status=error");
        exit();
    }
}
?>
