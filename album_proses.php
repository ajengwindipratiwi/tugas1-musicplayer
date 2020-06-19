<?php 

// Config
require_once "inc/config.php";
include "app/Controller.php";
include "app/Album.php";

$alb = new App\Album();

if ($_POST['btn-simpan']) {
	$alb->input();
	header("location:album_tampil.php");
}

if ($_POST['btn-update']) {
	$alb->update();
	header("location:album_tampil.php");
}
