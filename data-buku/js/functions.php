 
 <?php 

 $conn = mysqli_connect('localhost', 'root', '', 'perpus2');
 if (!$conn) {
 	die ('gagal terhubung mysqli: ' . mysqli_connect_error());
 }

function query($query) {
	global $conn;
	$result =mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $rows;

	}
	return $rows;
}

 ?>