<?php
  include'./cekmahasiswa.php';

  include'./koneksi.php';  
?>
<!DOCTYPE html>
<html>
<head>
	<title>--- SISTEM BANDING UKT ---</title>
</head>
<body>
 
	<h2>SISTEM BANDING UKT</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3> ISI DATA </h3>
	<form action="../aksi.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>			
				Nama
				<input type="text" name="nama">
			</tr>
			<tr>
				<td>NPM</td>
				<td><input type="number" name="npm"></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td><input type="text" name="program_studi"></td>
			</tr>
			<tr>
				<td>FAKULTAS</td>
				<td><input type="text" name="fakultas"></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="number" name="semester"></td>
			</tr>
			<tr>
				<td>Alasan Banding</td>
				<td><input type="text" name="alasan_banding"></td>
			</tr>
			<tr>
				<td>Nama Ayah</td>
				<td><input type="text" name="nama_ayah"></td>
			</tr>
			<tr>
				<td>Nama Ibu</td>
				<td><input type="text" name="nama_ibu"></td>
			</tr>
			<tr>
				<td>Pekerjaan Ayah</td>
				<td><input type="text" name="pekerjaan_ayah"></td>
			</tr>
			<tr>
				<td>Pekerjaan Ibu</td>
				<td><input type="text" name="pekerjaan_ibu"></td>
			</tr>
			<tr>
				<td>Penghasilan Total Perbulan</td>
				<td><input type="text" name="penghasilan_total"></td>
			</tr>
			<tr>
				<td>Status Diri</td>
				<td><input type="text" name="status_diri"></td>
			</tr>
			<tr>
				<td>Jumlah Saudara Yang Bersekolah</td>
				<td><input type="text" name="jumlah_saudara"></td>
			</tr>
			<tr>
				<td>Jumlah Pengeluaran Perbulan</td>
				<td><input type="text" name="jumlah_pengeluaran_perbulan"></td>
			</tr>
			<tr>
				<td>Tagihan Listik Perbulan</td>
				<td><input type="text" name="tagihan_listrik_perbulan"></td>
			</tr>
			<tr>
				<td>Status Tempat Tinggal</td>
				<td><input type="text" name="status_tempat_tinggal"></td>
			</tr>
			<tr>
				<td>Jenis Aset Yang Dimiliki</td>
				<td><input type="text" name="jenis_aset_yang_dimiliki"></td>
			</tr>
			<tr>
				<td>Bukti Terlampir</td>
				<td><input type="file" name="bukti_terlampir"></td>
			</tr>

			<tr>
				<td></td>
				<td>

					<input type="submit" value="SIMPAN"></td>

			</tr>		
		</table>
	</form>
</body>
</html>