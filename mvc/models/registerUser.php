<?php 



function registerUser($email, $password) {
    $conn = mysqli_connect("localhost", "root", "", "test");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT email FROM ep WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        
        return false; 
    }

    mysqli_stmt_close($stmt);

  

    $sql = "INSERT INTO ep (email, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPassword);

    if (mysqli_stmt_execute($stmt)) {
        return true;
    }

    return false;
}



?>