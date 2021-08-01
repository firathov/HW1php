<?php
if(isset($_POST['n1']) && isset($_POST['n2']))
{
    $n1 = htmlentities($_POST['n1']);
    $n2 = htmlentities($_POST['n2']);

    if(is_numeric($n1) && is_numeric($n2))
    {
        if ($n2 == 0)
        {
            echo "You can't divide to 0";
        }
        else
        {
            echo "Quotient of these numbers is $n1 / $n2";
        }
    }
    else
    {
        echo "pls write only numbers";
    }

}

