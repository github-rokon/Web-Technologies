<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    </head>
<body>


<form action="LogInAction.php" method="post" novalidate>
    <table>
      
    <tr>
        
        <td>

            <fieldset>
            <legend>Log In</legend>
                <table>
                    
                    <tr>
                        <th><label for="uname">Username</label></th>
                        <td>:</td>
                        <td><input type="text" id="uname" name="uname" value="">
                        <?php echo isset($_SESSION['unameErr']) ? $_SESSION['unameErr'] : "" ?></td>
                    </tr>
                    
                    <tr>
                        <th><label for="password">Password</label></th>
                        <td>:</td>
                        <td><input type="password" id="pssword" name="password" value="">
                        <?php echo isset($_SESSION['passwordErr']) ? $_SESSION['passwordErr'] : "" ?></td>
                    </tr>
                    
                   
                      
            
                </table>
            </fieldset>
            <input type="submit" value="Sign In">
            
        </td>

    </tr>
         
    </table>
        
    </form>

    <?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : "" ?>


</body>
</html>
