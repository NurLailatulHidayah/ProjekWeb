
<?php
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "pendaftar_kp";

?>
<h2> Pendaftaran Ujian KP </h2>

<table border="1">
	<tr>
		<th>Id</th>
		<th>Tempat_KP</th>
		<th>Alamat_KP</th>
		<th>Tanggal_mulai</th>
		<th>Tanggal_selesai</th>
		<th>Proposal</th>
		<th>Anggota_Kelompok</th>
		<th>Dosen</th>
		<th>Perusahaan</th>
		<th>Aksi</th>
	</tr>

	<?php

	include "Koneksi.php";
	$ambildata = mysqli_query($koneksi,"select * from pendaftar_ujiankp");
	while ($tampil = mysqli_fetch_array($ambildata)){
		echo "
		<tr>
			<td>$tampil[Id]</td>
			<td>$tampil[Tempat_kp]</td>
			<td>$tampil[Alamat_kp]</td>
			<td>$tampil[Tanggal_mulai]</td>
			<td>$tampil[Tanggal_selesai]</td>
			<td>$tampil[Proposal]</td>
			<td>$tampil[Anggota_Kelompok]</td>
			<td>$tampil[Dosen]</td>
			<td>$tampil[Perusahaan]</td>
		</tr>";

		$Id;
	}
	?>

    
</div>
  </body>
</html>