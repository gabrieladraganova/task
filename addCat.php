<?php 
require('./smartyHeader.php');
include 'db.php';

if(isset($_POST["save"])){

$sql = "INSERT INTO categories (cat_name, description)
VALUES (:cat_name, :description)";
$statement = $dbh->prepare($sql);
 	$statement->bindValue("cat_name", $_POST['name']);
 	$statement->bindValue("description", $_POST['descr']);
 	$statement->execute();

 	header("Location:index.php");
}

$smarty->display('addCat.tpl');
?>