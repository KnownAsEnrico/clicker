<?php

$hostname = "192.168.50.199";
$username = "ext-com";
$password = "Ext-Com089";
$database = "lehrling";

$connection = new mysqli($hostname, $username, $password, $database);
$sqltotal = "SELECT click FROM clickstotal WHERE clicks_id = 1";
$result = $connection->query($sqltotal);
if (!$result) {
    die("Error in SQL query: " . $connection->error);
}
$numRows = $result->num_rows;

/** checks the connection to DB */
if($connection->connect_error) {
    die("end" . $connection->connect_error);
}
else {
    // echo "connected\n";
}

echo (int) $result->fetch_assoc()['click'];




?>