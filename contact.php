
<?php session_start(); 

error_reporting(E_ALL ^ E_NOTICE);

?>








<!DOCTYPE html>
<html>
<head lang='en'>


<title>&agrave;t&#233; -The online marketing website | Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="flickity.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Poppins">  
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

 <script src="sweetalert.min.js"></script>  
<script src="jquery-1.11.3.min.js"></script>
<script src="flickity.pkgd.min.js"></script>


<style>

body{

	background-image:linear-gradient(to top left,rgba(0,90,70,0.1),rgba(243,243,243,0.1));
overflow-x:hidden;
height:100%;
}

.footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 90px;

}

.footer a{
    
    color:white;
    
}



 .how,.gallery,.faq{display: block;}


.waves {
  position:absolute;
  width: 100%;
  height:18vh;

 top: -120px;

 
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



 .how,.gallery,.faq{display: block;}

#conv{
    
 margin-top:20px;   
    
}


#store{
margin-top:10px;
width:100%;
background-color: white
background-color:white;

}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}




input,textarea{
    margin-top:5px;
	border:none;
	font-size: 13px;


}

.c{
margin-top:28%;
color:rgba(155,55,80,0.8);
}

 h6{

margin-top:30%;

padding-bottom: 10px;

margin-bottom:17px;
text-shadow: none;
font-weight:normal;
font-family:'Montserrat',sans-serif;
font-weight: bold;

}


html{
    
    scroll-behavior:smooth;
}


.overlay,#overlay{

  display:none;
}

#open-btn{

display: none;


}


.gallery:hover{

opacity: 0.8;

text-decoration: none;

color: white;

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



.faq:hover,.how:hover{

opacity: 0.8;

text-decoration: none;

color: white;





}


#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}






.how{

font-family:'Monserrat',sans-serif;
opacity:;
float: right;

font-size:14px;

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




.form-control:focus{

outline:none;
-webkit-box-shadow:none;
box-shadow:none;
}






h1{
	position:;
	top: 0;
height:65px;
width: 100%;
background-color:rgba(0,70,90,0.7);
box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
padding: 8px;
z-index: 999;

}	





a:hover{
opacity: 0.8;

}

h1 img{
float:left; 

opacity:1;

height: 43px;

width:125px;

margin-left:10px;

margin-top:-1px;


}

@media only screen and (orientation:landscape){
 

 
 
 
 .how,.gallery,.faq{display: block;}

.card{
font-family:'Monserrat',sans-serif;

}
 
 h1 img{
float:left; 

opacity:1;



    

}




    
}
@media only screen and (max-width:767px){
    
 input[type=text],input[type=email],textarea{
     
    border:1px solid transparent; 
    
    box-shadow:0px 0px 5px rgba(0,0,0,0.3);
     
 }
    
 
  .waves {
    height:47px;
    min-height:47px;
    position:absolute;
    top:-47px;
    margin-top:0.01em;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top:70px;

  
}


#store{

width:100%;
background-color: white
background-color:white;
margin-top:35px;
}




#subscribe-form input[type=text]{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}



h1{

width:;
height:63px;
box-shadow:0px 0px 5px rgba(0,0,0,0.3);
width: 100%;
background-color:rgba(0,70,90,0.7);

z-index: 100;

}



.how{

font-family:'Monserrat',sans-serif;
opacity:;
float: right;

font-size:13px;

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

#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:10%;  color: white;border-radius:0px 15px 15px 0px; 
}






 
  h6{

margin-top:20%;

padding-bottom: 10px;

margin-bottom:17px;
text-shadow: none;
font-weight:normal;
font-family:poppins;
font-weight: bold;

}
 
 
 
 
 
    
    
    
h1 img{
float:left; 

opacity:1;

height: 43px;

width:105px;

margin-left:-1px;

margin-top:1px;


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

  margin-top: -5px;
   display: block;
  color: black;
  font-size:28px;
  float: right;
  cursor: pointer;
  
  
}

   
    
    
    
    
    
    
    
}

@media only screen and (min-width:768px) and (max-width:1280px){


  .waves {
    height:45px;
    min-height:45px;
    position:absolute;
    top:-45px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top:70px;

  
}


#store{

width:100%;
background-color: white
background-color:white;

}




#subscribe-form input[type=text]{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}



h1{

width:;
height:63px;
box-shadow:0px 0px 5px rgba(0,0,0,0.3);
width: 100%;
background-color:rgba(0,70,90,0.7);

z-index: 100;

}



.how{

font-family:'Monserrat',sans-serif;
opacity:;
float: right;

font-size:13px;

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

#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:10%;  color: white;border-radius:0px 15px 15px 0px; 
}






 
  h6{

margin-top:20%;

padding-bottom: 10px;

margin-bottom:17px;
text-shadow: none;
font-weight:normal;
font-family:poppins;
font-weight: bold;

}
 
 
 
 
 
    
    
    
h1 img{
float:left; 

opacity:1;

height: 43px;

width:105px;

margin-left:-1px;

margin-top:1px;


}    
    
    

 .how,.gallery,.faq{display: none;}
 
.overlay{
height: 0%;
width: 100%;
display: block;
position:absolute;
z-index: 300;
top: 58px;
right: 0;
color:#818181;
background-color:#f5f5f5;
background-color:#f5f5f5;
overflow-x:hidden;
transition: 0.5s;

}
.overlay-content{
position:relative;
top: 20%;
width: 100%;
text-align: center;

}

.overlay a{
padding: 8px;
font-size:14px;
color: #818181; 
display: block;
text-transform: capitalize;
font-weight: bold;
font-family:'Monserrat',sans-serif;
transition: 0.3s;
}
.overlay .close-btn{
position: absolute;
top: 3px;
left: 4px;

font-size: 25px;
color:white;
border:1px solid transparent;
background-color:rgba(255,40,30,0.8);
border-radius:50%;
padding:0px 10px;


}

.overlay a:hover,.overlay a:focus{
  color: #f1f1f1;
  text-decoration: none;
}


#open-btn{

  margin-top: -5px;
   display: block;
  color: black;
  font-size:28px;
  float: right;
  cursor: pointer;
  
  
}



}


