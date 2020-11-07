<?php
echo"Masukan bilangan : ";
$bil = trim (fgets(STDIN));
for ($i=$bil; $i>=1; $i--){
    for ($j=$bil; $j>=$i; $j--){
          echo "$j";
     }echo "\n";
}
?>