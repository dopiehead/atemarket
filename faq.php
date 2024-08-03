

<?php session_start(); 


 ?>






<!DOCTYPE html>
<html>
<head>
	<title>FAQ</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Poppins">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"><script src="sweetalert.min.js"></script>


	<script src="jquery-1.11.3.min.js"></script>
</head>


<style>

body{
    overflow-x:hidden;
	background-image:linear-gradient(to top left,rgba(0,90,70,0.3),rgba(243,243,243,0.1));
}


.footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 90px;

}

.footer a{
color:white;
}


.waves {
  position:absolute;
  width: 100%;
  height:19vh;

 top: -127px;

 
}

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}







.main{
margin-top: -10px;
height: 390px;
background-image: linear-gradient(to top left,rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url(IMG_7344.JPG);
background-size: cover;
background-position: center;
}

html{
    
    scroll-behavior:smooth;
}


#navbar a{


  margin: 0px 15px;
  font-size: 18px;
  color: white;
}


.overlay,#overlay{

  display:none;
}

.open-btn{

display: none;


}


#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}








.gallery:hover{

opacity: 0.8;

text-decoration: none;

color: white;

}
.card-header img{

height:300px;
width:100%;

}

.faq{
font-family:'Monserrat',sans-serif;
display: block;

float: right;

font-size:14px;

cursor: pointer;

color: white;



padding:8px 3px;

margin-right:13px;

font-weight: bold;

}
#activex{
 border-bottom: 2px solid rgba(255,165,50,1);
 border-radius: none;
   
}

h4{

  font-family:'Monserrat',sans-serif;
  font-weight: bold;
}
.faq:hover,.how:hover{

opacity: 0.8;

text-decoration: none;

color: white;





}

.how{

font-family:'Monserrat',sans-serif;
opacity:;
float: right;

font-size:15px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;
font-weight: bold;

}

.gallery{
font-family:'Monserrat',sans-serif;
font-weight: bold;
opacity:;
float: right;

font-size:14px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;



}


.btn-down{

  top: 80%;

border:2px transparent transparent;

margin-left: 15px;

font-weight: bold;

cursor: pointer;

background-color:rgba(255,165,50,1);

color: white !important;

font-size: 20px;

position: fixed;

z-index: 100;
box-shadow:0px 3px 8px 0px rgba(0,0,0,0.8);

display:none;
  }





.btn-down:hover{

opacity: 0.8;



  }

#btn-down{

    background-color:rgba(255,165,50,1); 
    right:15px;



}




.faqk{
margin-top: 10px; 

}

a{
color:rgba(0,0,0,0.6); 
text-decoration:none; 
}

hr{


}

a:hover{
opacity:0.8; 
text-decoration:none; 

}


h5 a:hover{
 text-decoration:none;  
 opacity:1;   
    
}


h5 {
 text-decoration:none;  
letter-spacing:0.5px;    
    
    
    
    
    
}

#content{
margin-top: -15px;
font-weight: bold;
font-family:'Monserrat',sans-serif;
text-transform:capitalize;
position: absolute;
left:45.4%;
font-size:15px;
color:lightgreen;


}







.h5:before,.h5:after{

content: "";
display: inline-block;
width:350px;
margin:3px;
border:1px solid rgba(0,0,20,0.3);



}
.h5{

font-weight: bold;
font-family:'Monserrat',sans-serif;
color: rgba(255,165,50,1);

}


#search{

border-right:none;
width:350px; 
font-size: 17px;
font-family:'Monserrat',sans-serif;


}

#search::placeholder{
font-style:italic;
color: red;
opacity: 0.9;


}
#comp{
    
 font-size:13.5px;   
    opacity:0.8;
    text-transform:uppercase;
}

.form-control:focus{

outline:none;
-webkit-box-shadow:none;
box-shadow:none;
}


.btn-info{

 font-family:Arial, Fontawesome !important;

width: 40px;

font-size: 17px;

margin-top: -66px;
} 

#footer {

padding:10px;
height: 323px;
background: linear-gradient(to right, rgba(0,0,20,0.6),rgba(0,0,20,0.6));
background-size: cover;
padding-top: 20px;


}
#footer input[type=email]{
background-color:rgba(192,192,192,0.4);
color: white;
border: none;


}

