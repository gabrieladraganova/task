<?php 
require('./smartyHeader.php');
include 'db.php';

	$sql = "DELETE FROM Products WHERE product_id=:id";
      
	$statement = $dbh->prepare($sql);
 	$statement->bindValue("id", $_POST['id']);
 	
 	$statement->execute();


?>