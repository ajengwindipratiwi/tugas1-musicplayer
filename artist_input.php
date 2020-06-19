<!DOCTYPE html>
<html>
<head>
	<title>TUGAS1 PEMROGRAMAN WEB</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>
<body>

<div>
	
	<!-- ini untuk header -->
	<div class="header">

		<?php  include "header.php"; ?>
	
	</div>

	<!-- ini untuk menu -->
	<div class="menu">

		<?php  include "menu.php"; ?>
	
	</div>


	<!-- ini untuk utama -->
	<div class="utama">
	<br>
	<center>
		<font color="#3d3d3e">
			<font face="Courier New">
		<h2>TAMBAH DAFTAR ARTIS</h2>
			</font>
		</font>
		</center>
		<br>
	<form method="POST" action="artist_proses.php">
	<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="artist_name" required=""></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>
	<br>
	</div>

	<!-- ini untuk footer -->
	<div class="footer">

		<?php  include "footer.php"; ?>
	
	</div>

</div>

</body>
</html>