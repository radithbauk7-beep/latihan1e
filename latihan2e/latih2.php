<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Curriculum Vitae (CV)</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="container">

	<h1>CURRICULUM VITAE(CV)</h1><hr>
	<table class="Identitas">
		<tr>
			<!-- Kolom Foto -->
		<td class="Kolom-Foto"> 
			<img src="../image/profil-Radith.jpeg" alt="Foto Profil" width="200">
		</td>
		<!-- Kolom Identitas -->
		<td style="vertical-align: top;">
			<h2>Identitas Diri</h2>
			<table>
				<tr></tr>
		<td><strong>Nama Lengkap</strong></td>
		<td>:</td>
		<td>Cristian Radith Bauk</td>
	</tr>
	<tr>
		<td><strong>Nim</strong></td>
		<td>:</td>
		<td>51250086</td>
	</tr>
	<tr>
		<td><strong>Program Studi</strong></td>
		<td>:</td>
		<td>Teknologi Informasi</td>
	</tr>
	<tr>
		<td><strong>Tempat, Tanggal Lahir</strong></td>
		<td>:</td>
		<td>Fatuoni, 28 juli 2006</td>
	</tr>
	<tr>
		<td><strong>Alamat</strong></td>
		<td>:</td>
		<td>Nonotbatan, Timor tengah utara, Nusa tenggara timor</td>
	</tr>
	<tr>
		<td><strong>No.HP</strong></td>
		<td>:</td>
		<td>081239028621</td>
	</tr>
</table>
</td>
</tr>
</table>

<hr>
<h2>Profil Singkat</h2>
<p>Saya adalah mahasiswa program studi <strong> Teknologi informasi Universotas Timor</strong>
Saya memiliki ketertarikan pada perkembangan, khusus dalam bidang <strong>Web Development</strong>. saya memiliki motivasi untuk terus belajar dan mengembangkan kemampuan saya dalam bidang teknologi informasi agar dapat meberikan manfaat bagi masyarakat
</p>
<div class="grid-informasi">
<div class="card">
<h2>Riwayat Pendidikan</h2>
<ol>
	<li>SDK Fatuoni</li>
	<li>SMPN Biboki Anleu</li>
	<li>SMAN Biboki Anleu</li>
</ol>
</div>
<div class="card">
<h2>Hobi</h2>
<ul>
	<li>Bola Voli</li>
</ul>
</div>
<div class="card">
<h2>Bidang Minat</h2>

<ul>
	<li>Web Development</li>
	<li>Jaringan Komputer</li>
	<li>UI/UX Design</li>
	<li>Data Analisis</li>
</ul>
</div>
</div>
<p> Bidang yang paling saya minati adalah <strong><u>Web Development</u></strong>karna saya mau membuat web yang bisa digunakan banyak orang.
</p>
<hr>
<h2>Mata Kuliah Semester ini</h2>
<table class ="tabel-matakuliah">
	<tr>
		<th>No.</th>
		<th>Kode MK</th>
		<th>Nama Mata Kuliah</th>
		<th>SKS</th>
	</tr>
	<tr>
		<td>1</td>
		<td>TI201</td>
		<td>Pemrograman Dasar Web</td>
		<td>3</td>
	</tr>
	<tr>
		<td>2</td>
		<td>TI202</td>
		<td>Basis Data</td>
		<td>3</td>
	</tr>
	<tr>
		<td>3</td>
		<td>TI203</td>
		<td>Organisasi dan Organisai Komputer</td>
		<td>3</td>
	</tr>
</table>

<hr>

<h2>Target Cita-Cita</h2>
<p>Target saya salama menempuh pendidikan di program studi teknologi informasi adalah meningkatkan kemampuan dalam <em>pemrograman dan pengembangan teknologi</em>.Saya berharap dapat menjadi seorang <strong>Web Development</strong>yang mampu menghasilkan aplikasi web yang bermanfaat bagi masyarakat.
</p>
<p>Kunjungi website resmi <a href="https://unimor.ac.id" target="_blank">Universitas Timor </a>
</p>
<hr>
<h2><strong>Form Kontak</strong></h2>
<p>Silahkan mengisi form berikut untuk menghubungi saya.</p>
<form id="formkontak">
	<div>
		<label for="nama">Nama Lengkap</label>
		<input type="text" id="Nama" name="nama"
		placeholder="Masukan Nama Lengkap Anda">
	</div>
	<div>
		<label for="email">Email</label>
		<input type="text" id="Email" name="email"
		placeholder="Masukan Email Anda">
	</div>
	<div>
		<label for="nama">Nomor Telpon</label>
		<input type="number" id="telepon" name="telepon"
		placeholder="Masukan Nomor Telpon Anda">
	</div>
	<div>
		<label for="minat">Bidang Minat</label>
		
		<select name="minat" id="minat">
			<option value="">Pilih Bidang Minat</option>
			<option value="web">Web Development</option>
			<option value="uiux">UI/UX design</option>
			<option value="ai">Artificial Intelligent</option>
			<option value="data">Data Analisis</option>
		</select>
	</div>
	<div>
		<label for="pesan">Pesan</label>
		<textarea name="pesan" id="pesan" rows="5" placeholder="Tuliskan pesan Anda"></textarea>
	</div>
	<button type="submit">Kirim Pesan ke WhatshApp</button>
	<button type="reset">Reset</button>
</form>
<hr>
<p>CV ini dibuat sebagai latihan Mata Kuliah Pemrograman Web Dasar.</p>
<p>Made with Love by Cristian Radith Bauk</p>

	</div>
	<script src=" ../formkontak.js"></script>
</body>

</html>
