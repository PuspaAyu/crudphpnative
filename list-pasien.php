<?php include ("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Pasien RS Bunda</title>
</head>
<body>
	<header>
		<h3>List Pasien</h3>
	</header>

	<p>
		<label><a href="form-daftar.php"><input type="button" name="tambah" value="Tambah Pasien"></a></label>
	</p>

	<table border="1">
		<thead>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Alamat</td>
				<td>Jenis Kelamin</td>
				<td>No Hp</td>
				<td>Aksi</td>
			</tr>
		</thead>

		<tbody>
			<?php 
			$sql = "SELECT * FROM data_pasien";
			$query = mysqli_query($db, $sql);

			while ($pasien = mysqli_fetch_array($query)) { ?>
				<tr>
					<td><?php echo $pasien['id']; ?></td>
					<td><?php echo $pasien['nama']; ?></td>
					<td><?php echo $pasien['alamat']; ?></td>
					<td><?php echo $pasien['jenis_kelamin']; ?></td>
					<td><?php echo $pasien['no_hp']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $pasien['id'];?>">Edit | </a>
						<a href="hapus.php?id=<?php echo $pasien['id'];?>">Hapus
					</td>

				</tr>

			<?php } ?>
		</tbody>
	</table>

</body>
</html>