<?php
include("inc/db.php");
$logEmail = strtolower(mysqli_real_escape_string($conn, $_POST['logEmail']));
$logPass = mysqli_real_escape_string($conn, $_POST['logPass']);

$selectQuery = "SELECT * FROM {$tableName};";
$selectRes = mysqli_query($conn, $selectQuery);
$rows = mysqli_num_rows($selectRes);
$check = false;
if ($rows > 0) {
    while ($row = mysqli_fetch_assoc($selectRes)) {
        if ($logEmail == strtolower($row['email']) && $logPass == $row['pass']) {
            $check = true;
            session_start();
            $_SESSION['useremail'] = $logEmail;
            header('Location: main.php');
            break;
        }
    }
    if ($check === false) {
        header('Location: ../loginhtml.php');
    }
}
