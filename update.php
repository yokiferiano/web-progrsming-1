<?php 
  $gambar  = $_FILES['gambar']['name'];
  //apabila gambar tidak diganti
  if (empty($gambar)){
  	$mysqli->query("UPDATE mahasiswa SET 
      nim    = '$_POST[nim]',
  		nama     =  '$_POST[nama]',
  		jurusan  =  '$_POST[jurusan]',
  		alamata  =  '$_POST[alamat]',
  	WHERE id = '$_POST[id]'");
  }else{
  	$hapus= $mysqli->query("select*from mahasiswa where id='$_POST[id]'");
  	//menghapus gambar yang lama
  	$nama_gambar=mysqli_fetch_array($hapus);
  	// nama field gambar
  	$lokasi=$nama_gambar['gambar'];
  	// alamat tempat foto
  	$hapus_gambar="image/$lokasi";
  	// script untuk menghapus gambar dari folder
  	unlink($hapus_gambar);
  	move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
  	$mysqli->query("UPDATE mahasiswa SET 
              nim     = '$_POST[nim]',
  						nama     =  '$_POST[nama]',
  		  				jurusan  =  '$_POST[jurusan]',
  						alamat  =  '$_POST[alamat]',
  						gambar     =  '$gambar'
  					WHERE id = '$_POST[id]'");
 }
 header('location:index_mahasiswa.php');
?>