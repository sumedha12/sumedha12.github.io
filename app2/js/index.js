       
       
       if (!localStorage.getItem('names'))
        {
            localStorage.setItem('names', '[]')
        }        
        if (!localStorage.getItem('passwords'))
        {
            localStorage.setItem('passwords', '[]')
        }
    function login()
        {
        var login_name = document.querySelector('#email').value;
        var login_pwd = document.querySelector('#password').value;        
        localStorage.setItem('name',login_name);
        localStorage.setItem('pwd',login_pwd);        
        
        var user = localStorage.getItem('user1');
        var allusers = JSON.parse(user);
        for(var i=0;i<allusers.length;i++)
        {
        if (allusers[i].firstName === login_name && allusers[i].lastName === login_pwd)
            {           
            alert("Record Found!!");
            window.location.href = "http://localhost/entrepuener/data/newhtml2.html";    
            } 
        }
        }
    function register() {
    	var signup_name = document.querySelector('#email').value;
        var signup_pwd = document.querySelector('#password').value;                
        var names = JSON.parse(localStorage.getItem('names'));
        var passwords = JSON.parse(localStorage.getItem('passwords'));
            users = new Array();
            names.push(signup_name);
            passwords.push(signup_pwd);
            passwords.forEach(function() 
            {
            var me = {names:names,password:passwords};
            localStorage.setItem("user",JSON.stringify(me));
            });
        for (var i = 0; i < names.length; i++) {
        users.push({
        "firstName" : names[i],
        "lastName"  : passwords[i],
        "Friends": {
    },
    "length":"0",
        "Date"     : "5/4/13",
        "nine"     : "Busy",
        "ten"     : "Busy",
        "eleven"     : "Busy",
        "twelve"     : "Busy",
        "Thirteen"     : "Busy",
        "Fourteen"     : "Busy",
        "Fifteen"     : "Busy",
    });
        localStorage.setItem("user1",JSON.stringify(users));
}
        console.log(localStorage.getItem("user")); // will return {"name":"myname","age":99,"gender":"myGender","address":{"flat":"a1","building":"some Inn"}}        
        localStorage.setItem('names', JSON.stringify(names));
        localStorage.setItem('passwords', JSON.stringify(passwords));
        alert("REGISTERED! PLEASE ENTER DETAILS TO LOGIN")
    }
    function privacy()
      {
          window.location.href = "http://localhost/entrepuener/data/availability.html";    
      }
