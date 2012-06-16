<?php
  include("conn.php");
  if(isset($_POST["insert"]))
  {
  $nm=$_POST["name"];
  $em=$_POST["email"];
  $mo=$_POST["mobile_no"];
  if(isset($_REQUEST["hobies"]))
  {
      $qry=implode(",",$_REQUEST["hobies"]);
  }
  
  echo $str="insert into pma_bookmark(name,email,mobile_no,hobies) values('$nm','$em','$mo','$qry')";
  mysql_query($str);
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
                        <input type="submit" name="insert" value="insert">
                        <input type="reset" name="reset" value="reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

  

