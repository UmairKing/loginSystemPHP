<?php
define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASS', "123456");

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$dbName = "REG_DB";
if ($conn) {
    $dbQuery = "CREATE DATABASE IF NOT EXISTS {$dbName};";
    $dbRes = mysqli_query($conn, $dbQuery);
    if ($dbRes) {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, $dbName);
    } else {
        echo "Error creating db: " . mysqli_error($conn);
    }
}
$tableName = "userTable";
if ($conn && $dbRes) {
    $tableQuery = "CREATE TABLE IF NOT EXISTS {$tableName}
    (id INT NOT NULL AUTO_INCREMENT, userName VARCHAR (255), email NVARCHAR (320), pass VARCHAR(255), PRIMARY KEY (id));";
    $tableRes = mysqli_query($conn, $tableQuery);
    if ($tableRes) {
        echo "Table created successfully!";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
}
