<?php

$users = array(
	"user1" => "b747047a1e4c9442afd96508cf8603e7ef92ed209a473cb58943bc604c6719b8",
	"user2" => "b747047a1e4c9442afd96508cf8603e7ef92ed209a473cb58943bc604c6719b8"
);
//add users in the users array. keys are usernames, values are twice sha256'd passwords.

$checkudids = FALSE;
//if this is set to yes, errrr will check users against specified udids in $udids

$udids = array(
"user1" => array("b747047a1e4c9442afd96508cf8603e7ef92ed209a473cb58943bc604c6719b8", "b747047a1e4c9442afd96508cf8603e7ef92ed209a473cb58943bc604c6719b8"),
"user2" => array("b747047a1e4c9442afd96508cf8603e7ef92ed209a473cb58943bc604c6719b8")
);
//add the same username as well as their udid(s) once sha256'd in an array (in order to support multiple devices)

$uniquepackages = FALSE;
//if set to TRUE, errrr will look for (packagename).(username),
//for example if goeo_ is trying to download pink.goeo.internetfriends_0.1-1_iphoneos-arm.deb, he'll get pink.goeo.internetfriends_0.1-1_iphoneos-arm.deb.goeo_
//this is for extreme DRMs that require unique packages for every user.
?>
