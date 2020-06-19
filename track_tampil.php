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
		<h2>Hello Music Lovers, Welcome to MUSIC IS LIFE</h2>
		<br>
		<h3>"DAFTAR TRACK"</h3>
			</font>
		</font>
		</center>
		<br>
	<a href="track_input.php">Tambah Data Track</a>
		<br><br>
	<?php 

	include "app/Track.php";

	$trc = new App\Track();
	$rows = $trc->tampil();

	 ?>

	 <table>
	<tr>
		<th>NO</th>
		<th>JUDUL</th>
		<th>ALBUM</th>
		<th>WAKTU</th>
		<th>PUTAR</th>
		<th>EDIT</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['track_id']; ?></td>
			<td><?php echo $row['track_name']; ?></td>
			<td><?php echo $row['ALB'] . " - " . $row['ART']; ?></td>
			<td><?php echo $row['track_time']; ?></td>
			<td>
				<?php if (!empty($row['track_file'])) { ?>
					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $row['track_file']; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>					
					<?php } ?>
				</td>
				<td><a href="track_edit.php?id=<?php echo $row['track_id']; ?>">Edit</a></td>
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