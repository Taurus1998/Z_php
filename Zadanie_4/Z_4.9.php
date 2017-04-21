<?php

$mas = array();
$n=3;
$m=5;

for ($i = 0; $i < $n; $i++)
{
    for ($j = 0; $j < $m; $j++)
    {
        $mas[$i][$j] = rand(-99, -1);
        echo " ".$mas[$i][$j];
        $mas[$i][$j] = sumcifr(absK($mas[$i][$j]));
    }
    echo "<br>";
}

echo "<br>";

for ($i = 0; $i < $n; $i++)
{
    for ($j = 0; $j < $m; $j++)
    {
        echo " ".$mas[$i][$j];
    }
    echo "<br>";
}

function absK($b)
{    if($b<0)
    {
        $b=$b*(-1);
    }
    return $b;
}

function sumcifr($b)
{
    $b=strval($b);
    $sum=0;

        for ($i=0;$i<strlen($b);$i++)
        {
            $sum+=$b[$i];
        }
        return $sum;
}