<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $_POST["emailAddress"];
    $message = $_POST["message"];

    // Process the data (you can add more complex logic here)
    $confirmationMessage = "Thank you for contacting us, $email! Your message has been received.";

    // Simulate a delay (you can remove this in a production environment)
    sleep(2);

    // Send a response back to the client
    echo $confirmationMessage;
} else {
    // Handle non-POST requests (if necessary)
    http_response_code(405); // Method Not Allowed
    echo "Invalid request method.";
}
?>

