<?php
$email = trim($_POST["email"]);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email address <br>";
} else {
    echo "Invalid email address <br>";
}
$password = trim($_POST["password"]);
if (!empty($password)){
    echo "password: ".$password."<br>";
}
else{
    echo "The password was not set. <br>";
}
?>