<?php

$mas = array();
$masStr = array();
$rezult=array();
$n=3;
$m=5;
$max;
$min;
for ($i = 0; $i < $n; $i++)
{

    for ($j = 0; $j < $m; $j++)
    {
        $mas[$i][$j] = rand(1, 9);
        echo " ".$mas[$i][$j];
    }
    echo "<br>";
}


for ($i = 0; $i < $n; $i++)
{


    $max=maxK($mas[$i]);
    $min=minK($mas[$i]);
    for ($j = 0; $j < $m; $j++)
    {
        if($mas[$i][$j]==$max)
        {
            $mas[$i][$j]=$min;
        }
        else
        {
            if ($mas[$i][$j]==$min)
            {
                $mas[$i][$j]=$max;
            }
        }
    }
    echo $i."/ max:".$max."; min:".$min."<br>";

}

for ($i = 0; $i < $n; $i++)
{
    for ($j = 0; $j < $m; $j++)
    {
        echo " ".$mas[$i][$j];
    }
    echo "<br>";
}

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

function minK($arr)
{
    $min=2147483647;
    for($i=0;$i<count($arr);$i++)
    {
        if ($arr[$i]<=$min )
        {
            $min=$arr[$i];
        }

    }
    return $min;

}