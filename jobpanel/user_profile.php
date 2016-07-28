<!DOCTYPE html>
<html lang="en">
<head>
<?php
require("/model/database2.php");
session_start();    
  ?>
  <title>USER PROFILE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

          <script src="js/script.js"></script>

  <style>    
    
    footer {
      background-color: #555;
      color: white;
      padding: 18px;
    }
    .panel-primary {
    height: 200px;
}
#new {
    display: none;
}

#new1 {
    display: none;
}
#hide2 {
    display: none;
}
#hide3 {
    display: none;
}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">ThEjObPaNeL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a href="http://localhost/jobpanel/job_newsfeed.php">HOME</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    </div>
  </div>
</nav>
    
  <div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">PROJECTS</a></li>
    <li><a href="connections.php">CONNECTIONS</a></li>
    <li><a href="#">PHOTOS</a></li>
  </ul>
  <br>
</div>

<div class="container">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">My Profile</a></p>
        <img src="image/blank.jpg" class="img-circle" height="205" width="205"> <!-- img src:http://www.hdi-slc.com/officers/blank-profile/ -->
      </div>
      
    </div>
      <div class="col-sm-7">   
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-primary text-left">
            <div class="panel-body">
              <p contenteditable="true">I am a computer engineer by profession. I have 2 years of work experience.
              working in intellectual property domain. I have done various projects on web development using PHP,
              javascript, etc.
              </p>
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Endorse
              </button>     
            </div>
          </div>
        </div>
      </div>
          <!--This is used to create a customized profile page.If the user has been logged in and visits his 
          profile he can further update it. However, he won't be able to edit anyone else's profile
          -->
      <div class="row">
        <div class="col-sm-12">
          <div class="well well-sm">
             <label>PUBLISHED WORK
             </label><a href="#" id="pub1">
            <?php if($ide===$_SESSION["username"])     
          echo '<span class="glyphicon glyphicon-edit"></span>'; ?> 
        </a>
                    <table class="table .table-condensed">
                    <thead>
                    <tr>
                    <th class="col-sm-3">NAME OF PAPER</th>
                    <th class="col-sm-3">AUTHOR  </th>
                    <th class="col-sm-3">DATE</th>           
                    </tr>
                    </thead>                    
                    <?php $i = 0;
                    
                    foreach($name_paper as $value):?>                
                    <?php
                    echo '<tr>';
                    echo '<td>';
                    echo $name_paper[$i];
                    echo '</td>';
                    echo '<td>';
                    echo $author[$i];
                    echo '</td>';                    
                    echo '<td>';
                    echo $title[$i];
                    echo '</td>';
                    echo '</tr>';
                $i++;
                ?>
                    <?php 
                    endforeach;
                    ?>
              </tbody>;
               </table>;
            <label>                
            </label>
            <br />
            <!-- These buttons are hidden initially and are shown only when user clicks on the edit section.  -->
            <div id="newtext">
            </div>
            <br />
            <fieldset class="form-group" text-align ="center" id ="new">
              <button type="" display="none" id="newbtn" text-align ="center" class="btn btn-primary center">ADD</button>                
              <button type="" id="btn" text-align ="center" class="btn btn-primary" onClick ="submit()">SUBMIT</button>
            </fieldset>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="well" text-align="center">
             <label>EDUCATION</label> <a href="#" id="edu2">
                 <?php if($ide===$_SESSION["username"])     
                 echo '<span class="glyphicon glyphicon-edit"></span>'
                 ?></a>             
                    <table class="table .table-condensed">
                    <thead>
                    <tr>
                    <th class="col-sm-3">DEGREE</th>
                    <th class="col-sm-3">SPECIALIZATION  </th>
                    <th class="col-sm-3">College Name</th>           
                    </tr>
                    </thead>                    
                    <?php $i = 0;
                    if(!empty($degree))
                    foreach($degree as $value):?>                
                    <?php
                    echo '<tr>';
                    echo '<td>';
                    echo $degree[$i];
                    echo '</td>';
                    echo '<td>';
                    echo $branch[$i];
                    echo '</td>';                    
                    echo '<td>';
                    echo $college[$i];
                    echo '</td>';
                    echo '</tr>';
                $i++;
                ?>
              <?php endforeach;?>
                    </table>
            <br/>
            <br/>                        
            <label text-align ="left">                                   
            </label><br>            
            <div id="newtext1">
            </div>
            <br />
            <fieldset class="form-group" text-align ="center" id ="new">
              <button type="" display="none" id="newbtn" text-align ="center" class="btn btn-primary center">ADD</button>                
              <button type="" id="btn" text-align ="center" class="btn btn-primary" onClick ="submit()">SUBMIT</button>
            </fieldset>
            <fieldset class="form-group" id = "new1">
              <button type=".btn-default" id="b1" class="btn btn-primary">ADD</button>                
              <button type=".btn-default" id="btn" onClick ="submit1()" class="btn btn-primary">SUBMIT</button>
            </fieldset>
          </div>
        </div>               
      </div>
        <div class="row">
        <div class="col-sm-12">
          <div class="well">           
             <label>EXTRACURRICULAR WORK</label> 
            <br /><a href="#" id="link4">
                   <?php if($ide===$_SESSION["username"])     
                 echo '<span class="glyphicon glyphicon-edit"></span>'
                 ?>   </a>
           <?php $i = 0;if(!empty($extra))
                  foreach($extra as $value):?>                   
            
            <label text-align ="left">                
                <?php
                         echo $extra[$i];
                         $i++;
                    ?>
                </label>
            <?php endforeach;?>  
            <br />
            <div id="newtext3">
            </div>
            <br />
            <fieldset class="form-group" id ="hide3">
              <button type=".btn-default" id="newbtn" class="btn btn-primary">ADD</button>                
              <button type=".btn-default" id="btn" class="btn btn-primary">SUBMIT</button>
            </fieldset>
          </div>
        </div>
        </div>
        </div>        
      </div>
  </div>       
    <footer class="container-fluid text-center">
  <p>TheJobPanel- Latest jobs around the you</p>
</footer>
</body>
</html>
<!--TEMPLATE :- http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_social&stacked=h-->