</style>







</head>














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


<a href="index?#sellnow.php" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>


<a  href="logoutkwasaf.php" class="" ><i class="fa fa-sign-out"></i>SIGN OUT</a>
 ';


} 


else{

echo'<a href="sport.php" class="" >GALLERY</a>

<a href="newsignup.php" class="" >&nbsp;PROFILE&nbsp;&nbsp;</a>


';

?>



<a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="newsignup.php" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>

<?php

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








<h1>


<?php

 if (!empty($_SESSION['email'])) {echo'

<a  href="logoutkwasaf.php" class="gallery" ><i class="fa fa-sign-out"></i> SIGNOUT</a>

 <a href="sport.php" class="gallery" >GALLERY</a>


 ';


} 


else{

echo'<a href="newsignup.php" class="gallery" ><i class="fa fa-user"></i> PROFILE</a>';

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










<div id="store" class="container">
<div class="row">
<div class="col-md-6 col-sm-4">
	
<h6 class="container" style="text-align:left; color:rgba(0,70,90,0.7);">Send us a message!!</h6>





</div>
<div class="col-md-6 col-sm-8">
	
<form method="post" action=""  id="conv" enctype="multipart/form-data">

<?php if (!empty($_SESSION['id'])) {
    
?>	
<input type="hidden" name="lastname" id="lastname" class="form-control" style="font-family: arial,Fontawesome" placeholder="&#xF007; Name" value="<?php echo$name?>">


<br>	

	<input type="hidden" name="email" id="email" class="form-control" style="font-family: arial,Fontawesome" placeholder="&#xF1fa; Email" value="<?php echo$email;?>">
<?php


} 

else{


	echo '<input type="text" name="lastname" id="lastname" class="form-control" style="font-family: arial,Fontawesome;font-size:13px;" placeholder="&#xF007; Name"';

echo'<br><br>';

    echo'<input type="text" name="email"  id="email" class="form-control" style="font-family: arial,Fontawesome;font-size:13px;" placeholder="&#xF1fa; Email" value="" >';

}


 ?>







<br>

<input type="text" name="subject" id="subject" class="form-control" style="font-family: arial,Fontawesome;font-size:13px;" placeholder=" Subject" value="" >
<br>
<textarea name="firstname" style="font-size:13px;" cols="" id="firstname" class="form-control" wrap="physical" placeholder="...Write a message" rows="6" ></textarea> 

<br>

 





<div style=""><button type="button" id="submit2" class="btn  btn-primary btn-warning form-control" style="border-radius:15px;color: white;" name=""> Send </button><br><br>

</div>

</form>
</div>
</div>
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





<p align="center" style="color: white;font-weight:bold; font-family:'Montserrat';font-size:15px;">Sign up for our newsletter</p>
<div class="container">

<div align="center">

  <form id="subscribe-form" enctype="multipart/form-data">

<input type="text" name="subscribe" style="" class="form-control" placeholder="    Enter your email address">

<button type="button" id="submit-subscribe" style="" class="btn btn-danger">Submit</button>

</form>
</div>



<br><br>
 <div class="row" style="padding:10px">
<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>+2347033506332<br>Contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:poppins;"><a href='about.php'>About us</a><br><a href='services.php'>Services</a><br>Our team<br><a href='contact.php'>Support center</a><br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins;">Career<br><a href='terms.php'>Term & Conditions</a><br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">Our partners<br><a href='faq.php'>Faq</a><br><br></p>


</div>

</div></div>







<div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:'Monserrat',sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>

</div></div>
<script type="text/javascript">



  var postData = "text";

  $('#submit2').on('click',function(){

      $.ajax({

            type: "POST",

            url: "commentupdate.php",

            data:  $("#conv").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {
             
             if (response==1) {

            
            swal({
              
              text:"Message sent",

              icon:"success",

            });
           $("#conv").find('input:text').val('');

            $("#conv").find('textarea').val('');

            $('input:checkbox').removeAttr('checked');
              


              $("#myformx").hide();



          }
            
            

             else{

                  $("#conv").find('input:text').val('');

            $("#conv").find('textarea').val('');

            $('input:checkbox').removeAttr('checked');


              swal({
                    icon:"error",
                     title:"Oops...",
                   text:"Message field is required"
                 

              });
             }

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });


</script>

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
    
            swal({
                
                icon:"success",
                text:"Thanks for subscribing"
                
            });

 $("#subscribe-form")[0].reset();
 
       }    
    
    else{
        
           swal({
                
                icon:"error",
                title:"Oops...",
                text:response
                
            });

    }   
                 
             },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>
  

  



</body>
</html>