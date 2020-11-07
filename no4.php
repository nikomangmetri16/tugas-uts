<?php

echo "Masukkan jumlah jam kerja : ";
$jumlah_jam_kerja = trim(fgets(STDIN));

if ($jumlah_jam_kerja>48) {
    $jam_lembur=$jumlah_jam_kerja-48;
    $upah=$jam_lembur*80000;
    $gaji_pokok=2400000;
    $total=$upah+$gaji_pokok;

    
    echo "Jam  Lembur Anda $jam_lembur jam \n";
    echo "Upah Lembur Anda : Rp.$upah\n";
    echo "Jumlah Gaji Pokok Anda : Rp.$gaji_pokok\n";
    echo "Total Gaji Anda : Rp.$total";

}else{
    echo "Jumlah Gaji Pokok : ". $jumlah_jam_kerja*50000; 
}

?>
