<!DOCTYPE html>
<?php
	$nama=["OscarOkt", "Oktorian Amario", "Almando bin Aliando", "Salman Simpati", "Suka Suka"];

	function hitungVokal($kata){
		$jumlah=0;
		for($i=0; $i<strlen($kata); $i++){
			if($kata[$i]=='a' || $kata[$i]=='i' || $kata[$i]=='u' || $kata[$i]=='e' || $kata[$i]=='o' ||
			$kata[$i]=='A' || $kata[$i]=='I' || $kata[$i]=='U' || $kata[$i]=='E' || $kata[$i]=='O')
			{
				$jumlah++;
			} else {
				continue;
			}
		}
		echo "Jumlah huruf vokal dalam kata '",$kata,"' adalah ",$jumlah;
	}
	
	function hitungKonsonan($kata){
		$jumlah=0;
		$spasi=(str_word_count($kata)-1);
		for($i=0; $i<strlen($kata); $i++){
			if($kata[$i]=='a' || $kata[$i]=='i' || $kata[$i]=='u' || $kata[$i]=='e' || $kata[$i]=='o' ||
			$kata[$i]=='A' || $kata[$i]=='I' || $kata[$i]=='U' || $kata[$i]=='E' || $kata[$i]=='O')
			{
				continue;
			} else {
				$jumlah++;
			}
		}
		$jumlah-=$spasi;
		echo "Jumlah huruf konsonan dalam kata '",$kata,"' adalah ",$jumlah;
	}
?>

<html>
	<head> 
		<title> Modul 1 - 4 | Oscar Oktorian Almando </title>
	</head>
	<body>
		<h2>Jumlah huruf vokal dan konsonan pada nilai di masing-masing indeks Array : </h2>
		<p align="left">
		<?php
		for($i=0; $i<count($nama); $i++){
			echo "Indeks ke-[$i] : ",$nama[$i],"<br>";
			hitungVokal($nama[$i]);
			echo "<br>";
			hitungKonsonan($nama[$i]);
			echo "<br><br>";
		}
		?> 
		</p>
	</body>
</html>