<h3>Bubble Sort</h3>
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
    $changer = 0;
    for ($j = 0; $j < count($num); $j++)
    {
        for ($i = 0; $i < count($num)-1; $i++)
        {
            if ($num[$i] > $num[$i + 1])
            {
                $changer = $num[$i + 1];
                $num[$i + 1] = $num[$i];
                $num[$i] = $changer;
            }
        }
    }

            echo "Получится следующим способом: ";
            foreach ($num as $order)

            echo $order;
}
