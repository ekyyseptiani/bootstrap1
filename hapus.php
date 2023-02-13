<?php
include("koneksi.php");
if(isset($_GET['id_daftar'])){
	//ambil nis dari query string
	$id = $_GET['id_daftar'];
	//buat query hapus
	$sql = "DELETE FROM daftar WHERE id_daftar=$id";
	$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
	//apakah query update berhasil?
	if($query){
		//kalau berhasil, alihkan ke halaman index.php dengan status=sukses
		header('location:pendaftaran.php?status=sukses');	
	}else{
		//kalau gagal, alihkan ke halaman index.php dengan status=gagal
		header('location:pendaftaran.php?status=gagal');
	  }
	}else{
		die("Akses dilarang...");
	}
?>
--