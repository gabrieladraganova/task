<?php 
require('./smartyHeader.php');
include 'db.php';

	$sql = "DELETE FROM categories WHERE category_id=:id";
      
	$statement = $dbh->prepare($sql);
 	$statement->bindValue("id", $_POST['id']);
 	
 	$statement->execute();


?>