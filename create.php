<?php
	require_once "create.logic.php";
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Verjaardagskalender</title>
 	<link rel="stylesheet" href="main.css">
 </head>
 <body>
	<form method="post">
		<h1>Verjaardag toevoegen</h1>
		<p><label>Persoon:</label>
		<input type="text" name="name"></p>
		<p><label>Datum:</label>
		<select name="day" >
			<?php 
				for($curday=1; $curday<=31; $curday++)
			{ ?>
			    <option value="<?=$curday?>"><?=$curday?></option><?php
			}
			?> 
		</select>
		<select name="month">
			<?php
				for($curmonth=1; $curmonth<=12; $curmonth++)
			{ ?> 
				<option value="<?=$curmonth?>"><?=$curmonth?></option><?php
			}
			?>
		</select>
		<select name="year">
		<?php 
				for($curyear=2016; $curyear>=1900; $curyear=$curyear-1)
			{ ?>
			    <option value="<?=$curyear?>"><?=$curyear?></option><br>
			<?php
			}
			?>
		</select><br>
		<input type="submit" name="confirmed" value="save">
		<input type="submit" name="canceled" value="cancel">
	</form>
</body>
 </html>