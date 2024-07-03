<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $uname = sanitize($_POST['uname']);
    $password = sanitize($_POST['password']);
    
    $_SESSION['unameErr'] = "";
    $_SESSION['passwordErr'] = "";
    $_SESSION['msg'] = "";
	$_SESSION['username'] = "";

    $flag = true;

    if (empty($uname)) {
        $flag = false;
        $_SESSION['unameErr'] = "*Please provide the username";
    }
else{
	$_SESSION['username'] = $uname;
}

    if (empty($password)) {
        $flag = false;
        $_SESSION['passwordErr'] = "*Please provide the password";
    }

    if ($flag === true) {
        $db_uname = "abcd";
        $db_password = "1369";

        if ($uname === $db_uname && $password === $db_password) {
            $_SESSION["loggedIn"] = "Data matched!";
			header("Location: Dashboard.php");
        } else {
            $_SESSION['msg'] = "Data did not matched!";
			header("Location:LogIn.php");
        }
        
        
    } else {
        header("Location:LogIn.php");
        exit();
    }
} else {
    echo "Unauthorized Access;";
}

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
