<h3>Minumum and Maximum Array</h3>
<form method ="POST">
    <p>Number1: <input type="number" name="num[]"/></p>
    <p>Number2: <input type="number" name="num[]"/></p>
    <p>Number3: <input type="number" name="num[]"/></p>
    <p>Number4: <input type="number" name="num[]"/></p>
    <p>Number5: <input type="number" name="num[]"/></p>
    <input type = "submit" value="!!!BOOM!!!">
</form>
<?php
if(isset($_POST["num"]))
{
    $num = $_POST["num"];
    $minArray = min($num);
    $maxArray = max($num);
    $minArrayKey = array_keys($num, min($num))[0];
    $maxArrayKey = array_keys($num, max($num))[0];
    echo "Minimum element of the massive is $minArray <br/>";
    echo "Maximum element of the massive is $maxArray <br/>";
    echo "Key of the minimum element is $minArrayKey<br/>";
    echo "Key of the maximum element is $maxArrayKey<br/>";
}