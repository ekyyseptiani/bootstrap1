
<?php
include ("koneksi.php");
if (isset($_GET['id_daftar'])){
	$title ="Edit";
	$url ="proses_edit.php";
	$id = $_GET['id_daftar'];
    //buat query untuk ambil data dari database
    $sql ="SELECT * FROM daftar WHERE id_daftar = $id";
	$query = mysqli_query ($koneksi,$sql);
	$siswa = mysqli_fetch_assoc ($query);
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
    <head>
        <title>Form registrasi</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
        <link rel="stylesheet" type="text/css" href="style.css">
          

    </head>
    <body>
    <form action ="proses_pendaftaran.php" method = "POST">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-left">Bootstrap Registration Form</h1>
                    <p class="text-left">make sure the email you enter is an email that is still active <br>
                        and frequently used. This email will also be the email <br>
                        that will be used in the registration form</p>
                    </div>
                <div class="col-md-5">
                    <!--make a 2 colum of 6-->
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-left">Registrasi Form</h3>
                            </div>
                            <div class="col-md-6">
                                <span class="glyphicon glyphicon-pencil"></span></div>
                            </div>
                            <hr>
                            <div class="row">
                                <label class="label col-md-2 control-label">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="nama" placeholder="nama" value ="<?php if (isset($_GET['id_daftar'])) 
	                                    {echo $daftar['nama'];}?>"/>>
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-md-2 control-label">Email</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" name="email" placeholder="email">

                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-md-2 control-label">Tanggal Lahir</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="tanggal lahir">

                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-md-2 control-label">Alamat</label>
                                <div class="col-md-10">
                                    <input type="alamat" class="form-control" name="alamat" placeholder="alamat">
                                </div>
                            </div>
                            <hr>
                            <a class="btn btn-primary" href="pendaftaran.php">Submit </a></div>
</hr>
    </body>
</html>