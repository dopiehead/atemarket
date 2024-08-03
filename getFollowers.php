
<?php

session_start();

$follower=$_SESSION['id'];


?>



<!DOCTYPE html>
<html lang='en'>
<head>

<title>&agrave;t&#233; -The online marketing website</title>

  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Poppins">

<link rel="stylesheet" href="flickity.min.css">



    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">

<script src="sweetalert.min.js"></script> 



  <script src="jquery-1.11.3.min.js"></script>
<script src="flickity.pkgd.min.js"></script>
<style type="text/css">


html{
    
    scroll-behavior:smooth;
}


body{user-select: none; 

background:linear-gradient(to top right,rgba(243,243,243,0.1),rgba(0,70,90,0.3));
  
 overflow-x:hidden; 

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







.fa-users{

color: rgba(0,70,90,0.7);

font-size: 16px;

font-weight: bold;

}


.alertFollow,.alertunFollow{

border:1px solid transparent;

padding:5px 15px;

width: 30%;

color:white;

background-color: rgba(0,90,40,0.7);

position: absolute;

margin: auto;

left: 0;

right: 0;

display: none;





}



#followers{

color: black;

font-size: 14px;

font-weight: bold;

}


.btnFollow{

 

font-size: 13px;

font-family:;

color: white;

padding: 3px 10px;

background-color: rgba(255,155,50,0.9);

border:1px solid transparent;

border-radius: 15px;

box-shadow: 0px 0px 15px rgba(0,0,0,0.3);

font-weight: bold;



}

#nameprofile{

text-transform: capitalize;
font-family:poppins;
color: black;
margin-left: 10px;

}


.btnUnfollow{



  

font-size: 13px;

font-family:;

color: white;

padding: 3px 10px;

background-color: rgba(255,165,40,0.8);

border:1px solid transparent;

border-radius: 15px;

box-shadow: 0px 0px 15px rgba(0,0,0,0.3);

font-weight: bold;




}



.flickity-page-dots{

  display: none;
}


.seemore{

color: white;

font-size:14px;

float: right;


}


#items{

 font-family:'Monserrat',sans-serif;




}


#premium{
    
    position:absolute;
    top:3px;
    left:5px;
    
}    
    
#premium i{
    
    
    color:gold;
    font-size:15px;
} 


.myitems #premium{

position: relative;
left:2px;
font-size:14px;

}















.imgProfile{
   height:170px;
   width:170px;
   padding:3px;
   margin-bottom: 10px;
   margin-top: 10px;
   border-radius: 50%;

  box-shadow:0px 0px 13px rgba(0,0,0,0.3);
    
}





#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}





h4{
font-size:15px;
 font-family:poppins,sans-serif;
color:white;
padding:8px;
background:rgba(0,70,90,0.7);


}

h5{
font-size: 18px;
 font-family:poppins,sans-serif;

font-weight:;

}



#popup{
background-color: rgba(248,248,248,0.3);  
background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 400px;
padding:5px;
z-index: 99;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;

}

#popup.active,#popup-picture.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }
#closex{
color: white;
font-size: 21px;
position: absolute;
top: 6px;
left: 91%;


padding-top:8px;
cursor: pointer;

}
#closex:hover, #closex:focus{
opacity: 0.6;
border: none;
outline: none;
box-shadow: none;

}


#close{
color: white;
font-size: 21px;
position: absolute;
top: 6px;
left: 91%;


padding-top:8px;
cursor: pointer;

}
#close:hover, #close:focus{
opacity: 0.6;
border: none;
outline: none;
box-shadow: none;

}


h4{
  margin-bottom:15px;  
    
    
}







h4{
 font-family:poppins;

font-weight: bold;

}



.btn-down{
    
box-shadow:0px 5px 8px 0px rgba(0,0,0,0.5);    
   

  top: 80%;
  display: none;

border:2px transparent transparent;

margin-left: 15px;

font-weight: bold;

cursor: pointer;

background-color:rgba(255,165,50,1);

color: white !important;

font-size: 20px;

position: fixed;

z-index: 100;



  }





#open-btn{

  margin-top:-10px;
   display: none;
  color: white;
  font-size: 30px;
  float: right;
  cursor: pointer;
 
  
}





.overlay,#overlay{

  display:none;
}






h1{

height:60px;

background-color:rgba(0,70,90,0.7);

padding:10px 8px;





} 


