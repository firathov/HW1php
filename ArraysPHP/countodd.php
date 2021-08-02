<h3>Count of the odd elements</h3>
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
    $count=0;
    for($i = 0; $i < count($num); $i++)
    {
        if($num[$i]%2!=0)
        {
            $count++;
        }
    }
    echo "Count of odd numbers is $count";
}
