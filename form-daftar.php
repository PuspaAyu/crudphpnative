<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Pasien RS Bunda</title>
</head>
<body>
	<header>
		<h3>Daftar Pasien</h3>
	</header>

	<form method="POST">
	<fieldset>
		<p>
			<label>Nama</label>
			<input type="text" name="nama">
		</p>
		<p>
			<label>Alamat</label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label>Jenis Kelamin</label>
			<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
			<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
		</p>
		<p>
			<label>No HP</label>
			<input type="text" name="no_hp">
		</p>
		<p>
			<input type="submit" name="submit">
		</p>
	</fieldset>
	</form>

	<?php

		if (isset($_POST['submit'])) {
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$jeniskelamin = $_POST['jenis_kelamin'];
			$nohp = $_POST['no_hp'];

			$sql = "INSERT INTO data_pasien(nama, alamat, jenis_kelamin, no_hp) VALUES ('$nama', '$alamat', '$jeniskelamin', '$nohp')";
			if (mysqli_query($db, $sql)) {
				header ('Location: list-pasien.php');
			}else{
				echo "Error input";
			}
		}
	?>

</body>
</html>