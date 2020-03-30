<p>my database</p>


<?php
$user = 'root';
$password = 'root';
$db = 'online_student';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

if($success){
  echo "database connected";

}
else {
  die("database not connected");
}
?>


<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "online_student";
$prefix = "";
$port=3306;

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");
?>
