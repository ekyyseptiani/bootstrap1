<?php
include ("koneksi.php");
if (isset($_GET['id_daftar'])){
	$title ="Edit";
	$url ="proses_edit.php";
	$id = $_GET['id_daftar'];
    //buat query untuk ambil data dari database
    $sql ="SELECT * FROM daftar WHERE id_daftar= $id";
	$query = mysqli_query ($koneksi,$sql);
	$daftar = mysqli_fetch_assoc ($query);
	//jika data yang diedit tidak ditemukan
	if (mysqli_num_rows($query) <1){
		die("data tidak ditemukan...");}
		//url jika edit data
	}else{
		$title ="Add";
		//url jika tambah data
		$url='proses_pendaftaran.php';
	}
	?>
	<html>
	<head><title> Formulir edit</title></head>
	<body>
	<header><h3> Formulir edit </h3></header>
	<form action ="proses_edit.php" method = "POST">
	<fieldset>
	<legend><h2>Form Peserta </h2></legend>
	<div>
	<label for ='id'>ID: </label><br>
	<input type ="text" name ="id" value ="<?php if (isset($_GET['id_daftar']))
	{echo $daftar['id_daftar'];}?>"/>
	</div>
	<div>
	<label for ='nama'>Nama: </label><br>
	<input type ="text" name ="nama" value ="<?php if (isset($_GET['id_daftar'])) 
	{echo $daftar['nama'];}?>"/>
	</div><div>
	<label for ='email'>Email: </label><br>
	<input type="text"name ="email" value="<?php if (isset($_GET['id_daftar']))
	{echo $daftar['email'];}?>"/> 
	</div>
	<div>
	<label for ='tanggal_lahir'>Tanggal Lahir: </label><br>
	<input type ="date" name ="tanggal_lahir" value ="<?php if (isset($_GET['id_daftar'])) 
	{echo $daftar['tanggal_lahir'];}?>"/>
	<div>
	<label for ="alamat">Alamat: </label><br>
	<input type = "text" name ="alamat" value ="<?php if (isset($_GET['id_daftar']))
		{echo $daftar['alamat'];}?>"/>
	</div>
	<hr>
	<div>
	<input type ="submit" value ="simpan" name ="simpan"/>
	</div>
	</fieldset>
	</form></body></html>