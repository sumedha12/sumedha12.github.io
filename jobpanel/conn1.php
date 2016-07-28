<?php require('/model/database3.php');
?>
<html>
  <head>
      <!-- https://developers.google.com/chart/interactive/docs/gallery/columnchart-->
      <!-- This is used to create a customized chart for the user showing the job details-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
    google.load('visualization', '1.0', {'packages':['corechart']});
      google.setOnLoadCallback(drawChart);
      google.setOnLoadCallback(drawChart1);
      function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Jobs');
      data.addColumn('number', 'Applicants');
      data.addRows([
          <?php 
          $x = "view";
 $y = "applicants";
 $z = "Shortlists";
  $sql = "SELECT * FROM job2 where id =$id";
   $result = $conn->query($sql);   
            if (mysqli_num_rows($result) > 0) 
            {
                $i=mysqli_num_rows($result);                
    while($row = mysqli_fetch_assoc($result)) 
        {
          echo "['".$x."',".$row['views']."],";
          echo "['".$y."',".$row['applicants']."],";
          echo "['".$z."',".$row['shortlists']."],";
        }
        }
          ?>        
      ]);

      
      var options = {'title':'Job Stats',
                     'width':400,
                     'height':300};

      
      var chart = new google.visualization.ColumnChart(document.getElementById("column"));
      chart.draw(data, options);
    }
    
    
    function drawChart1() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Jobs');
      data.addColumn('number', 'Applicants');
      data.addRows([
          <?php 
          $x = "Graduates";
 $y = "Post-Graduates";
 $z = "PHDs";
  $sql = "SELECT * FROM job2 where id =$id";
   $result = $conn->query($sql);   
            if (mysqli_num_rows($result) > 0) 
            {
                $i=mysqli_num_rows($result);                
    while($row = mysqli_fetch_assoc($result)) 
        {
          echo "['".$x."',".$row['graduate']."],";
          echo "['".$y."',".$row['postgraduate']."],";
          echo "['".$z."',".$row['phd']."],";
        }
        }
          ?>        
      ]);
      var options = {'title':'Job Stats',
                     'width':400,
                     'height':300};
      var chart = new google.visualization.ColumnChart(document.getElementById("column_chart"));
      chart.draw(data, options);
    }
    </script>
  </head>

  <body>
<div id="column" style="width: 900px; height: 300px;"></div>
<div id="column_chart" style="width: 900px; height: 300px;"></div>
  </body>
</html>
