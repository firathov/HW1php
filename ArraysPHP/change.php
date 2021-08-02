<h3>Changin elements places</h3>
<form method ="POST">
    <p>Key 0: <input type="number" name="num[]"/></p>
    <p>Key 1: <input type="number" name="num[]"/></p>
    <p>Key 2: <input type="number" name="num[]"/></p>
    <input type = "submit" value="!!!BOOM!!!">
</form>
<?php
if (isset($_POST["num"]))
{
    $num = $_POST["num"];
    $num2 = [];
    $count = 0;
    if(count($num)%2==0)
    {
        $count = count($num)/2;
    }
    else
    {
        $count = count($num)/2+1;
    }

    $j = 0;

    for ($i = $count; $i >= 0; $i--)
    {
        $num2[$j] = $num[$i];
        $j++;
    }

    foreach ($num2 as $result)
    {
        echo $result;
    }
}
