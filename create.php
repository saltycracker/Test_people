<?php
    include 'includes/connection.php';
	
	$name = $_POST['inputName'];
	$desc = $_POST['inputDesc'];
	
	if(!$_POST['submit'])
	  {
		echo "please fill out the form";
		header('Location: index.php');
	  }
	else
	  {																	
	  	mysql_query("INSERT INTO people (`ID`,`Name`,`Description`)
	  	      VALUES (NULL, '$name','$desc')") or die(mysql_error());
	  	      
	  	echo "User has been added !";
	  	header('Location: index.php');
	  }
	
?>