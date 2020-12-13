<?php 
  $edit=$mysqli->query("select*from mahasiswa where id='$_GET[id]'");
  $e=mysqli_fetch_array($edit);
 ?>

 <form name="form_mahasiswa" action="index_mahasiswa.php?page=update"method="post" enctype="multipart/form-data">
 	
   <div class="form-group">
   	<label form="nim">NIM</label>
   	<input type="hidden" name="id" value="<?php echo $e['id'];?>">
   	<input type="text" class="form-control" id="nim" placeholder="input nim" name="nim" required value="<?php echo $e['nim'];?>">
   </div>

   <div class="form-group">
   	<label form="nama">Nama</label>
   	<input type="text" class="form-control" id="nama" placeholder="input nama" name="nama" required value="<?php echo $e['nama'];?>">
   </div>

   <div class="form-group">
   	<label form="jurusan">Pilih Jurusan</label>
   <select name="jurusan" class="form-control" id="jurusan" required>
     <option value="<?php echo $e['jurusan'];?>"><?php echo $e['jurusan'];?></option>
     <option value="sistem informasi">Sistem Informasi</option>
     <option value="Teknik informatika">Teknik informatika</option>
     <option value="Teknik komputer">Teknik komputer</option>
     <option value="Sistem Informasi Akuntansi">Sistem Informasi akuntansi</option>
   	></select>
   </div>

   <div class="form-group">
   	<label form="alamat">Alamat</label>
   	<textarea class="form-control" id="alamat" placeholder="input alamat" name="alamat" required><?php echo $e['alamat'];?></textarea>
   </div>

   <div class="form-group">
   	<label form="gambar">input Foto</label>
   	<input type="file" class="form-control" id="gambar" name="gambar"><span><?php echo $e['gambar'];?></span>
   </div>

   <div class="form-group">
   	<button type="reset" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)"; class="btn btn-danger">Reset</button>
   	<button type="submit" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)"; class="btn btn-primary">update</button>
   </div>
 </form>