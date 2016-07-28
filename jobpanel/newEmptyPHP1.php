<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>

  <meta charset="utf-8">
<meta name=viewport content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">  
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<style>    
    body {
    //background-image: url("https://tctechcrunch2011.files.wordpress.com/2015/08/clouds.jpg");
    background-repeat: no-repeat;
    background-size: 100% auto;
    height: 100%;
}
    footer {
      background-color: #555;
      color: white;
      padding: 18px;
    }
    .thumbnail{
        text-align: center;
    }
  </style>
  <?php 
require("/model/database7.php");
?>

<body>
<div class="container">
  <h1 text align="center">
  </h1>    
        <div class="row">
        <div class="text-center col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
      <div class="panel-heading text-center"><?php echo $ide ?></div>
    <div class="panel-body">
<?php echo $description[0];?>
    </div>
  </div>
 </div>
 </div><br>
     <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">          
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p><label>TICKER: <br>
                <?php echo $Ticker[0]?>
                </label></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>      
    </div>
  </div>

        <div class="row">
        <div class="col-md-3 col-md-offset-0">
            <div class="thumbnail">
                <label>TICKER: <br>
                <?php echo $Ticker[0]?>
                </label>
                </div>
        </div>       
            <div class="col-md-3 col-md-offset-0">
            <div class="thumbnail">
                <label>
                    PRIMARY EXCHANGE:<br> <?php echo $PrimaryExchange[0];?>
                </label>
            </div>
            </div>
            <div class="col-md-3 col-md-offset-0">
            <div class="thumbnail">
                <label> 
                    WEBSITE:<br> <?php echo  $Website[0];?>
                </label>
            </div>
            </div>
            <div class="col-md-3 col-md-offset-0">
            <div class="thumbnail">
                <label> 
                   INDUSTRY:<br> <?php echo  $industry[0];?>
                </label>
            </div>
            </div>
            </div><br><br>
 <div class="row">
            <div class="col-md-3 col-md-offset-0">
            <div class="thumbnail">            
                <label>
                    TELEPHONE NUMBER:<br> <?php echo $TEL[0];?>
                </label> 
            </div></div>                
            <div class="col-md-3 col-md-offset-0">
            <div class="thumbnail">            
                <label>
                    NUMBER OF EMPLOYEES:<br><?php echo $CurrentEmployees[0];?>
                </label>
            </div>
                </div>
            <div class="col-md-3 col-md-offset-0">
            <div class="thumbnail">            
                <label>
                    ADDRESS:<?php echo $address[0];?>
                </label>
                </div>
                </div>
     <div class="col-md-3 col-md-offset-0">
            <div class="thumbnail">
                <label> 
                  SUB INDUSTRY:<br> <?php echo  $sub_industry[0];?>
                </label>
            </div>
            </div>
            <br>
            <label>                    
                   <a href=""> Click To See Reviews</a>
                </label>          
            </div></div>
         </div>
</body>
</html>


