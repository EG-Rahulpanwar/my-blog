<?php
// Start the session
session_start(); 

// Check if the user is logged in; if not, redirect to login.php
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

// Handle logout
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
    // Destroy the session
    session_destroy();
    
    // Redirect to login page
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to External CSS -->
    <link rel="stylesheet" href="css/homepagestyle.css">
    <style>
        .button-container {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            padding: 20px;
        }
        .btn-custom {
            background-color: #87CEEB;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-custom:hover {
            background-color: #5F9EA0;
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body style="background-color: white;">
    <div class="button-container">
        <!-- Logout Button -->
        <form action="" method="post" style="margin: 0;">
            <button type="submit" name="logout" class="btn-custom">Logout</button>
        </form>
        <!-- Weather Button -->
        <a href="weather.php" class="btn-custom">Weather</a>
    </div>

    <div>
        <img src="image/niigata.jpg" alt="niigata" width="550" height="300">
        <img src="image/niigataa.jpg" class="rounded-circle" alt="niigataa" width="400" height="300">
        <img src="image/sea.jpg" alt="sea" width="550" height="300">
    </div>
    
    <div>
        <h1>Niigata</h1>
    </div>
    
    <div style="background-color: white;">
        <p>
            Niigata city is located in a northern <br>
            part of 'niigata' it faces the sea
            of Japan and <a href="https://www.google.com/" target="_blank">Sado Island.</a> I am living here <br>
            from April 1st, the weather is usually cloudy here and
            during the winter, it's very cold.<br> From now on I am going to explore more about this city and I will write everything
            on this page.
        </p>
        <br>
    </div>

    <div>
        <table>
            <h1 id="guide">Things to Explore</h1>
            <tr>
                <th>Place</th>
                <th>Things to Explore</th>
                <th>Via</th>
            </tr>
            <tr>
                <td>Bandai City Center</td>
                <td>Shopping Street</td>
                <td>10min walk from Niigata Station</td>
            </tr>
            <tr>
                <td>Furumachi Walking Area</td>
                <td>Old Shops and Cafes</td>
                <td>Take a bus from Niigata Station</td>
            </tr>
            <tr>
                <td>Pia Bandai Shopping Area</td>
                <td>Fish Market</td>
                <td>Bus from Niigata Station</td>
            </tr>
        </table>
    </div>
</body>
</html>