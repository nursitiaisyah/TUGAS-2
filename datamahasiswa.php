<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Perpustakaan</title>
</head>
<body>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>NIM</th>
				<th>ALAMAT</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
		<h3>Tambah Data Mahasiswa</h3>
			<form action="proses_tambah.php" method="post">
				Nama : 
				<input type="text" name="nama" value="" class="form-control">
				NIM :
				<input type="text" name="nim" value="" class="form-control">
				Alamat :
				<input type="text" name="alamat" value="" class="form-control">
				Username :
				<input type="text" name="username" value="" class="form-control">
				Password :
				<input type="password" name="password" value="" class="form-control">
				<input type="submit" name="simpan" value="Tambah Mahasiswa" class="btn btn-primary"> 
			</form>
			<h3>Data Mahasiswa</h3>

			<?php
			include "koneksi.php";
			$qry_mahasiswa=mysqli_query($koneksi, "select * from mahasiswa");
			$no=0;
			while ($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_mahasiswa['nama']?></td>
				<td><?=$data_mahasiswa['nim']?></td>
				<td><?=$data_mahasiswa['alamat']?></td>
				<td><?=$data_mahasiswa['username']?></td>
				<td><?=$data_mahasiswa['password']?></td>
				<td><a href="edit.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"class="btn btn-success">Edit</a> |
				<a href="hapus.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>

			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>