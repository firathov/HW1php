<h3>Temperature measurement</h3>
<form method ="POST">
    <p>Degree: <input type="number" name="degree"/></p>
    <input type = "submit" value="send">
</form>
<?php
if(isset($_POST["degree"]))
{
    $degree = htmlentities($_POST["degree"]);

    if ($degree >= -20 && $degree <= 5)
    {
        echo " very cold";
    }
    elseif ($degree >= 5 && $degree <= 15)
    {
        echo "cold";
    }
    elseif ($degree > 15 && $degree <= 20)
    {
        echo "warm";
    }
    elseif ($degree > 20 && $degree <= 35)
    {
        echo "hot";
    }
    elseif ($degree > 35 && $degree <= 45)
    {
        echo "HELP!!! I'm Dying";
    }
    else
    {
        echo "There is not such a weather condition";
    }

}
?>
