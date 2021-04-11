<?php 
   require 'connect.php';

	$id = $_GET["id"];

	if(hapusKaryawan($id)>0 ){
		echo "<script>
			alert('data berhasil dihapus!');
			document.location.href = 'modul3.php';
			</script>";
	} else {
		echo "<script>
			alert('data gagal dihapus!');
			document.location.href = 'modul3.php';
			</script>";
	}
 ?>