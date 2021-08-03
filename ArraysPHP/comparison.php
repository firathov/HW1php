<h3>Comparison of 2 ppl</h3>
<form method ="POST">
    <p>Name 1: <input type="text" name="name1" id="cart"></p>
    <p>Age 1:<input  type="number" name="age1" id="cart"></p>
    <p>Name 2:<input type="text" name="name2" id="curt"></p>
    <p>Age 2:<input  type="number" name="age2" id="curt"></p>
    <p>Which one elder?</p>
    <p><input type="radio" name="radio" value="1" id="cart">
        <label for="cart">Name1</label>
        <input type="radio" name="radio" value="2" id="curt">
        <label for="curt">Name2</label>
        <input type="radio" name="radio" value="3" id="caart">
        <label for="caart">Peers</label>
    <input type = "submit" value="There we go again...">
</form>
<?php
if(isset($_POST['name1']) && isset($_POST['age1']) && isset($_POST['name2']) && isset($_POST['age2']) && isset($_POST['radio']))
{
    $name1 = htmlentities($_POST['name1']);
    $age1 = htmlentities($_POST['age1']);
    $name2 = htmlentities($_POST['name2']);
    $age2 = htmlentities($_POST['age2']);
    $radio = $_POST['radio'];

    if(is_numeric($age1) && is_numeric($age2) && preg_match('/^[A-Za-z]*$/', $name1) && preg_match('/^[A-Za-z]*$/', $name2))
    {
        switch ($radio)
        {
            case "1":
            {
                if ($age1 > $age2)
                {
                    echo "True, $name1 elder than $name2 for " . $age1 - $age2 . " years";
                }
                elseif ($age1 == $age2)
                {
                    echo "False, $name1 and $name2 peers";
                }
                elseif ($age1 < $age2)
                {
                    echo "False, $name2 elder than $name1 for " . $age2 - $age1 . " years";
                }
                break;
            }
            case "2":
            {
                if ($age2 > $age1)
                {
                    echo "True, $name2 elder than $name1 for " . $age2 - $age1 . " years";
                }
                elseif ($age2 == $age1)
                {
                    echo "False, $name2 and $name1 peers";
                }
                elseif ($age2 < $age1)
                {
                    echo "False, $name1 elder $name2 for " . $age1 - $age2 . " years";
                }
                break;
            }
            case "3":
            {
                if ($age2 > $age1)
                {
                    echo "False, $name2 elder than $name1 for " . $age2 - $age1 . " years";
                }
                elseif ($age2 == $age1)
                {
                    echo "True, $name2 and $name1 peers";
                }
                elseif ($age2 < $age1)
                {
                    echo "False, $name1 elder $name2 for " . $age1 - $age2 . " years";
                }
                break;
            }
        }
    }
    else{
        echo "Wrong symbols, pls try again";
    }
}