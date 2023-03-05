<?php

$servername = "107.180.0.10";
// $servername = "localhost";
$username = "dbuser";
$password = "an6ddN1rNn-X";
$dbname = "nubeera_dbase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn_2 = new mysqli($servername, $username, $password, $dbname_2);
// Check connection
if ($conn_2->connect_error) {
    die("Connection failed: " . $conn_2->connect_error);
}
