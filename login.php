<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/login.css">
</head>
<body>

	<div class="login">

	<p class = "tulisan_login"> Silahkan Isi Email dan Password</p>

	<br>

	<form action="login_proses.php" method="POST">
	<table>
			<label>Email</label>
			<input type="email" name="user_email" class = "form_login" placeholder="Username..." >
		
			<label>PASSWORD</label>
			<input type="password" name="user_password" class = "form_login" placeholder="Password..." >
		
			<input type="submit" name="submit" value="LOGIN" class="tombol_login">
		
		<br>
	</table>
</form>
	
	</div>

</div>

</body>
</html>