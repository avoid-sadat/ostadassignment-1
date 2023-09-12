<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
</head>
<body>
    <h1>Even Odd Checker</h1>
    <form method="POST" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" required><br><br>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input number
        $number = $_POST["number"];

        // Check if the number is even or odd
        $result = ($number % 2 == 0) ? "Even" : "Odd";

        // Display the result
        echo "<h2>Result:</h2>";
        echo "The number " . $number . " is " . $result;
    }
    ?>
</body>
</html>
