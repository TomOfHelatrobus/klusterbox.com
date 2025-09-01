<?php
echo $_SERVER['REMOTE_ADDR'];
echo '<br>';
if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1'){
	$db_host = '127.0.0.1';
	$servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "test";
	$conn = mysqli_connect($servername, $username, $password, $db_name);
	if ($conn){
		echo "successful connection to local host";
		}
	else{
		echo "failure to connect to local host";
		}
}
else{
	$db_host = "localhost:3306";
	$db_host = 'localhost:3306';
	$servername = "127.0.0.1";
    $username = "tomweeks";
    $password = "pizza47";
    $dbname = "hello_db";
	$conn = mysqli_connect($db_host, "tomweeks", "pizza47", "hello_db");
	if ($conn){
		echo "successful connection to remote server";
		}
	else{
		echo "failure to connect to remote server";
		}
}
/*
// Check if the table exists
$table_name = "admin_users";
$table_check_query = "SHOW TABLES LIKE '$table_name'";
$table_check_result = $conn->query($table_check_query);

// If the table doesn't exist, create it
if ($table_check_result->num_rows == 0) {
    // SQL to create table
    $sql = "CREATE TABLE $table_name (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL,
        permissions VARCHAR(50) DEFAULT 'basic',
    )";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Table $table_name created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
} else {
    echo "Table $table_name already exists";
}

// Close connection
$conn->close();

// Insert record into admin_users table
$email = "example@example.com";
$username = "admin";
$password = "admin_password"; // You should hash the password for security reasons in a real application
$permissions = "admin";

$sql = "INSERT INTO admin_users (email, username, password, permissions)
        VALUES ('$email', '$username', '$password', '$permissions')";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
?>