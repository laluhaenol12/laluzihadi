<!DOCTYPE html>
<html>
<head>
	<title>Perwalian</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="alert alert-info text-center font-weight-bold">Perwalian</div>
		<table class="table table-bordered">
			<thead>					
				<tr>
					<th>NO</th>
					<th>ID</th>
					<th>NIP</th>
					<th>NIM</th>
					<th>Aksi</th>
				</tr>
			</thead>		
			<tbody>
				<?php
				require '../koneksi.php';
				$query = "select * from perwalian";
				$result = mysqli_query($link, $query);
				$no ='1';
				while ($isi = mysqli_fetch_object($result)) {
					?>
					<tr>
						<td><?= $no++;?></td>
						<td><?= $isi-> id;?></td>
						<td><?= $isi-> dosen_nip;?></td>
						<td><?= $isi-> mahasiswa_nim;?></td>
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