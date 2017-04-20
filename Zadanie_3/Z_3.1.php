<html>
<head>

</head>
<body>
<form action="Z_3.1.php" method="POST">
    <input name="st" maxlength="50" size="50" value="">
    <button name="bt" value="1"  type="submit" class="button button_action">
        Enter
    </button>
</form>
<?php
$bt1=$_POST["bt"];
if ($bt1 ==1) {
    $st1 = $_POST["st"];
    trim($st1);
    $mas = explode(' ', $st1);
    $a=0;
    $b=0;
    print_r($mas);
    for($i=0;$i<count($mas);$i++)
    {
        if ($mas[$i]>=0)
        {
            $a++;
        }
        else
        {
            echo"</br>".$a."</br>";
            break;
        }
    }

    for ($j=count($mas)-1;$j>=0;$j--)
    {
        if ($mas[$j]>=0)
        {
            if ($mas[$j]%2 <>0)
            {
                $b+=$mas[$j];
            }
        }
        else
        {
            echo $b."</br>";
            break;
        }
    }


    $bt1 ==0;
}







?>

</body>
</html>



