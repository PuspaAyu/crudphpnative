<?php include ("config.php"); 

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM data_pasien WHERE id=$id";
	$query = mysqli_query($db, $sql);
	$pasien = mysqli_fetch_assoc($query);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Pasien</title>
</head>
<body>
	<header>
		<h3>EDIT PASIEN</h3>
	</header>

	<form method="POST" action="update.php">
	<fieldset>
		

		<p>
			<label>Nama</label>
			<input type="hidden" name="id" value="<?php echo $pasien['id']; ?>" />
			<input type="text" name="nama" value="<?php echo $pasien['nama']; ?>">
		</p>
		<p>
			<label>Alamat</label>
			<textarea name="alamat"><?php echo $pasien['alamat'] ?>"></textarea>
		</p>
		<p>
			<label>Jenis Kelamin</label>
			<?php $jk = $pasien['jenis_kelamin']; ?>
			<input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>Laki-Laki
			<input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>Perempuan
		</p>
		<p>
			<label>No HP</label>
			<input type="text" name="no_hp" value="<?php echo $pasien['no_hp'] ?>">
		</p>
		<p>
			<input type="submit" name="submit" value="submit">
		</p>
	</fieldset>
	</form>
</body>
</html>