<?php
include "koneksi.php";
function antiinjection($data){
  global $mysqli;
  $filter_sql = mysqli_real_escape_string($mysqli,stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$username = antiinjection($_POST['username']);
$password = antiinjection($_POST['password']);


$login=mysqli_query($mysqli,"SELECT * FROM admin WHERE username='$username' AND password='$password' AND blokir='N'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
 // session_register("namauser");
  //session_register("namalengkap");
 // session_register("passuser");
  //session_register("leveluser");

  $_SESSION[namauser]     = $r[username];
  $_SESSION[namalengkap]  = $r[nama_lengkap];
  $_SESSION[passuser]     = $r[password];
  $_SESSION[leveluser]    = $r[level];
  
  header('location:home.php');
}
else{
    echo "<script>alert('Username Atau Password Anda Salah'); window.location = 'index.php'</script>";
}
?>