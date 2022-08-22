<?php
  //koneksi Database
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "pendaftar_kp";

  $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Pendaftaran</title>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Form Pendaftaran Mahasiswa KP</h1>
    <form method="post">
 <!-- Awal Card Form -->
      <div class="card" mt-3>
        <div class="card-header bg-primary text-white ">
          Form Input Data Mahasiswa
      </div>
      <div class="card-body">
        <form method="post" action="">
          <div class="form-group">
            <label>Id</label>
            <input type="text" name="tid" class="form-control" placeholder="Input Id Anda disini!" required>
          </div>
          <div class="form-group">
            <label>Tempat KP</label>
            <input type="text" name="ttempat kp" class="form-control" placeholder="Input Tempat KP Anda disini!" required>
          </div>
          <div class="form-group">
            <label>Alamat KP</label>
            <input type="text" name="talamat kp" class="form-control" placeholder="Input Alamat KP Anda disini!" required>
          </div>
          <div class="form-group">
            <label>Tanggal Mulai</label>
            <input type="text" name="ttanggal mulai" class="form-control" placeholder="Input Tanggal Mulai Anda disini!" required>
          </div>
          <div class="form-group">
            <label>Tanggal Selesai</label>
            <input type="text" name="ttanggal selesai" class="form-control" placeholder="Input Tanggal Selesai Anda disini!" required>
          </div>
          <div class="form-group">
            <label>Proposal</label>
            <input type="text" name="tProposal" class="form-control" placeholder="Input Proposal Anda disini!" required>
          </div>
          <div class="form-group">
            <label>Anggota Kelompok Id</label>
            <input type="text" name="tanggota kelompok id" class="form-control" placeholder="Input Anggota Kelompok Anda disini!" required>
          </div>
          <div class="form-group">
            <label>Dosen Id</label>
            <input type="text" name="tdosen id" class="form-control" placeholder="Input Dosen Anda disini!" required>
          </div>
          <div class="form-group">
            <label>Perusahaan Id</label>
            <input type="text" name="tperusahan Id" class="form-control" placeholder="Input Perusahan Anda disini!" required>
          </div>

          <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
          <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
        </form>
      </div>
    </div>
  <!-- Akhir Card Form -->

   <!-- Awal Card Tabel-->
   <div class="card" mt-3>
        <div class="card-header bg-primary text-white ">
          Daftar Mahasiswa
      </div>
      <div class="card-body">
      
      <table class="table table-bordered table-striped">
        <tr>
          <th>Id</th>
          <th>Tempat KP</th>
          <th>Alamat KP</th>
          <th>Tanggal Mulai</th>
          <th>Tanggal Selesai</th>
          <th>Proposal</th>
          <th>Anggota Kelompok Id</th>
          <th>Dosen Id</th>
          <th>Perusahan Id</th>
          <th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $no = 1;
        $tampil = mysqli_query($koneksi, "SELECT * from datapendaftar_kp order by id_datapendaftar_kp desc");
        while($data = mysqli_fetch_array($tampil)) :
 

        ?>
        <tr>
          <td><?=$no++;?></td>
          <td><?=$data['Tempat_KP']?></td>
          <td><?$data['Alamat_KP']?></td>
          <td><?$data['Tanggal_mulai']?></td>
          <td><?$data['Tanggal_selesai']?></td>
          <td><?$data['Proposal']?></td>
          <td><?$data['Anggota_kelompok_Id']?></td>
          <td><?$data['Dosen_Id']?></td>
          <td><?$data['Perusahaan_Id']?></td>
          <td>
            <a href="#" Edit </a>
            <a href="#" Hapus </a>
          </td>
        </tr>
        <?php endwhile; ?>
      </table>

      </div>
    </div>
    <!-- Akhir Card Tabel -->

    
</div>
  </body>
</html>