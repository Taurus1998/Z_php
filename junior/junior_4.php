<?php
$mas = array();
$n=10;
$maxIndex;
$minIndex;

    for ($i = 0; $i < $n; $i++)
    {
        $mas[$i] = rand(1, 9);
        echo " ".$mas[$i]."_";
    }
    echo "<br>";

for ($i=0;$i<count($mas);$i++)
{
    if($mas[$i]==max($mas))
    {
        $maxIndex=$i;
    }
    if($mas[$i]==min($mas))
    {
        $minIndex=$i;
    }

}

list($mas[$minIndex], $mas[$maxIndex]) = array($mas[$maxIndex], $mas[$minIndex]);
echo "<br>";
for ($i = 0; $i < $n; $i++)
{
    
    echo " ".$mas[$i]."_";
}
echo "<br>";