h1 img{
float:left; 

opacity:1;

height: 48px;

width:135px;

margin-left:-8px;

margin-top:-5px;

opacity: 1;

}



















a:hover{
    
    opacity:0.85;
    
    
    
}

 



.faq{

font-weight:bold;

float: right;

font-size:15px;

cursor: pointer;

color: white;



padding:8px;

margin-right:10px;
background-color:none;

}
.gallery:hover{

opacity: 0.8;

text-decoration: none;

color: white;

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

border-radius:8px;

padding:8px 1px;

margin-right:10px;
font-weight: bold;



}





.gallery{

font-weight: bold;
opacity:;
float: right;

font-size:15px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;
font-family:'Monserrat',sans-serif;


}




#footer p{

color: white !important;
padding-bottom: 8px;
 font-family:'Monserrat',sans-serif;



}

#footer h6{

color: white;
font-family:century gothic;
padding-bottom: 8px;
font-size:22px;
text-shadow: none;
font-weight: bold;

}








#footer {

padding:10px;
height: 344px;
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



#h6{

  border:1px solid transparent transparent;

  background-color:rgba(0,70,90,0.7);  

  color:white;

height: 40px;
 

  width:100%;

  padding-top:8px;

  font-size:14px;

  font-family:'Monserrat',sans-serif;
  font-weight: bold;
  text-transform: uppercase;

}









h1 img{
float:left; 

opacity:1;

height:48px;

width:145px;

margin-left:-3px;

margin-top:-1px;

opacity: 1;

}



h1 input[type=text]:focus{



border:1px solid lightblue;

-webkit-box-shadow:0 0 2px lightblue;

box-shadow:0 0 2px lightblue;

 



}



.heading{

position:;

top:0;

z-index: 100;

width: 100%;

}














input[type=submit]{

border: none;

background-color:rgba(255,165,50,1);

color:white;

width:;

box-shadow:0px 1px 3px rgba(0,0,0,0.2);

transition: all 0.3s ease 0s;

margin-bottom:10px;

height: 35px;

align-self:center;

-webkit-box-shadow:0 0 1px red;

box-shadow:0 0 1px red;





}

input[type=submit]:focus{

 background-color:rgba(255,165,50,1); 
}





button:hover{

opacity: 0.8;

}





.closebtnx{

position: absolute;

top: 2px;

right:15px;

color:black;

font-weight: bold;

font-size: 25px;

line-height: 20px;

cursor: pointer;

transition:0.4s;

}







.closebtnx:hover{opacity: 0.6;



}

strong{
display: block;
color: green;


font-size: 25px;

}





@media only screen and (orientation:landscape){

 body{
 
height: 100%;

}
  
 
}









@media only screen and (max-width:497px){


  .waves {
    height:40px;
    min-height:40px;
    top: -40px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 70px;

  
}




html{
    
    scroll-behavior:smooth;
}

  
    

   h1{

       background-color:rgba(0,70,90,0.7);

    height:60px; 

     padding:6px 8px;

    box-shadow:rgba(0,0,0,0.3);

   

   } 

#name{
 font-size:19px;
 margin-top:5px;
  
     
 } 
  



 
 a:hover{
         
         
      opacity:0.85;   

     }






 

}


@media only screen and (max-width:767px){
    
    
  .waves {
    height:40px;
    min-height:40px;
    top: -40px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 70px;

  
}

    
   h4{
font-size:16px;
 font-family:poppins,sans-serif;
color:white;
padding:8px;
background:rgba(0,70,90,0.7);


} 
    
    
   
 .imgProfile{
   height:100px; 
   width:100px;

   border-radius: 50%;
    
}  
    
    
 





}

@media only screen and (max-width:1024px){
 

 
  

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




 
#popup-picture{
background-color: rgba(248,248,248,0.3);  
background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 350px;
padding:5px;
z-index: 99;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;

} 
 
 
 
 
 
 
 
 
    
    
    
    
    
    
#popup{
background-color: rgba(248,248,248,0.3);  
background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 350px;
padding:5px;
z-index: 99;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;

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

  margin-top:-8px;
   display: block;
  color: white;
  font-size: 30px;
  float: right;
  cursor: pointer;
 
  
}








h5{
font-size: 18px;

 font-family:poppins;

font-weight:bold;

color: rgba(255,165,50,0.8);


}




h1 img{

float:left; 

opacity:1;

height:43px;

width:105px;

margin-left:-1px;

margin-top:1px;

opacity: 1;

}


