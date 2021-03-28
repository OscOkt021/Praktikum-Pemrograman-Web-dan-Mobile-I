<!DOCTYPE html>
<?php
	$nama=["OscarOkt", "Oktorian Amario", "Almando bin Aliando", "Salman Simpati", "Suka Suka"];
?>

<html>
	<head> 
		<title> Modul 1 - 1 | Oscar Oktorian Almando </title>
	</head>
	<body>
		<h2>Isi pada masing-masing indeks Array : </h2>
		<p align="left">
		<?php
		for($i=0; $i<count($nama); $i++){
			echo "Indeks ke-[$i] : ",$nama[$i],"<br><br>";
		}
		?>
		</p>
	</body>
</html>