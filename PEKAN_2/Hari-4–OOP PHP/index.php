<?php 

require('./Ape.php');
require('./Frog.php');

$kuda = new Animal();

echo $kuda->name; // "shaun"
echo "<br>";
echo $kuda->legs; // 4
echo "<br>";
echo $kuda->cold_blooded; // "no"
echo "<br>";
$sungokong = new Ape("kera sakti");

echo "<br>";
$sungokong->yell(); // "Auooo"

echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"

?>