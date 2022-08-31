<?php
include "koneksi.php";

if (isset($_POST['bsimpan'])) {
    $simpan = mysqli_query($koneksi, "INSERT INTO tmhs(Tempat_KP, Alamat_KP, Tanggal_mulai, Tanggal_selesai, Proposal, Anggota_kelompok_Id, Dosen_Id, Perusahaan_id)
                                      VALUES ('$_POST[ttempat]',
                                              '$_POST[talamat]',
                                              '$_POST[ttanggalmulai]',
                                              '$_POST[ttanggalselesai]',
                                              '$_POST[tproposal]',
                                              '$_POST[tanggotakelompokid]',
                                              '$_POST[tdosenid]',
                                              '$_POST[tperusahaanid]') ");

if ($simpan){
    echo "<script>
        alert('Simpan Data Sukses!');
        document.location='putri.php';
    </script>";
    }else{
        echo "<script>
        alert('Simpan Data Gagal!');
        document.location='putri.php';
    </script>";
    }
}

if (isset($_POST['bubah'])) {
    $ubah = mysqli_query($koneksi, "UPDATE tmhs SET 
                                                Tempat_KP = '$_POST[ttempat]',
                                                Alamat_KP = '$_POST[talamat]',
                                                Tanggal_mulai = '$_POST[ttanggalmulai]',
                                                Tanggal_selesai = '$_POST[ttanggalselesai]',
                                                Proposal = '$_POST[tproposal]',
                                                Anggota_kelompok_Id = '$_POST[tanggotakelompokid]',
                                                Dosen_Id = '$_POST[tdosenid]',
                                                Perusahaan_Id = '$_POST[tperusahaanid]'
                                            WHERE Id = '$_POST[Id]'
                                                  ");

if ($ubah){
    echo "<script>
        alert('Ubah Data Sukses!');
        document.location='putri.php';
    </script>";
    }else{
        echo "<script>
        alert('Ubah Data Gagal!');
        document.location='putri.php';
    </script>";
    }
}

if (isset($_POST['bhapus'])) {
    $hapus = mysqli_query($koneksi, "DELETE FROM tmhs WHERE Id = '$_POST[Id]'");

if ($hapus){
    echo "<script>
        alert('Hapus Data Sukses!');
        document.location='putri.php';
    </script>";
    }else{
        echo "<script>
        alert('Hapus Data Gagal!');
        document.location='putri.php';
    </script>";
    }
}



?>