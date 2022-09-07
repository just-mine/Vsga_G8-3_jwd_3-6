<?php
    $bintang = 0;
    if(isset($_POST['bintang'])){
        $bintang = $_POST['bintang'];
    }

    if(isset($_POST['tambah'])){
        $bintang++;
    }
    elseif(isset($_POST['kurang'])){
        $bintang--;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>tugas 4</title>
</head>
<body>
    <?php if($bintang==0): ?> 
        <form method="post">
            Jumlah Bintang <br/>
            <input type="number" name="bintang"> <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
    endif;
        if($bintang!=0): 
            echo "Jumlah bintang $bintang <br><br>";
            for ($i=0; $i<$bintang; $i++){
                echo " * ";
            }
            ?>
            <form action="" method="post">
                <input type="text" name="bintang" value="<?= $bintang; ?>"><br/>
                <input type="submit" name="Kirim"><br/>
                <input type="submit" name="tambah" value="Tambah">
                <input type="submit" name="kurang" value="Kurang">
            </form>
        <?php endif; ?>
</body>
</html>