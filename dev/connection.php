<?php
echo $_SERVER['REMOTE_ADDR'];
echo '<br>';
if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1'){
	$conn = mysqli_connect("localhost", "root", "", "test");
	if ($conn){
		echo "successful connection to local host";
		}
	else{
		echo "failure to connect to local host";
		}
}
else{
	$db_host = "localhost:3306";
	$conn = mysqli_connect($db_host, "tomweeks", "pizza47", "hello_db");
	if ($conn){
		echo "successful connection to remote server";
		}
	else{
		echo "failure to connect to remote server";
		}
}



?>