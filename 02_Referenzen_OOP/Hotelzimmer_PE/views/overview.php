<?php
?><!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Zimmerverwaltung</title>
	</head>
	<body>
		<h1>Zimmerverwaltung</h1>
		<form method="post">
			<table>
				<?php foreach ($lo_main->getRooms() as $lo_room): ?>
					<tr>
						<td>
							<label>Zimmer: <?=$lo_room->getID()?> <input style="color:<?=( ! $lo_room->getChecked()) ? "green" : "red"?>" type="submit" name="<?=$lo_room->getID()?>" value="<?=( ! $lo_room->getChecked()) ? "check-in" : "check-out"?>"></label>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</form>
	</body>
</html>