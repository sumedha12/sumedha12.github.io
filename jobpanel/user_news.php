<!DOCTYPE html>
<html lang="en">
<head>
      <title>Hire People</title>
<style>    
    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
 .carousel-inner > .item > img {
    min-width: 100%;
    max-height: 150px;
}
  </style>
<?php
    require("Header.php"); 
    require("/model/database.php"); 
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <div class="container fluid">    
  <div class="row">
    <div class="col-sm-3">
  <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-body">SUBSCRIBE
            <form>
            <fieldset class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email address">
            </fieldset>
            <fieldset class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
            </fieldset>
            </form>
        </div>
      </div>
    </div>                 
    </div>
    <div class="col-sm-6">
        <!-- This section is used to create a user news feed by putting into loop values fetched from database.
         The values are then loaded into a bootstrap table-->
      <?php $i=0;?>
    <?php foreach($skills as $value): ?>
  <div class="well well-sm">
  <table class="table table-hover">
    <thead>
      <tr>          
        <th class="col-sm-3"> <a href="user_profile.php?id=<?php  global $i; echo($username[$i]); ?>"  class ="names"><?php global $name; global $i; echo($username[$i]); ?></a><br> 
        </th>
        <th class="col-sm-3"></th>
        <th class="col-sm-3"></th>        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>EXPERIENCE<br><?php global $i; global $experience; echo ("\r\n"+$experience[$i]);?></td>
        <td>SKILLS<br><?php global $i; $skills; echo($skills[$i]);?></td>
        <td>Contract<br> Full time</td>
      </tr>
      <tr>
        <td>ENTREPRENEUR EXP.<br> NULL</td>
        <td>WORK LOCATION<br><?php global $i; echo($work_locn[$i]);?></td>
        <td>WORK PREFERENCE<br><?php global $i; global $work_pref; echo($work_pref[$i]);?></td>
      </tr>
      <tr>
        <td></td>  
        <td><button type ="button" class="btn btn-primary">SHORTLIST</button></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  </div>
        <?php global $i; $i = $i+1;?> 
 <?php endforeach; ?>
    </div>
  </div></div>

<div class="col-sm-2">
</div>
<footer class="container-fluid text-center">
  <p>TheJobPanel- Latest jobs around the you</p>
</footer>       
</body>
</html>
<!--TEMPLATE :- http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_social&stacked=h-->