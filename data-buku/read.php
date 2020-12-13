<table class="table table-striped">
	<thead>
		<tr>
		  <th>#</th>
		  <th>Nama Buku</th>
		  <th>Kode Buku</th>
		  <th>Judul Buku</th>
		  <th>Penerbit</th>
		  <th>jenis buku</th>
		  <th>referensi</th>
		  <th>Foto</th>
		  <th>Action</th>	
		</tr>
	</thead>
   <tbody>


	<?php 
	  $no = 0;
	  $buku=$mysqli->query("SELECT * FROM buku");
	  while($m=mysqli_fetch_array($buku)){
	  $no++;
	 ?>

	 <?php 
	 	include"paging.php";
	 	$p   = new paging_mahasiswa;
	 	$batas =5;
	 	$posisi = $p->cariPosisi($batas);
	 	$buku=$mysqli->query("SELECT * FROM buku ORDER BY id DESC LIMIT $posisi,$batas");
	 	$no=0;
	 	while ($m=mysqli_fetch_array($buku)) {
	 	$no++;
	  ?>

	   <tr>
	   	<th scope="row"><?php echo $no;?></th>
	   	<td><?php echo $m['nama_buku']; ?></td>
	   	<td><?php echo $m['kode_buku']; ?></td>
	   	<td><?php echo $m['judul_buku']; ?></td>
	   	<td><?php echo $m['penerbit']; ?></td>
	   	<td><?php echo $m['jenis_buku']; ?></td>
	   	<td><?php echo $m['referensi']; ?></td>
	   	<td><img src="images/<?php echo $m['gambar'];?>" height="50"></td>
	   	<td>
	   	   <button type="button" class="btn btn-dark"><a href="index.php?page=edit&id=<?php echo $m['id'];?>">edit<i class="fa fa-pencil"></i></a></button>
	   	   <button type="button" class="btn btn-danger"><a href="index.php?page=delete&id=<?php echo $m['id'];?>"onclick="return confirm('anda yakin mau menghapus data ini ?')">Hapus<i class="fa fa-trash-o"></i></button>
	   	</td>
	   </tr>
		<?php } ?>

	</tbody>
  </table>

 <div class="halaman">
 	<nav arial-table="...">
 		<ul class="pagination">

 		<?php } ?>
 		<?php 
 			$jmldata        = mysqli_num_rows($mysqli->query("SELECT * FROM buku"));
 			if($jmldata > 0){
 			$jmlhalaman     = $p->jumlahHalaman($jmldata, $batas);
 			$linkHalaman    = $p->navHalaman($_GET['home'], $jmlhalaman);
 			echo " <li class='page-item'> $linkHalaman </li>";}
		 ?>
		</ul>
 	</nav>
 </div>

