<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'baoapp');
 
/* Attempt to connect to MySQL database */
$db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
else if($con === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

else if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>