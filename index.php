<?php

require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

$shaun = new Animal('Shaun', 4, "No");
$katak = new Frog('Katak', 4, "No");
$kera_sakti = new Ape('Kera Sakit', 2, "No");

echo "Name : " . $shaun->getNama() . "<br> legs : " . $shaun->getkaki() . "<br> cold blooded : " . $shaun->darahDingin() . "<br> <br>";
echo "Name : " . $katak->getNama() . "<br> legs : " . $katak->getkaki() . "<br> cold blooded : " . $katak->darahDingin() . "<br> jump : " . $katak->hop() . "<br> <br>";
echo "Name : " . $kera_sakti->getNama() . "<br> legs : " . $kera_sakti->getkaki() . "<br> cold blooded : " . $kera_sakti->darahDingin()  . "<br> yell :  " . $kera_sakti->yell() . "<br>";


