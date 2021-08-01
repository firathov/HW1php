<?php
if(isset($_POST['simple']))
{
    $simple = htmlentities($_POST['simple']);
    if(is_numeric($simple))
    {
        $switchOn = true; //simple number
            $j = ($simple - $simple % 2) / 2;
            for ($i = 2; $i <= $j; $i++)
            {
                $k = $simple % $i;
                if ($k == 0)
                {
                    $switchOn = false;
                    break;
                }
            }
            $result = $switchOn == true ? "Simple" : "Сomposite";
            echo "The number that you have given is $result";
    }
    else
    {
        echo "negative numbers can't be simple or composite";
    }
}