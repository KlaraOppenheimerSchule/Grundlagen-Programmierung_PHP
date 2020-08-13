<?php
//importing all the stuff needed
require_once('controllers/main.php');
require_once('controllers/room.php');
require_once('models/JSON_Handler.php');

//instance a main controller
$lo_main = new main();

/*check for POST-variables and process the input.
This alongside with the tables and buttons in the view is not an optimal construct, but it is for easy implementation of a GUI for this assignment */
if ($_POST) {
	foreach ($lo_main->getRooms() as $lo_room) {
		$li_ID = $lo_room->getID();
		if (isset($_POST[ $li_ID ])) {
			switch ($_POST[ $li_ID ]) {
				case "check-in":
					$lo_main->checkIn($li_ID);
					break;
				case "check-out":
					$lo_main->checkOut($li_ID);
					break;
			}
		}
	}
	if (isset($_POST["addRoom"])){
		$lo_main->addRoom();
	}
}


require_once('views/overview.php');