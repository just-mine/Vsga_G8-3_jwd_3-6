<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
</head>
<body>
    <form action="" method="post">
            <h3>MASUKAN BINTANG</h3>
            <input type="text" name="bintang" placeholder="Masukan jumlah Bintang" required>
            <button type="submit" name="Kirim">Kirim</button>
        
    </form>
</body>
</html>

<?php 

if(isset($_POST['Kirim'])){
    $bintang = $_POST['bintang'];

    for($i = 1; $i <= $bintang; $i++){
        for($j = $bintang; $j >= $i; $j--){
            echo "&nbsp";
        }
        for($k = 1; $k <= $i; $k++){
            echo "*";
        }
        echo "<br>";
    }

    echo " ";
}
?>