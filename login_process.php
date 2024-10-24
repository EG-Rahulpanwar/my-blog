<?php
// Start the session
session_start();

// Simple login processing (without database connection, just an example)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Example credentials (in a real scenario, use a database)
    $exampleEmail = "test@example.com";
    $examplePassword = "password123";
    
    // Check if the entered credentials match
    if ($email === $exampleEmail && $password === $examplePassword) {
        // Set session variable to indicate the user is logged in
        $_SESSION['loggedin'] = true;

        // Redirect to homepage.php after successful login
        header('Location: homepage.php');
        exit(); // Always exit after a header redirection
    } else {
        $loginSuccess = false;
    }
}
?>
