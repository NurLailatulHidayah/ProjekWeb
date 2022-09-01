<?php

//panggil koneksi
include "koneksi.php";

//uji jika tombol simpan di klik
if (isset($_POST['bsimpan'])) {

    //persiapan simpan data baru
    $simpan = mysqli_query($konek, "INSERT INTO unggah (surat_izin, jadwal_ujian)
                                     VALUES ('$_POST[tsurat_izin]',
                                             '$_POST[tjadwal_ujian]') ");

    //jika simpan sukses
    if ($simpan) {
        echo "<script>
                alert('Simpan data sukses!')
                document.location='alvin.php';
             </script>";
    }else {
        echo "<script>
                alert('Simpan data Gagal!')
                document.location='alvin.php';
             </script>";
    }
}


//uji jika tombol ubah di klik
if (isset($_POST['bubah'])) {

    //persiapan ubah data baru
    $ubah = mysqli_query($konek, "UPDATE unggah SET
                                                    surat_izin = '$_POST[tsurat_izin]',
                                                    jadwal_ujian = '$_POST[tjadwal_ujian]'
                                                WHERE id = '$_POST[id]'
                                                    ");

    //jika ubah sukses
    if ($ubah) {
        echo "<script>
                alert('Ubah data sukses!')
                document.location='alvin.php';
             </script>";
    }else {
        echo "<script>
                alert('Ubah data Gagal!')
                document.location='alvin.php';
             </script>";
    }
}

//uji jika tombol hapus di klik
if (isset($_POST['bhapus'])) {

    //persiapan simpan data baru
    $hapus = mysqli_query($konek, "DELETE FROM unggah WHERE id = '$_POST[id]'");

    //jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('hapus data sukses!')
                document.location='alvin.php';
             </script>";
    }else {
        echo "<script>
                alert('hapus data Gagal!')
                document.location='alvin.php';
             </script>";
    }
}
?>