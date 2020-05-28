<?php


class JSON_Handler {

	public function save (array $aa_data): void {
		file_put_contents("db.json", json_encode($aa_data));
	}


	public function load () {
		return json_decode(file_get_contents("db.json"));
	}
}