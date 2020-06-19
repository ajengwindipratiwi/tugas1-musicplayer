<?php

namespace App;

class Index extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function track()
	{
		$sql = "SELECT tr.*, al.album_name as ALB, ar.artist_name as ART
		FROM tb_track tr 
		INNER JOIN tb_album al ON tr.track_id_album=al.album_id
		LEFT JOIN tb_artist ar ON al.album_id_artist=ar.artist_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function album()
	{
		$sql = "SELECT tr.*, al.album_name as ALB, ar.artist_name as ART
		FROM tb_track tr 
		INNER JOIN tb_album al ON tr.track_id_album=al.album_id
		LEFT JOIN tb_artist ar ON al.album_id_artist=ar.artist_id ORDER BY ALB";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

}