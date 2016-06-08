<?php
	require_once "index.logic.php";
?>

<html>
	<head>
		<title>Verjaardagskalender</title>
		 <link href="main.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<?php 
	$curMonth = null;
	$curday = null;
    $id = null;
        foreach ($birthdays as $birthday) {
            if ($birthday['month'] != $curMonth) {
                echo "<h1>" . $months[$birthday['month'] -1] . "</h1>";
                $curMonth = $birthday['month'];
                $curday = null;
            } 
            if ($birthday['day'] != $curday) {
            	 echo "<h2>" . $birthday['day'] . "</h2>";
                $curday = $birthday['day'];
            }
            ?>
            
            <p>
                <a href="edit.php?id=<?= $birthday['id']; ?>"><?= $birthday['person']; ?> (<?= $birthday['year']; ?>)</a>
                <a href="delete.php?id=<?= $birthday['id']; ?>">x</a>
            </p>
        <?php
        }
        ?>
        
        <h1 class="create"><a href="create.php">+ Toevoegen</a></h1>
        <p></p>
	</body>
</html>


