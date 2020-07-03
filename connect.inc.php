<?php

// $conn_error = 'Could not connect';
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_db = "ighub";

// Connect to database
@$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

// Check connection
if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}
    
?>