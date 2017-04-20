<html>
<head>

</head>
<body>
<form action="Z_3.7.php" method="POST">
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
    $max=$mas[0];
    $min=$mas[0]+$mas[1];
    print_r($mas);
    for($i=0;$i<count($mas)-1;$i++)
    {
        if($mas[$i]+$mas[$i+1]>$max)
        {
            $max=$mas[$i]+$mas[$i+1];
            $a=$i;
        }

        if ($mas[$i+1]+$mas[$i]<=$min)
        {
            $min=$mas[$i+1]+$mas[$i];
            $b=$i+1;
        }

    }

    echo "<br>Max=".$a.";<br>Min=".$b.";";




}
?>

</body>
</html>

