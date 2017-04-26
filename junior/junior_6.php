</head>
<body>
<form action="junior_6.php" method="POST">
    <p> Фамилия:  <input type="text"  name="fam" required  > </p>
    <p> Имя: <input type="text" name="name" required ></p>
    <p> Отчество: <input type="text" name="ot" required ></p>
    <button name="bt" value="1"  type="submit" class="button button_action">
        Enter
    </button>
</form>
</body>
</html>
<?php
$bt1=$_POST["bt"];
if ($bt1 ==1)
{
    $fam=$_POST["fam"];
    $name=$_POST["name"];
    $ot=$_POST["ot"];

   

echo $fam." ".mb_substr($name, 0, 1).". ".mb_substr($ot,0,1).".";










}
