<?php
include "koneksi.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PENDAFTARAN_KP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h3 class="text-center">DATA PENDAFTARAN KP</h3>

        <div class="card mt-3">
         <div class="card-header bg-primary text-white">
            Data Pendaftar KP
         </div>
         <div class="card-body">
             <!-- Button trigger modal -->
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                Tambah Data
            </button>
             
                <table class="table table-bordered table-striped table-hover">
                     <tr>
                        <th>No.</th>
                        <th>Tempat KP</th>
                        <th>Alamat KP</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Proposal</th>
                        <th>Anggota Kelompok Id</th>
                        <th>Dosen Id</th>
                        <th>Perusahaan Id</th>
                        <th colspan="5">Aksi</th>
                    
                    </tr>

                    <?php
                    $no = 1;
                    $tampil = mysqli_query($konek, "SELECT * FROM tmhs ORDER BY Id DESC");
                    while($data = mysqli_fetch_array($tampil)) :
                    
                    ?>
                    <tr>
                    <td><?=$no++;?></td>
                    <td><?=$data['Tempat_KP']?></td>
                    <td><?=$data['Alamat_KP']?></td>
                    <td><?=$data['Tanggal_mulai']?></td>
                    <td><?=$data['Tanggal_selesai']?></td>
                    <td><?=$data['Proposal']?></td>
                    <td><?=$data['Anggota_kelompok_Id']?></td>
                    <td><?=$data['Dosen_Id']?></td>
                    <td><?=$data['Perusahaan_Id']?></td>
                    <td>
                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>">Ubah</a>
                        <a href="#" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>">Hapus</a>
                    </td>
                </tr>
                <!-- Modal Ubah-->
                <div class="modal fade modal-lg" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Form Pendaftaran KP</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="aksi_putri.php">
                        <input type="hidden" name="Id" value="<?=$data['Id'] ?>">

                        <div class="modal-body">
                    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tempat KP</label>
                            <input type="text" class="form-control" name="ttempat" value="<?= $data['Tempat_KP'] ?>"placeholder="Masukan Tempat KP Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Alamat KP</label>
                            <input type="text" class="form-control" name="talamat" value="<?=$data['Alamat_KP'] ?>"placeholder="Masukan Alamat KP Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal mulai</label>
                            <input type="date" class="form-control" name="ttanggalmulai" value="<?=$data['Tanggal_mulai'] ?>"placeholder="Masukan Tanggal Mulai Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal selesai</label>
                            <input type="date" class="form-control" name="ttanggalselesai" value="<?= $data['Tanggal_selesai'] ?>"placeholder="Masukan Tanggal Selesai Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Proposal</label>
                            <input type="file" class="form-control" name="tproposal" value="<?= $data['Proposal'] ?>"  placeholder="Masukan Proposal Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Anggota kelompok Id</label>
                            <input type="text" class="form-control" name="tanggotakelompokid" value="<?= $data['Anggota_kelompok_Id'] ?>"placeholder="Masukan Anggota Kelompok Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Dosen_Id</label>
                            <input type="text" class="form-control" name="tdosenid" value="<?= $data['Dosen_Id'] ?>"placeholder="Masukan Nama Dosen Id Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Perusahaan_Id</label>
                            <input type="text" class="form-control" name="tperusahaanid" value="<?= $data['Perusahaan_Id'] ?>" placeholder="Masukan Perusahaan Id Anda!">
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
                

                <!-- Awal Modal Hapus -->
                <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                       <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <form method="POST" action="aksi_putri.php">
                         <input type="hidden" name="Id" value="<?=$data['Id'] ?>">

                        <div class="modal-body">
                    
                        <h5 class="text-center">Apakah anda yakin akan menghapus data ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="bhapus">Ya, Hapus aja!</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
                <?php endwhile; ?>
             </table>

            <!--  Awal Modal Tambah-->
            <div class="modal fade modal-lg" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Form Pendaftaran KP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="aksi_putri.php">
                <div class="modal-body">
                    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tempat_KP</label>
                            <input type="text" class="form-control" name="ttempat" placeholder="Masukan Tempat KP Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Alamat_KP</label>
                            <input type="text" class="form-control" name="talamat" placeholder="Masukan Alamat KP Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal_mulai</label>
                            <input type="date" class="form-control" name="ttanggalmulai" placeholder="Masukan Tanggal Mulai Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal_selesai</label>
                            <input type="date" class="form-control" name="ttanggalselesai" placeholder="Masukan Tanggal Selesai Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Proposal</label>
                            <input type="file" class="form-control" name="tproposal">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Anggota_kelompok_Id</label>
                            <input type="text" class="form-control" name="tanggotakelompokid" placeholder="Masukan Anggota Kelompok Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Dosen_Id</label>
                            <input type="text" class="form-control" name="tdosenid" placeholder="Masukan Nama Dosen Id Anda!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Perusahaan_Id</label>
                            <input type="text" class="form-control" name="tperusahaanid" placeholder="Masukan Perusahaan Id Anda!">
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

        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>