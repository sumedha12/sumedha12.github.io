
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.css" rel="stylesheet" media="screen">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <style>    
.stylish-panel {
    padding: 20px 0;
    text-align: center;
}
.stylish-panel > div > div{
    padding: 10px;
    border: 1px solid transparent;
    border-radius: 4px;
    transition: 0.2s;
}
.stylish-panel > div:hover > div{
    margin-top: -10px;
    border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
    background: rgba(200, 200, 200, 0.1);
    transition: 0.5s;
}

.stylish-panel > div:hover img {
    border-radius: 50%;
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
}
  </style>
        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>
<body style="background-color: #bce8f1">
<div class="container">
  <div class="page-header">
    <h1 class="text-center">Who am I?</h1>
  </div>
  <p class="lead text-center">I am a creative graphic designer focused on modern eye catching designs. I am not only the graphic designer! I can also do complete websites &amp; computer applications.</p>
  <div class="container">
          <?php 
          $skills = array("Volvo", "BMW", "Toyota");
          foreach($skills as $value): ?>
      <div class="row stylish-panel">
    <?php 
          $skill = array("Volvo", "BMW", "Toyota");
    foreach($skill as $value): ?>
      <div class="col-md-4">
        <div>
          <img src="http://lorempixel.com/200/200/abstract/4/" alt="Texto Alternativo" class="img-circle img-thumbnail">
          <h2>Webdesigner</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <a href="#" class="btn btn-primary" title="See more">See works »</a>
        </div>
      </div>
        <?php endforeach;?>
        </div>
<?php endforeach;   ?>
</div>
</div>
</body>
</html>


