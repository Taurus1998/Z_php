<?php

$n=$_GET['n'];
strval($n);
$m="";
for($i=strlen($n);$i>=0;$i--)
{
    $m=$m.$n[$i];
}
echo $m;

?>