<?php
$users = array(
	"user1" => "9c2f708fe1a002528f928149b500de301616313ae8454fa0b0907de8c28c3d3b",
	"user2" => "ae7aa35102f486eaa8321d609c78179226a8a991bd3914c1c0f126dfa66df418"
);
//add users in the users array. keys are usernames, values are twice sha256'd passwords.

$uniquepackages = FALSE;
//if set to TRUE, pythech-repo will look for (packagename).(username),
//for example if goeo_ is trying to download pink.goeo.internetfriends_0.1-1_iphoneos-arm.deb, he'll get pink.goeo.internetfriends_0.1-1_iphoneos-arm.deb.goeo_
//this is for extreme DRMs that require unique packages for every user.
?>
