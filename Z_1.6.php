<?php

$min=1000;
$max=10000;
for ($i=$min; $i<$max;$i++)
{
    if (pr(strval($i))==true)
    {
        echo $i."</br>";
    }
}


 function pr($n) {

     for ($j=0; $j<4;$j++)
     {
           if ($n[$j]==0 || $n[$j]==2 || $n[$j]==3 || $n[$j]==7 )
         {
         }
         else
         {
             return  false;
         }
     }
     return true;
 }




?>