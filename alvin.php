<?php

//panggil konek database
include "koneksi.php";

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>crud php mysql</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="mt-3">
      <h3 class="text-center">Mahasiswa POLIWANGI</h3>
    </div>
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">
        table unggahan
      </div>
      <div class="card-body">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#ModalTambah">
          Tambah Data
        </button>

        <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>No.</th>
            <th>Surat_izin</th>
            <th>Jadwal Ujian</th>
             <th>Aksi</th>
            </tr->

            <?php
            //persiapan menampilkan data
            $No = 1;
            $tampil = mysqli_query($konek, "SELECT * FROM tmhs ORDER BY id DESC");
            while ($data = mysqli_fetch_array($tampil)) :
            ?>
          <tr>
            <td> <?= $No++ ?> </td>
            <td><?= $data['surat_izin'] ?></td>
            <td><?= $data['jadwal_ujian'] ?></td>
            <td>
              <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalUbah<?= $No ?>">Ubah</a>
              <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapus<?= $No ?>">Hapus</a>
            </td>
          </tr>
          <!--Awal Modal ubah -->
          <div class=" modal fade" id="ModalUbah<?= $No ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Ubah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="crud_alvin.php">
                  <input type="hidden" name="id" value="<?= $data['id'] ?>">
                  <div class="modal-body">

                    <div class="mb-3">
                       <label class="form-label">Surat_izin</label>
                      <input type="file" class="form-control" name="tsurat_izin" value="<?= $data["surat_izin"] ?>" placeholder="Masukkan File!">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Jadwal Ujian</label>
                      <input type="file" class="form-control" name="tjadwal_ujian" value="<?= $data["jadwal_ujian"] ?>" placeholder="Masukkan File!">
                    </div>

                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="bubah">Ubah</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!--Akhir Modal ubah -->

          <!--Awal Modal hapus -->
          <div class="modal fade" id="ModalHapus<?= $No ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="crud_alvin.php">
                  <input type="hidden" name="id" value="<?= $data['id'] ?>">
                  <div class="modal-body">

                    <h5 class="text-center">Apakah anda yakin ingin menghapus data ini? <br>
                      <span class="text-danger"><?=$data['surat_izin'] ?></span>
                    </h5>

                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="bhapus">Hapus</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!--Akhir Modal hapus -->



        <?php endwhile; ?>
        </table>



        <!--Awal Modal tambah data-->
        <div class="modal fade" id="ModalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="POST" action="crud_alvin.php">
                <div class="modal-body">

                  <div class="mb-3">
                    <label class="form-label">Surat_izin</label>
                    <input type="file" class="form-control" name="tsurat_izin">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Jadwal Ujian</label>
                    <input type="file" class="form-control" name="tjadwal_ujian"> 
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--Akhir Modal -->



      </div>
    </div>
  </div class>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>