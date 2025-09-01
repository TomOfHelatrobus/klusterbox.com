<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP dev</title>
</head>
<body>
hello there!!!
<?php
session_start();
print "<br>";
echo '<p style="font-family:arial"><b>hello from php</b>';
print "<br>";
echo 'session id: '.session_id();
print "<br>";
include 'connection.php';
print "<br>";
$password = 'hellothere';
echo 'password: '.$password;
print "<br>";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo 'hash: '.$hash;
print "<br>";
$check_password = password_verify($password, $hash);
if ($check_password){
    echo 'password and hash are a match!';
}
else{
    echo 'ERROR: password and hash are NOT a match!';
}
print "<br>";
echo 'server address: '.$_SERVER['SERVER_ADDR'];
print "<br>";
echo "</p>";
phpinfo()
?>
</body>
</html>