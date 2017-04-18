<?php

$n=$_GET['n'];
$k=0;

strval($n);
for($i=0;$i<strlen($n);$i++)
{
     if ($n[$i]<5)
     {
         $k++;
     }
}
echo $k;
























?>