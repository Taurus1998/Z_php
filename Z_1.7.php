<?php
$n=$_GET['n'];
$k=1;
strval($n);
for ($i=0; $i<strlen($n)-1;$i++)
{
    for ($j=$i+1; $j<strlen($n);$j++)
    {
        if($n[$i]==$n[$j] )
        {
            echo "Yes";
            exit();
        }
    }
}
echo "No";