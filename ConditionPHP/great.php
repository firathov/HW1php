<h3>The greatest One</h3>
<form method="POST">
    <p>N1: <input type="number" name="number1"></p>
    <p>N2: <input type="number" name="number2"></p>
    <p>N3: <input type="number" name="number3"></p>
    <input type = "submit" value="send">
</form>
<?php
if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["number3"]))
{
    $number1 = htmlentities($_POST["number1"]);
    $number2 = htmlentities($_POST["number2"]);
    $number3 = htmlentities($_POST["number3"]);

    if(is_numeric($number1) && is_numeric($number2) && is_numeric($number3))
    {
        if ($number1 > $number2 && $number1 > $number3)
        {
            echo "$number1 is the greatest one";
        }
        elseif ($number2 > $number1 && $number2 > $number3)
        {
            echo "$number2 is the greatest one";
        }
        elseif ($number3 > $number1 && $number3 > $number2)
        {
            echo "$number3 is the greatest one";
        }
        elseif ($number1 == $number2 && $number1 > $number3)
        {
            echo "$number1 the greatest one";
        }
        elseif ($number2 == $number3 && $number2 > $number1)
        {
            echo "$number2 the greatest one";
        }
        elseif ($number1 == $number3 && $number1 > $number2)
        {
            echo "$number1 the greatest one";
        }
        else
        {
            echo "all of them are equal";
        }
    }
    else
    {
        echo "pls write only numbers";
    }
}