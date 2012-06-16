<?php
    ob_start();
    include("conn.php");
    if(isset($_GET["id"]))
    {
    echo $qry="delete from pma_bookmark where id=".$_GET["id"];
    mysql_query($qry);
    header("location:select.php");
        
    }
?>
 