#footer input[type=email]::placeholder{
color:white;


}








#footer input[type=email]:focus{
background-color:rgba(192,192,192,0.2);
color: white;

outline: none;
box-shadow: none;

  
   border: none;
}

#footer button{

box-shadow:0px 3px 8px 0px rgba(0,0,0,0.3);
  background-color: rgba(255,165,50,1);
  color: white;
 
   border: none;
   



}

#footer button:focus{
outline: none;
box-shadow: none;

  
   border: none;



}




















.card-body{
color: rgba(0,0,0,0.5);

}

.card{
font-family:poppins;

}

.btn-next{

font-size:40px;



}

h1{
	position:;
	top: 0;
height:68px;
width: 100%;
background-color:rgba(0,70,90,0.7);
padding: 8px;
z-index: 100;

}	


hr{

border: 2px solid red;
width: 140px;
}






a:hover{
opacity: 0.8;

}

h1 img{
float:left; 

opacity:1;

height: 48px;

width:135px;

margin-left:10px;

margin-top:-1px;


}

@media only screen and (orientation:landscape){
 


.card{
font-family:poppins;

}
 
 h1 img{
float:left; 

opacity:1;





    

}




    
}



@media only screen and (max-width:497px){




h1{

width:;
height:60px;
box-shadow:none;
}



.card{
font-family:poppins;

}

.btn-info{

 font-family:Arial, Fontawesome !important;

width: 40px;

font-size: 17px;

margin-top: -66px;

margin-right: -20px;

} 

#footer p{

color: white !important;
padding-bottom: 10px;
font-family:;
font-size:15px;


}

#footer h6{

color: white !important;
font-family:verdana;
padding-bottom: 10px;
font-size:21px;
line-height:32px;
text-shadow: none;
font-weight:bold;

}




#footer {


height: 400px;
font-family:verdana;



}


#footer button{
box-shadow:0px 3px 8px 0px rgba(0,0,0,0.3);





}
#comp{
    
 font-size:13.5px;   
    opacity:0.8;
    text-transform:uppercase;
}

.h5:before,.h5:after{

content: "";
display: inline-block;
width:120px;
margin:3px;
border:1px solid rgba(0,0,20,0.3);



}

#content{

font-weight: bold;
font-family:'Monserrat',sans-serif;
text-transform:capitalize;
position: absolute;
left:25.4%;
font-size:15px;
color:lightgreen;


}

.how{

font-family:'Monserrat',sans-serif;
opacity:;
float: right;

font-size:14px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:14px;
font-weight: bold;

}

.gallery{
font-family:'Monserrat',sans-serif;
font-weight: bold;
opacity:;
float: right;

font-size:14px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;



}




}




@media only screen and (max-width:767px){
 

table{

overflow: hidden;

}  

#comp{
    
    font-size:13.5;
}



h1 img{

float:left; 

opacity:1;

height: 43px;

width:105px;

margin-left:-1px;

margin-top:-1px;

}

.h5:before,.h5:after{

content: "";
display: inline-block;
width:120px;
margin:3px;
border:1px solid rgba(0,0,20,0.3);



}

#content{

font-weight: bold;
font-family:'Monserrat',sans-serif;
text-transform:capitalize;
position: absolute;
left:35.4%;
font-size:15px;
color:lightgreen;


}

.how{

font-family:'Monserrat',sans-serif;
opacity:;
float: right;

font-size:15px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:14px;
font-weight: bold;

}

.gallery{
font-family:'Monserrat',sans-serif;
font-weight: bold;
opacity:;
float: right;

font-size:14px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:14px;



}



}
@media only screen and (max-width:1266px){
    
  
  .waves {
    height:40px;
    min-height:40px;
    top: -40px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 70px;

  
}

   
 


#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:10%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}   
    
    
    
    
    
    
    
 .how,.gallery,.faq{display: none;}
 
.overlay{
height: 100%;
width: 0%;
display: block;
position:fixed;
z-index: 9999;
top: 0px;
right: 0;
color:white;
background-color:#66909C;
box-shadow: 0px 0px 18px white;
overflow-x:hidden;
transition: 0.5s;

}
.overlay-content{
position:relative;
top: 25%;



text-align: center;

}
.overlay a{
padding: 19px;
font-size:14px;
color: white; 
display: block;
text-transform: capitalize;
font-weight: bold;
font-family:poppins;
transition: 0.3s ease-in-out;

}
.overlay .close-btn{
position: absolute;
top: -15px;
left: 75%;
font-size: 41px;
color:white;

}

.overlay a:hover,.overlay a:focus{
  color: #f1f1f1;
  text-decoration: none;
}


#open-btn{

  margin-top:-7px;
   display: block;
  color: white;
  font-size: 30px;
  float: right;
  cursor: pointer;
  
  
}

