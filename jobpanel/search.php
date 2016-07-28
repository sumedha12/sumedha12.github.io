<?php
$servername ="127.0.0.1:3307";         
$username = "root";
$password = "Dvibhsu11";
$conn = new mysqli($servername, $username, $password,'my_db');
global $cnt; 
global $arr2;
if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }  
$data = '%'.$_POST['data'].'%';
$query ="SELECT username FROM table1 WHERE username like '$data' LIMIT 8";
$result1 = $conn->query($query); 
        $i = 0;
 if (mysqli_num_rows($result1)) 
    {
    $name = array();    
    while($row = mysqli_fetch_assoc($result1)) 
        {
        $name[$i] = $row["username"];            
        $i++;        
        }
        $i = 0;
foreach($name as $value) 
    {   
       $names = str_replace($_POST['data'], '<b>'.$_POST['data'].'</b>', $name[$i]);
       echo '<li onclick="search(\''.$name[$i].'\')">'.$names.'</li>';
       $i++;
    }   
    }
    ?>