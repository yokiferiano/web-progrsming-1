</form>
 <form name="form_mahasiswa" action="index_mahasiswa.php?page=create" method="post" enctype="multipart/form-data">

 <div class="container bg-info" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)"; style="padding-top: 20px; padding-bottom: 20px;">
  <h3>Crud Mahasiswa</h3>
  <div class="" role="alert">
          <a class="nav-link" href ="index_mahasiswa.php"><button type="button" class="btn btn-danger" style="padding-top: 20px; padding-bottom: 20px;";>kembali  </button><span class="sr-only">(current)text-center</span></a>
  </div>
  <hr>
  <div class="row"style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)";>
   <div class="col-sm-10" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)"; >
    <h3>Form Tambah Mahasiswa</h3>
    <form role="form" action="insert.php" method="post">
      <div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" class="form-control" id="nim" placeholder="nomor induk mahasiswa" name="nim" required>
  </div>

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="input nama" name="nama" required>
  </div>  



  <div class="form-group">
    <label for="jurusan">Pilih Jurusan</label>
    <select class="form-control" id="jurusan"  name="jurusan" required>
     <option value="">None</option>
     <option value="sistem informasi">sistem informasi</option>
     <option value="Teknik informatika">teknik informatika</option>
     <option value="Teknik komputer">Teknik komputer</option>
     <option value="sistem informasi Akuntansi">sistem informasi Akuntansi</option>
    </select>
   </div>

  <div class="form-group">
    <label for="alamat">Alamat</label> 
    <input type="text" class="form-control" id="alamat" placeholder="input Alamat" name="alamat" required> 
  </div> 
   <div class="form-group">
      <label for="gambar">input Foto</label> 
      <input type="file" class="form-control" id="gambar" name="gambar" required>
   </div> 
     <div class="form-group">
      <button type="reset" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)"; class="btn btn-danger">reset</button>
      <button type="submit" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)"; class="btn btn-danger">simpan</button>
      </div>  
</form>