#footer {
  

height: 334px;


box-shadow:0px 5px 16px 0px rgba(0,0,0,0.3);


}
#footer input[type=email]{
background-color:rgba(192,192,192,0.4);
color: white;
border: none;


}

#footer input[type=email]::placeholder{
color:white;


}

#footer h6{

color: white;
font-family:'Monserrat',sans-serif;
padding-bottom: 10px;
font-size:22px;
text-shadow: none;
font-weight: bold;

}






#footer input[type=email]:focus{
background-color:rgba(192,192,192,0.2);
color: white;

outline: none;
box-shadow: none;

  
   border: none;
}

#footer button{

box-shadow:0px 3px 8px 0px rgba(0,0,0,0.3);
  background-color: rgba(255,165,50,1);
  color: white;
 
   border: none;
   



}

#footer button:focus{
outline: none;
box-shadow: none;

  
   border: none;



}
















}











</style>















<body>


<div id="myform" class="overlay" id="overlay">
  <button class="btn close-btn" onclick="closeform()">&times;</button>  
  <div class="overlay-content">
<a href="hoverdowntabs.php" class="" >


<?php 

if (!empty($_SESSION['email'])) {
  


$you=$_SESSION['email'];

require 'connection.php';

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read = 0 group by sender_email order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;



echo "(".$datafound.")";

}

 ?>



MESSAGES</a>

<?php

 if (!empty($_SESSION['email'])) {echo'<a href="sport.php" class="" >GALLERY</a>
 
 <a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="index.php?#sellnow" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>


   


<a  href="logoutkwasaf.php" class="" ><i class="fa fa-sign-out"></i>SIGN OUT</a>
 ';


} 


else{

echo'<a href="sport.php" class="" >GALLERY</a>

<a href="newsignup.php" class="" >&nbsp;PROFILE&nbsp;&nbsp;</a>

<a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="newsignup.php" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>


   
';

}

     ?>

 


  </div></div>

<script type="text/javascript">
function openform() {
  document.getElementById("myform").
  style.width="60%";

}

function closeform() {
  document.getElementById("myform").
  style.width="0%";
}
  




</script>








<h1 id="">


<?php

 if (!empty($_SESSION['email'])) {echo'

<a  href="logoutkwasaf.php" class="gallery" ><i class="fa fa-sign-out"></i> SIGNOUT</a>

 <a href="sport.php" class="gallery" >GALLERY</a>


 <a href="index.php" class="gallery" ><i class="fa fa-user"></i>&nbsp;PROFILE&nbsp;&nbsp;</a>


 ';


} 


else{

echo'<a href="newsignup.php" class="gallery" ><i class="fa fa-user"></i> &nbsp;PROFILE &nbsp;&nbsp;</a>';

echo'<a href="sport.php" class="gallery" >GALLERY</a>';

}

     ?>



<a href="hoverdowntabs.php" class="gallery" >


<?php 

if (!empty($_SESSION['email'])) {
  


$you=$_SESSION['email'];

require 'connection.php';

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read = 0 group by sender_email order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;



echo "(".$datafound.")";

}

 ?>














<i class="fa fa-envelope"></i> MESSAGES</a>



<a class="btn open-btn" id="open-btn" onclick="openform()" ><i style="color: white;" class="fa fa-align-justify"></i></a>
<a href="index.php" style="text-decoration: none;"><img style="" align="" src="mymain.PNG" height="80" width="200"></a>

</h1>



<div class="container ">
    
    
<br>
    
    
    
	<div align="center" class="faqk">

	<h4>Frequently Asked Questions (F.A.Q)</h4>
		<hr>


	</div>	
<br>
<div class="card">

