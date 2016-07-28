    <?php
    require('/model/database3.php');
if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

$company_name=$_POST["company_name"];
$designation=$_POST["designation"];
$experience=$_POST["experience"];
$qualification=$_POST["qualification"];
$name_contact=$_POST["name_contact"];
$email=$_POST["email"];
$pref_locn=$_POST["pref_locn"];
$skills=$_POST["skills"];

$query = ("INSERT INTO jobs (company_name,designation,experience,qualification,name_contact,email,pref_locn,skills)"
        . " VALUES ('$company_name','$designation','$experience','$qualification','$name_contact','$email','$pref_locn','$skills')");

if ($conn->query($query) === TRUE) {
        header("Location:http://localhost/jobpanel/job_newsfeed.php");    
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
?>
