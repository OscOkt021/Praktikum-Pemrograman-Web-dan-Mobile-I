<!DOCTYPE html>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$username = $_POST['username'];
		$passw = $_POST['password'];
	} elseif($_SERVER["REQUEST_METHOD"]=="GET"){
		$username = null;
		$passw = null;
	} else {
		$username = null;
		$passw = null;
	}
	
	function cekPass($passw){
		$cek = true;
		$uppercase = preg_match("/[A-Z]/", $passw);
		$lowercase = preg_match("/[a-z]/", $passw);
		$number    = preg_match("/[0-9]/", $passw);
		$symbol	   = preg_match("/[@ ! # $ % ^ & * ( ? ) < > _ \/ \] \[ ]/", $passw);
		if(!(strlen($passw)<10)){
			if(!$uppercase || !$lowercase || !$number || !$symbol){
				echo "password tidak memenuhi kriteria! <br>";
				if(!$uppercase){
					echo "- Anda perlu menambahkan huruf kapital <br>";
				}
				if(!$lowercase){
					echo "- Anda perlu menambahkan huruf kecil <br>";
				}
				if(!$number){
					echo "- Anda perlu menambahkan karakter angka <br>";
				}
				if(!$symbol){
					echo "- Anda perlu menambahkan karakter simbol <br>";
				}
				$cek = false;
			} 
		} else {
			echo "Karakter password kurang dari 10! <br>";
			$cek = false;
		}
		return $cek;
	}
	
	function cekUser($usrname){
		$cek = true;
		if(strlen($usrname)>7){
			echo "Panjang username lebih dari 7 karakter!";
			$cek = false;
		} 
		return $cek;
	}
?>
<html>
	<head>
		<title> Modul 2 | Oscar Oktorian Almando</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="login">
			<h1 class="tengah"> SIGN UP </h1>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div>	
				<div class="tengah"> Username </div>
				<div class="tengah">
					<input class="rad" name="username" type="text" placeholder="Masukkan Username" value="<?php echo $username ?>" required>
				</div>
				<div class="tengah">
					<p class="warn">
						<?php
							if($username != null){
								if(cekUser($username)){
									echo "<p class=\"apr\">Input username berhasil </p>";
								}
							}
						?> </p>
				</div>
			</div>
			<div>
				<div class="tengah"> Password </div>
				<div class="tengah">
					<input class="rad" name="password" type="text" placeholder="Masukkan Password" value="<?php echo $passw ?>" required>
				</div>
				<div class="tengah">
					<p class="warn"> <?php
						if($passw != null){
							if(cekPass($passw)){
								echo "<p class=\"apr\">Input password berhasil </p>";
							}
						} 
					?> </p>
				</div>
			</div>	
				<div class="tengah">
					<input class="rad" name="Submit" type="submit" value="Submit">
				</div>
		</form>
		<div class="tengah">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
				<input class="rad" name="Submit" type="submit" value="Refresh">
			</form>
		</div>
		</div>
	</body>
</html>