<?php
$mas = array();
$n=3;
$proizvedenie=1;

for ($i = 0; $i < $n; $i++)
{
    $mas[$i] = rand(1, 100);
    echo " ".$mas[$i]."_";
}
echo "<br>";

for ($i = 0; $i < count($mas); $i++)
{
    if ($mas[$i]>0 && fmod($i,2)==0)
    {
        $proizvedenie=$proizvedenie*$mas[$i];
    }
}

echo "<br> Произведение:".$proizvedenie.";<br><br>";


for ($i = 0; $i < count($mas); $i++)
{
    if ($mas[$i]>0 && fmod($i,2)<>0)
    {
      echo $mas[$i]."_";
    }
}