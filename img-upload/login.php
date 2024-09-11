<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="loginAction.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="username" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="registration.php">Register here</a></p>
    </div>
</body>
</html>