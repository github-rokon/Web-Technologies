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
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);

    if (mysqli_stmt_execute($stmt)) {
        return true;
    }

    return false;
}

function emailExists($email) {
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
        return true;
    }

    return false;
}


function matchCredentials($pEmail, $pPassword) {

	$conn = mysqli_connect("localhost", "root", "", "test");

	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT email, password FROM ep WHERE email = '$pEmail' and password = '$pPassword'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) === 1) {
		return true;
	} 
	
	return false;
}


function isOldPasswordCorrect($email, $oldPassword) {
    $conn = mysqli_connect("localhost", "root", "", "test");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT password FROM ep WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $password);
    mysqli_stmt_fetch($stmt);

    if (password_verify($oldPassword, $password)) {
        return true;
    }

    return false;
}


function updateUserProfile($email, $name, $phone) {
    $conn = mysqli_connect("localhost", "root", "", "test");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE ep SET name = ?, phone = ? WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $name, $phone, $email);

    if (mysqli_stmt_execute($stmt)) {
        return true;
    }

    return false;
}


function updatePassword($email, $newPassword) {
    $conn = mysqli_connect("localhost", "root", "", "test");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "UPDATE ep SET password = ? WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $newPassword, $email);

    if (mysqli_stmt_execute($stmt)) {
        return true;
    }

    return false;
}



?>