<?php 
require('./smartyHeader.php');
include 'db.php';

$sth = $dbh->prepare("SELECT * FROM categories");
$sth->execute();
$result2 = $sth->fetchAll();

$order_sql = '';
if (isset($_GET['order'])) {
	if ($_GET['order'] === 'desc') {
	  $order_sql = ' order by products.price desc';
	} else if ($_GET['order'] === 'asc') {
	  $order_sql = ' order by products.price asc';
	} else {
		$order_sql = '';
	}
}

$sth = $dbh->prepare("SELECT products.product_id, products.name, products.image, products.price, categories.cat_name FROM products INNER JOIN categories ON products.category_id=categories.category_id" . $order_sql .";");
$sth->execute();
$result = $sth->fetchAll();
if(isset($_GET['betweenfrom'])&&($_GET['betweento']))
		{	 
			$sql = "SELECT products.product_id, products.name, products.image, products.price, categories.cat_name FROM products INNER JOIN categories ON products.category_id=categories.category_id WHERE products.price BETWEEN :val1 and :val2" . $order_sql.";";
			$statement = $dbh->prepare($sql);
 			$statement->bindValue("val1", $_GET['betweenfrom']);
 			$statement->bindValue("val2", $_GET['betweento']);
 			$statement->execute();
 			$result = $statement->fetchAll();
		}

$smarty->assign('data', $result);
$smarty->assign('data2',$result2);

$smarty->display('index.tpl');

 ?>