<?php
/*This file is for the user  news page. It fetches records from table1 and shows them to the user in a news feed 
like format.
*/
include 'database1.php';
$sql = "SELECT id,heading,description,img FROM startup";
$result = $conn->query($sql);   
   if (mysqli_num_rows($result) > 0) 
    {
    $i=mysqli_num_rows($result);
    $id= array();    
    $heading= array();
    $description= array();
        $img= array();

    while($row = mysqli_fetch_assoc($result)) 
        {
          $id[] = $row["id"];
          $heading[] = $row["heading"];          
          $description[] = $row["description"];                 
                    $img[] = $row["img"];                 
        }
        }        
$sql = "SELECT id,heading,description FROM startup";
$result = $conn->query($sql);   
$num_rows = mysqli_num_rows($result);
//echo "klkl";
//echo $num_rows;
     ?>               