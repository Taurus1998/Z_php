<?php
$n=$_GET['n'];

//for ($i=$n;$i>10;$i--)
{
    if(pr($n)==true )
    {
        echo $n."<br>";
    }

}


function pr($k)
{
    strval($k);

    for ($i=0;$i<round((strlen($k)/2),0,PHP_ROUND_HALF_DOWN);$i++)
    {

        if ($k[$i]<>$k[strlen($k)-1-$i])
        {
            echo "no</br>";
            return false;
        }

    }

    return true;

}

?>