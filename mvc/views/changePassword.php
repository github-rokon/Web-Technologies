<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <script src="js/changePasssword.js"></script>
</head>
<body>

    <form method="post" action="../controllers/changePasswordAction.php">
        <label for="old_password">Old Password</label>
        <input type="password" id="old_password" name="old_password">
        <span id="password-error"></span>
        <br><br>
        
        <label for="new_password">New Password</label>
        <input type="password" id="new_password" name="new_password">
        <br><br>

        <input type="submit" value="Change Password">
    </form>

    <script>
    $(document).ready(function(){
        $("#old_password").on("input", function() {
            var old_password = $(this).val();
            $.ajax({
                url: "../controllers/checkOldPassword.php",
                method: "POST",
                data: { old_password: old_password },
                success: function(response) {
                    if(response === "incorrect") {
                        $("#password-error").text("Old password is incorrect");
                    } else {
                        $("#password-error").text("");
                    }
                }
            });
        });
    });
    </script>

</body>
</html>
