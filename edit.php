<?php
	require_once "edit.logic.php";
	$id = $_GET['id'];
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Verjaardagskalender</title>
 	<link rel="stylesheet" href="main.css">
 </head>
 <body>
	<form method="post">
		<h1>Verjaardag aanpassen</h1>
		<p><label>Persoon:</label>
		<input type="text" id="person" name="person" value="<?=$birthdays['person']?>">
		<?php
		?>
		<p><label>Datum:</label>
		<select name="day" >
			<?php 
				for($curday=1; $curday<=31; $curday++)
			{ 
					if ($curday == $birthdays['day']) {
						?> 
			<option selected value="<?=$curday?>"><?=$curday?></option><?php
					}
					else {
						?> 
			<option value="<?=$curday?>"><?=$curday?></option><?php
						}	
			}
			?> 
		</select>
		<select name="month">
			<?php
				for($curmonth=1; $curmonth<=12; $curmonth++)
			{ 
					if ($curmonth == $birthdays['month']) {
						?> 
			<option selected value="<?=$curmonth?>"><?=$curmonth?></option><?php
					}
					else {
						?> 
			<option value="<?=$curmonth?>"><?=$curmonth?></option><?php
						}	
			}
			?>
		</select>
		<select name="year">
		<?php 
				for($curyear=2016; $curyear>=1900; $curyear=$curyear-1)
			{ 
					if ($curyear == $birthdays['year']) {
						?> 
			<option selected value="<?=$curyear?>"><?=$curyear?></option><?php
					}
					else {
						?> 
			<option value="<?=$curyear?>"><?=$curyear?></option><?php
						}	
			}
			?>
		</select><br>
		<input type="submit" name="confirmed" value="save">
		<input type="submit" name="canceled" value="cancel">
	</form>
</body>
 </html>