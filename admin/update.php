<?php

include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$program_studi = $_POST['program_studi'];
$fakultas = $_POST['fakultas'];
$semester = $_POST['semester'];
$alasan_banding = $_POST['alasan_banding'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan_total = $_POST['penghasilan_total'];
$status_diri = $_POST['status_diri'];
$jumlah_saudara = $_POST['jumlah_saudara'];
$jumlah_pengeluaran_perbulan = $_POST['jumlah_pengeluaran_perbulan'];
$tagihan_listrik_perbulan = $_POST['tagihan_listrik_perbulan'];
$status_tempat_tinggal = $_POST['status_tempat_tinggal'];
$jenis_aset_yang_dimiliki = $_POST['jenis_aset_yang_dimiliki'];
$verifikasi =  $_POST['verifikasi'];
$bukti_terlampir = $_POST['bukti_terlampir_lama'];
if (isset($_FILES['bukti_terlampir'])) {
	$tipe_file = $_FILES['bukti_terlampir']['type']; //mendapatkan mime type
	if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
	{
 		$nama_file = trim($_FILES['bukti_terlampir']['name']);

 		//mengganti nama pdf
 		$nama_baru = "file_".$nama_file; //hasil contoh: file_1.pdf
 		$file_temp = $_FILES['bukti_terlampir']['tmp_name']; //data temp yang di upload
 		$folder    = "../file"; //folder tujuan

 		move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload

		$bukti_terlampir = $nama_baru;
	}
}


 mysqli_query($koneksi,"update banding set nama='$nama', npm='$npm', program_studi='$program_studi', fakultas='$fakultas', semester='$semester', alasan_banding='$alasan_banding', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', pekerjaan_ayah='$pekerjaan_ayah', pekerjaan_ibu='$pekerjaan_ibu', penghasilan_total='$penghasilan_total', status_diri='$status_diri', jumlah_saudara='$jumlah_saudara', jumlah_pengeluaran_perbulan='$jumlah_pengeluaran_perbulan', tagihan_listrik_perbulan='$tagihan_listrik_perbulan', status_tempat_tinggal='$status_tempat_tinggal', jenis_aset_yang_dimiliki='$jenis_aset_yang_dimiliki', bukti_terlampir='$bukti_terlampir', verifikasi='$verifikasi' where id='$id'");



header("location: http://localhost/banding_ukt/admin");


?>
