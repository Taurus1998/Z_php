
</head>
<body>
<form action="junior_7.php" method="POST">
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
    $minut=intval( date("i"));
    if ($minut%5<=3 && $minut%5<>0)
    {
        echo "Горит зеленый.";
    }
    if ($minut%5>3 || $minut%5==0)
    {
        echo "Горит красный.";
    }




}
?>

