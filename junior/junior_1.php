<html>
<head>

</head>
<body>
<form action="junior_1.php" method="POST">
    <input type="number" min="1" name="n"  value="1">
    <button name="bt" value="1"  type="submit" class="button button_action">
        Enter
    </button>
</form>
</body>
</html>
<?php
$bt1=$_POST["bt"];
if ($bt1 ==1){
    $n=$_POST["n"];
    $k=strval($n);
    $sum=0;

    for ($i=0;$i<strlen($k);$i++)
    {
        $sum+=$k[$i];
    }

echo "Suma:".$sum.";";

}
?>

