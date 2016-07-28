var username;
function submitdata() {
	username  = document.getElementById("username").value;
        var lname = document.getElementById("lname").value;
	var password = document.getElementById("password").value;
        var mail = document.getElementById("mail").value;
	var user2= username; 
                	
	var dataString = 'username=' + username +
                '&password=' + password +
                '&mail=' + mail+
                '&lname=' + lname; 
		if (username == '' || password == '') {
                    alert("you are required to fill all the fields")
    } 
		else {
					$.ajax({
					type: "POST",
					url: "submit.php",
					data: dataString,
					cache: false,
					success: function(html) {
					}
					});
                    }
		return false;
}
function submitdata1() {
        var hghestqual  = document.getElementById("hghestqual").value;
	var CollegeName = document.getElementById("CollegeName").value;
        var experience  = document.getElementById("experience").value;        
        var university  = document.getElementById("university").value;        
        
	var dataString = 'hghestqual' + hghestqual +'CollegeName'+ CollegeName + 'university' + university + 'experience' + experience + 'username' + username; 
		
					$.ajax({
					type: "POST",
					url: "submit.php",
					data: dataString,
					cache: false,
					success: function(html) {
                                                window.location="home_1.php";

					}
					});
				}
		
function submitdata5() {

$(location).attr('href', 'http://localhost/Job-site(final)/home_2.html')

    }
function submitdata3() {
    	var skills  = document.getElementById("skills").value;
        var work_pref = document.getElementById("work_pref").value;

	var work_locn = document.getElementById("work_locn").value;
        var work_time = document.getElementById("work_time").value;
        
	var dataString = 'skills=' + skills + '&work_pref=' + work_pref + 'work_locn' + work_locn +'work_time'+ work_time;
					$.ajax({
					type: "POST",
					url: "submit.php",
					data: dataString,
					cache: false,
					success: function(html) {
					}
					});
}
function submitdata4() {
    	var emails  = document.getElementById("emails").value;
        var pass= document.getElementById("pass").value;
	
	var dataString = 'emails=' + emails + '&pass=' + pass;
					$.ajax({
					type: "POST",
					url: "submit.php",
					data: dataString,
					cache: false,
					success: function(html) {
					}
					});
}

function autocomplet() {    
	var min_length = 0; 
	var keyword = $('#country_id').val();
	if (keyword.length > min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data)
                        {
                            $('#country_list_id').html(data);
                            $('#country_list_id').show();
                           
			}
		});
	} 
        if (keyword.length === 0)
        {
            $('#country_list_id').hide();
	}
}
function set_item(item) 
    {
	$('#country_id').val(item);
        var items= $('#country_id').val(item);
	$('#country_list_id').hide();
        location.href="user_profile.php?id="+item;                  
    }

$(document).ready(function(){
            $('.items').hide();

    $('.itemlink').click(function(){
        $('.items').toggle();
    });
});
$(document).ready(function(){            
    $('.items1').hide();
    $('.itemlink1').click(function(){
        $('.items1').toggle();
    });
});

$(document).ready(function(){
    $('.itemlink2').click(function(){
        $('.items2').toggle();
    });
});

$(document).ready(function(){
    $('.itemlink1').click(function(){
        $('.items1').toggle();
    });
});

$(document).ready(function(){
    $('.itemlink1').click(function(){
        $('.items1').toggle();
    });
});

$(document).ready(function(){
    $('.item3').click(function(){
    });
});
        $(function () {
    $("#btnAdd").bind("click", function () {
        var div = $("<div />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
    });
    $("#btnGet").bind("click", function () {
        var values = "";
        $("input[name=DynamicTextBox]").each(function () {
            values += $(this).val() + "\n";
        });
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("div").remove();
    });
            $("#link1").click(function (e)
            {
           $("#hide").css('display', 'block');
    });
    $("#link2").click(function (e)
            {
           $("#hide1").css('display', 'block');
    });
    $("#link3").click(function (e)
            {
           $("#hide2").css('display', 'block');

    });
});
function GetDynamicTextBox(value) {
    return '<br><input name = "DynamicTextBox1" id= "DynamicTextBox1" type="text" placeholder ="title" value = "' + value + '" />&nbsp;&nbsp;&nbsp;' +
            '<input name = "DynamicTextBox2" id= "DynamicTextBox2" type="text" placeholder ="date" value = "' + value + '" />&nbsp;'+
            '<input name = "DynamicTextBox3" id= "DynamicTextBox3" type="text" placeholder ="Authors" value = "' + value + '" />&nbsp;'+
            '<input type="button" value="Remove" class="remove" /><br>'
}
function submit() {
        var DynamicTextBox1= document.getElementById('DynamicTextBox1').value;
                var DynamicTextBox2= document.getElementById('DynamicTextBox2').value;
        var DynamicTextBox3= document.getElementById('DynamicTextBox3').value;
  	var dataString = 'DynamicTextBox1=' + DynamicTextBox1 
                +'&DynamicTextBox2=' + DynamicTextBox2 +'&DynamicTextBox3=' + DynamicTextBox3 ;
					$.ajax({
					type: "POST",
					url: "submit1.php",
					data: dataString,
					cache: false,
					success: function(html) {
					}
					});
}


	function show(source) {
		checkboxes = document.getElementsByName('check[]');
		for(var j in checkboxes)
			checkboxes[j].checked = source.checked;
	}

	function shows(source) {
		checkboxes = document.getElementsByName('check1[]');
		for(var j in checkboxes)
			checkboxes[j].checked = source.checked;
	}

    

  

