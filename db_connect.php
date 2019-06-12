<?php
function db (){
	global $link;
	$link = mysqli_connect("localhost", "root", "", "todolist") or die("couldn't connect to database");
	return $link;
}
if (db()){
	
}