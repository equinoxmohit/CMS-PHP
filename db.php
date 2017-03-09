<?php
    $db_url='localhost';
    $db_username='root';
    $db_password='';
    $db_name='cms_practice';
    $connection=mysqli_connect($db_url,$db_username,$db_password,$db_name);
    if(!$connection){
        die("Is not connected".mysqli_error($connection));
    }
 ?>
