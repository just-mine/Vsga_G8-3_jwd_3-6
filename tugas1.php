<?php
// Tangkap variabel dari form
$vta = $_POST["ttugas"];
$vtb = $_POST["tuts"];
$vtc = $_POST["tuas"];
$vtd = ($vta * 0.2) + ($vtb * 0.3) +($vtc * 0.5);

//Tampilkan datanya
echo " Nilai Tugas       : $vta <br>";
echo "Nilai UTS       : $vtb <br>";
echo "Nilai UAS     : $vtc <br>";
echo "Total NILAI      : $vtd <br>";

if ($vtd >= 90)
echo "Anda Mendapatkan Nilai A";
elseif ($vtd >= 80 )
echo "Anda Mendapatkan Nilai B";
elseif ($vtd >= 60 )
echo "Anda Mendapatkan Nilai c";
else
echo "Anda Mendapatkan Nilai D";

?>

