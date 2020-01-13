<?php
$i=0;
$t=5;
$v=array($t);

while($i<$t)

{
	echo "Valor da variável I: $i<br>";
	$i=$i+1;

}

echo "<br/><hr/><br/>";
echo "<br/><hr/><br/>";


$i=0;
while($i<$t)

{
	$v[$i]=$i;
	echo "Valor da vairável G: $i<br>";
	
	$i=$i+1;

}

echo "<br/><hr/><br/>";
echo "<br/><hr/><br/>";

$i=0;

while($i<$t)

{
	echo "$v[$i]<br/>";
	$i++;
}

echo "<br/><hr/><br/>";
echo "<br/><hr/><br/>";

?>