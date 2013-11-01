<?php
    include 'includes/connection.php';
	
    $query = "SELECT * FROM people";
	
	$result = mysql_query($query);
	
	while($person = mysql_fetch_array($result))
	{
		echo"<h3>" . $person['Name'] . "</h3>";
		echo "<p>" . $person['Description'] . "</p>";
		echo "<a href=\"modify.php?id=" . $person['ID'] . "\">Modify User</a>";
		echo "<span>   </span>";
		echo "<a href=\"delete.php?id=" . $person['ID'] . "\">Delete User</a>";
	}
?>
<h1>Create A User</h1>
<form action="create.php" method="post">
	Name<input type="text" name="inputName" value="" /><br />
	Description<input type="text" name="inputDesc" value="" />
	<br />
	<input type="submit" name="submit" />
</form>
