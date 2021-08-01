<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inhumane Reaction</title>
</head>
<body>

<h3>Sum and Count</h3>
<form method ="POST">
    <p><input type = "submit" value="Skidshhh" name="sum">The sum of even numbers and their count in the range from 1 to 99</p>
</form>
<?php
include 'sum.php';
?>

<h3>Simple numbers</h3>
<form method = "POST">
    <p><input type="number" name="simple"></p>
    <input type="submit" value="Qada almaq">
</form>
<?php
include 'simple.php';
?>

<h3>Factorial</h3>
<form method="POST">
    <p><input type="number" name="number"></p>
    <input type="submit" value="Quzu kesmek">
</form>
<?php
include 'factorial.php';
?>

<h3>Sum of digits</h3>
<form method="POST">
    <p><input type="number" name="num"></p>
    <input type="submit" value="Kesib dogramaq">
</form>
<?php
include 'digits.php';
?>

<h3>Mirrors</h3>
<form method="POST">
    <p><input type="number" name="numb"</p>
    <input type="submit" value="Bash gedib fikir vermeyin">
</form>
<?php
include 'mirror.php';


