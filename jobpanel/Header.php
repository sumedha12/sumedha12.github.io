<?php   session_start();
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

        <script type="text/javascript">
        $(function () {
        $('input[name="save"]').on('click', function(event) {
        document.getElementById("myNav").style.width = "100%";    
                    });    
            });
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
<style>        
.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,20,0);
    background-color: rgba(0,0,0, 0.7);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px !important;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .closebtn {
    font-size: 40px !important;
    top: 15px;
    right: 35px;
  }
}

@media screen and (max-width: 340px) {
    .hero h1 {
        font-size:0.8em;
    }
}
.modal-content {
  width: 650px;
  
}
#search{
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);    
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-transform: translate(0px, -100%) scale(0, 0);
    -moz-transform: translate(0px, -100%) scale(0, 0);
    -o-transform: translate(0px, -100%) scale(0, 0);
    -ms-transform: translate(0px, -100%) scale(0, 0);
    transform: translate(0px, -100%) scale(0, 0);
    opacity: 0;
}
.row-centered {
    text-align:center;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    /* inline-block space fix */
    margin-right:-4px;
}
.row-centered {
    text-align:center;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    /* inline-block space fix */
    margin-right:-4px;
}

#search.open {
    -webkit-transform: translate(0px, 0px) scale(1, 1);
    -moz-transform: translate(0px, 0px) scale(1, 1);
    -o-transform: translate(0px, 0px) scale(1, 1);
    -ms-transform: translate(0px, 0px) scale(1, 1);
    transform: translate(0px, 0px) scale(1, 1); 
    opacity: 1;
}
#search input[type="search"] {
    position: absolute;
    top: 50%;
    width: 100%;
    color: rgb(255, 255, 255);
    background: rgba(0, 0, 0, 0);
    font-size: 60px;
    font-weight: 300;
    text-align: center;
    border: 0px;
    margin: 0px auto;
    margin-top: -51px;
    padding-left: 30px;
    padding-right: 30px;
    outline: none;
}
#search input[type="text"] {
    position: relative;
    top: 40%;
    left: 20%;
    width: 100%;
    //color: rgb(255, 255, 255);
    //background: rgba(0, 0, 0, 0);
    font-size: 30px;
    font-weight: 300;
    border: 0px;
    margin: 0px auto;
    margin-top: 61px;
    margin-left: -45px;
    padding-left: 30px;
    padding-right: 30px;
    outline: none;
}
#search .btn {
    position: relative;
    top: 50%;
    left: 50%;
    width:40%;
    height:60%;
    margin-top: 61px;
    margin-left: -55px;
}
#search .close {
    position: fixed;
    top: 15px;
    right: 15px;
    color: #fff;
    background-color: #428bca;
    border-color: #357ebd;
    opacity: 1;
    padding: 10px 17px;
    font-size: 27px;
}
</style>
</head>
<body>
    <!-- A carousal that is being loaded into each page of the website-->
   <div class="row-fluid">
	<div class="span9"> 
      <div id="myCarousel"   class="carousel slide carousel-fit" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li  data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image/pic1.jpg" alt="abc">
    </div>
    <div class="item">
      <img src="image/pic2.jpg" alt="def">
    </div>
    <div class="item">
      <img src="image/sunset.jpg" alt="ghi">
    </div>
      <div class="item">
      <img src="image/IMG1.jpg" alt="jkl">
    </div>
     </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  </div><br> 
  <div class="navbar-wrapper">
      <div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">The Job Panel</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="user_news.php">Hire Talent</a></li>
      <li><a href="job_newsfeed.php">VIEW JOBS</a></li>
      <li><a href="" data-toggle="modal" data-target="#myModal1" target="_blank">POST JOBS</a></li>      
    </ul>     
    <ul class="nav navbar-nav navbar-right">                     
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">EXPLORE COMPANIES <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="cmpny_info.php">FORTUNE 500</a></li>
          <li><a href="sp500.php">S&P 500</a></li>
          <li><a href="#">TECH GIANTS</a></li>
          <li><a href="#">FINANCIAL HUBS</a></li>          
        </ul>
      </li>
      <li><a href=user_profile.php?id=<?php echo($_SESSION["username"]);?>><span class="glyphicon glyphicon-user"></span> My Profile</a></li>      
      <li><a href=model/logout.php> Logout</a></li>      
    </ul>        
    <ul class="nav navbar-nav">    
    <div class="dropdown">
     <li><input class="form-control" type="text" name="save" style="width:250px"></li>
     <li class ="dropdown-menu" id="search_list" text-align="left"></li>     
     </div>
    </ul>          
      <ul class="nav navbar-nav">              
    </ul>
   </div>
  </nav>
