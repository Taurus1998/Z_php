<?php

$mas = array();
$n=3;
$m=5;
$max;
for ($i = 0; $i < $n; $i++)
{

    for ($j = 0; $j < $m; $j++)
    {
        $mas[$i][$j] = rand(1, 9);
        echo " ".$mas[$i][$j];
    }
    echo "<br>";
}

echo "<br>";


for ($i = 0; $i < $n; $i++)
{
    $max=maxK($mas[$i]);
    for ($j = 0; $j < $m; $j++)
    {
        if ($mas[$i][$j]==$max)
        {
            $mas[$i][$j]=null;
            echo " _ ".$mas[$i][$j];
        }
        else
        {
            echo " ".$mas[$i][$j];
        }
    }
    echo "<br>";
}

//print_r($mas);
function maxK($arr)
{
    $max=$arr[0];
    for($i=0;$i<count($arr);$i++)
    {
        if ($arr[$i]>=$max )
        {
            $max=$arr[$i];
        }

    }
    return $max;

}

