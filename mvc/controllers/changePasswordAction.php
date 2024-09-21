<?php
session_start();
require "../models/User.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $oldPassword = sanitize($_POST['old_password']);
    $newPassword = sanitize($_POST['new_password']);
    $confirmPassword = sanitize($_POST['confirm_password']);
    $email = $_SESSION['email']; // Assuming email is stored in the session after login

    $_SESSION['err1'] = "";
    $_SESSION['err2'] = "";
    $_SESSION['err3'] = "";
    $isValid = true;

    // Check if the old password is correct
    if (!isOldPasswordCorrect($email, $oldPassword)) {
        $_SESSION['err1'] = "Old password is incorrect.";
        $isValid = false;
    }

    // Check if new password and confirm password match
    if ($newPassword !== $confirmPassword) {
        $_SESSION['err2'] = "New password and confirmation do not match.";
        $isValid = false;
    }

    // Ensure new password isn't empty
    if (empty($newPassword)) {
        $_SESSION['err3'] = "New password cannot be empty.";
        $isValid = false;
    }

    // If everything is valid, update the password
    if ($isValid) {
        if (updatePassword($email, $newPassword)) {
            $_SESSION['success'] = "Password changed successfully.";
            header("Location: ../views/home.php"); // Redirect to a success page
        } else {
            $_SESSION['err4'] = "Failed to update the password.";
            header("Location: ../views/changePassword.php");
        }
    } else {
        header("Location: ../views/changePassword.php");
    }
}

function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
