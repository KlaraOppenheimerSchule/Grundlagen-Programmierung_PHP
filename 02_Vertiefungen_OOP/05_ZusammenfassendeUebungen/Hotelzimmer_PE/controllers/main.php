<?php


class main {


	private $la_rooms;
	private $lo_serializer;


	//simple constructor
	public function __construct () {
		$this->la_rooms = [];
		$this->lo_serializer = new JSON_Handler();
		//loading the room-data
		foreach ($this->load() as $lo_room) {
			array_push($this->la_rooms, new room($lo_room->id, $lo_room->checked));
		}
	}

	//generated getter-method for easy access
	/**
	 * @return array
	 */
	public function getRooms (): array {
		return $this->la_rooms;
	}


	// requested methods for room-management
	public function checkIn (int $ai_ID): void {
		foreach ($this->la_rooms as $lo_room) {
			if ($lo_room->getID() == $ai_ID) {
				$lo_room->checkIn();
			}
		}
		$this->persist();
	}


	public function checkOut (int $ai_ID): void {
		foreach ($this->la_rooms as $lo_room) {
			if ($lo_room->getID() == $ai_ID) {
				$lo_room->checkOut();
			}
		}
		$this->persist();
	}


	// functions for persisting data in a JSON-file
	public function persist (): void {
		foreach ($this->la_rooms as $lo_room) {
			$la_persistedRooms [] = $lo_room->jsonSerialize();
		}
		$this->lo_serializer->save($la_persistedRooms);
	}


	public function load (): array {
		return $this->lo_serializer->load();
	}


	// just some extra, I thought would be nice
	public function addRoom (): void {
		$li_ID = NULL;
		if ( ! empty($this->la_rooms)) {
			foreach ($this->la_rooms as $lo_room) {
				if ($lo_room->getID() > 1) {
					$li_ID = $lo_room->getID();
				}
			}
		}
		$li_ID++;
		$this->la_rooms[] = new room($li_ID, FALSE);
		$this->persist();
	}
}