<?php

$n=$_GET['n'];



for ($i=$n;$i>10;$i--)
{
    if(pr($i)==true && pr(k_pow($i,2))==true )
    {
        echo $i."<br>";
    }
}

function pr($k)
{
    $k=strval($k);
    for ($i=0;$i<round((strlen($k)/2),0,PHP_ROUND_HALF_DOWN);$i++)
    {
        if ($k[$i]<>$k[strlen($k)-1-$i])
        {
           // echo "no</br>";
            return false;
        }
    }
    return true;
}

function k_pow($a,$b)
{
    $a1 = $a;
    for ($i = 1; $i < $b; $i++) {
        $a1 = $a1 * $a;
    }
    return $a1;

}
?>