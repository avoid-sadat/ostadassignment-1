<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>
</head>
<body>
    <h1>Number Comparison Tool</h1>
    <form method="POST" action="">
        <label for="number1">Enter the first number:</label>
        <input type="number" name="number1" required><br><br>

        <label for="number2">Enter the second number:</label>
        <input type="number" name="number2" required><br><br>

        <input type="submit" value="Compare">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input numbers
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        // Use the ternary operator to determine the larger number
        $larger_number = ($number1 > $number2) ? $number1 : $number2;

        // Display the result
        echo "<h2>Result:</h2>";
        echo "The larger number is: " . $larger_number;
    }
    ?>
</body>
</html>
