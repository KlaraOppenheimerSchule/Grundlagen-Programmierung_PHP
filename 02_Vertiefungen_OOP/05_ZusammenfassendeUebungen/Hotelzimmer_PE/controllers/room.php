<?php


class room implements JsonSerializable {


	private $li_ID;
	private $lb_checked;


	public function __construct ($ai_ID, $ab_checked) {
		$this->li_ID = $ai_ID;
		$this->lb_checked = $ab_checked;
	}

	//requested methods for room-management
	public function checkIn (): void {
		$this->lb_checked = TRUE;
	}


	public function checkOut (): void {
		$this->lb_checked = FALSE;
	}

	//generated getter-methods for easy access

	/**
	 * @return int
	 */
	public function getID (): int {
		return $this->li_ID;
	}


	/**
	 * @return bool
	 */
	public function getChecked (): bool {
		return $this->lb_checked;
	}


	// preparing data for persisting
	public function jsonSerialize () {
		return [
			'id' => $this->li_ID,
			'checked' => $this->lb_checked,
		];
	}
}