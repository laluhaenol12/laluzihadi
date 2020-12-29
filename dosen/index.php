<!DOCTYPE html>
<html>
<head>
	<title>Dosen</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="text-center alert alert-info font-weight-bold">Data Dosen</div>
		<table class="table table-bordered">
			<thead>				
				<tr>
					<th>NO</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>		
			<tbody>
				<?php
				require '../koneksi.php';
				$query = "select * from dosen";
				$result = mysqli_query($link, $query);
				$no ='1';
				while ($isi = mysqli_fetch_object($result)) {
					?>
					<tr>
						<td><?= $no++;?></td>
						<td><?= $isi-> nip;?></td>
						<td><?= $isi-> nama_dosen;?></td>
						<td><?= $isi-> alamat;?></td>
						<td>
							<a href="index.php?=edit&id=<?=$data['nim']?>" class="btn btn-primary">Edit</a>
							<a href="index.php?=edit&id=<?=$data['nim']?>" class="btn btn-dark">Hapus</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>