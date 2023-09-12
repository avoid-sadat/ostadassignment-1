<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="POST" action="">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" required><br><br>

        <label for="operation">Select an operation:</label>
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br><br>

        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input numbers and the selected operation
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        // Perform the selected operation
        $result = 0;
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p style='color: red;'>Division by zero is not allowed.</p>";
                }
                break;
        }

        // Display the result
        echo "<h2>Result:</h2>";
        echo "The result of $num1 $operation $num2 is: $result";
    }
    ?>
</body>
</html>
