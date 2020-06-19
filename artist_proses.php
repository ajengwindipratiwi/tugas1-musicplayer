<?php 

// Config
require_once "inc/config.php";
include "app/Artist.php";
$art = new App\Artist();

if ($_POST['btn-simpan']) {
	$art->input();
	header("location:artist_tampil.php");
}

if ($_POST['btn-update']) {
	$art->update();
	header("location:artist_tampil.php");
}
