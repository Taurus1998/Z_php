<html>
<head>

</head>
<body>
<form action="Z_3.6.php" method="POST">
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
    $max=$mas[0];
    print_r($mas);
    echo "<br>";
    for($i=0;$i<count($mas);$i++)
    {
        if ($mas[$i]>$max && $mas[$i]% 2 ==0 )
        {
            $max=$mas[$i];
        }
    }
    for($j=0;$j<count($mas);$j++)
    {
        if ($mas[$j]==$max  )
        {
            $mas[$j]=$j;
        }
    }



    print_r($mas);
}
?>

</body>
</html>

