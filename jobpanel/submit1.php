<?php
session_start();
$servername ="127.0.0.1:3307";         
$username = "root";
$password = "Dvibhsu11";

 $conn = new mysqli($servername, $username, $password,'my_db');
$conn1 = mysql_connect($servername, $username, $password);

 $cnt=0;
global $arr2;
if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
if (isset($_POST['newText1'])) 
{
  $name_paper=  $_POST['newText1'];
  $author= $_POST['newText2'];
   $title= $_POST['newText3'];
   $id = $_SESSION["id"];
$query = "insert into published(name_paper, author ,title,id) "
            . "values ('$name_paper', '$author' ,'$title','$id') "; 
if ($conn->query($query) === TRUE) {echo "true";
} else {
}
}
if (isset($_POST['NewItem1'])) 
{
  $degree=  $_POST['NewItem1'];
   $college =$_POST['NewItem3'];
   $branch= $_POST['NewItem2'];
   $id = $_SESSION["id"];
   echo $id;
$query = "insert into education(degree, branch ,college,id) "
            . "values ('$degree', '$branch' ,'$college','$id') "; 
echo "Form Submitted succesfully";
if ($conn->query($query) === TRUE) {echo "true";
} else {
 
}
}
?>