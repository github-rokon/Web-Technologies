<?php session_start(); 
if(!isset($_SESSION['loggedIn'])){
header("Location: Login.php");
exit();   
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashoard </title>
    </head>
<body>

<h2>Dashoard</h2>
<p> Welcome,<?php echo $_SESSION['username']; ?></p>

<hr>
<a href="Logout.php">Logout</a>

</body>
</html>
