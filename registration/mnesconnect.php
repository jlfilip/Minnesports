<?php
$connection = mysqli_connect('jfkldsjfdsl', 'jfkldsjflsd', '*dfhjksfklsdjf');
if (!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'minnesports');
if (!$select_db){
	die("Database Selection Failed" . mysqli_error($connection));
}