<!doctype html>
<html lang="en">
  <head>
    <!--  Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!---Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
 
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
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	
</head>

<body>

	<div id="wrapper"> 

	  <nav class="navbar navbar-light" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)">
	  	<a class="navbar-brand" style="background-color: transparent" href="">WEB PROGRAMMING 1</a>
	  	<ul class="nav navbar-nav" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)">
	  	<div class="alert alert-success"style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)"; role="alert" >
	  	   <li class="nav-item active">
	  	  	<a class="nav-link" href ="../home.php"><button type="button" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)"; class="btn btn-danger">Home</button><span class="sr-only"></span></a>
	  	  </li>
	  	   <li class="nav-item">
	  	   	<a class="nav-link" href="index.php?page=add"><button type="button" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)"; class="btn btn-danger">tambah data</button></a>
	  	   </li>
	   </ul>
	  </nav> 
	  <p>DATA BUKU</p>
	  <div class="container box">
	  	<?php include "pages.php";?>
	  </div>

	</div>

	<!-- jquery first, then tether, then bootsrap js. -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace( 'alamat',{height: 300} ); 

	
	</script>
 </body>
</html>


	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
 