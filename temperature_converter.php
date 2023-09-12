<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <?php
    // Initialize variables
    $temperature = "";
    $converted_temperature = "";
    $conversion_direction = "";
    
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $temperature = $_POST["temperature"];
        $conversion_direction = $_POST["conversion_direction"];
        
        // Perform temperature conversion
        if ($conversion_direction == "celsius_to_fahrenheit") {
            $converted_temperature = ($temperature * 9/5) + 32;
        } elseif ($conversion_direction == "fahrenheit_to_celsius") {
            $converted_temperature = ($temperature - 32) * 5/9;
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" step="0.01" name="temperature" id="temperature" value="<?php echo $temperature; ?>" required>
        
        <label for="conversion_direction">Select Conversion:</label>
        <select name="conversion_direction" id="conversion_direction" required>
            <option value="celsius_to_fahrenheit" <?php if ($conversion_direction == "celsius_to_fahrenheit") echo "selected"; ?>>Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius" <?php if ($conversion_direction == "fahrenheit_to_celsius") echo "selected"; ?>>Fahrenheit to Celsius</option>
        </select>
        
        <input type="submit" value="Convert">
    </form>

    <?php
    // Display the converted temperature
    if (!empty($converted_temperature)) {
        echo "<h2>Result:</h2>";
        if ($conversion_direction == "celsius_to_fahrenheit") {
            echo "<p>$temperature Celsius is equal to $converted_temperature Fahrenheit.</p>";
        } elseif ($conversion_direction == "fahrenheit_to_celsius") {
            echo "<p>$temperature Fahrenheit is equal to $converted_temperature Celsius.</p>";
        }
    }
    ?>

</body>
</html>
