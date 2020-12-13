<?php 
  $edit=$mysqli->query("select*from buku where id='$_GET[id]'");
  $e=mysqli_fetch_array($edit);
 ?>

 <form name="form_buku" action="index.php?page=update"method="post" enctype="multipart/form-data">
  
   <div class="form-group">
    <label form="nama_buku">nama buku</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="nama_buku" placeholder="nama_buku" name="nama_buku" required value="<?php echo $e['nama_buku'];?>">
   </div>

   <div class="form-group">
    <label form="kode_buku">kode buku</label>
    <input type="text" class="form-control" id="kode_buku" placeholder="kode_buku" name="kode_buku" required value="<?php echo $e['kode_buku'];?>">
   </div>

   <div class="form-group">
    <label form="judul_buku">judul buku</label>
    <input type="text" class="form-control" id="judul_buku" placeholder="judul_buku" name="judul_buku" required value="<?php echo $e['judul_buku'];?>">
   </div>

   <div class="form-group">
    <label form="penerbit">penerbit</label>
    <input type="text" class="form-control" id="penerbit" placeholder="penerbit" name="penerbit" required value="<?php echo $e['penerbit'];?>">
   </div>


   <div class="form-group">
    <label form="jenis_buku">jenis buku</label>
   <select name="jenis_buku" class="form-control" id="jenis_buku" required>
     <option value="<?php echo $e['jenis_buku'];?>"><?php echo $e['jenis_buku'];?></option>
     <option value="Sistem Informasi">Sistem Informasi</option>
     <option value="Teknik informatika">Teknik informatika</option>
     <option value="Teknik komputer">Teknik komputer</option>
     <option value="Sistem Informasi akuntansi">Sistem Informasi akuntansi</option>
    ></select>
   </div>

   <div class="form-group">
    <label form="referensi">Referensi</label>
    <textarea class="form-control" id="referensi" placeholder="referensi" name="referensi" required><?php echo $e['referensi'];?></textarea>
   </div>

   <div class="form-group">
    <label form="gambar">gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar"><span><?php echo $e['gambar'];?></span>
   </div>

   <div class="form-group">
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">update</button>
   </div>
 </form>