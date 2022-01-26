<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db_database='task';

$servername = "localhost";
$username = "id18350683_taskgd";
$password = "bjZ{m33ef^e~PU7]";
$db_database = "id18350683_task";

// $servername = "sql102.epizy.com";
// $username = "epiz_30906068";
// $password = "CiqqpdeTZJD";
// $db_database='epiz_30906068_task';

try {
  $dbh = new PDO("mysql:host=$servername;dbname=$db_database", $username, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>