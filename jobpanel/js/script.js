var username;
// This function is called when the user submits the signup form.AJAX request is sent to submit.php
//and database is populated there-in
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
					alert("YOU HAVE SUCCESSFULLY SIGNED UP!!");
                                        }
					});
                    }
		return false;
}
/*This function is called when the user submits the second form of complete your profile page. An AJAX 
 * request is sent to submit.php and database is then further populated.*/
function submitdata5() {

        var hghestqual  = document.getElementById("hghestqual").value;
	var CollegeName = document.getElementById("CollegeName").value;
        var experience  = document.getElementById("experience").value;        
        var university  = document.getElementById("university").value;                
	var dataString = 'hghestqual' + hghestqual +'CollegeName'+ CollegeName 
                + 'university' + university + 'experience' + experience + 'username' + username; 
		
					$.ajax({
					type: "POST",
					url: "submit.php",
					data: dataString,
					cache: false,
					success: function(html) {
                       
					}
					});
				}
/*This function is called when the user submits the second form of complete your profile page. An AJAX 
 * request is sent to submit.php and database(table1) is then further populated.*/
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
                                            alert("CONGRATS. YoUR PROFILE HAS BEEN CREATED. YOU CAN LOGIN NOW.");
					}
					});
}
/*This function is called when the user submits the third form of complete your profile page. An AJAX 
 * request is sent to submit.php and database(table1) is then further populated.*/

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
/*This function is called when user types a word on the navigation search bar. An AJAX request
 is sent to search.php from header.php file and the search list is populated accordingly. */
function suggest() {    
	var min_length = 0; 
	var data = $('#search_item').val();
	if (data.length > min_length) {
		$.ajax({
			url: 'search.php',
			type: 'POST',
			data: {data:data},
			success:function(data)
                        {
                            $('#search_list').html(data);
                            $('#search_list').show();
                           
			}
		});
	} 
        if (data.length === 0)
        {
            $('#search_list').hide();
	}
}
/*This function is called when a user makes a selection and data is loaded on search bar on Navigation 
 * bar. The user is redirected to the respective user-profile page. */
function search(item) 
    {
	$('#search_item').val(item);
        var items= $('#search_item').val(item);
	$('#search_list').hide();
        location.href="user_profile.php?id="+item;                  
    }
    
/*This function is called when the program is run. It is used to hide the checkitems initially
 * on the program load and then check items are toggled whenever user makes a particular selection. This is 
 * called job_newsfeed page  */

$(document).ready(function(){
            $('.newitem').hide();

    $('.checkitems').click(function(){
        $('.newitem').toggle();
    });
});
$(document).ready(function(){            
    $('.newitem1').hide();
    $('.checkitems1').click(function(){
        $('.newitem1').toggle();
    });
});
$(document).ready(function(){
    $('.checkitems2').click(function(){
        $('.items2').toggle();
    });
});
$(document).ready(function(){
    $('.checkitems1').click(function(){
        $('.newitem1').toggle();
    });
});
$(document).ready(function(){
    $('.checkitems1').click(function(){
        $('.newitem1').toggle();
    });
});
    
