<?php

$hostname = "192.168.50.199";
$username = "ext-com";
$password = "Ext-Com089";
$database = "lehrling";

$connection = new mysqli($hostname, $username, $password, $database);
$sqltotal = "SELECT * FROM clickstotal WHERE clicks_id = 1";
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

$arrayR = $result->fetch_assoc();

$clicks = $arrayR['click'];
$multi = $arrayR['multi'];
$onemore = $clicks + $multi;
$onekless = $clicks - 1000;


if (isset($_POST['input']) && $_POST['input'] === 'click') {
    $sql = "UPDATE clickstotal SET click = ($onemore)";
    $clicks = $onemore;
    if ($connection->query($sql) === TRUE) {
        // echo "registriert";
    } else {
        echo "broken" . $connection->error;
    }

}else 
if (isset($_POST['input']) && $_POST['input'] === "remove1k") {
    $multi2 = $multi + 2;
    $sql = "UPDATE clickstotal
            SET click = $onekless, 
            multi = $multi2";
    $clicks = $onekless;
    if ($connection->query($sql) === TRUE) {
        // echo "registriert";
    } else {
        echo "broken" . $connection->error;
    }
}
echo $clicks;






