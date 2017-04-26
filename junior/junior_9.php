
</head>
<body>
<form action="junior_9.php" method="POST">
    <input type="number" min="1" max="14" name="n"  value="" required>
    <button name="bt" value="1"  type="submit" class="button button_action">
        Enter
    </button>
</form>
</body>
</html>

<?php
$mas=array("Джокер","Двойка","Тройка","Четверка","Пятерка","Шестерка","Семерка","Восмерка","Девятка","Десятка","Валет","Дама","Король","Туз");
$bt1=$_POST["bt"];
if ($bt1 ==1){
    $n=$_POST["n"];
echo $mas[$n-1];




}
?>

