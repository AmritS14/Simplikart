<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Remote
//$servername = "localhost";
//$username = "u843180945_testDBMS";
//$password = "DBMSCode@1423";
//$dbname = "u843180945_dbms";

// Local
$servername = "localhost";
$username = "test";
$password = "password";
$dbname = "simplikart";
$i = 1;

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo $conn;

?>