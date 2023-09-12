<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php
    // Define the temperature
    $temperature = 25; // You can change this value to the actual temperature

    // Determine the weather message based on the temperature
    $weather_message = '';
    if ($temperature <= 0) {
        $weather_message = "It's freezing!";
    } elseif ($temperature > 0 && $temperature <= 15) {
        $weather_message = "It's cool.";
    } elseif ($temperature > 15) {
        $weather_message = "It's warm.";
    }

    // Display the weather message
    echo "<h2>Current Weather:</h2>";
    echo "Temperature: " . $temperature . "°C<br>";
    echo "Weather: " . $weather_message;
    ?>
</body>
</html>
