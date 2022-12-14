<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gaji</title>
    
</head>

<body>
    <div class="d-flex justify-content-center p-3">
        <div class="card text-white bg-primary mb-3" style="width: 90rem;">
            <nav class="navbar navbar-light bg-light">
             
            </nav>
            <div class="card-body" id="dua">
                <h3>Case Bebas</h3>
                <div class="d-flex justify-content-center p-3">
                    <form method="POST">
                        <table>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><input type="text" name="nama" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Upah Perjam</td>
                                <td><input type="text" name="upah_perjam" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Total Jam Kerja</td>
                                <td><input type="text" name="total_jam_kerja" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Pengeluaran</td>
                                <td><input type="text" name="pengeluaran" class="form-control"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="submit" value="Submit" class="btn btn-success">
                                    <input type="reset" value="Reset" class="btn btn-warning">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <hr>
                <?php 
                if (isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $upah_perjam = $_POST['upah_perjam'];
                    $total_jam_kerja = $_POST['total_jam_kerja'];
                    $pengeluaran = $_POST['pengeluaran'];
                    
                    //Perhitungan
                    $total_jam_normal = 40;

                    if ($total_jam_kerja >= $total_jam_normal) {
                        $total_upah_pokok = $total_jam_normal * $upah_perjam;
                        $total_jam_lembur = $total_jam_kerja - $total_jam_normal;
                        $upah_lembur_perjam = $upah_perjam * 1.5;
                        $total_upah_lembur = $total_jam_lembur * $upah_lembur_perjam;
                        $total_upah_full = $total_upah_pokok + $total_upah_lembur;
                    } else {
                        $total_upah_pokok = $total_jam_kerja * $upah_perjam;
                        $total_jam_lembur = 0;
                        $total_upah_lembur = 0;
                        $total_upah_full = $total_upah_pokok + $total_upah_lembur;
                    }
                    
                    if ($total_upah_full > $pengeluaran) {
                        $status = "Bisa Menabung";
                        $nabung = $total_upah_full - $pengeluaran;
                    } elseif ($total_upah_full == $pengeluaran) {
                        $status = "Tidak Bisa Menabung";
                        $nabung = $total_upah_full - $pengeluaran;
                    } else {
                        $status = "Cari Tambahan";
                        $nabung = 0;
                    }
                    
                    echo "<h4 class='pt-3'> Nama Lengkap : $nama </h4>";
                    echo"
                        <table class='table table-striped text-white' border='1' cellpadding='4'>
                            <thead>
                                <tr>
                                    <td align='center'>Upah/Jam</td>
                                    <td align='center'>Total Jam Kerja</td>
                                    <td align='center'>Total Jam Lembur</td>
                                    <td align='center'>Total Upah Pokok</td>
                                    <td align='center'>Total Upah Lembur</td>
                                    <td align='center'>Total Upah Full</td>
                                    <td align='center'>Pengeluaran</td>
                                    <td align='center'>Status</td>
                                    <td align='center'>Besar Tabungan</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class='text-white'>
                                    <td align='center'>Rp "; echo number_format($upah_perjam, 2, ',', '.'); echo"</td>
                                    <td align='center'>$total_jam_kerja</td>
                                    <td align='center'>$total_jam_lembur</td>
                                    <td align='center'>Rp "; echo number_format($total_upah_pokok, 2, ',', '.'); echo"</td>
                                    <td align='center'>Rp "; echo number_format($total_upah_lembur, 2, ',', '.'); echo"</td>
                                    <td align='center'>Rp "; echo number_format($total_upah_full, 2, ',', '.'); echo"</td>
                                    <td align='center'>Rp "; echo number_format($pengeluaran, 2, ',', '.'); echo"</td>
                                    <td align='center'>$status</td>
                                    <td align='center'>Rp "; echo number_format($nabung, 2, ',', '.'); echo"</td>
                                </tr>
                            </tbody>
                        </table>    
                    ";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>