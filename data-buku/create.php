<?php

$nama_buku = $_POST['nama_buku'];
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$penerbit = $_POST['penerbit'];
$jenis_buku = $_POST['jenis_buku'];
$Referensi = $_POST['referensi_buku'];
$gambar2 = $_FILES['gambar']['name'];
$uniquesavename=time().uniqid(rand());
$gambar = $uniquesavename.$gambar2;
$mysqli->query ("INSERT INTO buku(nama_buku , kode_buku , judul_buku , penerbit, jenis_buku, referensi, gambar ) VALUES('$nama_buku' , '$kode_buku' , '$judul_buku' , '$penerbit' , '$jenis_buku' , '$Referensi' , '$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
header('location:index.php');
?>
