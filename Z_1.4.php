<?php

$min=1000;
$max=10000;
for ($i=$min; $i<$max;$i++)
{
    if(Up($i)==true || Down($i)==true)
        echo $i."<br>";

}

    function Up($n){
        while($n >=10){
            $r1 = $n%10;
            $n = intval($n/10);
            $r2 = $n%10;

            if($r1 <= $r2){
               return false;
            }
        }
        return true;

    }
    function Down($n){
        while($n >=10){
            $r1 = $n%10;
            $n = intval($n/10);
            $r2 = $n%10;

            if($r1 >= $r2){
                return false;
            }
        }
        return true;

    }



















?>