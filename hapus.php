<?php include ("config.php");

	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];
		$sql = "DELETE FROM data_pasien WHERE id=$id";
		$query = mysqli_query($db, $sql);

		if ($query) {
			header('Location: list-pasien.php');
		}else{
			echo "Hapus Error";
		}
	}else{
		echo "Akses dilarang";
	}

?>