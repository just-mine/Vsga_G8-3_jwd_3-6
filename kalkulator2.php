<?php
$angka1 = @$_POST['tangka1'];
$angka2 = @$_POST['tangka2'];
$hasil  = @$_POST['hasil'];

if (isset($_GET['Tambah'])){
    $hasil=TAMBAH ($tangka1,$tangka2);
}
if (isset($_GET['Kurang'])){
    $hasil=KURANG ($tangka1,$angka2);
}
if (isset($_GET['Kali'])){
    $hasil=KALI ($tangka1,$tangka2);
}
if (isset($_GET['Bagi'])){
    $hasil=BAGI ($tangka1,$tangka2);
}


function TAMBAH ($tangka1,$tangka2){
    return $tangka1+$tangka2;
}
function KURANG ($tangka1,$tangka2){
    return $tangka1-$tangka2;
}
function KALI ($tangka1,$tangka2){
    return $tangka1*$tangka2;
}
function BAGI ($tangka1,$tangka2){
    return $tangka1/$tangka2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
</head>
<body>
    <!-- kolom pengisian angka -->
    <tr>
        <td>Angka1</td>
        <td>:</td>
        <td>
            <input type="text" name="tangka1" value="<?=$angka1?>" >
        </td>
    </tr><br/>
    <p></p>
    <tr>
        <td>Angka2</td>
        <td>:</td>
        <td>
            <input type="text" name="tangka2" value="<?=$angka2?>">
        </td>
    </tr><br/>
    <p></p>
    <!-- -->

    <!-- tombol penjumlahan -->
    <tr>
        <td>
            <input type="submit" name="btambah" value="+">
        </td>
    </tr>
    <!-- -->

    <!-- tombol pengurangan -->
    <tr>
        <td>
            <input type="submit" name="bkurang" value="-">
        </td>
    </tr>
    <!-- -->

    <!-- tombol perkalian -->
    <tr>
        <td>
            <input type="submit" name="bkali" value="*">
        </td>
    </tr>
    <!-- -->

    <!-- tombol pembagian -->
    <tr>
        <td>
            <input type="submit" name="bbagi" value="/">
        </td>
    </tr><br/>
    <!-- -->
    <p>    
    </p>

    <!-- kolom hasil -->
    <tr>
        <td>Hasil</td>
        <td>:</td>
        <td>
            <input type="text" name="thasil" value="< ?$hasil? >">
        </td>
    </tr>
    <!-- -->
</body>
</html>