<table class="table table-striped">
	<thead>
		<tr>
		  <th>#</th>
		  <th>NIM</th>
		  <th>Nama Mahasiswa</th>
		  <th>Jurusan</th>
		  <th>Alamat</th>
		  <th>Foto</th>
		  <th>Action</th>	
		</tr>
	</thead>
   <tbody>


	<?php 
	  $no = 0;
	  $mahasiswa=$mysqli->query("SELECT * FROM mahasiswa");
	  while($m=mysqli_fetch_array($mahasiswa)){
	  $no++;
	 ?>

	 <?php 
	 	include"paging.php";
	 	$p   = new paging_mahasiswa;
	 	$batas =5;
	 	$posisi = $p->cariPosisi($batas);
	 	$mahasiswa=$mysqli->query("SELECT * FROM mahasiswa ORDER BY id DESC LIMIT $posisi,$batas");
	 	$no=0;
	 	while ($m=mysqli_fetch_array($mahasiswa)) {
	 	$no++;
	  ?>

	   <tr>
	   	<th scope="row"><?php echo $no;?></th>
	   	<td><?php echo $m['nim']; ?></td>
	   	<td><?php echo $m['nama']; ?></td>
	   	<td><?php echo $m['jurusan']; ?></td>
	   	<td><?php echo $m['alamat']; ?></td>
	   	<td><img src="images/<?php echo $m['gambar'];?>" height="50"></td>
	   	<td>
	   	   <button type="button" class="btn btn-dark"><a href="index_mahasiswa.php?page=edit&id=<?php echo $m['id'];?>">edit<i class="fa fa-pencil"></i></a></button>
	   	   <button type="button" class="btn btn-danger"><a href="index_mahasiswa.php?page=delete&id=<?php echo $m['id'];?>"onclick="return confirm('anda yakin mau menghapus data ini ?')">Hapus<i class="fa fa-trash-o"></i></button>
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
 			$jmldata        = mysqli_num_rows($mysqli->query("SELECT * FROM mahasiswa"));
 			if($jmldata > 0){
 			$jmlhalaman     = $p->jumlahHalaman($jmldata, $batas);
 			$linkHalaman    = $p->navHalaman($_GET['home'], $jmlhalaman);
 			echo " <li class='page-item'> $linkHalaman </li>";}
		 ?>

 		</ul>
 	</nav>
 </div>

