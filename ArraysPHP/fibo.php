<h3>Fibo Sort</h3>
<form method ="POST">
    <p>Key 0: <input type="number" name="num[]"/></p>
    <p>Key 1: <input type="number" name="num[]"/></p>
    <p>Key 2: <input type="number" name="num[]"/></p>
    <p>Key 3: <input type="number" name="num[]"/></p>
    <p>Key 4: <input type="number" name="num[]"/></p>
    <input type = "submit" value="There we go again...">
</form>
<?php
if (isset($_POST["num"]))
{
    $num = $_POST["num"];
    $num[0]=0;
    $num[1]=1;
    for ($i = 2; $i < count($num); $i++)
    {
        $num[$i] = $num[$i - 1] + $num[$i - 2];
    }

    foreach ($num as $text)
    {
        echo $text;
    }
}
