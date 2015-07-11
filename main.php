<?php
include("config.php");
$protocol = $_SERVER["SERVER_PROTOCOL"];
$udid = $_SERVER["HTTP_X_UNIQUE_ID"];
$ip = $_SERVER['REMOTE_ADDR'];

if (!$udid) {
	error("403 You Are Not An iPhone");
	return;
}

$request = $_GET["request"];
$extension = pathinfo($request, PATHINFO_EXTENSION);

if (!file_exists($request) && $extension =! "deb") {
	error("404 Not Found");
	return;
}
if (!file_exists($request) && $extension == "deb") {
	$dirname = pathinfo($request, PATHINFO_DIRNAME);
	$filename = pathinfo($request, PATHINFO_FILENAME);
	if(!preg_grep("/^$filename/", scandir($dirname))){
		error("404 Not Found");
		return;
	}
}

if (file_exists("auth/$ip")) {
	$username = file_get_contents("auth/$ip");
	if (!checkUDID($username) || (time()-filemtime("auth/$ip") > 300)) {
		unlink("auth/$ip");
		error("403 Not Authenticated");
		return;
	}
	if ($extension) {
		header("Content-Type: application/vnd.debian.binary-package");
		header("Content-Disposition: attachment; filename=\"$request\"");
		header("Content-Length: ".filesize($request));
	}
	switch($uniquepackages){
		case TRUE:
			echo file_get_contents($request.".".file_get_contents("auth/$ip")));
			break;
		default:
		case FALSE:
			echo file_get_contents($request);
			break;
	}
	unlink("auth/$ip");
}
else{
	error("403 Not Authenticated");
}

function error($exit) {
	global $protocol;
	header(sprintf("$protocol $exit"));
}

function checkUDID($username) {
	global $checkudids, $udids, $udid;
	if(!$checkudids){
		return TRUE; 
	}
	return array_key_exists($username, $udids) && in_array(hash('sha256', $udid), $udids[$username]);
}
?>
