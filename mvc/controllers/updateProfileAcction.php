<?php
session_start();
require "../models/User.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitize($_POST['name']);
    $phone = sanitize($_POST['phone']);
    $email = $_SESSION['email']; // assuming the user is logged in and email is stored in session

    if (updateUserProfile($email, $name, $phone)) {
        echo "Profile updated successfully";
    } else {
        echo "Profile update failed";
    }
}

function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
