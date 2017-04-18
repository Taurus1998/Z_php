<?php
$k=$_GET['k'];
$min=1000;
$max=10000;
for ($i=$min; $i<$max;$i++)
{
    $s=0;
    $n=$i;
    while ($n > 0) {
        $r = $n % 10;
        $s += $r;
        $n = (int)$n/10;
    }
    if ($s==$k)
    {
        echo $i.'</br>';
    }

}






?>