</div>
</div>   
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div class="overlay-content">
    <a href="http://localhost/jobpanel/a-story-in-pomes/index.html">Search Jobs By Location</a>
    <a href="http://localhost/jobpanel/a-story-in-pomes/index.html">Search Companies By Location</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
</div>

  
  <div id="myModal1" class="modal fade" tabindex="-1" role="dialog" align="center">
    <div class="modal-dialog modal-lg">
    <div class="modal-content" >
    <div class="modal-header">         
         <button type="button" class="close" data-dismiss="modal">&times;</button> 
        <h3>JOB DETAILS</h3>
    </div>
   <div class="modal-body" >
 <form class="form-horizontal text-center" id ="form12" method="POST" action ="conn.php" >
     <div class="form-group">
      <label class="control-label col-sm-4" for="name">NAME OF ORGANIZATION</label>
      <div class="col-sm-5">
        <input type="text" required autocomplete="off" class="form-control" name ="company_name" id="company_name" placeholder="ORGANIZATION">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="designation">DESIGNATION</label>
      <div class="col-sm-5">
        <input type="text" required autocomplete="off" class="form-control" name="designation" id="designation" placeholder="DESIGNATION">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="experience">EXPERIENCE</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" required autocomplete="off"name="experience" id="experience" placeholder="EXPERIENCE">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-4" for="qualification">QUALIFICATION</label>
      <div class="col-sm-5">          
        <input type="text" required autocomplete="off" class="form-control" name="qualification"  id="qualification" placeholder="QUALIFICATION">
      </div>
    </div>
     <hr>
     <div class="form-group">
      <label class="control-label col-sm-4" for="pref_locn">WORK LOCATION</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" required autocomplete="off" name="pref_locn" required autocomplete="off" id="pref_locn" placeholder="PREFERRED LOCATION">
      </div><br><br>
      <label class="control-label col-sm-4" for="skills">SKILLS</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" name="skills" id =" skills" required autocomplete="off" required autocomplete="off" placeholder="SKILLS">
      </div>
    </div>     
     <hr>
     <div class="form-group">
      <label class="control-label col-sm-4" for="name_contact">NAME OF CONTACT PERSON</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" name="name_contact" required autocomplete="off" id="name_contact" placeholder="NAME OF CONTACT PERSON">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-4" for="email">EMAIL-ID</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" name="email" id ="email" required autocomplete="off" placeholder="EMAIL">
      </div>
    </div>
     <hr>
     <br>
        <input class="btn btn-success" type="submit" name="submit" id="submit" onClick="submitjob()">
       </form>
    </div>
 </div>         
</div>      
</div>    
 <div id="search">
<button type="button" class="close">×</button>
 <div class="container">
  <div class="row row-centered">
  <div class="col-s-12 col-centered">        
      <form method ="POST" action="newEmptyPHP1.php">
  <fieldset class="form-group">
    <label for="company">Search By Company</label>
    <input type="text" name ="company" class="form-group col-xs-5 col-lg-3" onchange ="abc()" id="company" placeholder="Search By Company" >    
  </fieldset>
  <fieldset class="form-group">
    <label for="role">Search By Role</label>
    <input type="text" class="form-group col-xs-5 col-lg-3" id="role"  onchange ="role_filter()" placeholder="Search By Roles">
  </fieldset>
  <fieldset class="form-group" class="form-group col-xs-5 col-lg-3">
    <label for="role">Search By Salary</label>
    <input type="text" class="form-group col-xs-5 col-lg-1" id="role" placeholder="Search By salary">
  </fieldset>
  <button type="submit" class="btn btn-primary" action="newEmptyPHP2.php">Submit</button>
</form>
</div>
</div>
 </div>
</body>
</div>