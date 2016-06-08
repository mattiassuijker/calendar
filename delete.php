<html>
	<?php
	    require_once "delete.logic.php";
	?>
<body>
	<div>
	<form method="post">
		<input type="hidden" name="id" value="<?=$birthdays['id']?>">
			<label for="name">Name:</label>
			<span><?=$birthdays['person']?></span>
	</div>
		<div>
			<label>Wilt u deze persoon verwijderen?</label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
</body>