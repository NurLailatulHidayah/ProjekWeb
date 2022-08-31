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


    <!-- Awal Tabel Form -->
    <body>
        <div class="container">
          <div class="mt-3">
            <h3 class="text-center">Pendaftar Ujian KP</h3>
        </div>

       <div class="card mt-3">
          <div class="card-header bg-success text-white">
            Data Mahasiswa Pendaftar
          </div>
          <div class="card-body">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#ModalTambah">
              Daftar
            </button>

            <table class="table table-bordered table-striped table-hover">
              <tr>
              <th>No</th>
                <th>Tempat</th>
                <th>Alamat</th>
                <th>Tgl Mulai</th>
                <th>Tgl Selesai</th>
                <th>Proposal</th>
                <th>Kelompok</th>
                <th>Dosen</th>
                <th>Perusahaan</th>
                <th colspan="2">Aksi</th>
                
                </tr>

                <?php
                //persiapan menampilkan data
                $No = 1;
                $tampil = mysqli_query($konek, "SELECT * FROM tb_pendaftar ORDER BY Id DESC");
                while ($data = mysqli_fetch_array($tampil)) :
                ?>
              <tr>
                <td> <?= $No++ ?> </td>
                <td><?= $data['Tempat_KP'] ?></td>
                <td><?= $data['Alamat_KP'] ?></td>
                <td><?= $data['Tanggal_Mulai'] ?></td>
                <td><?= $data['Tanggal_Selesai'] ?></td>
                <td><?= $data['Proposal'] ?></td>
                <td><?= $data['Anggota_Kelompok'] ?></td>
                <td><?= $data['Dosen'] ?></td>
                <td><?= $data['Perusahaan'] ?></td>
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
                    <form method="POST" action="aksi.php">
                      <input type="hidden" name="Id" value="<?= $data['Id'] ?>">
                      <div class="modal-body">

                      <div class="mb-3">
                        <label class="form-label">Tempat</label>
                        <input type="text" class="form-control" name="tTempat_KP" value="<?= $data['Tempat_KP'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="tAlamat_KP" value="<?= $data['Alamat_KP'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Tgl Mulai</label>
                        <input type="date" class="form-control" name="tTanggal_Mulai" value="<?= $data['Tanggal_Mulai'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Tgl Selesai</label>
                        <input type="date" class="form-control" name="tTanggal_Selesai" value="<?= $data['Tanggal_Selesai'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Proposal</label>
                        <input type="file" class="form-control" name="tProposal" value="<?= $data['Proposal'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Kelompok</label>
                        <input type="text" class="form-control" name="tAnggota_Kelompok" value="<?= $data['Anggota_Kelompok'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Dosen</label>
                        <input type="text" class="form-control" name="tDosen" value="<?= $data['Dosen'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Perusahaan</label>
                        <input type="text" class="form-control" name="tPerusahaan" value="<?= $data['Perusahaan'] ?>"> 
                      </div>

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
                    <form method="POST" action="aksi.php">
                      <input type="hidden" name="id" value="<?= $data['Id'] ?>">
                      <div class="modal-body">

                        <h5 class="text-center">Apakah anda yakin ingin menghapus data ini? <br>
                          <span class="text-danger"><?= $data['Id'] ?></span>
                        </h5>

                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="bhapus">Ya</button>
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
                <form method="POST" action="aksi.php">
                  <div class="modal-body">

                    <div class="mb-3">
                      <label class="form-label">Tempat</label>
                      <input type="text" class="form-control" name="tTempat_KP"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="tAlamat_KP"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Tgl Mulai</label>
                      <input type="date" class="form-control" name="tTanggal_Mulai"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Tgl Selesai</label>
                      <input type="date" class="form-control" name="tTanggal_Selesai"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Proposal</label>
                      <input type="file" class="form-control" name="tProposal"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Kelompok</label>
                      <input type="text" class="form-control" name="tAnggota_Kelompok"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Dosen</label>
                      <input type="text" class="form-control" name="tDosen"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Perusahaan</label>
                      <input type="text" class="form-control" name="tPerusahaan"> 
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
    <!--Akhir Tabel Form -->

        </div>
      </div>
    </div class>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>

  </html>