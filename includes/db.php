<?php 

//Making the connection with constants define()
$db['db_host'] ="localhost";
$db['db_user'] ="root";
$db['db_password'] ="";
$db['db_name'] ="cms";


//$key would be, for example, 'db_host', and its $value = 'localhost'
//with strtoupper, we transform the $key in upper letters: DB_HOST
foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

if(!$connection){
	die("Database is not connected");
}

?>