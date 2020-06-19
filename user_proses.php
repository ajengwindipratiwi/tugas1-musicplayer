<?php

// Config
require_once "inc/config.php";
include "app/User.php";

$user = new App\User();

if ($_POST['btn-simpan']) {
	$user->input();
	header("location:user_tampil.php");
}

if ($_POST['btn-update']) {
	$user->update();
	header("location:user_tampil.php");
}
