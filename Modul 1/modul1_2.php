<!DOCTYPE html>
<?php
	$nama=["OscarOkt", "Oktorian Amario", "Almando bin Aliando", "Salman Simpati", "Suka Suka"];
	function hitungHuruf($sttr){
		$num= strlen($sttr)-(str_word_count($sttr)-1);
		return $num;
	}
?>

<html>
	<head> 
		<title> Modul 1 - 2 | Oscar Oktorian Almando </title>
	</head>
	<body>
		<h2>Jumlah kata dan huruf pada nilai di masing-masing indeks Array : </h2>
		<p align="left">
		<?php
		for($i=0; $i<count($nama); $i++){
			echo "Indeks ke-[$i] : ",$nama[$i],"<br>";
			echo "Jumlah Kata : ",str_word_count($nama[$i])," kata <br>";
			echo "Jumlah Huruf : ",hitungHuruf($nama[$i])," huruf <br><br>";
		}
		?>
		</p>
	</body>
</html>