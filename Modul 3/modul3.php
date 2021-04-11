<?php
	require 'connect.php';
	$karyawan = query("SELECT k.id_karyawan AS idka, k.nama AS nam,
					  d.nama_divisi AS divi, k.Tgl_lahir as tglh
					  FROM karyawan as k, divisi as d
					  WHERE k.divisi=d.id_divisi ORDER BY k.id_karyawan");
	$divisi = query("SELECT * FROM divisi");
	
	if(isset($_POST["submit"])) {
		if (tambahKaryawan($_POST)>0){
			echo"<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'modul3.php';
			</script>";
		} else {
			echo "<script>
					alert('data gagal ditambahkan!');
					document.location.href = 'modul3.php';
			</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Modul 3 | Oscar Oktorian Almando </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
				<a href="#TK" id="awal">
                   <div class="rad">
                    Tambah Data
                  </div>
                </a>
	<div class="TabelKaryawan" id="tbk">
		<div class="tengah"><h1>Tabel Karyawan</h1> </div>
		<div class="tabeltengah">
		<table class="table1">
			<tr>
				<th>ID Karyawan</th>
				<th>Nama</th>
				<th>Divisi</th>
				<th>Tanggal Lahir</th>
			</tr>

			<?php foreach ($karyawan as $row) : ?>
			<tr>
				<td><?php echo $row["idka"];?></td>
				<td><?php echo $row["nam"]; ?></td>
				<td><?php echo $row["divi"]; ?></td>
				<td><?php echo $row["tglh"]; ?></td>
				<td>
				<a href="modul3Update.php?id=<?php echo $row["idka"]; ?>">ubah</a> | 
                <a class="warn" href="modul3Hapus.php?id=<?php echo $row["idka"]; ?>" onclick="return confirm('Hapus data?');">hapus</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
		</div>
	</div>
	
	<br><br><br><br><br><br><br><br>
	
	<div class="TambahKaryawan" id='TK'>
        <div class="tengah"><h1>Tambah Data Karyawan</h1></div>
            <form action="" method="post">
				<div class="tengah">
				     <label for="nama">Nama</label>
				</div>
				<div class="tengah">
				     <input type="text" name="nama" id="nama" required>
				</div>
				 <div class="tengah">
				    <label for="id_divisi">Divisi</label>
				 </div>
				 <div class="tengah">
				    <select name="id_divisi" class="form-control" id="id_divisi">
						 <option selected>Pilih Divisi..</option>
							<?php foreach($divisi as $divis) : ?>
							   <option value="<?= $divis["id_divisi"] ?>"><?= $divis["nama_divisi"] ?></option>
							<?php endforeach; ?>
					</select>
				 </div>
				 <div class="tengah">
					<label for="Tgl_lahir">Tanggal Lahir</label>
				 </div>
				 <div class="tengah">
				     <input type="date" name="Tgl_lahir" id="Tgl_lahir" required>
				 </div>
				 <div class="tengah">
					<button class="rad" type="submit" name="submit">Tambah</button> 
				 </div>             
            </form>
	</div>
	
	<a href="#awal">
        <div class="tengah">
            Kembali ke Tabel
        </div>
    </a>
</body>
</html>