<?php
	include "koneksi.php";
	global $koneksi;

	if(isset($_POST['proses'])){
		mysqli_query($koneksi, "INSERT INTO komentarrr SET 
			komentar='$_POST[komentar]'");
	}	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mata Kuliah Pemrograman Web</title>
		<link rel="stylesheet" type="text/css" href="Stylee.css">
	</head>
	<body>
		<table border="0" width="100%" style="background: linear-gradient(30deg, #3498db, #1b2631);">
			<tr>
				<td><img src="logo.png" width="80px" height="85px" align="right"></td>
				<td><h2 align="center"><font face="ms reference sans serif" color="white">DINAS KOMUNIKASI DAN INFORMATIKA DAERAH ISTIMEWA YOGYAKARTA</h2></td>
			</tr>
		</table>
		<table border="0" class="garis" width="100%" height="50px">
			<tr>
				<td width="300px"></td>
				<td width="85px"><a href="Awalwebsite.html" class="tombol"><font face="ms reference sans serif"><p align="center">HOME</p></a></td>
				<td width="125px"><a href="Dashboard.html" class="tombol"><font face="ms reference sans serif"><p align="center">DASHBOARD</p></a></td>
				<td width="90px"><a href="Berita.html" class="tombol"><font face="ms reference sans serif"><p align="center">BERITA</p></a></td>
				<td width="92px"><a href="Galeri.html" class="tombol"><font face="ms reference sans serif"><p align="center">GALERI</p></a></td>
				<td width="150px"><a href="ContohBerita.php" class="tombol"><font face="ms reference sans serif"><p align="center">CONTOH BERITA</p></a></td>
				<td width="300px"></td>
			</tr>
		</table>
		<table border="0" width="100%" bgcolor="#f8f9f9">
			<tr>
				<td width="800px" valign="top">
					<table border="0" align="right" width="750px" class="kotak" cellpadding="15" cellspacing="15">
						<tr>
							<td><img src="jogja4.png" height="400px" width="685px">
							<p align="left"><font face="ms reference sans serif">12-Oct-2021</p>
							<h1 align="left">Dinas Komunikasi dan Informatika DIY menyelenggarakan Pelatihan Penetration Testing bagi Tim JOGJAPROVCISRT</h1>
							<p align="justify">Yogyakarta - Selasa (12/10/2021) Dinas Komunikasi dan Informatika (Diskominfo) DIY melalui Bidang Keamanan Informasi dan Persandian menyelenggarakan Pelatihan Penetration Testing bagi tim JOGJAPROVCISRT di Ruang Kresna, Lynn Hotel, Jogokaryan, Yogyakarta. Pelatihan dilaksanakan selama 2 hari yaitu pada tanggal 12-13 Oktober 2021 dan  diikuti sebanyak 24 orang yang terdiri dari perwakilan Dinas Kominfo Kabupaten/Kota, Kejati, Korem dan Polda DIY.</p>
							<p align="justify">Dalam sambutannya, Bapak Ir. Rony Primanto Hari, M.T. selaku Kepala Diskominfo DIY menyampaikan bahwa di era globalisasi yang serba digital mempengaruhi pemanfaatan teknologi informasi, media dan komunikasi menjadi faktor yang mampu mengubah perilaku masyarakat maupun peradaban manusia secara ptomasi dan menumbuhkan inovasi disrupstif yang dapat mengubah tataran industri konvensional. Pandemi Covid-19 telah mempercepat transformasi digital, yang telah membuka peluang baru bagi cybercrime. Hal ini senada dengan laporan interpol yang memetakan ancaman siber di Asia Tenggara tahun 2020 yaitu Business E-mail Compromise (BEC), phishing, ransomware, penyadapan data e-commerce, crimeware as a service, cyber scams, dan cryptojacking. </p>
							<p align="justify">Pada sektor Infrastruktur Informasi Vital Nasional (IVN), konsekuensi logis dari kondisi ini menempatkan teknologi informasi maupun internet of things (IOT) menjadi pedang bermata dua karena selain memberikan kontribusi bagi peningkatan proses bisnis dan kemajuan dalam memberikan pelayanan ke pelanggan, sekaligus menjadi sarana efektif perbuatan melawan hukum di dunia siber atau kejahatan siber. Serangan siber ke Indonesia meningkat dua kali lipat di tahun 2020. Dari hasil monitoring Pusopskamsinas BSSN, telah mendeteksi serangan siber yang bersifat teknis pada tahun 2020 mencapai 495.337.202 serangan ini meningkat dua kali lipat yang pada tahun 2019 hanya 228.277.875 serangan.</p>
							<p align="justify">Keamanan siber telah menjadi isu utama bagi setiap Penyelenggara Sistem Elektronik (PSE). Untuk meminimalisir risiko dari segala bentuk ancaman siber salah satunya dilakukan dengan menerapkan pengujian keamanan secara berkala. Sejalan dengan pembentukan tim JOGJAPROVCISRT tahun 2021 dan upaya untuk memberikan pengetahuan serta peningkatan kompetensi personil CSIRT (Computer Security Incident Response Team), maka Pemda DIY melalui Diskominfo berkomitmen untuk menyelenggarakan Pelatihan Penetration Testing dengan narasumber yang kompeten dibidangnya.</p>
							<p align="justify">Pelatihan ini bertujuan untuk meningkatkan awareness terhadap ancaman keamanan siber di lingkungan DIY, meningkatkan kerjasama dan sinergitas pengamanan siber antar instansi di DIY, dan memberikan pengetahuan bagi tim mengenai cara melakukan penetration testing. Kedepannya para anggota tim JOGJAPROVCISRT diharapkan dapat melakukan Penetration Testing secara mandiri pada aplikasi yang dikelola pemerintah di DIY.</p></td>
						</tr>
					</table>
				</td>
				<td width="400px" valign="top" rowspan="2">
					<table border="0" width="335px" valign="top" class="kotak" cellpadding="15" cellspacing="15">
						<tr>
							<td>
								<div class="judul"><font face="ms reference sans serif"><h3>KATEGORI BERITA</h3></div>
								<p><ul><li><a href="" class="tombol">Acara Internal</a></li></p>
								<p><li><a href="" class="tombol">Berita Kementrian</a></li></p>
								<p><li><a href="" class="tombol">Berita Pemda</a></li></p>
								<p><li><a href="" class="tombol">Berita Update</a></li></p>
								<p><li><a href="" class="tombol">Hiburan</a></li></p>
								<p><li><a href="" class="tombol">Info Mudik</a></li></p>
								<p><li><a href="" class="tombol">Pengumuman</a></li></p>
								<p><li><a href="" class="tombol">Press Release</a></li></ul></p>	

								<div class="judul"><font face="ms reference sans serif"><h3>BERITA POPULER</h3></div>
								<p><img src="berita1.jpeg" width="255px"></p>
								<h3><a href="" class="tombol">Kedepankan Edukasi dalam Penertiban Pelanggaran Frekuensi Radio</a></h3>
								<p><img src="berita2.jpg" width="255px"></p>
								<h3><a href="" class="tombol">BUDAYA PEMERINTAHAN "SATRIYA"</a></h3>
								<p><img src="berita3.jpeg" width="255px"></p>
								<h3><a href="" class="tombol">Resmi Pindah Kantor, Menkominfo Harapkan BAKTI Tingkatkan Kinerja</a></h3>
								<p><img src="berita4.jpeg" width="255px"></p>
								<h3><a href="" class="tombol">Skor Kinerja Pemerintah Naik</a></h3>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td width="800px">
					<table border="0" align="right" width="750px" valign="top" class="kotak" cellpadding="15" cellspacing="15">
						<tr>
							<td>
								<div class="judul"><font face="ms reference sans serif"><h3>KOMENTAR PEMBACA</h3></div><br>
								<div>
									<form action="" method="post">
										<textarea class="komen" name="komentar" placeholder="Isikan Komentar"></textarea><br>
										<button class="submit" type="submit" name="proses">SUBMIT</button>
									</form>
								</div>
							</td>	
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table border="0" height="60px" width="100%">
			<tr>
				<td align="center" style="background: linear-gradient(30deg, #1b2631, #3498db) !important;"><font face="ms reference sans serif">Tugas Kelompok Pemrograman Web - Ilham Suryana dan Rizka Dianrani</td>
			</tr>
		</table>
	</body>
</html>