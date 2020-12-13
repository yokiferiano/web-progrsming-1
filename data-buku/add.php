</form>
 <form name="form_buku" action="index.php?page=create" method="post" enctype="multipart/form-data">

 <div class="container bg-info" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)"; style="padding-top: 20px; padding-bottom: 20px;">
  <h3>Crud Buku</h3>
  <div class="" role="alert">
          <a class="nav-link" href ="index.php"><button type="button" class="btn btn-danger" style="padding-top: 20px; padding-bottom: 20px;";>kembali  </button><span class="sr-only">(current)text-center</span></a>
  </div>
  <hr>
  <div class="row"style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)";>
   <div class="col-sm-6" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)"; >
    <h3>Form Tambah Buku</h3>
    <form role="form" action="insert.php" method="post">
      <div class="form-group">
    <label for="nama_buku">nama buku</label>
    <input type="text" class="form-control" id="nama_buku" placeholder="input nama_buku" name="nama_buku" required>
  </div>

  <div class="form-group">
    <label for="kode_buku">kode buku</label>
    <input type="text" class="form-control" id="kode_buku" placeholder="input kode_buku" name="kode_buku" required>
  </div>  

  <div class="form-group">
    <label for="judul_buku">judul buku</label>
    <input type="text" class="form-control" id="judul_buku" placeholder="input judul_buku" name="judul_buku" required>
  </div>  

  <div class="form-group">
    <label for="penerbit">penerbit</label>
    <input type="text" class="form-control" id="penerbit" placeholder="input penerbit" name="penerbit" required>
  </div>  



  <div class="form-group">
    <label for="jenis_buku">jenis buku</label>
    <select class="form-control" id="jenis_buku"  name="jenis_buku" required>
     <option value="">None</option>
     <option value="sistem informasi">sistem informasi</option>
     <option value="Teknik informatika">teknik informatika</option>
     <option value="Teknik komputer">Teknik komputer</option>
     <option value="sistem informasi Akuntansi">sistem informasi Akuntansi</option>
    </select>
   </div>

  <div class="form-group">
    <label for="referensi">referensi</label> 
    <input type="text" class="form-control" id="referensi" placeholder="input referensi" name="referensi_buku" required> 
  </div> 
   <div class="form-group">
      <label for="gambar">input Foto</label> 
      <input type="file" class="form-control" id="gambar" name="gambar" required>
   </div> 
     <div class="form-group">
      <button type="reset" class="btn btn-danger">reset</button>
      <button type="submit" class="btn btn-danger">simpan</button>
      </div>  
</form>

