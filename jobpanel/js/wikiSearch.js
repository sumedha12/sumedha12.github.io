$('#my-div a').click(function(e) {
  var txt = $(e.target).text();
    
        window.open("http://localhost/jobpanel/newEmptyPHP1.php?"+'id='+txt,'newwindow',"width=700, height=700");
});       



