
<?php
   include 'database1.php';
/*The purpose of this file is to fetch records from  the database table named table1 
and prepare the customized user profile.
*/  
global $cnt;
global $arr2;
$i = 0;
$ide= $_GET["id"];
$stmt = $conn->prepare("SELECT id FROM my_db.table1 WHERE username =?"); //The user id is fetched using this statement. Since data in published and ducation table uses user id.
$stmt->bind_param('s',$ide );
$stmt->execute();
$stmt->bind_result($id);
$ida = array();

while ( $stmt->fetch() ) {
    $ida[$i] = $id;
    $i++;    
} 

$sql1 = 'SELECT name_paper,extra, author,title FROM published where id =?';
$stmt1 = $conn->prepare($sql1);
$stmt1->bind_param("i",$ida[0]);
$stmt1->execute();

$name_paper = array();

$stmt1->bind_result($name_paper,$extra,$author,$title);
$i=0;
$stmt1->execute();

$result = $stmt1->get_result();       
while($row = $result->fetch_array(MYSQLI_ASSOC)){    
    $name_paper[$i] = $row["name_paper"];    
    
    $extra[$i] = $row["extra"];
    $author[$i] = $row["author"];
    $title[$i] = $row["title"];
    
$i++;
};
$sql2 = 'SELECT degree,branch ,college FROM education where id =?';
$stmt1 = $conn->prepare($sql2);
$stmt1->bind_param("i",$ida[0]);
$stmt1->execute();

$stmt1->bind_result($degree,$branch,$colege);
$i=0;
$stmt1->execute();

$result = $stmt1->get_result();       
while($row = $result->fetch_array(MYSQLI_ASSOC)){    
    $degree[$i] = $row["degree"];    
    $branch[$i] = $row["branch"];
    $college[$i] = $row["college"];
    
$i++;
};
?>