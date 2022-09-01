<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>codinganku</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-POLIWANGI <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="halaman_admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            

           
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

           

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="mahasiswa1.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Mahasiswa</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="nilai.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Nilai Mahasiswa</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                  

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Kelempok 03</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
                    

                    <?php

//panggil konek database
require "koneksi1.php";


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
      <h3 class="text-center">Mahasiswa</h3>
    </div>
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">
        Data Mahasiswa
      </div>
      <div class="card-body">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#ModalTambah">
          Tambah Data
        </button>

        <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Nim</th>
            <th>Kelas</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
            </tr->

            <?php
            //persiapan menampilkan data
            $No = 1;
            $tampil = mysqli_query($konek, "SELECT * FROM mahasiswa ORDER BY id DESC");
            while ($data = mysqli_fetch_array($tampil)) :
            ?>
          <tr>
            <td> <?= $No++ ?> </td>
            <td><?= $data['Nama_Mahasiswa'] ?></td>
            <td><?= $data['Nim'] ?></td>
            <td><?= $data['Kelas'] ?></td>
            <td><?= $data['Email'] ?></td>
            <td><?= $data['Alamat'] ?></td>
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
                  <h5 class="modal-title" id="staticBackdropLabel">Ubah Data Mahasiswa</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="aksi_crud.php">
                  <input type="hidden" name="id" value="<?= $data['id'] ?>">
                  <div class="modal-body">

                    <div class="mb-3">
                      <label class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" name="tnami" value="<?= $data["Nama_Mahasiswa"] ?>" placeholder="Masukkan Nama Lengkap Anda!">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Nim</label>
                      <input type="text" class="form-control" name="tnimu" value="<?= $data["Nim"] ?>" placeholder="Masukkan Nim Anda!">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Kelas</label>
                      <input type="text" class="form-control" name="tkelase" value="<?= $data["Kelas"] ?>">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="temaile" value="<?= $data["Email"] ?>">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Alamat</label>
                      <textarea class="form-control" name="talamate" rows="3"><?= $data["Alamat"] ?></textarea>
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
                <form method="POST" action="aksi_crud.php">
                  <input type="hidden" name="id" value="<?= $data['id'] ?>">
                  <div class="modal-body">

                    <h5 class="text-center">Apakah anda yakin ingin menghapus data ini? <br>
                      <span class="text-danger"><?= $data['Nim'] ?> - <?= $data['Nama_Mahasiswa'] ?></span>
                    </h5>

                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="bhapus">Oke! Hapus</button>
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
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="POST" action="aksi_crud.php">
                <div class="modal-body">

                  <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="tnama" placeholder="Masukkan Nama Lengkap Anda!">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Nim</label>
                    <input type="text" class="form-control" name="tnim" placeholder="Masukkan Nim Anda!">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" class="form-control" name="tkelas">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="temail">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" name="talamat" rows="3"></textarea>
                  </div>

                  ...
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
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; ECAMPUS | Politeknik Negeri Banyuwangi</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>




