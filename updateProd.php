<?php 
require('./smartyHeader.php');
include 'db.php';
$sth = $dbh->prepare("SELECT category_id, cat_name FROM categories");
		$sth->execute();
		$result2 = $sth->fetchAll();
		$smarty->assign('result',$result2);

if(isset($_POST["save"])) {
	if (isset($_FILES['image']['tmp_name'])) {
		$sql = "UPDATE products SET category_id=:cat_id, name=:name, image=:image, price=:price WHERE product_id=:id";
		$statement = $dbh->prepare($sql);
		$image = file_get_contents($_FILES['image']['tmp_name']);
		$statement->bindValue("image", $image);
	} else {
		$sql = "UPDATE products SET category_id=:cat_id, name=:name, price=:price WHERE product_id=:id";
		$statement = $dbh->prepare($sql);
	}	
 	$statement->bindValue("cat_id", $_POST['category_id']);
 	$statement->bindValue("id", $_POST['id']);
 	$statement->bindValue("name", $_POST['name']);
 	$statement->bindValue("price", $_POST['price']);
 	$statement->execute();

 	header("Location:index.php");
}
	$sql2 = "SELECT * from products where product_id = :id";
	$statement = $dbh->prepare($sql2);
	$statement->bindValue("id", $_GET['id']);
	$statement->execute();
	$product = $statement->fetch();
	$smarty->assign('product', $product);
	$smarty->display('updateProd.tpl');
?>