var login_name;
var db = new PouchDB('new');
db.info().then(function (info) {
console.log(info);
});
var addOptionListeners = function() {
    console.log("Ready!");
    options = document.querySelectorAll('ul li.list');
 $("ul li.list").click(function(){
    
    var selText = $(this).text();
  //$(this).parents('.btn-group').find('.dropdown-toggle').html(selText+'<span class="caret"></span>');
document.getElementById("menu1").innerHTML=$(this).text();
group_mem();
});
};
function login()
        {                                   
        login_name =    document.querySelector('#email').value;
        var login_pwd = document.querySelector('#password').value;                
        function myDeltaFunction(doc) 
        {   
        doc.slength=0;
        return doc;
        console.log(doc);
        }   
    db.get(login_name).then(function (doc) {
            db.upsert(login_name, myDeltaFunction).then(function () {            
            if(doc.password == login_pwd)
            {
            //window.location.href = "data/newhtml2.html?"+login_name;    
            }
        else {
        alert("Login Name/Password not found");
        return false;
    }
        }).catch(function (err) { 
          console.log(err);
   });
     window.location.href = "data/newhtml2.html?"+login_name;    
   console.log(doc);
   return doc;

}).catch(function(err) {
  console.log(err);
});  

}
    function register() 
    {
         var signup_name = document.querySelector('#email').value;
         var signup_pwd =  document.querySelector('#password').value;                                
           db.put({
              _id: signup_name,
              password:signup_pwd,              
              "Friends": {},
              "group": [[,,,],[,,,],[,,,],[,,,],[,,,],[,,,],[,,,],[,,,],[,,,],[,,,],],
              "glen":0,
              "length":0,
              "Date"     : "5/4/13",
              "nine"     : "Busy",
              "ten"      : "Busy",
              "eleven"   : "Busy",
              "twelve"   : "Busy",
              "thirteen" : "Busy",
              "fourteen" : "Busy",              
              "spec_friend":{},
              "slength":0,
                }).then(function (response) {
        console.log(response);         
        alert("CONGRATS! REGISTERED. PLEASE CONTINUE TO LOGIN")
            }).catch(function (err) {
        console.log(err);
            });}    
function next()
{
    var x = location.search;
    var x = x.replace("?", "");     
    //alert(x);
    window.location.href = "newhtml3.html?"+x;    
}
function privacy()
{
    var x = location.search;
    var x = x.replace("?", "");     
    window.location.href = "availability.html?"+x;
}
function selectfriend()
{
    var x = location.search;
    var x = x.replace("?", "");     
        var seluser = [];   
   $.each($("input[name='seluser']:checked"), function(){  
   seluser.push($(this).val());
   });            
    function myDeltaFunction(doc) {
            var len = seluser.length;        
            doc.slength = seluser.length;        
            for(var i=0;i<=len;i++)
                {                    
                 doc.spec_friend[i] = seluser[i];                                                                                 
                }
                                return doc;
                console.log(doc);
        }    
        db.upsert(x, myDeltaFunction).then(function () {
        alert("success");
        }).catch(function (err) { 
        alert("notsuccess");        
})
}
function specfriend()
{
    var x = location.search;
    var x = x.replace("?", ""); 
    db.get(x).then(function (doc) {
    var len = doc.length;       
    var i;
     $('.well').append('<fieldset>');
    for(i=0;i<len;i++)    
    $('.well').append('<div><label><input type="checkbox" name ="seluser" id ="seluser" value='+doc.Friends[i]+'>'+doc.Friends[i]+'</label></div><br>');               
    $('.well').append('</fieldset>');
        return doc;
}).catch(function(err) {
  console.log(err);
});  
}


