<?php
session_start();
global $arr;
global $arr2;
global $arr1;
$i = 0;
$k = 0;

if(isset($_GET['submit'])){
if(!empty($_GET['item'])){
foreach($_GET['item'] as $selected){
$arr[$i] = $selected;
$i++;
echo $selected;
}
}
if(!empty($_GET['items'])){
{
unset ($_SESSION['arr2']);
}
}
if(!empty($_GET['items1'])){
{
unset ($_SESSION['arr3']);
}
}
if(!empty($_GET['item1'])){
foreach($_GET['item1'] as $selected){
$arr1[$k] = $selected;
$k++;
}
}
if((!empty($_GET['item'])))
{
$_SESSION['arr2']=array();
$arr2 = implode(',',$arr);  
$_SESSION['arr2'] = implode(',',$arr);  
}
if((!empty($_GET['item1'])))
{
$_SESSION['arr3']=array();
$arr4 = implode(',',$arr1);  
$_SESSION['arr3'] = implode(',',$arr1);  
}
}
$_SESSION['val'] = "cat";
        header("Location:http://localhost/jobpanel/job_newsfeed.php");    
?>      
