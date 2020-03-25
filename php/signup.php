<?php
include "inc/db.php";
$upUname = mysqli_real_escape_string($conn, $_POST['upUname']);
$upEmail = mysqli_real_escape_string($conn, $_POST['upEmail']);
$upPass = mysqli_real_escape_string($conn, $_POST['upPass']);
echo $upUname . "<br>" . $upEmail . "<br>" . $upPass;
$upConfirmPass = mysqli_real_escape_string($conn, $_POST['upConfirmPass']);
if ($upPass !== $upConfirmPass) {
    echo "Passwords doesn't match";
    header("Location: ../signuphtml.php");
} else {

    $insertQuery = "INSERT INTO {$tableName} (userName, email, pass) VALUES ('$upUname', '$upEmail', '$upPass');";
    $insertRes = mysqli_query($conn, $insertQuery);
    if ($insertRes) {
        echo "Registered Successfully!";
        header("Location: ../loginhtml.php");
    } else {
        echo "Registration failed: " . mysqli_error($conn);
    }
}
