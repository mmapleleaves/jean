<?php
$dsn = 'mysql:dbname=pratice;host=localhost';
$user = 'mmapleleaves';
$pass = 'jeanonly0907';
 try {
	 $dbh = new PDO($dsn, $user, $pass);
}
catch (PDOException $e) {
	echo "資料庫連接失敗".$e;
}


?>