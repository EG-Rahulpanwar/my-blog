<?php
// Simple signup processing (without a database, for demonstration purposes)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $mobileNumber = $_POST['mobile_number'];
    
    // Simulate form validation and user registration
    // In a real scenario, you would add the user to a database
    if (!empty($name) && !empty($email) && !empty($password) && !empty($gender) && !empty($mobileNumber)) {
        $registrationSuccess = true;
    } else {
        $registrationSuccess = false;
    }
}
?>