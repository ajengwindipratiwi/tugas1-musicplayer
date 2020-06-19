<?php 

$login="index.php";
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['user_email']);
unset($_SESSION['user_password']);
session_destroy();
echo "<script>
eval(\"parent.location='login.php'\");
alert ('Anda berhasil logout');
</script>";

 ?>