<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_ttms';

$connection = mysqli_connect($hostname,$username,$password);
if($connection){
	/*echo "Server connected";*/
	$db_select = mysqli_select_db ($connection,$dbname);
	if($db_select){
		/*echo "Database selected";*/
	}else{
		die('Database not selected'.mysql_error($connection,$db_select));
	}
}else{
	die('Server not connected'.mysqli_error($conneciton));
}

 ?>