function values()
{
var x = location.search;
var x = x.replace("?", "");         
var checkedValue = document.querySelector('.Checkbox:checked').value;
//alert(checkedValue);
if(checkedValue=="SpecificFriends")
    {
    window.location.href = "specfriend.html?"+x;        
    }
if(checkedValue=="Friends")
    {
    alert("Thanks! Your profile will now be visible to all your friends");        
    window.location.href = "newhtml4.html?"+x;        
    }
if(checkedValue=="Public")
    {
    alert("Thanks! Your profile will now be visible public");        
    window.location.href = "newhtml4.html?"+x;            
    }
if(checkedValue=="Group")
    {
    window.location.href = "groups.html?"+x;            
    }
}
function back()
{
    var x = location.search;
    var x = x.replace("?", "");         
    window.location.href = "newhtml3.html?"+x;                
}
function readURL(input) 
    {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("input[type='file']").change(function(){
   $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
})    
    function myfun() 
    {
        var fname = document.querySelector('#fname').value;  
        var x = location.search;
        var x = x.replace("?", "");
        function myDeltaFunction(doc) {
            var len = doc.length;
            if(fname!="")
            {
            doc.Friends[""+len+""] =fname;                                            
            doc.length = len+1;                
            $(".well").append("<button class='btn btn-default'> "+fname+" </button> <br><br>");          
            return doc;
            console.log(doc);
        }
        else{
            alert("PLEASE ENTER A VALID NAME")
        }
    }
        db.upsert(x, myDeltaFunction).then(function () {
        //alert("success");
        }).catch(function (err) { 
        //alert("notsuccess");        
})
}

function avail() 
{
       var e = window.event,
       btn = e.target || e.srcElement;
       alert(btn.id);
   var x = location.search;
var x = x.replace("?", "");     
db.get(x).then(function (doc) {
    
    for(var i=0;i<doc.glen;i++)
    for(var j=1;j<doc.group[i].length;j++)
    {
        if(doc.group[i][j]==btn.id){
            alert(""+btn.id+" is a member of group " +doc.group[i][0]+"");
        }
    }
}).catch(function(err) {
  console.log(err);
});  
}
function allfriend() 
{
var x = location.search;
var x = x.replace("?", "");     
db.get(x).then(function (doc) {
    var len = doc.length;       
    var i;
    for(i=0;i<len;i++)
    $(".well").append("<a href ='#' onclick='avail()' class='btn btn-default' id = "+doc.Friends[i]+"> "+doc.Friends[i]+" </a> <br><br>");          
    return doc;
}).catch(function(err) {
  console.log(err);
});  
}
function setschedule()
      {
        var x = location.search;
        var x = x.replace("?", "");             
        var nine = document.getElementById("nine").innerHTML;
        var ten = document.getElementById("ten").innerHTML;
        var eleven = document.getElementById("eleven").innerHTML;
        var twelve = document.getElementById("twelve").innerHTML;
        var thirteen = document.getElementById("thirteen").innerHTML;
        var fourteen = document.getElementById("fourteen").innerHTML;      
        function myDeltaFunction(doc) {                 
            doc.nine = nine;       
            doc.ten = ten;       
            doc.eleven = eleven;       
            doc.twelve = twelve;       
            doc.thirteen = thirteen;       
            doc.fourteen = fourteen;                   
            alert("SCHEDULE UPDATED");
            return doc;
            console.log(doc);
        }
        db.upsert(x, myDeltaFunction).then(function () {
        alert("success");
          }).catch(function (err) {
          alert("notsuccess")        
})
}
function selfriends()
     {
    var x = location.search;
    var x = x.replace("?", "");     
    db.get(x).then(function (doc) {
    if(doc.slength!==0)
    {
        alert("not zero");
    for(i=0;i<doc.slength;i++)
    $(".well").append("<button button class='btn btn-default'  name= newbutton> "+doc.spec_friend[i]+" </button> <br><br>");          
    return doc;        
    }
   else{ 
    var len = doc.length;       
    var i;
    for(i=0;i<len;i++)
    $(".well").append("<button button class='btn btn-default' onClick = time() name=newbutton id ="+i+"> "+doc.Friends[i]+" </button> <br><br>");          
    return doc;
}
    }).catch(function (err) {
  console.log(err);});  
    }    
function timealign()
    {        
    var x = location.search;
    var x = x.replace("?", "");     
    //alert(x);
    //alert(x);
    window.location.href = "allfriends.html?"+x;                        
    }    
function view()
    {        
    var x = location.search;
    var x = x.replace("?", "");     
    //alert(x);    
    window.location.href = "newhtml4.html?"+x;                        
    }
    
function schedule()
    {        
     var x = location.search;
     var x = x.replace("?", "");     
     db.get(x).then(function (doc) {
     document.getElementById("nine").innerHTML= doc.nine;
     document.getElementById("ten").innerHTML = doc.ten;
     document.getElementById("eleven").innerHTML = doc.eleven;
     document.getElementById("twelve").innerHTML = doc.twelve;
     document.getElementById("thirteen").innerHTML =doc.thirteen;
     document.getElementById("fourteen").innerHTML =doc.fourteen;       
     return doc;
    }).catch(function (err) {
     console.log(err);
});}
    function timealign()
    {
     var x = location.search;
     x = x.replace("?", ""); 
     var res = x.split("%20");
     db.get(res[1]).then(function (doc) {      
        document.getElementById("friend").innerHTML= res[1];     
        document.getElementById("nines").innerHTML= doc.nine;
        document.getElementById("tens").innerHTML = doc.ten;
        document.getElementById("elevens").innerHTML = doc.eleven;
        document.getElementById("twelves").innerHTML = doc.twelve;
        document.getElementById("thirteens").innerHTML =doc.Thirteen;
        document.getElementById("fourteens").innerHTML =doc.Fourteen;       
       }).catch(function (err) {
     console.log(err);});
 
 db.get(res[2]).then(function (doc) {
     document.getElementById("user").innerHTML= res[2];     
        document.getElementById("nine1").innerHTML= doc.nine;
        document.getElementById("ten1").innerHTML = doc.ten;
        document.getElementById("eleven1").innerHTML = doc.eleven;
        document.getElementById("twelve1").innerHTML = doc.twelve;
        document.getElementById("thirteen1").innerHTML =doc.Thirteen;
        document.getElementById("fourteen1").innerHTML =doc.Fourteen;       
       }).catch(function (err) {
     console.log(err);});
    }
    function time()
    {
    var x = location.search;
    var x = x.replace("?", "");     
    //alert(x);
    
    $("button").click(function() {
    var id=this.id;
    var friend = document.getElementById(id).innerHTML;
    //alert(friend);
    window.location.href = "newhtml5.html?"+friend+x;    
        });    
    }
function group_page()
{
var x = location.search;
var x = x.replace("?", "");     
window.location.href = "groups.html?"+x;        
}
function prev1()
{
    var x = location.search;
    var x = x.replace("?", "");     
    window.location.href = "newhtml4.html?"+x;        

}
function group()
{
var x = location.search;
var x = x.replace("?", "");     
db.get(x).then(function (doc) {
   var len = doc.length;       
   var i;
   //txt = "aa";                      
    $('.well').append('<fieldset>');
   for(i=0;i<len;i++)  
    {                
    $('.well').append('<div> <label id ="checkbox" class="checkbox-inline"><input type="checkbox"class="checkbox-inline" id= "user" name="user" value='+doc.Friends[i]+'>'+doc.Friends[i]+'</label></div>');                
    }
    $('.well').append('</fieldset>');
    var glen = doc.glen;    
    for(i=0;i<glen;i++)
    {
        $("ul").append("<li class='list'>"+doc.group[i][0]+"</li>");     
    }
    addOptionListeners();    
    return doc;
}).catch(function (err) {
  console.log(err);
});  
}
function prev()
{
var x = location.search;
var x = x.replace("?", "");     
window.location.href = "newhtml2.html?"+x;            
}

function group_mem()
{
var items = document.getElementsByClassName('checkbox-inline');
for (var i = 0; i < items.length; i++)
        document.getElementsByClassName("checkbox-inline")[i].style.display = 'none';
var x = location.search;
var x = x.replace("?", "");     
db.get(x).then(function (doc) {
var groupname = document.getElementById("menu1").innerHTML;
alert(groupname);
var groupuser = [];
var no;
for(var i=0;i<doc.glen;i++)
    {
    if(doc.group[i][0] == groupname)
        {
        no=i;   
        alert(no);
        }        
    }
var len = doc.group[no].length;
alert(len);
for(var i=1;i<len;i++)
{
    groupuser.push(doc.group[no][i]);
    $('.well').append('<label id ="checkbox" class="checkbox-inline"><input type="checkbox" name="user" value='+doc.group[no][i]+'>'+doc.group[no][i]+'</label>');                
}}).catch(function (err) {
  console.log(err);
});  
}
function addgroup()
{          
var x = location.search;
var x = x.replace("?", "");          
var groupname = document.querySelector('#fname').value;  
var groupuser = [];
$.each($("input[name='user']:checked"), function(){            
   groupuser.push($(this).val());
   });      
    function myDeltaFunction(doc) 
        {            
        var glen = doc.glen;        
        doc.glen = doc.glen + 1;        
        doc.group[glen][0] =groupname;                                                                                 
        $("ul").append("<li class='group'><a>"+groupname+"</a></li>");
        var len = groupuser.length;        
        for(var i=1;i<=len;i++)
        {
         doc.group[glen][i] = groupuser[i-1];                                                                                 
        }
        return doc;
        console.log(doc);
        }   
        db.upsert(x, myDeltaFunction).then(function () {            
            alert("success");            
        }).catch(function (err) { 
        alert("notsuccess");
          console.log(err);
   })
}
var options = null;


