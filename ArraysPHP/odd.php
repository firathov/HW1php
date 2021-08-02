<h3>Sum of elements with odd numbers</h3>
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
    $count = 0;
    for ($i = 0; $i < count($num); $i++)
    {
        if($i%2 != 0)
        {
            $count += $num[$i];
        }
    }
    echo "Sum of the elements with odd numbers is $count<br/>";
}
