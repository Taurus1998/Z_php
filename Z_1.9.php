<?php
$n=$_GET['n'];

$k=k_pow($n,2);
$k=$k%k_pow(10,strlen($n));
if ($k==$n)
{
    echo "Yes";
}
else
{
    echo "No";
}

function k_pow($a,$b)
{    $a1=$a;
    for ($i=1;$i<$b;$i++)
    {
        $a1=$a1*$a;
    }
return $a1;

}