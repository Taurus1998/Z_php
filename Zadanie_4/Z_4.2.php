<?php

$mas = array();
$n=5;
$m=8;
$min=2147483647;
for ($i = 0; $i < $n; $i++)
{
    echo $i."_";
    $sum=0;
    $b=0;
    for ($j = 0; $j < $m; $j++)
    {
        $mas[$i][$j] = rand(1, 9);
        if ($mas[$i][$j]>0)
        {
            $sum+= $mas[$i][$j];
            $b++;
        }

        echo " ".$mas[$i][$j];
    }
    $sum=$sum/$b;
    if ($min>$sum)
    {
        $min=$sum;
        $a=$i;
    }
    echo "/ ".$sum;
    echo "<br>";
}

echo "<br> #".$a;