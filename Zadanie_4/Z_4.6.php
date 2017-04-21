<?php

$mas = array();
$masStr = array();
$rezult=array();
$n=3;


for ($i = 0; $i < $n; $i++)
{

    for ($j = 0; $j < $n; $j++)
    {
        $mas[$i][$j] = rand(1, 9);
        echo " ".$mas[$i][$j];
    }
    echo "<br>";
}

for ($i = 0; $i < $n; $i++)
{
    for ($j = 0; $j < $n; $j++)
    {
        $masStr[$j]=$mas[$i] [$j];
    }
    if (neotr($masStr)==true)
    {
        echo "Vektor: ";
        print_r($masStr);
       echo "<br>Posle umnogenija: ";
        print_r( umnvektor($mas,$masStr));
        break;
    }

}


function neotr($arr)
{

    for($i=0;$i<count($arr);$i++)
    {
        if ($arr[$i]<0 )
        {
            return false;
        }

    }
    return true;

}

function umnvektor($matr,$vektor)
{
    $rez=array();
    for ($i = 0; $i < count($vektor); $i++)
    {
        for ($j = 0; $j < count($vektor); $j++)
        {
            $rez[$i]+=$matr[$i][$j]*$vektor[$j];
        }
    }
    return $rez;

}