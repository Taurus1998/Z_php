
</head>
<body>
<form action="junior_10.php" method="POST">
    <input type="number" min="1924" max="9999" name="n"  value="" required>
    <button name="bt" value="1"  type="submit" class="button button_action">
        Enter
    </button>
</form>
</body>
</html>

<?php
$mas=array("Крыса","Бык","Тигр","Кролик","Дракон","Змея","Лошадь","Коза","Обезьяна","Петух","Собака","Свинья");
$bt1=$_POST["bt"];
if ($bt1 ==1){
    $n=$_POST["n"];
    echo $mas[(($n-1924)%12)];
}
?>

