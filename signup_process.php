<?php
// Database connection
$mysqli = new mysqli("db", "actual_db_username", "actual_db_password", "my_blog_db");


// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Collecting data from the signup form
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password
$gender = $_POST['gender'];
$mobile_number = $_POST['mobile_number'];

// Prepare and bind
$stmt = $mysqli->prepare("INSERT INTO users (name, email, password, gender, mobile_number) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $password, $gender, $mobile_number);

// Execute the statement
if ($stmt->execute()) {
    // Redirect to homepage.php after successful signup
    header("Location: homepage.php");
    exit; // Important to prevent further execution
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$mysqli->close();
?>
