<?php
// Sample weather data
$weather_conditions = ["Sunny", "Rainy", "Cloudy", "Windy"];
$current_weather = $weather_conditions[array_rand($weather_conditions)];
$temperature = rand(15, 35);

function getActivities($weather, $temperature) {
    $activities = [];
    
    if ($temperature >= 30) {
        $activities[] = "Visit our city's water parks";
        $activities[] = "Enjoy ice cream at the famous city square";
    } elseif ($temperature >= 20) {
        $activities[] = "Take a walking tour of historical sites";
        $activities[] = "Visit the botanical gardens";
    } else {
        $activities[] = "Visit our indoor museums";
        $activities[] = "Try local cafes and restaurants";
    }
    
    switch($weather) {
        case "Sunny":
            $activities[] = "Have a picnic in Central Park";
            $activities[] = "Visit the outdoor market";
            break;
        case "Rainy":
            $activities[] = "Visit the city art gallery";
            $activities[] = "Enjoy a movie at our vintage theater";
            break;
        case "Cloudy":
            $activities[] = "Take photos of the city skyline";
            $activities[] = "Visit the shopping district";
            break;
        case "Windy":
            $activities[] = "Watch kite surfers at the beach";
            $activities[] = "Visit the windmill park";
            break;
    }
    
    return $activities;
}

$todays_activities = getActivities($current_weather, $temperature);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today in Our City</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .weather-card {
            background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
            color: white;
            border-radius: 15px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .activity-box {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .activity-item {
            background-color: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            border-left: 4px solid #007bff;
        }
        
        .forecast-item {
            background-color: rgba(255,255,255,0.1);
            padding: 10px;
            margin: 5px;
            border-radius: 8px;
            text-align: center;
        }
        
        .back-button {
            margin: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
        
        .back-button:hover {
            background-color: #0056b3;
            color: white;
        }
        
        .weather-icon {
            font-size: 48px;
            margin: 20px 0;
        }
        
        .temperature {
            font-size: 36px;
            font-weight: bold;
            margin: 20px 0;
        }
    </style>
</head>
<body class="bg-light">
    <a href="homepage.php" class="back-button">Back to Home</a>

    <div class="container">
        <div class="row">
            <!-- Weather Card -->
            <div class="col-md-6">
                <div class="weather-card text-center">
                    <div class="weather-icon">
                        <?php
                        $weather_icons = [
                            'Sunny' => '☀️',
                            'Rainy' => '🌧️',
                            'Cloudy' => '☁️',
                            'Windy' => '💨'
                        ];
                        echo $weather_icons[$current_weather] ?? '🌈';
                        ?>
                    </div>
                    <div class="temperature"><?php echo $temperature; ?>°C</div>
                    <h3><?php echo $current_weather; ?></h3>
                    
                    <div class="row mt-4">
                        <?php
                        for($hour = 9; $hour <= 18; $hour++) {
                            $hourly_temp = $temperature + rand(-2, 2);
                            echo "<div class='col-4 col-md-3 mb-3'>
                                    <div class='forecast-item'>
                                        <div>$hour:00</div>
                                        <div>{$hourly_temp}°C</div>
                                    </div>
                                  </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <!-- Activities Section -->
            <div class="col-md-6">
                <div class="activity-box">
                    <h2 class="mb-4">Recommended Activities</h2>
                    <?php foreach($todays_activities as $activity): ?>
                        <div class="activity-item">
                            • <?php echo $activity; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>