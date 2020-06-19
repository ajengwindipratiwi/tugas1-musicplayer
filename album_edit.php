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
	
	<?php 
	include "app/Album.php";
	$id = $_GET['id'];

	$alb = new App\Album();
	$row = $alb->edit($id);
	$lst = $alb->listArtist();

	?>

		<br>
		<center>
		<font color="#3d3d3e">
			<font face="Courier New">
		<h2>EDIT DAFTAR ALBUM</h2>
			</font>
		</font>
		</center>
		<br>
	<form method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="album_name" value="<?php echo $row['album_name']; ?>" required=""></td>
		</tr>
		<tr>
			<td>ARTIS</td>
			<td>
				<select name="album_id_artist">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['artist_id']; ?>"<?php echo $row['album_id_artist']==$ls['artist_id'] ? " selected" : ""; ?>><?php echo $ls['artist_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-update" value="UPDATE"></td>
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