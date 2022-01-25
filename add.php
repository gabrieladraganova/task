<?php 
require('./smartyHeader.php');
include 'db.php';

		$sth = $dbh->prepare("SELECT category_id, cat_name FROM categories");
		$sth->execute();
		$result2 = $sth->fetchAll();
		if(isset($_POST['save']))
		{	
			$image = file_get_contents($_FILES['image']['tmp_name']);
			$sql = "INSERT INTO products (category_id, name, image, price)
			VALUES (:cat_id, :name, :image, :price)";
			$statement = $dbh->prepare($sql);
 			$statement->bindValue("cat_id", $_POST['category_id']);
 			$statement->bindValue("name", $_POST['name']);
 			$statement->bindValue("image", $image);
 			$statement->bindValue("price", $_POST['price']);

 			$statement->execute();
 			header("Location:index.php");
		}

		
$smarty->assign('result',$result2);
$smarty->display('add.tpl');
?>