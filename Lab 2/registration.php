<!DOCTYPE html>
<html>
<head>
    <title>Registration </title>
    </head>
<body>

<h2>Registration</h2>
<form >
    <table>
      
      <tr>
        <td>

    <fieldset>
    <legend>General Information</legend>
        <table>
            
            <tr>
                <th><label for="fname">First Name</label></th>
                <td>:</td>
                <td>
                    <?php 
                    echo $_POST["fname"];
                    ?>
                </td>
            </tr>
            
            
            <tr>
                <th><label for="lname">Last Name</label></th>
                <td>:</td>
                <td>
                    <?php 
                    echo $_POST["lname"];
                    ?>
                </td>
            </tr>   
            
            <tr>
                <th><label for="gender">Gender</label></th>
                <td>:</td>
                <td>
                    <?php 
                    echo $_POST["gender"];
                    ?>
                </td>
            </tr>

            <tr>
                <th><label for="ftrname">Father's Name</label></th>
                <td>:</td>
                <td>
                    <?php 
                    echo $_POST["ftrname"];
                    ?>
                </td>
                <td><label for="myfile"></label><input type="file" id="myfile" name="myfile"></td>
            </tr>

            <tr>
                <th><label for="mtrname">Mother's Name</label></th>
                <td>:</td>
                <td>
                    <?php 
                    echo $_POST["mtrname"];
                    ?>
                </td>
            </tr>

            <tr>
                <th><label for="bg">Blood Group</label></th>
                <td>:</td>
                <td>
                    <?php 
                    echo $_POST["bg"];
                    ?>
                </td>
            </tr>
            
            <tr>
                <th><label for="religion">Religion</label></th>
                <td>:</td>
                <td><?php 
                    echo $_POST["religion"];
                    ?></td>
            </tr>
              
           
        </table>
    </fieldset>

            </td>



              <td>

<fieldset>
<legend>Contact Information</legend>
    <table>
        

        <tr>
            <th><label for="email">Email</label></th>
            <td>:</td>
            <td>
                <?php 
                    echo $_POST["email"];
                ?>
            </td>
        </tr>
        
        
        <tr>
            <th><label for="pnum">Phone/Mobile</label></th>
            <td>:</td>
            <td>
                <?php 
                echo $_POST["pnum"];
                ?>
            </td>
        </tr>  
        
        <tr>
            <th><label for="website">Website</label></th>
            <td>:</td>
            <td>
                    <?php 
                    echo $_POST["website"];
                    ?>
            </td>
        </tr>
        

        <tr>
            <th><label for="address">Address</label></th>
            <td>:</td>
            <td><fieldset>
                <legend>Present Address</legend>
                    <table>
                        <tr>
                            
                            <tr><td><textarea name="textbox" rows="10" cols="30">
                                <?php 
                                echo $_POST["text"].$_POST["textbox"].$_POST["country"].$_POST["division"];
                                ?></textarea></td></tr>
                            
                            

                        </tr>
                    </table>
                </fieldset>
                    </td>
    


    </table>
</fieldset>

        </td>

        <td>

            <fieldset>
            <legend>Account Information</legend>
                <table>
                    
                    <tr>
                        <th><label for="uname">Username</label></th>
                        <td>:</td>
                        <td>
                            <?php 
                            echo $_POST["uname"];
                            ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <th><label for="password">Password</label></th>
                        <td>:</td>
                        <td>
                            <?php 
                            echo $_POST["password"];
                            ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <th><label for="password">Confirm Password</label></th>
                        <td>:</td>
                        <td>
                             <?php 
                            echo $_POST["password"];
                            ?>
                        </td>
                    </tr>
                      
            
                </table>
            </fieldset>
            <input type="submit" value="Register">
            
            </td>

          </tr>
         
        </table>
        
    </form>


</body>
</html>
