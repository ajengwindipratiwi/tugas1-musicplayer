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
		<h2>Hello Music Lovers, Welcome to MUSIC IS LIFE</h2>
		<br>
		<h3>"DAFTAR ARTIS"</h3>
			</font>
		</font>
		</center>
		
	<br>
	<a href="artist_input.php">Tambah Data Artis</a>
	<br>
	<br>

	<?php 
	include "app/Artist.php";
	$art = new App\Artist();
	$rows = $art->tampil();

	?>

	 <table>
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>EDIT</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['artist_id']; ?></td>
			<td><?php echo $row['artist_name']; ?></td>
			<td><a href="artist_edit.php?id=<?php echo $row['artist_id']; ?>">Edit</a></td>
		</tr>
	<?php } ?>
</table>
	<br>
	</div>

	<!-- ini untuk footer -->
	<div class="footer">

		<?php  include "footer.php"; ?>
	
	</div>

</div>

</body>
</html>