<html>
<head>

</head>
<body>
<form action="Z_3.4.php" method="POST">
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

    for($i=0;$i<count($mas)-1;$i++)
    {
        if ($mas[$i]==$mas[$i+1])
        {
            $a++;
        }

    }
    print_r($mas);
    echo "<br>".$a;
}
?>

</body>
</html>