$(function () {

 /*This function is called when a user wants to enter a new
 * published paper along with its details. It is called 
 * when user clicks on ADD button*/

    $("#newbtn").bind("click", function () {
        $("#newbtn").show();
        var newdiv = $("<div />");
        newdiv.html(NewPublished(""));
        $("#newtext").append(newdiv);
        $("#newbtn").hide();        
    });
/*This function is called when a user wants to enter a new
 *degree along with its details. It is called 
 * when user clicks on ADD button*/

     $("#b1").bind("click", function () {
        $("#b1").show();
        var newdiv = $("<div />");
        newdiv.html(NewItem(""));
        $("#newtext1").append(newdiv);
        $("#b1").hide();        
    });  
  /*This function is called when a user clicks the remove button*/

    $("body").on("click", ".remove", function () {
        $(this).closest("div").remove();
              $("#btn").hide();
              $("#b1").hide();
    });
    /*This function is called when a user clicks on edit link present in user 
     * profile page in published item in order to customize the profile. The edit link is going to 
     * redirct the user this page.It is called from user_profile page.*/
            $("#pub1").click(function (e)
            {
                $("#newbtn").show();
                $("#btn").show();
           $("#new").css('display', 'block');
    });
    /*This function is called when a user wants to enter a new
 * degree along with its details. It is called when the user clicks on 
 * education section. The user is redirected to this page from user profile page.*/
    $("#edu2").click(function (e)
            {
                $("#b1").show();
                $("#button1").show();
        $("#new1").css('display', 'block');
    });
    $("#link3").click(function (e)
            {
                $("#newbtn").show();
                $("#btn").show();
        $("#hide2").css('display', 'block');
    });
});
/*This function is used to return textboxes for user to fill in values for the new published items.*/
function NewPublished(value) {
    return '<br><input name = "newText" id= "newText1" type="text" placeholder ="title" value = "' + value + '" />&nbsp;&nbsp;&nbsp;' +
            '<input name = "newText2" id= "newText2" type="text" placeholder ="Authors" value = "' + value + '" />&nbsp;'+
            '<input name = "newText3" id= "newText3" type="text" placeholder ="Date" value = "' + value + '" />&nbsp;'+
            '<input type="button" id ="remove" value="Remove" class="remove" /><br>'
}
/*This function is used to return textboxes for user to fill in values.from the ediucation section*/
function NewItem(value) {
    
    return '<br><input name = "NewItem1" id= "NewItem1" type="text" placeholder ="Degree" value = "' + value + '" />&nbsp;&nbsp;&nbsp;' +
            '<input name = "NewItem2" id= "NewItem2" type="text" placeholder ="Specialization" value = "' + value + '" />&nbsp;'+
            '<input name = "NewItem3" id= "NewItem3" type="text" placeholder ="University" value = "' + value + '" />&nbsp;'+
            '<input type="button" id ="remove" value="Remove" class="remove" /><br>'
}
/*This function is used to send an ajax request to submit1.php. It is called when the user clicks on submit button to 
 * submit its published records to database.*/

function submit() {
        var newText1= document.getElementById('newText1').value;
        var newText2= document.getElementById('newText2').value;
        var newText3= document.getElementById('newText3').value;
  	var dataString = 'newText1=' + newText1 
                +'&newText2=' + newText2 +'&newText3=' + newText3 ;
					$.ajax({
					type: "POST",
					url: "submit1.php",
					data: dataString,
					cache: false,
					success: function(html) {
			$("#btn").hide();
                        $("#newText1").hide();
                        $("#newText2").hide();
                        $("#newText3").hide();
                        $("#remove").hide();
                                        }
					});
}
/*This function is used to send an ajax request to submit1.php. It is called when the user clicks on submit button on
 * to education section to submit its education records to database.*/

function submit1() {
        var NewItem1= document.getElementById('NewItem1').value;
        var NewItem2= document.getElementById('NewItem2').value;
        var NewItem3= document.getElementById('NewItem3').value;       
  	var dataString = 'NewItem1=' + NewItem1
                +'&NewItem2=' + NewItem2 +'&NewItem3=' + NewItem3 ;
					$.ajax({
					type: "POST",
					url: "submit1.php",
					data: dataString,
					cache: false,
					success: function(html) {
			$("#btn").hide();
                        $("#NewItem1").hide();
                        $("#NewItem2").hide();
                        $("#NewItem3").hide();
                        $("#remove").hide();
                                        }
					});
}
/*This function is called when the user clicks on showall button in the Browse jobs section.*/

function show(source) {
		checkboxes = document.getElementsByName('item[]');
		for(var j in checkboxes)
			checkboxes[j].checked = source.checked;
	}
	function show1(source) {
		checkboxes = document.getElementsByName('item1[]');
		for(var j in checkboxes)
			checkboxes[j].checked = source.checked;
	}
function submitjob() {
        var company_name= document.getElementById('company_name').value;
        var designation= document.getElementById('designation').value;
        var experience= document.getElementById('experience').value;
        var qualification= document.getElementById('qualification').value;
        var pref_locn= document.getElementById('pref_locn').value;
        var skills = document.getElementById('skills').value;
        var name_contact= document.getElementById('name_contact').value;
        var email= document.getElementById('email').value;

  	var dataString = 'company_name=' + company_name +'&designation=' + designation 
                +'&experience=' + experience  +'&qualification=' + qualification  +'&pref_locn=' + pref_locn
         +'&skills=' + skills  +'&name_contact=' + name_contact  +'&email=' + email;
					$.ajax({
					type: "POST",
					url: "submit1.php",
					data: dataString,
					cache: false,
					success: function(html) {
			
                                        }
					});
    }
