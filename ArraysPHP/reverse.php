<h3>Revers of the elements</h3>
<form method ="POST">
    <p>Key 0: <input type="number" name="num[]"/></p>
    <p>Key 1: <input type="number" name="num[]"/></p>
    <p>Key 2: <input type="number" name="num[]"/></p>
    <p>Key 3: <input type="number" name="num[]"/></p>
    <p>Key 4: <input type="number" name="num[]"/></p>
    <input type = "submit" value="!!!BOOM!!!">
</form>
<?php
if (isset($_POST["num"]))
{
    $num = $_POST["num"];
    echo "Count of the elements on revers is: ";
    for ($i = count($num); $i>0; $i--)
    {
        echo $num[$i-1];
    }
}