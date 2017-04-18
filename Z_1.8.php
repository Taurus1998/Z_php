<?php

$min=1000;
$max=10000;
for ($i=$min; $i<$max;$i++)
{
   if ( same(strval($i))==true)
   {
       echo $i."</br>";
   }
}


function same($n)
{
    for ($i=0; $i<strlen($n)-1;$i++)
    {
        for ($j=$i+1; $j<strlen($n);$j++)
        {
            if($n[$i]==$n[$j] )
            {
                return false;
            }
        }
    }
    return true;


}