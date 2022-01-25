<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_database='task';

try {
  $dbh = new PDO("mysql:host=$servername;dbname=$db_database", $username, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>