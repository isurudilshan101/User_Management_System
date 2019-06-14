<?php

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='userdb';

$connection=mysqli_connect('localhost','root','','userdb');

//Checking the connection
if(mysqli_connect_error())
{
	die('Database connection failed' .mysqli_connect_error());
}
?>
