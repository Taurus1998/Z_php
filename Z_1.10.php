<?php
$n=$_GET['n'];

for ($i=$n;$i>10;$i--)
{
    if(pr($i)==true )
    {
        echo $i."<br>";
    }

}

function  pr($k)
{

    strval($k);

    for ($i=0;$i<round((strlen($k)/2),0,PHP_ROUND_HALF_DOWN);$i++)
    {

       // echo $k[$i]."_".$k[strlen($k)-1-$i].":";
        if ($k[$i]<>$k[strlen($k)-1-$i])
        {

            return false;
        }

    }

    return true;

}

?>