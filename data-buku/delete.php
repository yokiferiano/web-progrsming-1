<?php 
	$hapus=$mysqli->query("select*from buku where id='$_GET[Id]'");
	// memilih gambar untuk dihapus
	$nama_gambar=mysqli_fetch_array($hapus);
	//nama field gambar
	$lokasi=$nama_gambar['gambar'];
	//alamat tempat gambar
	$hapus_gambar="images/$lokasi";
	// script delete gambar dari folder
	unlink($hapus_gambar);
	$mysqli->query("DELETE FROM buku WHERE id='$_GET[id]'");
	header('location:index.php');
?>

