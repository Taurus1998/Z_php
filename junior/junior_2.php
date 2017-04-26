<html>
<head>

</head>
<body>
<form action="junior_2.php" method="POST">
  <p> Цифра:  <input type="number" min="0" max="9" name="n"  value="1"> </p>
  <p>Число: <input type="number" min="1" name="m"  value="1"></p>
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
    $m=$_POST["m"];
    $k=strval($m);
    $sum=0;

    for ($i=0;$i<strlen($k);$i++)
    {
        if (intval($k[$i])==$n)
        {
            $sum++;
        }

    }

    echo "Цифра ".$n." в числе ".$m." встречается ".$sum." раз;";

}