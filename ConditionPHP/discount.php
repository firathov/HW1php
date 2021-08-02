<h3>Discount</h3>
<form method="POST">
    <p>Amount: <input type="number" name="amount"></p>
    <input type="submit" value="send">
</form>
<?php
if(isset($_POST['amount']))
{
    $amount = htmlentities($_POST['amount']);

    if(is_numeric($amount))
    {
        if ($amount < 500)
        {
            echo "Sorry, but you can't get discount";
        }
        elseif ($amount <= 1000)
        {
            echo "You got discount 50 AZN";
        }
        else
        {
            echo "You got discount 100 AZN";
        }
    }
    else
    {
        echo "pls write only numbers";
    }
}