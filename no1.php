<?php

echo"Masukan nilai A : ";
$nilaiA = trim (fgets(STDIN));

echo"Masukan nilai B : ";
$nilaiB = trim (fgets(STDIN));

$sisimiringC=sqrt (($nilaiA*$nilaiA) + ($nilaiB*$nilaiB));

echo"Jadi luas sisimiringC : $sisimiringC cm2";



?>