function myfun() 
    {
        var fname = document.querySelector('#fname').value;        
        var user5 = localStorage.getItem('user1');
        var name =  localStorage.getItem('name');
        var friends = JSON.parse(user5);                           
        for(var i=0;i<friends.length;i++)
        {                
        var len = friends[i].length;
        var len2 = parseInt(len); 
        len2 = len2 + 1;        
            if(friends[i].firstName === name)
            {     
                friends[i].Friends[""+len2+""] =fname;            
                friends[i].length = len2.toString();                
            }
        }                
        localStorage.setItem("user1",JSON.stringify(friends));       
        $(".well").append("<button> "+fname+" </button> <br><br>");
    }    
        function myfun2() 
        {
            window.location.href = "http://localhost/entrepuener/data/newhtml3.html";    
        }   
    function hello2(){        
        window.location.href = "http://localhost/entrepuener/data/allfriends.html";                    
    }    
    function myfun1() 
    {
        var user5 = localStorage.getItem('user1');
        var allfriends = JSON.parse(user5);                           
        var name =  localStorage.getItem('name');
        for(var i=0;i<allfriends.length;i++)
        {                
            if(allfriends[i].firstName === name)
            {     
                var len = allfriends[i].length;                  
                for(var j=1;j<=len;j++)
            $(".well").append("<button>"+allfriends[i].Friends[""+j+""]+" </button> <br><br>");            
            }
        }        
    }   
    function myfun3() 
    {
        var user = localStorage.getItem('user1');
        var allfriends = JSON.parse(user);                           
        var name =  localStorage.getItem('name');
        for(var i=0;i<allfriends.length;i++)
        {                
            if(allfriends[i].firstName === name)
            {     
            var len = allfriends[i].length;              
            for(var j=1;j<=len;j++)
            $(".well").append("<button class=newbutton onClick = time() name=newbutton id ="+j+" >"+allfriends[i].Friends[""+j+""]+" </button> <br><br>");                        
            }
        }        
    }
    function time()
    {
$("button").click(function() {
    var id=this.id;
              var friend = document.getElementById(id).innerHTML;
              alert(friend);
              localStorage.setItem('friend',friend);
              window.location.href = "http://localhost/entrepuener/data/newhtml5.html";    

        });    
    }
     function hello()
      {
        var nine = document.getElementById("nine").innerHTML;
        var ten = document.getElementById("ten").innerHTML;
        var eleven = document.getElementById("eleven").innerHTML;
        var twelve = document.getElementById("twelve").innerHTML;
        var thirteen = document.getElementById("thirteen").innerHTML;
        var fourteen = document.getElementById("fourteen").innerHTML;
      var users = localStorage.getItem('user1');
      //alert(document.getElementById("nine").innerHTML);

      var allusers = JSON.parse(users);
      var name = localStorage.getItem('name');
        for(var i=0;i<allusers.length;i++)
        {
        if(allusers[i].firstName === name)
        {
        allusers[i].Date = "fname",
        allusers[i].nine = nine,
        allusers[i].ten = ten,
        allusers[i].eleven = eleven,
        allusers[i].twelve = twelve,
        allusers[i].Thirteen = thirteen;        
        allusers[i].Fourteen = fourteen;        
        } 
        }
        localStorage.setItem("user1",JSON.stringify(allusers));
        alert("CONGRATS! SCHEDULE UPDATED!!")        
    }
    function hello1()
    {
        window.location.href = "http://localhost/entrepuener/data/newhtml4.html";    
    }
    function schedule()
      {      
      var users = localStorage.getItem('user1');
      var allusers = JSON.parse(users);
      var name = localStorage.getItem('name');
        for(var i=0;i<allusers.length;i++)
        {
        if (allusers[i].firstName === name)
        {
        document.getElementById("nine").innerHTML= allusers[i].nine;
        document.getElementById("ten").innerHTML = allusers[i].ten;
        document.getElementById("eleven").innerHTML = allusers[i].eleven;
        document.getElementById("twelve").innerHTML = allusers[i].twelve;
        document.getElementById("thirteen").innerHTML =allusers[i].Thirteen;
        document.getElementById("fourteen").innerHTML =allusers[i].Fourteen;       
        } 
        }
    }
    function timealign()
      {
       //alert(document.getElementById("nine").innerHTML);
       var users = localStorage.getItem('user1');
       var allusers = JSON.parse(users);
       var name = localStorage.getItem('name');
        for(var i=0;i<allusers.length;i++)
        {
        if (allusers[i].firstName === name)
        {
        document.getElementById("nine").innerHTML= allusers[i].nine;
        document.getElementById("ten").innerHTML = allusers[i].ten;
        document.getElementById("eleven").innerHTML = allusers[i].eleven;
        document.getElementById("twelve").innerHTML = allusers[i].twelve;
        document.getElementById("thirteen").innerHTML =allusers[i].Thirteen;
        document.getElementById("fourteen").innerHTML =allusers[i].Fourteen;       
        }     
        var friend = localStorage.getItem('friend');
        if (allusers[i].firstName === friend)
        {
        document.getElementById("nine1").innerHTML= allusers[i].nine;
        document.getElementById("ten1").innerHTML = allusers[i].ten;
        document.getElementById("eleven1").innerHTML = allusers[i].eleven;
        document.getElementById("twelve1").innerHTML = allusers[i].twelve;
        document.getElementById("thirteen1").innerHTML =allusers[i].Thirteen;
        document.getElementById("fourteen1").innerHTML =allusers[i].Fourteen;       
        }
        }
      }
var db = new PouchDB('kittens');
db.info().then(function (info) {
  console.log(info);
})              
