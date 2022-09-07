<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titl>Tugas 5</title>
</head>
<body>
    <form action="" method="GET">
        <h2>kalkulator sederhana</h2>
        <input type="text" name="bilangan1" autocomplete="off" placeholder="Masukkan angka">
        <input type="text" name="bilangan2" autocomplete="off" placeholder="Masukkan angka">
        <input type="submit" name="
        Tambah" value="+">
        <input type="submit" name="
        Kurang" value="-">
        <input type="submit" name="
        Kali" value="x">
        <input type="submit" name="
        Bagi" value="/">
    </form>
</body>
</html>


<?php
$bilangan1=$_GET['bilangan1'];
$bilangan2=$_GET['bilangan2'];

if (isset($_GET['Tambah'])){
    $hasil=TAMBAH ($bilangan1,$bilangan2);
}
if (isset($_GET['Kurang'])){
    $hasil=KURANG ($bilangan1,$bilangan2);
}
if (isset($_GET['Kali'])){
    $hasil=KALI ($bilangan1,$bilangan2);
}
if (isset($_GET['Bagi'])){
    $hasil=BAGI ($bilangan1,$bilangan2);
}


function TAMBAH ($bilangan1,$bilangan2){
    return $bilangan1+$bilangan2;
}
function KURANG ($bilangan1,$bilangan2){
    return $bilangan1-$bilangan2;
}
function KALI ($bilangan1,$bilangan2){
    return $bilangan1*$bilangan2;
}
function BAGI ($bilangan1,$bilangan2){
    return $bilangan1/$bilangan2;
}
echo "$hasil";
?>
