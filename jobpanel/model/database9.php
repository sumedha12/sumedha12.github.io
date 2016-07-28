<?php
/*This file is for the user  news page. It fetches records from table1 and shows them to the user in a news feed 
like format.
*/
   include 'database1.php';
/*The purpose of this file is to fetch records from  the database table named table1 
and prepare the customized user profile.
*/  
global $cnt;
global $arr2;
$i = 0;
$link = mysql_connect('127.0.0.1:3307','root','Dvibhsu11');
$servername ="127.0.0.1:3307";         
$username = "root";
$password = "Dvibhsu11";
$conn = new mysqli($servername, $username, $password,'my_db');
if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
$ide= $_GET["id"];    
$stmt ="SELECT * FROM  my_db.geography WHERE location2 =' $ide'"; 
echo $stmt;
$result = $conn->query($stmt);   
if(mysql_errno()){
    echo "MySQL error ".mysql_errno().": "
         .mysql_error()."\n<br>When executing <br>\n$query\n<br>";
}

if (mysqli_num_rows($result) > 0) 
    {
    
    $i=mysqli_num_rows($result);
    $name = array();    
    $ticker = array();    
    $location = array();    
    $location2 = array();    
    
    while($row = mysqli_fetch_assoc($result)) 
        {
           $name[] = $row["name"];
           $ticker[] = $row["ticker"];
           $location[] = $row["location"];
           $location2[] = $row["location2"];           
        } 
        echo $name[0];
    }
?> 
