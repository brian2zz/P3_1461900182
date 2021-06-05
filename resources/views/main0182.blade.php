<!DOCTYPE html>
<html lang="en">
<head>
	<title>Praktikum</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css.css') }}">

	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">Praktikum Pertemuan 3</h1>
		<h3 class="deskripsi">Febriansyah Dwi Kurnia Wicaksono (1461900182)</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="/">Dokter</a></li>
			<li><a href="/kamar">Kamar</a></li>
			<li><a href="/pasien">Pasien</a></li>
			<li><a href="/user">User</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	@yield('badan')
 
	</div>
</div>
</body>
</html>