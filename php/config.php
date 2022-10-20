<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'db');
define('DB_USERNAME', 'devuser');
define('DB_PASSWORD', 'devpass');
define('DB_NAME', 'test_db');

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($mysqli === false){
  die("ERROR: Could not connect. " . $mysqli->connect_error);
} 
