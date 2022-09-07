<!DOCTYPE html>

<head>

    <title>Tugas 5</title>
</head>

<body>
    <div class="kalku">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2 class="judul">Tugas Kalkulator</h2>
            <tr>
                <td><input type="text" name="number1" size="10" placeholder="nilai1" class="bil"></td>
                <td><input type="text" name="number2" size="10" placeholder="nilai2" class="bil"></td><br><br>
                <td><select name="operator" class="opt"><br><br>
                        <option>+</option>
                        <option>-</option>
                        <option>*</option>
                        <option>/</option>
                    </select></td>
                <td><input type="submit" name="submit" value="Hitung" class="tombol"></td>

            </tr>
        </form>
        </br>
             <div class="judul">
                <?php
                class Kalkulator
                {
                    //deklarasi variable
                    var $add;
                    var $kurang;
                    var $kali;
                    var $bagi;

                    //method2 yang ada
                    function tambah($num1, $num2)
                    {
                        echo $this->add = $num1 + $num2;
                    }

                    function Kurang($num1, $num2)
                    {
                        echo $this->kurang = $num1 - $num2;
                    }

                    function Kali($num1, $num2)
                    {
                        echo $this->kali = $num1 * $num2;
                    }

                    function Bagi($num1, $num2)
                    {
                        echo $this->bagi = $num1 / $num2;
                    }
                }

                $hasil = new Kalkulator(); //membuat objek hasil dari klas kalkulator
                $num1 = $_POST['number1']; //untuk menangkap inputan dan masukan ke variable
                $num2 = $_POST['number2'];
                $opr = $_POST['operator'];
                if ($opr == '+') {
                    echo $num1 . ' ' . $opr . ' ' . $num2 . ' = ';
                    $hasil->tambah($num1, $num2);
                } elseif ($opr == '-') {
                    echo $num1 . ' ' . $opr . ' ' . $num2 . ' = ';
                    $hasil->Kurang($num1, $num2);
                } elseif ($opr == '*') {
                    echo $num1 . ' ' . $opr . ' ' . $num2 . ' = ';
                    $hasil->Kali($num1, $num2);
                } elseif ($opr == '/') {
                    echo $num1 . ' ' . $opr . ' ' . $num2 . ' = ';
                    $hasil->Bagi($num1, $num2);
                }
                ?>
            </div>
    
    </div>
</body>

</html>