<?php

$mas = array();
$masSta = array();
$n=3;
$m=4;
$p=2; //Число которому кратно
$sum=0;
for ($i = 0; $i < $n; $i++)
{

    for ($j = 0; $j < $m; $j++)
    {
        $mas[$i][$j] = rand(1, 9);
        echo " ".$mas[$i][$j];
    }
    echo "<br>";
}


for ($i = 0; $i < $m; $i++)
{
    for ($j = 0; $j < $n; $j++)
    {
        $masSta[$j]=$mas[$j][$i];
    }

    if (krat($masSta,$p)==true)
    {
        echo "<br>".$i." / ".suma($masSta)."<br>";
    }

}




function krat($arr,$k)
{
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i] % $k <> 0)
        {
            return false;
        }
    }
    return true;

}

function suma($arr)
{
    $summ=0;

    for ($j = 0; $j < count($arr); $j++)
    {
            $summ+= $arr[$j];
    }
    return $summ;

}









