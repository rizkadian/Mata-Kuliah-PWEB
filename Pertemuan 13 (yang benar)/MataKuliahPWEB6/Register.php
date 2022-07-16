<?php
	include "koneksi.php";

	function registrasi($data){
		global $koneksi;

		$username=strtolower(stripcslashes($data["username"]));
		$password=mysqli_real_escape_string($koneksi, $data["password"]);
		$password2=mysqli_real_escape_string($koneksi, $data["password2"]);

		//cek username
		$result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
		if(mysqli_fetch_assoc($result)) {
			echo "<script>alert('username yang dipilih sudah terdaftar!');</script>";
			return false;
		}
		
		//cek konfirmasi password
		if ($password !== $password2) {
			echo "<script>alert('konfirmasi password tidak sesuai!');</script>";
			return false;
		}

		//tambahkan userbaru ke database
		mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$password')");

		return mysqli_affected_rows($koneksi);
	}

	if(isset($_POST["register"])){
		if (registrasi($_POST) > 0){
			echo "<script> alert('user baru telah ditambahkan!'); document.location='Awalwebsite.html'; 
			</script>";	
		}
		else{
			echo mysql_error($koneksi);
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mata Kuliah Pemrograman Web</title>
		<link rel="stylesheet" type="text/css" href="stylee.css"></link>
	</head>
	<body bgcolor="#f8f9f9">
		<table border="0" width="100%" style="background: linear-gradient(30deg, #3498db, #1b2631);">
			<tr>
				<td><img src="logo.png" width="80px" height="85px" align="right"></td>
				<td><h2 align="center"><font face="ms reference sans serif" color="white">DINAS KOMUNIKASI DAN INFORMATIKA DAERAH ISTIMEWA YOGYAKARTA</h2></td>
			</tr>
		<table border="0" width="100%" height="300px">
			<tr><td>
			<br><br>
			<div class="bodylogin">
				<form action="" method="post">
					<div class="judull"><font face="ms reference sans serif"><h3 align="center">REGISTER ACCOUNT</h3></div>
					<div>
						<label for="username"></label>
                        <input type="text" class="input" name="username" id="username" required="" placeholder="Username">
					</div>
					<div>
						<label for="password"></label>
                       	<input type="password" class="input" name="password" id="password" required="" placeholder="Password">
					</div>
					<div>
						<label for="password2"></label>
                       	<input type="password" class="input" name="password2" id="password2" required="" placeholder="Confirmation Password">
					</div>
					<div>
						<button type="submit" class="login" name="register">REGISTER<button>
					</div>
      	  		</form>
			</div>
			<br><br>
			</td></tr>
		</table>
		<table border="0" height="60px" width="100%">
			<tr>
				<td align="center" style="background: linear-gradient(30deg, #1b2631, #3498db) !important;"><font face="ms reference sans serif">Tugas Kelompok Pemrograman Web - Ilham Suryana dan Rizka Dianrani</td>
			</tr>
		</table>
	</body>
</html>