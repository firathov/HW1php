<?php
if(isset($_POST['sum']))
{
    $sum=htmlentities($_POST['sum']);

    $sum = 0;
    $count = 0;

    for ($i = 1; $i <=99; $i++ )
    {
        if ($i%2 == 0)
        {
            $sum += $i;
            $count ++;
        }
    }
    echo "Sum of the even numbers $sum <br/>";
    echo "Count of the even numbers $count <br/>";
}
