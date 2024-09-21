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