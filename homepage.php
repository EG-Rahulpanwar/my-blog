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
</head>

<body style="background-color: white;">
    <div class="container mt-5">
        <!-- Logout Button -->
        <form action="index.php" method="post">
            <button type="submit" class="btn btn-custom">Logout</button>
        </form>
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
            on April 1st, the weather is usually cloudy here and
            during the winter, it gets very cold.<br> From now on I am going to learn more about this city and I will write everything
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

    <h1>This is a trial for the new branch</h1>

    <?php
    // Example of using PHP to display a greeting and the current date and time
    echo "<h2>Welcome to my blog about Niigata!</h2>";
    echo "<p>Last updated: " . date("Y-m-d H:i:s") . "</p>";
    ?>
    
</body>
</html>
