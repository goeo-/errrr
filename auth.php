<?php
$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];

include("config.php");

if(array_key_exists($username, $users) && hash('sha256', hash('sha256', $password)) == $users[$username]){
	file_put_contents("auth/$ip", $username);
	echo("success");
}
else{
	echo("nope");
}
?>