.faq,.gallery,.how{



float: right;

font-size:15px;

font-weight:bold;

margin-right:7px;



font-family:verdana;



} 
.gallery{
  font-family:verdana;  
    
   font-size:15px; 
   font-weight:bold;
   opacity:0.95;
    
    
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

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read = 0 order by id desc";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;



echo "(".$datafound.")";

}

 ?>



MESSAGES</a>

<?php

 if (!empty($_SESSION['id'])) {echo'<a href="sport.php" class="" >GALLERY</a>
 
 
<a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="index.php?#sellnow" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>


<a  href="logoutkwasaf.php" class="" ><i class="fa fa-sign-out"></i>SIGN OUT</a>
 ';


} 


else{

echo'<a href="sport.php" class="" >GALLERY</a>

<a href="newsignup.php" class="" ><i class="fa fa-user"></i> &nbsp;PROFILE&nbsp;&nbsp;</a>


<a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="newsignup.php" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>

';

}

     ?>




  </div></div>




<h1>

<?php
if(!empty($_SESSION['id'])){echo'
 

<a href="logoutkwasaf.php" style="text-transform: uppercase;" class="how" ><i class="fa fa-sign-out"></i> SIGNOUT</a>
';}

else{

echo'<a href="newsignup.php" style="text-transform:uppercase;" class="gallery"><i class="fa fa-user-alt"></i> PROFILE</a>';




}


?>


<a href="sport.php" class="gallery" >GALLERY</a>

<a href="hoverdowntabs.php" class="gallery" >


<?php 

$you=$_SESSION['email'];

require 'connection.php';

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read=0 order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;

echo "(".$datafound.")";



 ?>

<i class="fa fa-envelope"></i> MESSAGES</a>

<a class="btn open-btn" id="open-btn" onclick="openform()" ><i style="color: white;" class="fa fa-align-justify"></i></a>

<a href="index.php" class="" ><img style="" align="" src="mymain.PNG" height="100" width="200"></a>



</h1>


<br>


<h5 align="center">Followers</h5>

<div class="container">

<?php


require 'configure.php';

$checkfirst =  mysqli_query($conn, "select profile.id,profile.name,profile.profile_pic,email,user_id,follower_id from profile,followers where profile.id = follower_id and user_id ='$follower' order by profile.id");

if ($checkfirst->num_rows>0) {


while ($data = mysqli_fetch_array($checkfirst)) {

$myid = $data['follower_id'];

if (!empty($_SESSION['id'])) {

	

	if (!empty($data['profile_pic'])) {

		echo "<a href='merchant.php?id=$myid'><img class='imgProfile' src=".$data['profile_pic']."></a>";
	}

  else{

echo "<a href='merchant.php?id=$myid'><img class='imgProfile' style='background-color:rgba(245,245,243,0.3);'></a>";

  }
	
	
	echo"&nbsp;&nbsp;&nbsp;<a id='nameprofile' href ='merchant.php?id=$myid'><span id='nameprofile' style=''>".$data['name']."</span></a><br>";


?>


 <?php
}

}

}

else{

  echo "<div style='color:red;'align='center'><br><br><br>You have no follower yet<br><br><br></div>";
}


?>




</div>


<br><br>

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
 <div class="row" style="padding:10px;">
<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins,sans-serif;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>+2347033506332<br>Contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:poppins,sans-serif;">About us<br><a style='color:white;' href='services.php'>Services</a><br>Our team<br><a style='color:white;' href='contact.php'>Support center</a><br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins,sans-serif;">Career<br><a style='color:white;' href='terms.php'>Term & Conditions</a><br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins,sans-serif;">Our partners<br><a style='color:white;' href='faq.php'>Faq</a><br></p>


</div>



</div>

<div align="center" style="color:white;font-size:12px;text-transform:uppercase; font-family:poppins,sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>

</div>


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



<script type="text/javascript">



  var postData = "text";

  $('#submit-subscribe').on('click',function(e){
        e.preventDefault();

$("#loading-image").show();


      $.ajax({

            type: "POST",

            url: "subscribe-page.php",

            data:  $("#subscribe-form").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {

$("#loading-image").hide();

if(response==1){
    
            swal({icon:"success",
            
            text:"Thanks for subscribing"
                
                
            });

         $("#subscribe-form")[0].reset();
           
}

else{
    
     swal({icon:"error",
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