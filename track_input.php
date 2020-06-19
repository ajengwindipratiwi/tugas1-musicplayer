<!DOCTYPE html>
<html>
<head>
	<title>UTS PEMROGRAMAN WEB</title>
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
		<h2>TAMBAH DAFTAR TRACK</h2>
			</font>
		</font>
		</center>
		<br>
		<?php 
		include "app/Track.php";
		$alb = new App\Track();
		$lst = $alb->listAlbum();
		?>
	<form method="POST" action="track_proses.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="track_name" required=""></td>
		</tr>
		<tr>
			<td>ALBUM</td>
			<td>
				<select name="track_id_album">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['album_id']; ?>"><?php echo $ls['album_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>DURASI</td>
			<td><input type="text" name="track_time" required=""></td>
		</tr>
		<tr>
			<td>FILE (MP3)</td>
			<td><input type="file" name="track_file"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>
	
	</div>

	<!-- ini untuk footer -->
	<div class="footer">

		<?php  include "footer.php"; ?>
	
	</div>

</div>

</body>
</html>