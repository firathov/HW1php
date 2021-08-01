<?php
if(isset($_POST['num']))
{
    $num = htmlentities($_POST['num']);
    if(is_numeric($num) && $num>0)
    {
        $sum = 0;
        while($num > 0)
        {
            $sum = $sum + $num % 10;
            $num = $num / 10;
        }
        echo "Sum of digits of a given number equal $sum";
    }
    else
    {
        echo "The symbols that you have given is not number or lower than 0";
    }
}