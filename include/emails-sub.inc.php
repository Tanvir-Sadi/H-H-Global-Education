<?php

require_once 'dbh.inc.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

$sql = "INSERT INTO `email_subcriberjuly2021`(`name`, `email`) VALUES (?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL error";
}else{
    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);
    
    header("Location: ..?s=success");
}
