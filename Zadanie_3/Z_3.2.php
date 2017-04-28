<html>
<head>

</head>
<body>
<form action="Z_3.2.php" method="POST">
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
    $mas1 = explode(' ', $st1);
    $mas2=array();

    for($i=0;$i<count($mas1);$i++)
    {
        $a=0;
        for ($j=0;$j<=$i;$j++)
        {
            $a+=$mas1[$j];
            $m=$j;
        }
        $a=$a/$m;
        $mas2[$i]=$a;




    }
    echo " array_A ";
    print_r($mas1);
    echo "</br> array_B ";
    print_r($mas2);













}







?>

</body>
</html>



