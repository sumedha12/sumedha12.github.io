<?php

/*This file is called when the job_newsfeed page is created. If the user selects an item from the Browse jobs selection
 * then the selectteam files is called and SESSION variable is populated, otherwise
 * a general SQL statement from Line noumber 34 is called. If the user selects any job then the an array in the 
 * session variable is populated and only the user selected records are fetched.
*/

include 'database1.php';
global $arr2;
if ($_SESSION["val"]=="cat") 
    {
if(!empty($_SESSION['arr2']) )
{
    $ar2=$_SESSION['arr2'];
$sql = "SELECT company_name,id,skills,designation,experience,pref_locn,name_contact,email,id FROM my_db.jobs where skills IN ($ar2)";
}
 if(!empty( $_SESSION['arr3'])){
    $ar3=$_SESSION['arr3'];
$sql ="SELECT company_name,id,skills,designation,experience,pref_locn,name_contact,email,id FROM my_db.jobs where pref_locn IN ($ar3)";        
//echo $sql;
}
if(!empty( $_SESSION['arr3'])&& !empty( $_SESSION['arr2']))
    {
    $ar2=$_SESSION['arr2'];
    $ar3=$_SESSION['arr3'];
$sql = "SELECT company_name,id,skills,designation,experience,pref_locn,name_contact,email,id FROM my_db.jobs where skills IN ($ar2) UNION 
SELECT company_name,id,skills,designation,experience,pref_locn,name_contact,email,id FROM my_db.jobs where pref_locn IN ($ar3)";    
}
}

 if ((empty( $_SESSION['arr3'])&& empty( $_SESSION['arr2']) )||($_SESSION["val"]!="cat"))
     {
 
$sql = "SELECT company_name,id ,skills,designation, experience,pref_locn,name_contact,email,id FROM my_db.jobs";
 
//echo $sql;
 }
$result = $conn->query($sql);   
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
          $skills[] = $row["skills"];
          $pref_locn[] = $row["pref_locn"];          
        }
        }           
 $work_locn = $_SESSION["work_locn"];
$stmt = $conn->prepare("SELECT company_name,designation, experience FROM my_db.jobs WHERE pref_locn = ? ");
$stmt->bind_param("s", $work_locn);
     $company_names = array();
    $designations = array();
    $experiences = array();

$result = $stmt->execute();
 $stmt->bind_result($company_names,$designations,$experiences);
 $k=0;
     while ($stmt->fetch()) {
          $companynames[$k] = $company_names;
          $designtions[$k] = $designations;          
          $experces[$k] = $experiences;
          $k++;
     }   
      ?>
