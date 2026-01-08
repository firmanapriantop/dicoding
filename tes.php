<?php

function calculator($number1, $number2, $operation) {
    switch($operation) {
        case 'add':
            return $number1 + $number2;
        case 'subtract':
            return $number1 - $number2;
        case 'multiply':
            return $number1 * $number2;
        case 'divide':
            if($number2 == 0) {
                return "Error: Cannot divide by zero";
            }
            return $number1 / $number2;
        default:
            return "Error: Invalid operation";
    }
}
// tambah data
// HTML Form untuk input
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    <form method="post">
        <input type="number" name="number1" placeholder="Enter first number" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">×</option>
            <option value="divide">÷</option>
        </select>
        <input type="number" name="number2" placeholder="Enter second number" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];
        
        $result = calculator($number1, $number2, $operation);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>