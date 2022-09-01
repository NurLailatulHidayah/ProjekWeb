<?php
//panggil koneksi database
include "koneksi.php";

//uji coba tombol simpan
if (isset($_POST['bsimpan'])) {
    //persiapan simpan data baru
    $simpan = mysqli_query($konek, "INSERT INTO murid (NIM, Nama, Mata_Kuliah, Dosen, Nilai)
                                    VALUES('$_POST[tnim]',
                                            '$_POST[tnama]',
                                            '$_POST[tmatakuliah]',
                                            '$_POST[tdosen]',
                                            '$_POST[tnilai]')");
    if ($simpan) {
        echo "<script>
                alert('Simpan data succes!');
                document.location='nilai.php';
                </script>";
    } else {
        echo "<script>
                alert('Simpan data Gagal!');
                document.location='nilai.php';
                </script>";
    }
}

//uji coba tombol ubah
if (isset($_POST['bubah'])) {
    //persiapan ubah data baru 
    $ubah = mysqli_query($konek, "UPDATE murid SET  NIM                = '$_POST[tnimu]',
                                                        Nama           = '$_POST[tnami]',
                                                        Mata_Kuliah    = '$_POST[tmatakuliahe]',
                                                        Dosen          = '$_POST[tdosene]',
                                                        Nilai          = '$_POST[tnilaie]'
                                                        WHERE id       = '$_POST[id]'
                                                        ");
    if ($ubah) {
        echo "<script>
                alert('Ubah data succes!');
                document.location='nilai.php';
                </script>";
    } else {
        echo "<script>
                alert('Ubah  data Gagal!');
                document.location='nilai.php';
                </script>";
    }
}

//uji coba tombol Hapus
if (isset($_POST['bhapus'])) {
    //persiapan hapus data baru 
    $hapus = mysqli_query($konek, "DELETE FROM murid WHERE id = '$_POST[id]' ");

    //jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data succes!');
                document.location='nilai.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='nilai.php';
                </script>";
    }
}
