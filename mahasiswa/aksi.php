<?php
include '../koneksi.php';

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
$bukti_terlampir = $_POST['bukti_terlampir'];
$verifikasi = $_POST['verifikasi'];

//pengecekan tipe harus pdf
$tipe_file = $_FILES['bukti_terlampir']['type']; //mendapatkan mime type
 $nama_file = trim($_FILES['bukti_terlampir']['name']);

 //mengganti nama pdf
 $nama_baru = "file_".$nama_file; //hasil contoh: file_1.pdf
 $file_temp = $_FILES['bukti_terlampir']['tmp_name']; //data temp yang di upload
 $folder    = "../file"; //folder tujuan

 move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
mysqli_query($koneksi,"insert into banding values('','$nama','$npm','$program_studi','$fakultas','$semester','$alasan_banding','$nama_ayah','$nama_ibu','$pekerjaan_ayah','$pekerjaan_ibu','$penghasilan_total','$status_diri','$jumlah_saudara','$jumlah_pengeluaran_perbulan','$tagihan_listrik_perbulan','$status_tempat_tinggal','$jenis_aset_yang_dimiliki','$nama_baru','belum di verifikasi')");


header("location: http://localhost/banding_ukt/mahasiswa");

?>
