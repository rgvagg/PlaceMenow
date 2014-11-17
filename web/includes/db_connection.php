<?php
//create db connection
define("DB_SERVER", "localhost");
define("DB_USER", "rgv");
define("DB_PASS", "abc");
define("DB_NAME", "rgv");
/*
$dbhost ="localhost";
$dbuser="rgv";
$dbpass="abc";
$dbname="rgv"; */
$connection=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()){
die("db connection failed". mysqli_connect_error(). mysqli_connect_errno());
}
#else { echo "success";}
?>