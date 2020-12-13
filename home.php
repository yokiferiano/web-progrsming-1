<?php
session_start();
error_reporting(0);
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!--  Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!---Bootstrap CSS -->
     <!---<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="style.css">-->
	<!--Requered meta tags always come first -->
	<title>BELAJAR CRUD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<!-- bootstrap css -->
	<!---Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet"  href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
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

<div class="jumbotron jumbotron-fluid"style="background-image:url(image/heading.jpg";> 
		  <div class="container">
		  	<img src="image/logo.jpg" width="160" class="rounded-circle" align="left";>
		    <h1 class="display-4" style="color:#fff;" >Yoki Feriano</h1>
		    <p class="lead" style="color:#fff;"; text-align="left">WEB PROGRAMMING 1</h3>
		    <p style="color:#fff; text-align=left">theyokiferiano.wordpress.com</p>
		  </div>
		</div> 

<body>
	<div id="wrapper">
	  	<ul class="nav navbar-nav">
	  		<a class="navbar-brand" href="" style="background-color: transparent;";>WEB PROGRAMMING 1</a> 
	  	<div class="alert alert-success"  style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)";role="alert">
	  	  
	  	   <li class="nav-item">
	  	  	<a class="nav-link" href ="data-buku/index.php"><button type="button" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)" class="btn btn-danger">tabel buku</button><span class="sr-only">(current)</span></a>
	  	  </li>

	  	  <li class="nav-item">
	  	  	<a class="nav-link" href ="index_mahasiswa.php"><button type="button" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)" class="btn btn-danger">tabel mahasiswa</button><span class="sr-only">(current)</span></a>
	  	   </li>

	  	   <li class="nav-item">
	  	   	<a class="nav-link" href="logout.php"><button type="button" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)" class="btn btn-danger">Logout</button></a>
	  	   </li>
</nav>
	   </ul>
	  </nav>


	  <div class="container">
  <div class="row">
    <div class="col-sm1">
    	<div class="card right" style="width: 45rem" align="left";>
    	<a target="_blank" style= align="left" href="https://id.wikipedia.org/wiki/Mahasiswa" ><h3>Mahasiswa - Wikipedia bahasa Indonesia, ensiklopedia bebas</h3>.</p>
       
    	<P>
Mahasiswa adalah sebutan bagi orang yang sedang menempuh pendidikan tinggi di sebuah perguruan tinggi yang terdiri dari sekolah tinggi, akademi, dan yang paling umum adalah Universitas. Hingga saat ini, mahasiswa di berbagai negara mengambil peran penting dalam sejarah suatu negara. yang terjadi di Indonesia , misalnya yang saling bersamgkutan ..<p>
    	<p>
    		<a target="_blank" style= align="left" href="https://www.duniailkom.com/ingin-belajar-web-programming-harus-mulai-dari-mana/"><h3>Belajar Web Programming, Harus Mulai Dari Mana? | Duniailkom</h3>.</p>
    			
    	<P>
Jika anda berniat mempelajari web programming sebagai ‘hobi’ atau sekedar mengisi waktu luang, memahami kelima bahasa pemrograman web diatas dirasa sudah cukup. Tapi bagi anda yang berniat serius terjun ke dunia web programming, atau bahkan ingin memiliki karir sebagai web programmer , ini baru sebagai “ gerbang awal ”..<p>
    	<p>
	  </div>
    </div>
  
    <div class="col-sm2">
    	<div class="card right" style="width: 18rem" align="left";>
    	<img src="image/pp.jpg" class="card-img" width="150" align="left">
            <h2>Link Belajar Gratis</h2>
			<p>Teman-teman dapat gabung pada forum di bawah ini <br>
						<a target="_blank" href="https://www.phpindonesia.id/"> *PHP Indonesia</a>.</p>
						<a target="_blank" href="https://theyokiferiano.wordpress.com"> *blog pribadi</a>.</p>
						<p> instagram yoki feriano <br>
    </div>
  </div>
</div


	</div>

	<!-- jquery first, then tether, then bootsrap js. -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace( 'alamat',{height: 300} ); 

	</script>


	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
  </body>
</html>
<?php
}
?>