<html>
<head>
        <title>Modul 4 | Pemilihan Raya Presiden Mahasiswa</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
    <!--Penambahan fitur-->
    <div class="container">  
            <br />  
			<h2 align="center">Pemilihan Raya Presiden Mahasiswa</h2><br />
			<div class="row">
				<div class="col-md-6">
					<form method="post" id="poll_form">
						<h3>Siapa Pasangan Calon Presma kita?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" id="pilihan" name="pilihan" value="1" /> Oscar - Oscar</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" id="pilihan" name="pilihan" value="2" /> Oscar - Oktorian</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" id="pilihan" name="pilihan" value="3" /> Oscar - Almando</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" id="pilihan" name="pilihan" value="4" /> Oktorian - Almando</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" id="pilihan" name="pilihan" value="5" /> Oktorian - Oktorian</h4></label>
						</div>
						<br />
                        <label><h4>ID Pemilih</h4></label>
                            <input type="number" id='id_pemilih' name="id_pemilih"/>
						<input type="submit" name="kirim" id="kirim" class="btn btn-primary" />
					</form>
					<br />
				</div>
			</div>
				
			<br />
			<br />
			<br />
		</div>
    <!--Penambahan fitur-->
    <!--<form method="post">
        <select name="pilihan">
            <option value="1">1. Joko</option>
            <option value="2">2. Arif</option>
            <option value="3">3. Lukman</option>
        </select>
        <label>id pemilih</label>
        <input type="number" name="id_pemilih"/>
        <button name="kirim" type="submit" >kirim</button>
    <form>-->
<?php
    require './koneksi.php';
    if (isset($_POST["kirim"])) {
    // menangkap data yang di kirim dari form
    $pilihan = $_POST['pilihan'];
    $id_pemilih = $_POST['id_pemilih'];

    $data1 = mysqli_query($koneksi,"select * from suara where id_pemilih='$id_pemilih'");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data1);
    echo $cek; 
    if($cek <= 0){

    $data =mysqli_query($koneksi,"INSERT INTO `suara` (`id_suara`, `id_pemilih`, `pilihan`, `waktu`) VALUES ('', '$id_pemilih', '$pilihan', CURRENT_TIME())");

    if ($data) {
?>
    <script language="javascript">
        alert("Data Berhasil Ditambah");
    </script>
<?php

    }}else if ($cek >= 0){
 ?>
    <script language="javascript">
    alert("Maaf Id sudah digunakan ");
    
    </script>
    <?php  

}
}
?> 	
</body>
</html>