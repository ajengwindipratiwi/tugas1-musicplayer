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

	include "app/User.php";

	$id = $_GET['id'];

	$user = new App\User();
	$row = $user->edit($id);
	?>

		<br>
		<center>
		<font color="#3d3d3e">
			<font face="Courier New">
		<h2>EDIT DAFTAR PENGGUNA</h2>
			</font>
		</font>
		</center>
		<br>
	<form method="POST" action="user_proses.php">
	<input type="hidden" name="user_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" required=""></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>
				<input type="password" name="user_password">
				<div><small>Kosongkan jika tidak ingin diubah</small></div>
			</td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td><input type="text" name="user_email" value="<?php echo $row['user_email']; ?>" required=""></td>
		</tr>
		<tr>
			<td>NAMA LENGKAP</td>
			<td><input type="text" name="user_nama_lengkap" value="<?php echo $row['user_nama_lengkap']; ?>" required=""></td>
		</tr>
		<tr>
			<td>ROLE</td>
			<td>
				<select name="user_role">
					<option value="1"<?php echo $row['user_role']==1 ? " selected" : ""; ?>>Administrator</option>
					<option value="2"<?php echo $row['user_role']==2 ? " selected" : ""; ?>>Operator</option>
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