<!DOCTYPE html>
<?php 
	include 'DatabasesEnOOP.database.class.php';
	$db = new Database('week2');
?>
<html>

<head>
	<title>Databases en OOP</title>
</head>

<body>
	<?php
		// voeg een gebruiker toe
		$query = "
			INSERT INTO ws_gebruikers (geb_voornaam, geb_achternaam)
			VALUE ('New', 'Teach')";
		$db->doSQL($query);

		// lees alle gebruikers uit
		$query = "
			SELECT *
			FROM ws_gebruikers";
		$db->doSQL($query);
    ?>
    <table>
    	<tr>
    		<th>Id</th>
    		<th>Voornaam</th>
    		<th>Achternaam</th>
    	</tr>
    	<?php while ($row = $db->readRecord()) {?>
    	<tr>
    		<td><?php echo $row['geb_id']; ?></td>
    		<td><?php echo $row['geb_voornaam']; ?></td>
    		<td><?php echo $row['geb_achternaam']; ?></td>
    	</tr>
    	<?php } ?>
    </table>
    
</body>

</html>