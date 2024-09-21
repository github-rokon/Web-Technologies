<?php
session_start();
require "../models/User.php";

if (isset($_POST['old_password'])) {
    $oldPassword = sanitize($_POST['old_password']);
    $email = $_SESSION['email']; // assuming the user is logged in and email is stored in session
    
    if (isOldPasswordCorrect($email, $oldPassword)) {
        echo "correct";
    } else {
        echo "incorrect";
    }
}

function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
