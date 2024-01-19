<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<?php
require 'Calculator.php';

// Process form submission
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Create an instance of the Calculator class
    $calculator = new Calculator();

    // Perform calculation using the Calculator class
    $result = $calculator->calculate($num1, $num2, $operator);
}
?>

<h2>Calculator</h2>
<form method="post" action="">
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" required>
    
    <label for="operator">Operator:</label>
    <select name="operator" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    
    <label for="num2">Number 2:</label>
    <input type="number" name="num2" required>
    
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
// Display result if available
if (isset($result)) {
    echo "<p>Result: $result</p>";
}
?>

</body>
</html>
