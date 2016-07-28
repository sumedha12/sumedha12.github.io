  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
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
/*It is first checked that weather the user has come after submitting the signup form. 
 * If YES then the database records are created and the user is re-directed to the next page.*/

if (isset($_POST['username'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];

$query = "insert into table1(username, password ,lname ,email) values ('$username', '$password' ,'$lname' ,'$mail')"; //Insert Query
echo "Form Submitted succesfully";
if ($conn->query($query) === TRUE) {
header("Location: http://localhost/jobpanel/home_1.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
/*It is first checked that weather the user has come after submitting the second form. 
 * If YES then the database records are created and the user is re-directed to the next page.*/

else if (isset($_POST['CollegeName'])){
$hghestqual = $_POST['hghestqual'];
$CollegeName = $_POST['CollegeName'];
$university = $_POST['university'];
$experience = $_POST['experience'];
$query = "SELECT COUNT(id) as total FROM my_db.table1"; 
$result = mysql_query($query) or die(mysql_error());
$data=mysql_fetch_assoc($result);
$id = $data['total']+1;
echo "id::";
echo $id;

$query = "update table1 set hghestqual = '$hghestqual', CollegeName =  '$CollegeName',"
        . "university = '$university',experience = '$experience' where id= $id"; 

if ($conn->query($query) === TRUE) {
        header("Location:http://localhost/jobpanel/home_2.html");    

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "Error: " . $query ;
}
}
/*It is first checked that whether the user has come after submitting the third form on signup page. 
 * If YES then the database records are created and the user is re-directed to the next page.*/

else if (isset($_POST['skills'])){
$skills = $_POST['skills'];
$work_pref = $_POST['work_pref'];
$work_locn = $_POST['work_locn'];
$work_time = $_POST['work_time'];

$query = "SELECT COUNT(id) as total FROM my_db.table1"; 
$result = mysql_query($query) or die(mysql_error());
$data=mysql_fetch_assoc($result);
$id = $data['total']+1;
echo $id;
$query = "update table1 set skills ='$skills', work_pref = '$work_pref',work_locn ='$work_locn',"
        . "work_time='$work_time' where id= $id"; 

if ($conn->query($query) === TRUE) {
        header("Location:http://localhost/jobpanel/home.html");    

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    
}
}
/*It is first checked that weather the user has come after submitting the login form. 
 * If YES then the user  enters into the website Home page.*/

else if (isset($_POST['emails'])) 
{
$email = $_POST['emails'];
$password = $_POST['pass'];
$stmt = $conn->prepare("SELECT username,skills,work_locn,id FROM my_db.table1 WHERE email = ? and password =?");
 $stmt->bind_param("ss", $email,$password);
 $result = $stmt->execute();
 $stmt->bind_result($username,$skills,$work_locn,$id);
     while ($stmt->fetch()) {
       $cnt++;  
        printf("%s\n", $username,$skills,$work_locn,$id);
    }
if($cnt == 0){

echo "<script>
alert('There are no matching records. You need to signup first');
window.location.href='http://localhost/jobpanel/home.html';
</script>";
}else{
    /*If the user successfuly logs in then the session is created and session variables are stored.*/

    session_start();
    $_SESSION["skills"] = $skills;
    $_SESSION["work_locn"] = $work_locn;
    $_SESSION["username"] = $username;
    $_SESSION["id"] = $id;
    $_SESSION['$arr2'] = array();
    $_SESSION['$arr3'] = array();
    $_SESSION['val'] = "a";
    header("Location:http://localhost/jobpanel/job_newsfeed.php");    
}
}
?>
