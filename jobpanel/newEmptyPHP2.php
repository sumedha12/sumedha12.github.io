<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Remote file for Bootstrap Modal</title>  
</head>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<body>
    <?php 
require("/model/database7.php");
?>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title"><?php echo $ide;?></h4>
            </div>			<!-- /modal-header -->
            <div class="modal-body">
                <label>TICKER: <br>
                <?php echo $Ticker[0]?>
                </label>
            </div>			<!-- /modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>			<!-- /modal-footer -->
</body>
</html>
