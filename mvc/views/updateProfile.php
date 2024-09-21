<!DOCTYPE html>
<html>
<head>
    <title>Update Profile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <form id="updateProfileForm" method="post" novalidate>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="">
        <br><br>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="">
        <br><br>

        <input type="submit" value="Update Profile">
    </form>

    <div id="update-status"></div>

    <script>
    $(document).ready(function(){
        $("#updateProfileForm").on("submit", function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url: "../controllers/updateProfileAction.php",
                method: "POST",
                data: formData,
                success: function(response) {
                    $("#update-status").html(response);
                }
            });
        });
    });
    </script>

</body>
</html>
