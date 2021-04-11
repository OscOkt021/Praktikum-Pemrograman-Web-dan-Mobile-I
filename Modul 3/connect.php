<?php
	$db = mysqli_connect("localhost", "root", "", "modul3pemweb");

	function query($query){
		global $db;
		$result = mysqli_query($db, $query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result)){
			$rows[]=$row;
		}
		return $rows;
	}
	
	function tambahKaryawan($data){
		global $db;
		$nama = htmlspecialchars($data["nama"]);
		$divisi = htmlspecialchars($data["id_divisi"]);
		$tgl = htmlspecialchars($data["Tgl_lahir"]);
		$query = "INSERT INTO karyawan VALUES ('', '$nama', '$divisi','$tgl')";
		mysqli_query($db, $query);
		return mysqli_affected_rows($db);
   }
   
   function ubahKaryawan($data){
		global $db;
		$id_karyawan = $data["id_karyawan"];
		$nama = htmlspecialchars($data["nama"]);
		$divisi = htmlspecialchars($data["divisi"]);
		$tgl = htmlspecialchars($data["Tgl_lahir"]);
		$query = "UPDATE karyawan SET nama = '$nama', divisi ='$divisi', Tgl_lahir='$tgl'  WHERE id_karyawan = $id_karyawan";
		mysqli_query($db, $query);
		return mysqli_affected_rows($db);
	}
	
	function hapusKaryawan($id){
        global $db;
        mysqli_query($db, "DELETE FROM karyawan WHERE id_karyawan = $id");
        return mysqli_affected_rows($db);
    }

?>