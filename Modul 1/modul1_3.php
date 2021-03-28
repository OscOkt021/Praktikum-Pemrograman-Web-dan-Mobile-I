<!DOCTYPE html>
<?php
	$name=["OscarOkt", "Oktorian Amario", "Almando bin Aliando", "Salman Simpati", "Suka Suka"];
?>
<html>
	<head> 
		<title> Modul 1 - 3 | Oscar Oktorian Almando </title>
	</head>
	<body>
		<h2>Kalimat yang dibalik pada nilai yang telah diinput : </h2>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Nama: <input type="text" name="nama">
			<input type="submit">
		</form>
		<?php 
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$nama = $_POST['nama']; 
				echo "<br><b>'$nama'</b>"," Jika dibalik akan menjadi <b>' ", strrev($nama)," '</b> <br><br>";
			}
		
		for($i=0; $i<count($name); $i++){
			echo "Indeks ke-[$i] : ",$name[$i],"<br>";
			echo "Jika dibalik akan menjadi '", strrev($name[$i]),"' <br><br>";
		}
		?>
		</p>
	</body>
</html>