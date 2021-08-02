<h3>Week days</h3>
<form method="POST">
    <p>Day: <input type="number" name="day"></p>
    <input type="submit" value="send">
</form>
<?php
if(isset($_POST["day"]))
{
    $day = htmlentities($_POST["day"]);
    if(is_numeric($day))
    {
        switch ($day)
        {
            case 1:
                echo "You chose Monday";
                break;
            case 2:
                echo "You chose Tuesday";
                break;
            case 3:
                echo "You chose Wednesday";
                break;
            case 4:
                echo "You chose Thursday";
                break;
            case 5:
                echo "You chose Friday";
                break;
            case 6:
                echo "You chose Saturday";
                break;
            case 7:
                echo "You chose Sunday";
                break;
            default:
                echo "Please choose only one of the 7 days with only number";
                break;

        }
    }
    else
    {
        echo "pls choose only numbers from 1 till 7";
    }

    /*$weekDay = match($day)
    {
        1 => "You chose Monday",
        2 => "You chose Tuesday",
        3 => "You chose Wednesday",
        4 => "You chose Thursday",
        5 => "You chose Friday",
        6 => "You chose Saturday",
        7 => "You chose Sunday",
        default => "Please choose only one of the 7 days with only number",

    };
    echo $weekDay;*/
}
