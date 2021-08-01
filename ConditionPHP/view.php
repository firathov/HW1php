<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AYE</title>
</head>
<body>

<h3>Temperature measurement</h3>
<form method ="POST">
    <p>Degree: <input type="number" name="degree"/></p>
    <input type = "submit" value="send">
</form>
<?php
include 'degree.php';
?>

<h3>Centuries</h3>
<form method = "POST">
    <p>Year: <input type="number" name="year"></p>
    <input type="submit" value="send">
</form>
<?php
include 'age.php';
?>

<h3>The greatest One</h3>
<form method="POST">
    <p>N1: <input type="number" name="number1"></p>
    <p>N2: <input type="number" name="number2"></p>
    <p>N3: <input type="number" name="number3"></p>
    <input type = "submit" value="send">
</form>
<?php
include 'great.php';
?>

<h3>Week days</h3>
<form method="POST">
    <p>Day: <input type="number" name="day"></p>
    <input type="submit" value="send">
</form>

<?php
include 'week.php';
?>

<h3>Division</h3>
<form method="POST">
    <p>N1: <input type="number" name="n1"></p>
    <p>N2: <input type="number" name="n2"></p>
    <input type="submit" value="send">
</form>

<?php
include 'division.php';
?>

<h3>Discount</h3>
<form method="POST">
    <p>Amount: <input type="number" name="amount"></p>
    <input type="submit" value="send">
</form>

<?php
include 'discount.php'
?>

</body>
</html>
