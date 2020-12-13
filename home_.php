<!--
Author : Elin Panca Saputra
Title : Crud Php Mysql Dilengkapi dengan upload gambar dan ckeditor
-->
<?php
session_start();
error_reporting(0);
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <title>BELAJAR CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<?php
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
echo "<center><br><br><br><br><br><br><br><div><img src='images/peringatan.png'  height=180 width=200></div>";
   echo "<center>Untuk mengakses <b>Administrator Perpus</b><br>
  <center>Anda harus <b>Login</b> terlebih dahulu!<br><br>";
  echo "<meta http-equiv='Refresh' content='4; URL=index.php'>";
}
else{
?>
  </head>
  <body>

    <div id="wrapper">

      <nav class="navbar navbar-light bg-faded">
      <a class="navbar-brand" href="pancasaputra.worddpress.com">WEB PROGRAMMING 1</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php?page=add">Tambah Data</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
      </nav>

      <div class="container box">
       <?php include "pages.php";?>
      </div>

    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace( 'alamat',{height: 300});
    </script>
  </body>
</html>
<?php
}
?>