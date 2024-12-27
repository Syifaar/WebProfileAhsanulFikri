<?php
include "koneksi.php";

if(isset($_POST['kirim'])){
	$nama_lengkap = $_POST['nama_lengkap'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jk = $_POST['jk'];
	$no_telepon = $_POST['no_telepon'];
	$email = $_POST['email'];
	$Kecamatan = $_POST['Kecamatan'];

	$simpan = "INSERT INTO pendaftaran(nama_lengkap,alamat,tempat_lahir,tanggal_lahir,jk,no_telepon,email,Kecamatan) VALUES('$nama_lengkap','$alamat','$tempat_lahir','$tanggal_lahir','$jk','$no_telepon','$email','$Kecamatan')";

	$result = mysqli_query($conn,$simpan);

	if($result) {
		echo "<script>alert('Data Telah Berhasil Disimpan');windows.location='pendaftaran.html'";
	}
	
}

?>