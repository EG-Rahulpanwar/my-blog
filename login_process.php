<?php
// Simple login processing (without database connection, just an example)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Example credentials (in a real scenario, use a database)
    $exampleEmail = "test@example.com";
    $examplePassword = "password123";
    
    // Check if the entered credentials match
    if ($email === $exampleEmail && $password === $examplePassword) {
        $loginSuccess = true;
    } else {
        $loginSuccess = false;
    }
}
?>