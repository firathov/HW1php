<h3>Factorial</h3>
<form method="POST">
    <p><input type="number" name="number"></p>
    <input type="submit" value="Quzu kesmek">
</form>
<?php
if(isset($_POST['number']))
{
    $number = htmlentities($_POST['number']);
    if(is_numeric($number) && $number>0)
    {
        $factorial = 1;
        for ($i=1; $i<=$number; $i++)
        {
            $factorial=$factorial*$i;
            if($i==$number)
            {
                echo "Factorial of the number $number equal $factorial";
                break;
            }
        }
    }
    else
    {
        echo "factorial can't be negative or 0";
    }
}