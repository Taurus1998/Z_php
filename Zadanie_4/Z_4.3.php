<?php

$mas = array();
$masStr = array();
$n=3;
$m=4;

for ($i = 0; $i < $n; $i++)
{

    echo $i."/";
    for ($j = 0; $j < $m; $j++)
    {
        $mas[$i][$j] = rand(1, 99);
        echo " ".$mas[$i][$j];
    }
    echo "<br>";
}

for ($i = 0; $i < $n; $i++)
{
    for ($j = 0; $j < $m; $j++)
    {
        $masStr[$j]=$mas[$i] [$j];
    }

    if (Up($masStr)==true)
    {
        echo $i."_max=".maxK($masStr)."; min=".minK($masStr)."<br>" ;

    }
    else
    {
        if (Down($masStr)==true)
        {
            echo $i."_max=".maxK($masStr)."; min=".minK($masStr)."<br>" ;
        }

    }

}




function Up($arr)
{
    for ($i = 0; $i < count($arr)-1; $i++)
    {
        if ($arr[$i]>$arr[$i+1])
        {
            return false;
        }
    }
    return true;
}

function Down($arr)
{
    for ($i = 0; $i < count($arr)-1; $i++)
    {
        if ($arr[$i]<$arr[$i+1])
        {
            return false;
        }
    }
    return true;
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