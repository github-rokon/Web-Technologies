<?php
require "../models/User.php";

if (isset($_POST['email'])) {
    $email = sanitize($_POST['email']);
    
    if (emailExists($email)) {
        echo "exists";
    } else {
        echo "not_exists";
    }
}

function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
