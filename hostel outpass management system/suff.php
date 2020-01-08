<?php
$list1=array('wordA','wordB','wordC','wordD');
$list2=array('word1','word2','word3');
$combos="";

function combinations($array1, $array2)
{
$array1len=count($array1);
$array2len=count($array2);
for($x=0; $x<$array1len; $x++)
{
for($y=0; $y<$array2len; $y++)
{
$combos.=$array1[$x].' '.$array2[$y].', ';
}
}

for($a=0; $a<$array1len; $a++)
{
for($b=0; $b<$array2len; $b++)
{
$combos.=$array1[$a].' '.$array2[$b].', ';
}
}
return $combos;
}  
?>