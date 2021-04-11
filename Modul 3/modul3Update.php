<?php 
	require 'connect.php';
	$id = $_GET["id"];
	$karyawan = query("SELECT * FROM karyawan INNER JOIN divisi ON karyawan.divisi=divisi.id_divisi
						WHERE karyawan.id_karyawan = $id")[0];
	$divisi = query("SELECT * FROM divisi");

	if(isset($_POST["submit"])) {
		if (ubahKaryawan($_POST)>0){
		echo "<script>
			alert('data berhasil diubah!');
			document.location.href = 'modul3.php';
			</script>";
		} else {
		echo "<script>
			alert('data gagal diubah!');
			document.location.href = 'modul3.php';
			</script>";
		}
	}

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Update Data | Oscar Oktorian Almando</title>
		<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
	<div class="updt">
		<div class="tengah">
			<h1> Update Data </h1>
		</div>
        <form action="" method="post">
						<div class="tengah">
							<label for="nama">Nama</label>
						</div>
						<div class="tengah">
							<input type="text" name="nama" id="nama" required value="<?php echo $karyawan["nama"]; ?>">
						</div>
						<div class="tengah">
							<label for="nama">ID : </label>
						</div>
						<div class="tengah">
							<input type="text" name="id_karyawan" id="nama" required value="<?php echo $karyawan["id_karyawan"]; ?>">
						</div>

            <div class="tengah">
                <label for="divisi">Pilih Divisi</label>
						</div>
						<div class="tengah">
									<select name="divisi" class="form-control" id="divisi">
									<option  value="<?php echo $karyawan["divisi"]; ?>" selected>
										<?php echo $karyawan["nama_divisi"]; ?>
									</option>
										<?php foreach($divisi as $divis) : ?>                
											<option value="<?= $divis["id_divisi"] ?>"><?= $divis["nama_divisi"] ?></option>         
										<?php endforeach; ?>
                  </select>
            </div>
						<div class="tengah">
							<label for="Tgl_lahir">Tanggal Lahir : </label>
						</div>
						<div class="tengah">
            <input type="date" name="Tgl_lahir" id="Tgl_lahir" required value="<?php echo $karyawan["Tgl_lahir"]; ?>">
						</div>
			<div class="tengah">
				<button class="rad" type="submit" name="submit">Update</button>
			</div>
        </form>
    </div>
	
		<a href="modul3.php">
        <div class="tengah">
            Kembali ke Tabel
        </div>
    </a>
  </body>
</html>