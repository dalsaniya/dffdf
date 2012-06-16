<?php
   include("conn.php");
    $id=$_GET['id'];
   $sel = "select * from pma_bookmark where id=".$_GET['id'];
    $res = mysql_query($sel);
    $row= mysql_fetch_array($res);
    mysql_query($row);
    if(isset($_POST['update'])) 
   {
     $id=$_GET['id'];
    
    $nm = $_POST['name'];
    $em=$_POST['email'];
    $mo=$_POST['mobile'];
    
 
    
     echo $upd="UPDATE `user`.`pma_bookmark` SET `name` = '$nm',`email`='$em',`mobile_no` = '$mo' WHERE `register`.`id` = $id";
   
        mysql_query($upd);
        header("location:select.php");
   
    
   } 
?>


<html>
    <body>
        <form action="#" method="post">
            <table align="center"border="1">
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>                
                    <td>
                        <input type="text" name="email">
                    </td>
                </tr>   
                <tr>
                    <td>Mobile_no</td>
                    <td>
                        <input type="text" name="mobile_no">
                    </td>
                </tr>
                <tr>
                    <td>Hobies</td>
                    <td>
                        <input type="checkbox" name="hobies[]" value="cricket">Cricket
                        <input type="checkbox" name="hobies[]" value="volibol">Volibol
                   <br>
                        <input type="checkbox" name="hobies[]" value="futbool">Futbool
                        <input type="checkbox" name="hobies[]" value="tenis">Tenis
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="submit" name="update" value="update">
                        <input type="reset" name="reset" value="reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

  

