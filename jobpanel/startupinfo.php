
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="dist/easy-autocomplete.min.css" rel="stylesheet" type="text/css">
    <link href="dist/easy-autocomplete.themes.min.css" rel="stylesheet" type="text/css">
    <script src="lib/jquery-1.11.2.min.js"></script>
    <script src="dist/jquery.easy-autocomplete.min.js" type="text/javascript" ></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
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
          $('<li><a href="#" class="prev_link">PREVIOUS</a></li>').appendTo(pager);
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
     color:black;
         font-weight: bold;

 }
 tr{
     text-align: center;
     font-style: bold;
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
    <div class="container">
<div id="backgroundImage">    
<div id="my-div">
  <table class="table table-bordered">
     <tbody id="myTable">
         <a href="#" >Freshdesk</a></td></tr><tr><td>
<a href="#" >IndiaProperty.com</a></td></tr><tr><td>
<a href="#" >Yebhi</a></td></tr><tr><td>
<a href="#" >CouponRani</a></td></tr><tr><td>
<a href="#" >Shop Pirate</a></td></tr><tr><td>
<a href="#" >Myntra</a></td></tr><tr><td>
<a href="#" >Practo</a></td></tr><tr><td>
<a href="#" >HackerEarth</a></td></tr><tr><td>
<a href="#" >Grabhouse</a></td></tr><tr><td>
<a href="#" >FashionLady</a></td></tr><tr><td>
<a href="#" >LeadSquared</a></td></tr><tr><td>
<a href="#" >WebThemez</a></td></tr><tr><td>
<a href="#" >Zovi</a></td></tr><tr><td>
<a href="#" >Indiarush</a></td></tr><tr><td>
<a href="#" >iamWire</a></td></tr><tr><td>
<a href="#" >MeraEvents</a></td></tr><tr><td>
<a href="#" >WeddingPlz.com</a></td></tr><tr><td>
<a href="#" >Cashkaro</a></td></tr><tr><td>
<a href="#" >HeadHonchos</a></td></tr><tr><td>
<a href="#" >Milaap</a></td></tr><tr><td>
<a href="#" >Alchetron</a></td></tr><tr><td>
<a href="#" >ShepHertz</a></td></tr><tr><td>
<a href="#" >Mirraw</a></td></tr><tr><td>
<a href="#" >Testbook</a></td></tr><tr><td>
<a href="#" >Owler</a></td></tr><tr><td>
<a href="#" >Hike</a></td></tr><tr><td>
<a href="#" >CouponDunia</a></td></tr><tr><td>
<a href="#" >Grabon</a></td></tr><tr><td>
<a href="#" >Thrillophilia</a></td></tr><tr><td>
<a href="#" >HealthcareMagic</a></td></tr><tr><td>
<a href="#" >Marketcalls</a></td></tr><tr><td>
<a href="#" >Tripoto</a></td></tr><tr><td>
<a href="#" >Twenty19</a></td></tr><tr><td>
<a href="#" >BankBazaar.com</a></td></tr><tr><td>
<a href="#" >POPxo.com</a></td></tr><tr><td>
<a href="#" >GoPaisa</a></td></tr><tr><td>
<a href="#" >ClearTax</a></td></tr><tr><td>
<a href="#" >fossBytes</a></td></tr><tr><td>
<a href="#" >Smartprix</a></td></tr><tr><td>
<a href="#" >Webkul</a></td></tr><tr><td>
<a href="#" >FabFurnish</a></td></tr><tr><td>
<a href="#" >Couponraja</a></td></tr><tr><td>
<a href="#" >EXPLARA</a></td></tr><tr><td>
<a href="#" >HolidayIQ</a></td></tr><tr><td>
<a href="#" >Voylla</a></td></tr><tr><td>
<a href="#" >FreeKaaMaal</a></td></tr><tr><td>
<a href="#" >Youth4work</a></td></tr><tr><td>
<a href="#" >Letsintern</a></td></tr><tr><td>
<a href="#" >WebEngage</a></td></tr><tr><td>
<a href="#" >Wooplr</a></td></tr><tr><td>
<a href="#" >AdvocateKhoj</a></td></tr><tr><td>
<a href="#" >Jabong India</a></td></tr><tr><td>
<a href="#" >Zepo.in</a></td></tr><tr><td>
<a href="#" >Dream11</a></td></tr><tr><td>
<a href="#" >PhoneRadar</a></td></tr><tr><td>
<a href="#" >AdPushup</a></td></tr><tr><td>
<a href="#" >Pricebaba</a></td></tr><tr><td>
<a href="#" >Jaypore</a></td></tr><tr><td>
<a href="#" >Goibibo</a></td></tr><tr><td>
<a href="#" >Autoportal India</a></td></tr><tr><td>
<a href="#" >Social Samosa</a></td></tr><tr><td>
<a href="#" >Olacabs</a></td></tr><tr><td>
<a href="#" >Housing.com</a></td></tr><tr><td>
<a href="#" >Limeroad</a></td></tr><tr><td>
<a href="#" >Hitwicket</a></td></tr><tr><td>
<a href="#" >Mettl</a></td></tr><tr><td>
<a href="#" >Meritnation</a></td></tr><tr><td>
<a href="#" >CommonFloor</a></td></tr><tr><td>
<a href="#" >Ixigo</a></td></tr><tr><td>
<a href="#" >Zomato</a></td></tr><tr><td>
<a href="#" >Holidify</a></td></tr><tr><td>
<a href="#" >Dazeinfo</a></td></tr><tr><td>
<a href="#" >AglaSem</a></td></tr><tr><td>
<a href="#" >Inc42</a></td></tr><tr><td>
<a href="#" >YourStory</a></td></tr><tr><td>
<a href="#" >Internshala</a></td></tr><tr><td>
<a href="#" >Urban Ladder</a></td></tr><tr><td>
<a href="#" >Infibeam</a></td></tr><tr><td>
<a href="#" >Giftease</a></td></tr><tr><td>
<a href="#" >Taxiforsure</a></td></tr><tr><td>
<a href="#" >Blog to Bollywood</a></td></tr><tr><td>
<a href="#" >Mebelkart</a></td></tr><tr><td>
<a href="#" >Devsaran</a></td></tr><tr><td>
<a href="#" >Pepperfry</a></td></tr><tr><td>
<a href="#" >Bookmyshow</a></td></tr><tr><td>
<a href="#" >Collegedunia</a></td></tr><tr><td>
<a href="#" >Voonik</a></td></tr><tr><td>
<a href="#" >Travelyaari.com</a></td></tr><tr><td>
<a href="#" >CouponzGuru</a></td></tr><tr><td>
<a href="#" >PriceRaja.com</a></td></tr><tr><td>
<a href="#" >Magzter</a></td></tr><tr><td>
<a href="#" >CompareRaja.in</a></td></tr><tr><td>
<a href="#" >Buyhatke</a></td></tr><tr><td>
<a href="#" >mycity4kids</a></td></tr><tr><td>
<a href="#" >Instamojo</a></td></tr><tr><td>
<a href="#" >TripHobo</a></td></tr><tr><td>
<a href="#" >Mysmartprice</a></td></tr><tr><td>
<a href="#" >DesiDime</a></td></tr><tr><td>
<a href="#" >Exotel</a></td></tr><tr><td>
<a href="#" >FindYogi</a></td></tr><tr><td>
<a href="#" >Planeteves</a></td></tr><tr><td>
<a href="#" >Wooden Street</a></td></tr><tr><td>
<a href="#" >MyTokri</a></td></tr><tr><td>
<a href="#" >PosterGully</a></td></tr><tr><td>
<a href="#" >Wishberry</a></td></tr><tr><td>
<a href="#" >Sweet Couch</a></td></tr><tr><td>
<a href="#" >Trip Mega Mart</a></td></tr><tr><td>
<a href="#" >Embibe</a></td></tr><tr><td>
<a href="#" >SoftwareSuggest</a></td></tr><tr><td>
<a href="#" >LinksAlpha</a></td></tr><tr><td>
<a href="#" >MediFee.com</a></td></tr><tr><td>
<a href="#" >AskIITians</a></td></tr><tr><td>
<a href="#" >Mockbank</a></td></tr><tr><td>
<a href="#" >DailyFantasyCricket</a></td></tr><tr><td>
<a href="#" >FullonSMS</a></td></tr><tr><td>
<a href="#" >Buyt.in</a></td></tr><tr><td>
<a href="#" >Price-Hunt</a></td></tr><tr><td>
<a href="#" >The Tech Portal</a></td></tr><tr><td>
<a href="#" >MyOperator</a></td></tr><tr><td>
<a href="#" >Plivo</a></td></tr><tr><td>
<a href="#" >Agriya</a></td></tr><tr><td>
<a href="#" >CometChat</a></td></tr><tr><td>
<a href="#" >Clickooz</a></td></tr><tr><td>
<a href="#" >Whirlpool India</a></td></tr><tr><td>
<a href="#" >Trainman</a></td></tr><tr><td>
<a href="#" >SupportBee</a></td></tr><tr><td>
<a href="#" >OtakuKart</a></td></tr><tr><td>
<a href="#" >OfficeChai</a></td></tr><tr><td>
<a href="#" >Townscript</a></td></tr><tr><td>
<a href="#" >eLitmus</a></td></tr><tr><td>
<a href="#" >EasyEngine</a></td></tr><tr><td>
<a href="#" >Travelkhana</a></td></tr><tr><td>
<a href="#" >GetMyUni</a></td></tr><tr><td>
<a href="#" >Baggout</a></td></tr><tr><td>
<a href="#" >Apptha</a></td></tr><tr><td>
<a href="#" >Fatbit</a></td></tr><tr><td>
<a href="#" >Crokes</a></td></tr><tr><td>
<a href="#" >CouponDekho</a></td></tr><tr><td>
<a href="#" >M4maths</a></td></tr><tr><td>
<a href="#" >Clickastro.com</a></td></tr><tr><td>
<a href="#" >CoCubes</a></td></tr><tr><td>
<a href="#" >Winni</a></td></tr><tr><td>
<a href="#" >Reload</a></td></tr><tr><td>
<a href="#" >Aasaanjobs</a></td></tr><tr><td>
<a href="#" >YourDOST</a></td></tr><tr><td>
<a href="#" >Zoutons.com</a></td></tr><tr><td>
<a href="#" >Hiree</a></td></tr><tr><td>
<a href="#" >Giftxoxo</a></td></tr><tr><td>
<a href="#" >WeMakeScholars</a></td></tr><tr><td>
<a href="#" >Compuindia</a></td></tr><tr><td>
<a href="#" >School Time</a></td></tr><tr><td>
<a href="#" >Alma Connect</a></td></tr><tr><td>
<a href="#" >Mygola</a></td></tr><tr><td>
<a href="#" >MSG91</a></td></tr><tr><td>
<a href="#" >Maddycoupons.in</a></td></tr><tr><td>
<a href="#" >Eduonix</a></td></tr><tr><td>
<a href="#" >Infofru</a></td></tr><tr><td>
<a href="#" >Wingify</a></td></tr><tr><td>
<a href="#" >EasySendy Pro</a></td></tr><tr><td>
<a href="#" >RealtyCompass</a></td></tr><tr><td>
<a href="#" >Toppr</a></td></tr><tr><td>
<a href="#" >sumHR</a></td></tr><tr><td>
<a href="#" >CAknowledge.in</a></td></tr><tr><td>
<a href="#" >Bro4u.com</a></td></tr><tr><td>
<a href="#" >Infeeds</a></td></tr><tr><td>
<a href="#" >Studytonight</a></td></tr><tr><td>
<a href="#" >yo!Kart</a></td></tr><tr><td>
<a href="#" >MyOnlineCA.in</a></td></tr><tr><td>
<a href="#" >TouristLink</a></td></tr><tr><td>
<a href="#" >Designhill</a></td></tr><tr><td>
<a href="#" >Industrykart</a></td></tr><tr><td>
<a href="#" >ConfirmTkt.com</a></td></tr><tr><td>
<a href="#" >Magazine3</a></td></tr><tr><td>
<a href="#" >Pennyful.in</a></td></tr><tr><td>
<a href="#" >iSpyPrice.com</a></td></tr><tr><td>
<a href="#" >rtCamp</a></td></tr><tr><td>
<a href="#" >SaveMyRupee</a></td></tr><tr><td>
<a href="#" >Sparx IT Solutions</a></td></tr><tr><td>
<a href="#" >FleAffair.com</a></td></tr><tr><td>
<a href="#" >CouponZeta</a></td></tr><tr><td>
<a href="#" >MeetUniversity</a></td></tr><tr><td>
<a href="#" >Coinsecure</a></td></tr><tr><td>
<a href="#" >Flaberry.com</a></td></tr><tr><td>
<a href="#" >AxisRooms</a></td></tr><tr><td>
<a href="#" >Haptik</a></td></tr><tr><td>
<a href="#" >GemPundit</a></td></tr><tr><td>
<a href="#" >TeerCounter.com</a></td></tr><tr><td>
<a href="#" >WorknHire</a></td></tr><tr><td>
<a href="#" >PolicyX.com</a></td></tr><tr><td>
<a href="#" >Renomania</a></td></tr><tr><td>
<a href="#" >MartJack</a></td></tr><tr><td>
<a href="#" >Flintobox</a></td></tr><tr><td>
<a href="#" >QuackQuack.in</a></td></tr><tr><td>
<a href="#" >EventsHigh</a></td></tr><tr><td>
<a href="#" >QuirkyByte</a></td></tr><tr><td>
<a href="#" >Vakilsearch</a></td></tr><tr><td>
<a href="#" >Techlomedia</a></td></tr><tr><td>
<a href="#" >PushEngage</a></td></tr><tr><td>
<a href="#" >Vicky.in</a></td></tr><tr><td>
<a href="#" >EBazar.Ninja</a></td></tr><tr><td>

     </tbody>
</table>
 </div></div>   
<ul class="pagination pagination-lg pager" id="myPager"></ul>
</body>
</html>