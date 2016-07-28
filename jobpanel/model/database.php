
<?php
/*This file is for the user  news page. It fetches records from table1 and shows them to the user in a news feed 
like format.
*/
include 'database1.php';
if(isset($_GET['submit'])){ 
$sql = "SELECT name, id,image,experience, work_locn, skills,work_pref FROM table1 where skills IN ($arr2)";
 }
 else{
$sql = "SELECT username, id ,img,experience, work_locn, skills,work_pref FROM table1";
$cnt++;
 }
$result = $conn->query($sql);   
   if (mysqli_num_rows($result) > 0) 
    {
    $i=mysqli_num_rows($result);
    $username = array();    
    $experience = array();
    $work_locn = array();
    $work_pref= array();
    $skills = array();
    $id = array();
    $img = array();
    while($row = mysqli_fetch_assoc($result)) 
        {
          $username[] = $row["username"];
          $img[] = $row["img"];          
          $experience[] = $row["experience"];         
          $work_locn[] = $row["work_locn"];
          $skills[] = $row["skills"];
          $work_pref[] = $row["work_pref"];
          $id[] = $row["id"];
        }
        }            

//$sql2 = "SELECT id,name_paper FROM published where id=''";
//$result1 = $conn->query($sql2);   
 //if (mysqli_num_rows($result1) > 0) 
   // {
    //$i=mysqli_num_rows($result1);
    //$id = array();
    //$name_paper = array();
    //while($row = mysqli_fetch_assoc($result1)) 
      //  {
        //  $id[] = $row["id"];
          //$name_paper[] = $row["name_paper"];                    
        //}        
    //}
    ?>