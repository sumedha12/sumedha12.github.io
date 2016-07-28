<?php
 $servername ="127.0.0.1:3307";         
$username = "root";
$password = "Dvibhsu11";
 
$conn = new mysqli($servername, $username, $password,'my_db');
$conn1 = mysql_connect($servername, $username, $password);
global $cnt;
global $arr2;
if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
$id=$_GET["id"]
    ?>
