<?php
$n=$_GET['n'];

$k=pow($n,2);
$k=$k%pow(10,strlen($n));
if ($k==$n)
{
    echo "Yes";
}
else
{
    echo "No";
}