<?php
$array = [
    ["Susi", 92],
    ["Andi", 80],
    ["Toto", 75],
    ["Made", 65],
    ["Dewi", 60],
];
    for ($i=0; $i<count($array); $i++){
        if($array[$i][1] >=75) {
            echo $array[$i][0]." = Dinyatakan Lulus\n";
        } else if ($array[$i][1] >=65){
            echo $array[$i][0]." = Dinyatakan Remidial\n";
        } else {
            echo $array[$i][0]." = Dinyatakan Tidak Lulus\n"; 
        }
    }
?>