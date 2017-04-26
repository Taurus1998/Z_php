
</head>
<body>
<form action="junior_8.php" method="POST">
    <input type="number" min="1" max="9999" name="n"  value="1">
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

    if($n%4==0)
    {
        echo "Высокосный год.";

    }
    else
    {
        echo "Не высокосный год.";
    }



}
?>

