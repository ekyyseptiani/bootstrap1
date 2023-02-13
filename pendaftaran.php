<?php include('koneksi.php');?>
<html>
<head><title>Data Peserta</title>
<link rel ="stylesheet" type = "text/css" href="css/bootstrap.css"></head>
<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

<center><h2>Data Peserta<h2></center>
	<center><h3>Lomba Festival Musik</h3></center>

<center><nav><a href="formulir.php" class="btn btn-succes btn-sm"><button>Tambah Baru</button>
</a><center></nav>
<br>
<table border ="1" cellpadding ="8" align ="center" bgcolor ="white">
<thread>
<tr>
<th>Id</th>
<th>Nama</th>
<th>Email</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Tindakan</th>

</tr>
</thread>
<body>
<?php
$sql ="SELECT * FROM daftar";
$query = mysqli_query($koneksi, $sql);
while($daftar = mysqli_fetch_Array($query)) {
echo "<tr>";
echo "<td>".$daftar['id_daftar']."</td>";
echo "<td>".$daftar['nama']."</td>";
echo "<td>".$daftar['email']."</td>";
echo "<td>".$daftar['tanggal_lahir']."</td>";
echo "<td>".$daftar['alamat']."</td>";
echo "<td>";
echo "<a href= 'edit.php?id_daftar=".$daftar['id_daftar']."'>Edit</a> | ";
echo "<a href= 'hapus.php?id_daftar=".$daftar['id_daftar']."'>Hapus</a> | ";

}
?>
</body>
</table>
<p>Total:
<?php echo mysqli_num_rows($query) ?>
<br>
<center><nav><a href="informasi.php"><button>Logout</button>
</a></nav></center>
</p>
</body>
</html>
