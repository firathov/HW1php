<h3>Mirrors</h3>
<form method="POST">
    <p><input type="number" name="numb"</p>
    <input type="submit" value="Bash gedib fikir vermeyin">
</form>
<?php
if(isset($_POST['numb']))
{
    $numb = htmlentities($_POST['numb']);
    if(is_numeric($numb) && $numb >0)
    {
        while ($numb >= 1)
        {
            $mirrorNum = $numb % 10;
            $numb = $numb / 10;
            echo "$mirrorNum";
        }
    }
    else
    {
        echo "Number can't change negative or 0 numbers to the mirror";
    }
}