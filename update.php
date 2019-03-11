<?php include ("config.php"); 
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jeniskelamin = $_POST['jenis_kelamin'];
	$nohp = $_POST['no_hp'];

	$sql = "UPDATE data_pasien SET nama='$nama', alamat='$alamat', jenis_kelamin='$jeniskelamin', no_hp='$nohp' WHERE id='$id'";
	
	$query = mysqli_query($db, $sql);

	if ($query) {
		header('Location: list-pasien.php');
	}else{
		echo "Gagal update";
	}
}
mysqli_close($db);

?>