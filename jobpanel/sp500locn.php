<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
$.fn.pageMe = function(opts){
        var $this = this,
          defaults = {
              perPage: 7,
              showPrevNext: true,
              hidePageNumbers: true
          },
          settings = $.extend(defaults, opts);
      
      var listElement = $this;
      var perPage = settings.perPage; 
      var children = listElement.children();
      var pager = $('.pager');      
      if (typeof settings.childSelector!="undefined") {
          children = listElement.find(settings.childSelector);
      }      
      if (typeof settings.pagerSelector!="undefined") {
          pager = $(settings.pagerSelector);
      }     
      var numItems = children.size();
      var numPages = Math.ceil(numItems/perPage);
       pager.data("curr",0);      
      if (settings.showPrevNext){
          $('<li><a href="newEmptyPHP2.php" class="prev_link">PREVIOUS</li>').appendTo(pager);
      }      
      var curr = 0;
      while(numPages > curr && (settings.hidePageNumbers==false)){
          $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
          curr++;
      }    
      if (settings.showPrevNext){
          $('<li><a href="#" class="next_link">NEXT</a></li>').appendTo(pager);
      }      
      pager.find('.page_link:first').addClass('active');
      pager.find('.prev_link').hide();
      if (numPages<=1) {
          pager.find('.next_link').hide();
      }
      pager.children().eq(1).addClass("active");      
      children.hide();
      children.slice(0, perPage).show();
      
      pager.find('li .page_link').click(function(){
          var clickedPage = $(this).html().valueOf()-1;
          goTo(clickedPage,perPage);
          return false;
      });
      pager.find('li .prev_link').click(function(){
          previous();
          return false;
      });
      pager.find('li .next_link').click(function(){
          next();
          return false;
      });
      
      function previous(){
          var goToPage = parseInt(pager.data("curr")) - 1;
          goTo(goToPage);
      }       
      function next(){
          goToPage = parseInt(pager.data("curr")) + 1;
          goTo(goToPage);
      }      
      function goTo(page){
          var startAt = page * perPage,
              endOn = startAt + perPage;          
          children.css('display','none').slice(startAt, endOn).show();
          
          if (page>=1) {
              pager.find('.prev_link').show();
          }
          else {
              pager.find('.prev_link').hide();
          }          
          if (page<(numPages-1)) {
              pager.find('.next_link').show();
          }
          else {
              pager.find('.next_link').hide();
          }
          pager.data("curr",page);
          pager.children().removeClass("active");
          pager.children().eq(page+1).addClass("active");      
      }
  };
  $(document).ready(function(){  
    $('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:true,perPage:20});      
  });
</script>
<style>
#backgroundImage{z-index: 1;}

#backgroundImage:before {
   content: "";
   position: absolute;
   z-index: -1;
   top: 0;
   bottom: 0;
   left: 0;
   right: 0;
    background-image: url("http://fireteanu.com/wp-content/uploads/rainbow-in-the-clouds-15621.jpg");
   background-repeat: no-repeat;
    background-size: 100%;
    opacity: 0.2;
    filter:alpha(opacity=70);
    height:100%;
    width:100%;
 }
 a{
     color:blue
 }
.main{
   height:320px;
   width:320px;
   margin:auto;
   background-color:green;
   z-index:-1;
   opacity: 1;
   filter:alpha(opacity=100);
}
</style>
</head>
<body>
       <?php  require("/model/database9.php");
       require("/model/database7.php");
       ?>
<div class="container">    
<div id="backgroundImage">    
<div id="my-div">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="col-sm-3">COMPANY NAME</th>
        <th class="col-sm-3">TICKER</th>
        <th class="col-sm-3">LOCATION </th>        
        <th class="col-md-3">LOCATION 2</th>
      </tr>
    </thead>
     <tbody id="myTable">
          <?php $i = 0;foreach($name as $value): ?>
      <tr>
        <td><a  href ="#"><?php global $i; echo($name[$i]);?></a></td>
        <td><?php global $i; echo($ticker[$i]);?></td>
        <td><a href="#"><?php global $i; echo($location[$i]);?></a></td>
        <td><a href="#"><?php global $i; echo($location2[$i]);?></a></td>
      </tr>      
        <?php global $i; $i = $i+1;?> 
 <?php endforeach; ?>
    </tbody>
  </table>
    <ul class="pagination pagination-lg pager" id="myPager"></ul>
  </div>      
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


</div>
<script src="js/wikiSearch.js" type="text/javascript"></script>
<p id="po"></p></div>
</body>
</html>

