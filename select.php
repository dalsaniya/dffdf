<?php
  include("conn.php");
  
   if(isset($_REQUEST['id']))
    {
      echo $qry="delete from pma_bookmark where id=".$_REQUEST['id'];
        if(mysql_query($qry))
        {
            header('location:select.php');
        }
        
    }
?>

<html>
    <body>
        <form action="#" method="post">
            <table align="center" border="1">
            <h1 align="center">Select form</h1>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Mobile_no</td>
                    <td>Hobies</td>
                    <td>Option</td>
                </tr>
                <?php
                 $str="select * from pma_bookmark";
                $res=mysql_query($str);
                while($row=mysql_fetch_array($res))
                   {
                   echo "<tr>";
                      echo "<td align='center'>".$row['name']."</td>";
                       echo "<td align='center'>".$row['email']."</td>"; 
                      echo "<td align='center'>".$row['mobile_no']."</td>";
                       echo "<td align='center'>".$row['hobies']."</td>";
                        echo"<td align='center'>";  
                      echo "<a href='update.php?id=".$row['id']."'>Update</a><br>";
                        echo"<td align='center'>";                       
                      echo "<a href='delete.php?id=".$row['id']."'>Delete</a><br>";
                      echo "</td>";
                      echo "</tr>";
                   }
                ?>
               
                </tr>
            </table>
        </form>
    </body>
</html>