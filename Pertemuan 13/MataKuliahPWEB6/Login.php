<?php
	include "koneksi.php";
	global $koneksi;

	if(isset($_POST["inputt"])){
		$username=$_POST["username"];
		$password=$_POST["password"];

		$data=mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

		if(mysqli_num_rows($data)){
			echo "<script>document.location='Dashboard.html';</script>";
		}
		else{
			echo "<script>alert('username atau password anda salah!');</script>";
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
					<br>
					<div class="judull"><font face="ms reference sans serif"><h3 align="center">LOGIN ACCOUNT</h3></div>
                    <div>
						<label for="username"></label>
                        <input type="text" class="input" name="username" id="username" required="" placeholder="Username">
					</div>
					<div>
						<label for="password"></label>
                       	<input type="password" class="input" name="password" id="password" required="" placeholder="Password">
					</div>
					<div>
           				<button type="submit" class="login" name="inputt">   LOGIN   <button>
        			</div>
      	  		</form>
      	  		<p class="sign-up">Don't have account? <a href="register.php">Create Now</a></p>
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