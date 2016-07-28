<?php   
include 'database1.php';
/*The purpose of this file is to fetch records from  the database table named table1 
and prepare the customized user profile.
*/  
global $cnt;
global $arr2;
$i = 0; 
$sql ="SELECT LongName,Industry,Website FROM my_db.sp500"; 
$result = $conn->query($sql);   
    if (mysqli_num_rows($result) > 0) 
    {
    $i=mysqli_num_rows($result);
    $LongName= array();    
    $Industry= array();
    $Website= array();        
    while($row = mysqli_fetch_assoc($result)) 
        {
          $LongName[] = $row["LongName"];
          $Industry[] = $row["Industry"];          
          $Website[] = $row["Website"];                 
                  
        }
        }
?>               