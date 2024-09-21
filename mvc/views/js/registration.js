$(document).ready(function(){
    $("#email").on("input", function() {
        var email = $(this).val();
        $.ajax({
            url: "../controllers/checkEmail.php",
            method: "POST",
            data: { email: email },
            success: function(response) {
                if(response === "exists") {
                    $("#email-error").text("Email already exists");
                } else {
                    $("#email-error").text("");
                }
            }
        });
    });
});