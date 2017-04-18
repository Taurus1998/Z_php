<?php
$n=$_GET['n'];
$r1 = $n % 10;
$n = (int)$n/10;
while ($n > 0) {  
    $r2 = $n % 10;
    $n = (int)$n/10;
    if ($r1<$r2)
    {
        echo 'No';
        exit();
    }
    $r1=$r2;
    if ($n<=0)
    {
        echo 'Yes';
        exit();
    }

}
