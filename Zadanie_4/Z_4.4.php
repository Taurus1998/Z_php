<?php

$mas = array();
$n=3;
$m=4;
$sum=0;
for ($i = 0; $i < $n; $i++)
{

    echo $i."/";
    for ($j = 0; $j < $m; $j++)
    {
        $mas[$i][$j] = rand(1, 99);
        if (pr( $mas[$i][$j]))
        {
            $sum+= $mas[$i][$j];
        }

        echo " ".$mas[$i][$j];
    }
    echo "<br>";
}
echo $sum;


function pr($s) {

    $s=strval($s);
    for ($j=0; $j<strlen($s);$j++)
    {
        if ($s[$j]==0 || $s[$j]==1 || $s[$j]==3 || $s[$j]==8 )
        {
        }
        else
        {
            return  false;
        }
    }
    return true;
}