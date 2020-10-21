<?php
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
define('employees', 'demo');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(localhost, DB_USERNAME, DB_PASSWORD, employees);
 
// Check connection
if($mysqli == false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>