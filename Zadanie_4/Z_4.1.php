<?php

$mas = array();
$n=5;
$m=5;
$dia=0;
$up=0;
$down=0;
for ($i = 0; $i < $n; $i++)
{
    for ($j = 0; $j < $m; $j++)
    {
        $mas[$i][$j] = rand(10, 99);
        if($i<$j )
        {
            $up+=$mas[$i][$j];
        }
        if($i>$j )
        {
            $down+=$mas[$i][$j];
        }
        echo " ".$mas[$i][$j];
    }
    echo "<br>";
}

for ($i = 0; $i < $n; $i++)
{
    $dia+=$mas[$i][$i];
}


echo "<br> Up=".$up.";";
echo "<br> Diagonal=".$dia.";";
echo "<br> Down=".$down.";";















?>