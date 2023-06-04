<?php 
//cek apakh tidak ada data di $_GET
if( !isset($_GET["merek"]) ||
!isset($_GET["model"]) ||
!isset($_GET["tahun"])||
!isset($_GET["jenis"])||
!isset($_GET["gambar"])||
!isset($_GET["merek"])||
!isset($_GET["tipe"])||
!isset($_GET["tipe"])||
!isset($_GET["kapasitas"])||
!isset($_GET["tenaga"])||
!isset($_GET["torsi"])){
	//redirect
	header("location: latihan1.php");
exit;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Mobil</title>
</head>
<body>
 <ul>
    <li> <img src="img/<?= $_GET["gambar"]; ?> "height="400" width="400"></li>
 	<li> <?= $_GET["merek"]; ?></li>
 	<li> <?= $_GET["model"]; ?></li>
 	<li> <?= $_GET["tahun"]; ?></li>
 	<li> <?= $_GET["jenis"]; ?></li>
 	<li> <?= $_GET["tipe"]; ?></li>
 	<li> <?= $_GET["kapasitas"]; ?></li>
 	<li> <?= $_GET["tenaga"]; ?></li>
 	<li> <?= $_GET["torsi"]; ?></li>
 	</ul>
 <a href="latihan1.php">kembali ke datar mobil<a/>
</body>
</html>