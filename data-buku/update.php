<?php 
  $gambar  = $_FILES['gambar']['name'];
  //apabila gambar tidak diganti
  if (empty($gambar)){
    $mysqli->query("UPDATE buku SET 
    nama_buku = '$_POST[nama_buku]',
    kode_buku = '$_POST[kode_buku]',
    judul_buku = '$_POST[judul_buku]',
    penerbit = '$_POST[penerbit]',
    jenis_buku = '$_POST[jenis_buku]',
    referensi = '$_POST[referensi]'
    WHERE id = '$_POST[id]'");
  }else{
    $hapus= $mysqli->query("select*from buku where id='$_POST[id]'");
    //menghapus gambar yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['gambar'];
    // alamat tempat foto
    $hapus_gambar="images/$lokasi";
    // script untuk menghapus gambar dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
    $mysqli->query("UPDATE buku SET 
            nama_buku = '$_POST[nama_buku]',
            kode_buku = '$_POST[kode_buku]',
            judul_buku = '$_POST[judul_buku]',
            penerbit = '$_POST[penerbit]',
            jenis_buku = '$_POST[jenis_buku]',
            referensi = '$_POST[referensi]',
            gambar = '$gambar'
            WHERE id = '$_POST[id]'");
 }
header('location:index.php');
?>