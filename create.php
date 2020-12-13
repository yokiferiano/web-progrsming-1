<?php 
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$gambar2 = $_FILES['gambar']['name'];
$uniquesavename=time().uniqid(rand());
$gambar = $uniquesavename.$gambar2;
$mysqli->query("INSERT INTO mahasiswa(nim,nama,jurusan,alamat,gambar) VALUES ('$nim','$nama','$jurusan','$alamat','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
header('location:index_mahasiswa.php');
?>

