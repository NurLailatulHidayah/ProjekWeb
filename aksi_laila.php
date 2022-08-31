<?php
//panggil koneksi database
include "koneksi.php";

//uji coba tombol simpan
if (isset($_POST['bsimpan'])) {
    //persiapan simpan data baru
    $simpan = mysqli_query($konek, "INSERT INTO tb_pendaftar (Id,Tempat_KP,Alamat_KP,Tanggal_Mulai,
                                    Tanggal_Selesai,Proposal,Anggota_Kelompok,Dosen,Perusahaan)
                                    VALUES('$_POST[tId]',
                                            '$_POST[tTempat_KP]',
                                            '$_POST[tAlamat_KP]',
                                            '$_POST[tTanggal_Mulai]',
                                            '$_POST[tTanggal_Selesai]',
                                            '$_POST[tProposal]',
                                            '$_POST[tAnggota_Kelompok]',
                                            '$_POST[tDosen]',
                                            '$_POST[tPerusahaan]' )
                                            ");
    if ($simpan) {
        echo "<script>
                alert('Simpan data succes!');
                document.location='index.php';
                </script>";
    } else {
        echo "<script>
                alert('Simpan data Gagal!');
                document.location='index.php';
                </script>";
    }
}

//uji jika tombol ubah di klik
if(isset($_POST['bubah'])){

    //persiapan Ubah data 
    $ubah = mysqli_query($konek, "UPDATE tb_pendaftar SET
                                                    Tempat_KP = '$_POST[tTempat_KP]',
                                                    Alamat_KP = '$_POST[tAlamat_KP]',
                                                    Tanggal_Mulai = '$_POST[tTanggal_Mulai]',
                                                    Tanggal_Selesai = '$_POST[tTanggal_Selesai]',
                                                    Anggota_Kelompok = '$_POST[tAnggota_Kelompok]',
                                                    Dosen = '$_POST[tDosen]',
                                                    Perusahaan = '$_POST[tPerusahaan]'
                                                WHERE Id = '$_POST[Id]'
                                                    ");

    //jika ubah sukses
    if ($ubah){
        echo "<script>
                alert('Ubah Data Sukes!');
                document.location='index.php';
                </script>";
    }else{
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='index.php';
                </script>";
    }
}

//uji coba tombol Hapus
if (isset($_POST['bhapus'])) {
    //persiapan hapus data baru 
    $hapus = mysqli_query($konek, "DELETE FROM tb_pendaftar WHERE Id = '$_POST[Id]' ");

    //jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data succes!');
                document.location='index.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='index.php';
                </script>";
    }
}
?>
  
  