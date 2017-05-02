<?php
$mas = array();
$n=10;
$maxI;
$minI;

    for ($i = 0; $i < $n; $i++)
    {
        $mas[$i] = rand(1, 9);
        echo " ".$mas[$i]."_";
    }
    echo "<br>";
$maxI=max($mas);
$minI=min($mas);

for ($i=0;$i<count($mas);$i++)
{
    if($mas[$i]==$maxI)
    {
        $mas[$i]=$minI;
    }
    else
    {        
    if($mas[$i]==$minI)
    {
        $mas[$i]=$maxI;
    }
    }

}

//list($mas[$minIndex], $mas[$maxIndex]) = array($mas[$maxIndex], $mas[$minIndex]);
echo "<br>";
for ($i = 0; $i < $n; $i++)
{
    
    echo " ".$mas[$i]."_";
}
echo "<br>";
