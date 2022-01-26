<?php 
require('./smartyHeader.php');
include 'db.php';

if(isset($_POST["save"])){
	
	$sql = "UPDATE categories SET cat_name=:b, description=:a WHERE category_id=:id";
      
	$statement = $dbh->prepare($sql);
 	$statement->bindValue("b", $_POST['name']);
 	$statement->bindValue("id", $_POST['id']);
 	$statement->bindValue("a", $_POST['description']);
 	$statement->execute();

 	header("Location:index.php");

}
	$sql2 = "SELECT * from categories where category_id = :id";
	$statement = $dbh->prepare($sql2);
	$statement->bindValue("id", $_GET['id']);
	$statement->execute();
	$category = $statement->fetch();
	
	$smarty->assign('category', $category);
	$smarty->display('updateCat.tpl');
?>