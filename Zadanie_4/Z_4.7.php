<?php

$mas = array();
$masStr = array();
$rezult=array();
$n=4;
$a;
for ($i = 0; $i < $n; $i++)
{

    for ($j = 0; $j < $n; $j++)
    {
        $mas[$i][$j] = rand(1, 9);
        echo " ".$mas[$i][$j];
    }
    echo "<br>";
}


$maxUp=masUp($mas);
$maxDown=masDown($mas);

echo "MaxUP: ".$maxUp.";<br>MaxDown: ".$maxDown.";";

for ($i = 0; $i < $n; $i++){

    for ($j = 0; $j < $n; $j++)
    {
        if ($i<$j)
        {
            if ($mas[$i][$j]==$maxUp)
            {
                $a=$mas[$j][$i];
                $mas[$j][$i]=$mas[$i][$j];
                $mas[$i][$j]=$a;
            }
        }
        if($i>$j)
        {
            if ($mas[$i][$j]==$maxDown)
            {
                $a=$mas[$j][$i];
                $mas[$j][$i]=$mas[$i][$j];
                $mas[$i][$j]=$a;
            }
        }
    }
}

echo "<br>";
for ($i = 0; $i < $n; $i++)
{
    for ($j = 0; $j < $n; $j++)
    {
        echo " ".$mas[$i][$j];
    }
    echo "<br>";
}



function masUp($arr)
{
    $max1=$arr[0][1];
    for ($i = 0; $i < count($arr); $i++)
    {
        for ($j = 0; $j < count($arr); $j++)
        {
            if($i<$j )
            {
                if ($arr[$i][$j]>$max1)
                {
                    $max1=$arr[$i][$j];
                }
            }
        }
    }
    return $max1;
}

function masDown($arr)
{
    $max1=$arr[0][1];
    for ($i = 0; $i < count($arr); $i++)
    {
        for ($j = 0; $j < count($arr); $j++)
        {
            if($i>$j )
            {
                if ($arr[$i][$j]>$max1)
                {
                    $max1=$arr[$i][$j];
                }
            }
        }
    }
    return $max1;
}