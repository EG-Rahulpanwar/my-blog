<?php
// Database connection
$mysqli = new mysqli("db", "your_db_username", "your_db_password", "my_blog_db");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute a query to find the user by email
    $stmt = $mysqli->prepare("SELECT id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        // Fetch the user's data
        $stmt->bind_result($id, $name, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Start session and set user info
            session_start();
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $name;

            // Redirect to homepage.php after successful login
            header("Location: homepage.php");
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$mysqli->close();
?>
