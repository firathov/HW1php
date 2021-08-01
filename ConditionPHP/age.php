<?php
if(isset($_POST["year"]))
{   $year = htmlentities($_POST["year"]);
    if(is_numeric($year))
    {
        if($year >= 0 && $year < 1000 || $year > 9999)
        {
            echo "this is not a year with 4 digits";
        }
        elseif($year < 0)
        {
            echo "year can't start with negative symbol";
        }
        else
        {
            $century = $year / 100 + 1;
            $century = (int)$century;
            echo "this is $century AD";
        }
    }
    else
    {
        echo "It's impossible to write degree with letters";
    }

}


