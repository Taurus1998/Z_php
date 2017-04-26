<?php
$min=20;
$max=45;
$del=5;
$sum=0;
echo "Числа:";
for ($i=$min; $i<=$max;$i++)
{
    if (fmod($i,$del)==0)
    {
        echo " ".$i." ";
        $sum+=$i;
    }
}

echo "<br>Сумма:".$sum.";";