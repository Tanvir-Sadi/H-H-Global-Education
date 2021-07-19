<?php

require_once 'dbh.inc.php';

$Fullname = mysqli_real_escape_string($conn, $_POST['Fullname']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$Contact_Number = mysqli_real_escape_string($conn, $_POST['Contact_Number']);
$District = mysqli_real_escape_string($conn, $_POST['District']);
$IELTS = mysqli_real_escape_string($conn, $_POST['IELTS']);
$Degree = mysqli_real_escape_string($conn, $_POST['Degree']);


$sql = "INSERT INTO `registration2021`(`Fullname`, `Email`, `Contact_Number`, `District`, `IELTS`, `Degree`) VALUES (?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL error";
}else{
    mysqli_stmt_bind_param($stmt, "ssisss", $Fullname, $Email, $Contact_Number, $District, $IELTS, $Degree);
    mysqli_stmt_execute($stmt);
    
    header("Location: ..");
}
