<html>
    <head>
    <title>Konversi Suhu - Farez Syx</title>
    </head>
    <body>
        <h1>Konversi Suhu Menggunakan PHP</h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Pilih Suhu</td>
                    <td>
                        <select name="psuhu" id="">
                            <option value="Celsius">Celcius</option>
                            <option value="Fahrenheit">Fahrenheit</option>
                            <option value="Reamur">Reamur</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Masukkan Angka</td>
                    <td><input type="number" name="drjt" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="hitung" value="Hitung"></td>
                </tr>
            </table>
        </form>
        <?php
            if (isset($_POST['hitung'])){
                $suhu = $_POST['psuhu'];
                $drjt = $_POST['drjt'];
                echo "<h3>Hasil :</h3>";
                if ($suhu == "Celsius"){
                    $hasil1 = (9 * $drjt) / 5 + 32;
                    $hasil2 = $drjt + 273.15;
                    $hasil3 = 4/5 * $drjt;
                    ?>
                    <table>
                        <tr>
                            <td><?= $drjt." ".$suhu ?></td>
                            <td>=</td>
                            <td><?= $hasil1." Fahrenheit" ?></td>
                        </tr>
                       
                        <tr>
                            <td><?= $drjt." ".$suhu ?></td>
                            <td>=</td>
                            <td><?= $hasil3." Reamur" ?></td>
                        </tr>
                    </table>
                    <?php
                } elseif ($suhu == "Fahrenheit"){
                    $hasil1 = ($drjt - 32) * 5 / 9;
                    $hasil2 = (($drjt - 32) * 5 / 9) + 273.15;
                    $hasil3 = 4/9 * ($drjt-32);
                    ?>
                    <table>
                        <tr>
                            <td><?= $drjt." ".$suhu ?></td>
                            <td>=</td>
                            <td><?= $hasil1." Celsius" ?></td>
                        </tr>
                       
                        <tr>
                            <td><?= $drjt." ".$suhu ?></td>
                            <td>=</td>
                            <td><?= $hasil3." Reamur" ?></td>
                        </tr>
                    </table>
                    <?php
                } 
                 elseif ($suhu == "Reamur"){
                    $hasil1 = (5/4) * $drjt;
                    $hasil2 = (9/4 * $drjt) + 32;
                    $hasil3 = (5/4 * $drjt) + 273;
                    ?>
                    <table>
                        <tr>
                            <td><?= $drjt." ".$suhu ?></td>
                            <td>=</td>
                            <td><?= $hasil1." Celsius" ?></td>
                        </tr>
                        <tr>
                            <td><?= $drjt." ".$suhu ?></td>
                            <td>=</td>
                            <td><?= $hasil2." Fahrenheit" ?></td>
                        </tr>
                       
                    </table>
                    <?php
                }
            }
        ?>
    </body>
</html>