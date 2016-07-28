<!DOCTYPE html> 
<html lang="en">
<head>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title>Latest Jobs</title>
<style>   
 .carousel-inner > .item > img {
    min-width: 100%;
    max-height: 150px;
}
    footer {
      background-color: #555;
      color: white;
      padding: 18px;
    }
  </style>
<?php
    include 'Header.php'; 
if(isset($_GET['id']) && !empty($_GET['id']))
    {
    $id=$_GET['id'];
    $_SESSION['locn']=$id;
    require('/model/database1.php');
    }else{
    require('/model/dbconfig.php');}
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.css" rel="stylesheet" media="screen">
 <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
 <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>      
<div class="container fluid">    
  <div class="row">
    <div class  ="col-sm-3">
  <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-body">SUBSCRIBE
            <form>
            <fieldset class="form-group">
            <input type="text" class="form-control" id="mail" placeholder="Email address">
            </fieldset>
            <fieldset class="form-group">
            <input type="text" class="form-control" id="password" placeholder="Password">
            </fieldset>
            </form>
        </div>
      </div>
    </div>
        <!-- This is the left section of the file. It shows the browse jobs section. After 
        clicking on selecting this the control is sent to selectteam1 file. Here the user specific  selection 
        is made global. The control is re-directed to job profile page. From this page when the database file is 
        called it is first checked weather the user has made any selection and if yes then only that 
        specific records are shown.
        -->
      <div class="well">
        <form name = "form1" method = "get" action = "control/selectteam1.php">
        <ul style="list-style: none">
            <li> <a href="" data-toggle="collapse" class="checkitems" data-target="" >BROWSE BY SKILLS</a><br>
             <div class="newitem"><input type="checkbox" value = "'IPR'" name = "item[]" >IPR</div>
             <div class="newitem"><input type="checkbox" value = "'CFA'" name = "item[]">CFA</div>
             <div class="newitem"><input type="checkbox" value ="'Big data'" name = "item[]">Big Data</div>
             <div class="newitem"><input type="checkbox" value = "'Legal'" name = "item[]">Legal</div>
             <div class="newitem"><input type="checkbox" value = "'Data Analytics'" name = "item[]">Data Analytics</div>
             <div class="newitem"><input type="checkbox" value = "'clear'" name = "items[]">Clear selection</div>
             <div class="newitem"><input type="checkbox" value = "'LLB'"  id="showall" onClick="show(this)" name = "check[]">Show All</div>
             
         <li><a href=""  class="checkitems1" data-toggle="collapse" data-target="">BROWSE BY LOCATION</a><br>
             <div class="newitem1"><input type="checkbox" value = "'Boston'" name = "item1[]">Boston</div>
             <div class="newitem1"><input type="checkbox" value = "'newyork'" name = "item1[]">New York</div>
             <div class="newitem1"><input type="checkbox" value = "'california'" name = "item1[]">California</div>             
             <div class="newitem1"><input type="checkbox" value = "'newjersey'" name = "item1[]">New Jersey</div>                          
             <div class="newitem1"><input type="checkbox" value = "'clear'" name = "items1[]">Clear Selection</div>                          
             <div class="newitem1"><input type="checkbox" value = "'LLB'" name = "item1[]" id="showall" onClick="show1(this)" name = "checked1[]">Show All</div>
         <li><a href=""  class="checkitems2" data-target="">BROWSE BY TYPE</a><br>
         <li><a href="" class="checkitems3">BROWSE BY ROLE</a><br>    
         <li><a href="" class="checkitems4">BROWSE BY MARKET</a><br>             
         <div class="item3"><input type="submit" name="submit" Value="Submit"/></div>            
        </ul>
        </form>     
      </div>      
    </div>
    <div class="col-sm-7">
        <!-- This section is used to create a news feed by creating a loop. The data is fetched 
        from database and loaded into bootstrap table and a job news feed is created. 
        -->
      <?php $i=0;?>
    <?php $k =0;foreach($ide as $value): ?>
  <div class="well well-sm">
 <?php $id=1;?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th class="col-sm-3"></th>
        <th class="col-sm-3">  <a  href= "conn1.php?id=<?php global $i; echo($ide[$k]); ?>"><?php global $k; echo $company_name[$k];?></a><br> </th>        
        <th class="col-md-3"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>DESIGNATION<br><?php $designation; echo $designation[$k];?></td>
        <td>EXPERIENCE<br><?php $experience; echo $experience[$k];?></td>
        <td>WORK LOCN<br><?php $pref_locn; echo $pref_locn[$k];?></td>
      </tr>
      <tr>
        <td>SKILLS<br><?php $skills; echo $skills[$k];?></td>
        <td>E-MAIL<br><?php  $email; echo $email[$k];?></td>
        <td>CONTACT-PERSON<br> <?php $name_contact; echo $name_contact[$k];?></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" class="btn btn-primary">APPLY</button>&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">SHORTLIST</button>
        </td>
        <td>    
        </td>
      </tr>
    </tbody>
  </table>
  </div>
         <?php $k++; endforeach; ?>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.min.js"></script>
    </div>
      <!-- This section is used to create a job near you section. It is created using preferred job location -->
     <?php $k =0;if(!empty($companynames))
         foreach($companynames as $value): ?>
      <div class ="col-sm-2">
  <div class="row stylish-panel">
      <div class="panel panel-default">
        <div class="panel-body">JOBS NEAR YOU
            <h4><a><?php echo $companynames[$k] ?></a></h4><br>
            <label>Designation  <?php echo $designtions[$k] ?></label>
            <label>Experience Required  <?php echo $experces[$k] ?> Years</label>
        </div>
      </div>
    </div>
  </div>
  <?php $k++; endforeach; ?>
     <?php $k =0;if(empty($companynames))
     {         
   echo '<div class ="col-sm-2">';
 echo '<div class="row stylish-panel">';
     echo ' <div class="panel panel-default">';
        echo '<div class="panel-body">JOBS NEAR YOU';
            echo '<h4><a>Sorry No Jobs Found at your <?php  $work_locn?></a></h4><br>';
            
        echo '</div>';
      echo'</div>';
    echo '</div>';
  echo'</div>';}?>
  </div></div>
<footer class="container-fluid text-center">
  <p>The Job Panel- Latest jobs around the you</p>
</footer>
</body>
</html>
<!--TEMPLATE :- http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_social&stacked=h-->