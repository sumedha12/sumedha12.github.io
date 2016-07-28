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
$ide= $_GET["id"];    
$stmt ="SELECT * FROM my_db.sp500 WHERE LongName ='$ide'"; 
$result = $conn->query($stmt);   

if (mysqli_num_rows($result) > 0) 
    {
    $i=mysqli_num_rows($result);
    $description= array();    
    $Ticker= array();    
    $PrimaryExchange = array();    
    $Website= array();    
    $TEL= array();    
    $Sector= array();    
    $Rating= array();    
    $employees= array();    
    $address= array();    
    $industry= array();    
    $sub_industry= array();    
    $revenue= array();    
    while($row = mysqli_fetch_assoc($result)) 
        {
           $description[] = $row["Description"];
           $Ticker[] = $row["Ticker"];
           $PrimaryExchange[] = $row["Primary Exchange"];
           $Website[] = $row["Website"];
           $TEL[] = $row["TEL"];
           $Sector[] = $row["Sector"];
           $Rating[] = $row["S&P Long Term Rating"];
           $CurrentEmployees[] = $row["Current Employees"];
           $address[] = $row["Company Address"];
           $industry[] = $row["Industry"];
           $sub_industry[] = $row["Sub-Industry"];
        } 
    }
$stmt ="SELECT * FROM my_db.sp500 WHERE LongName ='$ide'"; 
$result = $conn->query($stmt);   
if (mysqli_num_rows($result) > 0) 
    {
    $i=mysqli_num_rows($result);
    $description= array();    
    $Ticker= array();    
    $PrimaryExchange = array();    
    $Website= array();    
    $TEL= array();    
    $Sector= array();    
    $Rating= array();    
    $employees= array();    
    $address= array();    
    $industry= array();    
    $sub_industry= array();    
    $revenue= array();    
    while($row = mysqli_fetch_assoc($result)) 
        {
           $description[] = $row["Description"];
           $Ticker[] = $row["Ticker"];
           $PrimaryExchange[] = $row["Primary Exchange"];
           $Website[] = $row["Website"];
           $TEL[] = $row["TEL"];
           $Sector[] = $row["Sector"];
           $Rating[] = $row["S&P Long Term Rating"];
           $CurrentEmployees[] = $row["Current Employees"];
           $address[] = $row["Company Address"];
           $industry[] = $row["Industry"];
           $sub_industry[] = $row["Sub-Industry"];
        } 
    }
?>               