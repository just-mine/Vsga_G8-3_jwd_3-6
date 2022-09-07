
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="" method="POST">
<table>
	<tr>
	<td>Nama</td>
	<td>:</td>
	<td><input type="text" name="nama"></input></td>
	</tr>	

	<tr>
	<td>Jumlah Jam Kerja</td>
	<td>:</td>
	<td><input type="text" name="jam"></input></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td><input type="submit"></input></td>
	</tr>
</table>
</form>


<?php 
$upahlmbr=3000;
$upah=2000;
$jjm=48;

if ($_POST) {
$nm=$_POST['nama'];
$jm=$_POST['jam'];

if ($jm>=$jjm) {
	$total=$jm*$upah;
	$jamlembur=$jm-$jjm;
	$lembur=$jamlembur*$upahlmbr;
}
else if ($jm<=$jjm) {
	$total=$jm*$upah;
	$lembur=0;
}
echo "Atas Nama = $nm<br>";
echo "total Gaji  = $total<br>";
echo "Total Gaji Lembur =$lembur<br>";
$ttlkeseluruhan=$total+$lembur;
echo "Total Gaji Keseluruhan nya Adalah = $ttlkeseluruhan";
}
 ?>
</body>
</html>