<div class="card-header">
<strong style="color:rgba(255,165,50,1);"><p>Q.</strong> How do I find the full details of a product?</p>	

</div>	

<div class="card-body">
<strong><p>A.</strong> You can click on the see more button on the product you want to purchase in red ink.</p>	

</div>	

<div class="card-header">
<strong style="color:rgba(255,165,50,1);"><p>Q.</strong> How do I delete a product if it has been sold?</p>		


</div>

<div class="card-body">
<strong><p>A.</strong> You can click the delete  on details page .</p>		
 
</div>	

<div class="card-header">
<strong style="color:rgba(255,165,50,1);"><p>Q</strong>. How do I upload a product?</p>	

</div>	


<div class="card-body">
	<strong><p>A.</strong> Please fill out all forms at sell your produce column with a picture and click on Post.</p>

</div>	

<div class="card-header">
	<strong style="color:rgba(255,165,50,1);"><p>Q.</strong> How do I find what I'm looking for?</p>

</div>	

<div class="card-body">
	<strong><p>A.</strong> You can scroll down at items for sale or search for product on live search or on gallery. </p>

</div>	

<div class="card-header">
	<strong style="color:rgba(255,165,50,1);"><p>Q.</strong> How do I find the contact details and how many pictures can I post at once?</p>

</div>

<div class="card-body">
	<strong><p>A.</strong> Please press on product name underneath items for sale.You can only post 5 all together picture for now</p>

</div>	

<div class="card-header">
	<strong style="color:rgba(255,165,50,1);"><p>Q.</strong> How do I know if a product OR a Seller is legit?</p>

</div>

<div class="card-body">
	<strong><p>A.</strong> You have to find a way to meet up with the seller directly and check out the product. Report any fraud account as fast as you can by contacting us via the telephone icon.</p>
<strong><p>A.</strong>        Do not buy any material unless you are sure it's a legit source.</p>
</div>	









</strong>













</div>




<br>






</div></div>
<a  onclick="topFunction()" style="" id="btn-down" class="btn btn-down">&#8593;</a>
<br><br><br><br><br><br><br>


<div id="navbar" align="center">


</div>



<div class="footer">




<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
  <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
  </defs>
  <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0,70,90,0.4" />
    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(0,70,90,0.3)" />
    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(0,70,90,0.2)" />
    <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(0,70,90,0.1)" />

  </g>
</svg>



<p align="center" style="color: white;font-weight:bold; font-family:'Montserrat',sans-serif;font-size:15px;">Sign up for our newsletter</p>
<div class="container">

<div align="center">
  <form method="post" id="subscribe-form" enctype="multipart/form-data">

<input type="text" name="subscribe" style="" class="form-control" placeholder="    Enter your email address">

<button type="button" id="submit-subscribe" style="" class="btn btn-danger">Submit</button>

</form>







</div>

<br><br>
 <div class="row" style="padding:10px 28px 10px 8px">
<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>+2349074456453<br>Contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:poppins;">About us<br>Services<br>Our team<br>Support center<br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins;">Career<br>Term & Conditions<br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">Our partners<br><a style="color: white;" href="faq.php">Faq</a><br></p>


</div>

</div>

<div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:'Monserrat',sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>




</div>


<script type="text/javascript">



  var postData = "text";

  $('#submit-subscribe').on('click',function(e){
        e.preventDefault();




      $.ajax({

            type: "POST",

            url: "subscribe-page.php",

            data:  $("#subscribe-form").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {
if(response==1){
              swal({icon:"success",text:"Thanks for subscribing"});

            $("#subscribe-form")[0].reset();
}
else{
    
      swal({icon:"error",title:"Oops...",text:response});

    
}
            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>



<script>
      
      
     $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 15) {
    $('.btn-down').fadeIn();
  } else {
    $('.btn-down').fadeOut();
  }
});



$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 15) {
    $('.btn-down').fadeIn();
  } else {
    $('.btn-down').fadeOut();
  }
}); 
      
      
    
      
  </script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/636c3f32daff0e1306d6a14e/1ghfddnsg';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->









  <script>
      
    function topFunction() {



  document.body.scrollTop = 0;
  


  document.documentElement.scrollTop = 0;



}
  
      
      
  </script>


</div>



</body>
</html>