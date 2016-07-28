<?php
/*The purpose of this file is tomake a connection with the database.
*/
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
    
if(!empty($_SESSION['locn']))
{
$id=$_SESSION['locn'];
$sql = "SELECT company_name,id,skills,designation,experience,pref_locn,name_contact,email,id FROM my_db.jobs where pref_locn = '$id'";
echo $sql;
$result =  $conn->query($sql);   
   if (mysqli_num_rows($result) > 0) 
    {
    $i=mysqli_num_rows($result);
    $company_name = array();
    $designation = array();
    $experience = array();
    //$job_description = array();
    $name_contact = array();
    $email = array();
    $ide = array();
    $pref_locn = array();
    
    $skills = array();
    while($row = mysqli_fetch_assoc($result)) 
        {
          $company_name[] = $row["company_name"];
          $designation[] = $row["designation"];          
          $experience[] = $row["experience"];
//          $qualification[] = $row["qualification"];
      //    $job_description[] = $row["job_description"];
          $name_contact[] = $row["name_contact"];;
          $email[] = $row["email"];
          $ide[] = $row["id"];
                echo $ide[0];

          $skills[] = $row["skills"];
          $pref_locn[] = $row["pref_locn"];          
        }   
    }
}

?>