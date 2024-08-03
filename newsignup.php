<?php


error_reporting(E_ALL ^ E_NOTICE);

session_start();

require 'configure.php';

$getprofile = mysqli_query($conn,"select * from pic_setting where id =3");

while($row = mysqli_fetch_array($getprofile)){
    
$main = $row['pic']; 

}

?>

<?php 


if (isset($_GET['step']) && !empty($_GET['step'])) {

  $step = $_GET['step'];

  if ($step!=' ') {

     $url = "details.php?id=".$step." ";
     
     $_SESSION['url'] =  $url;

  }

}


 ?>


<!DOCTYPE html>
<html lang='en'>
<head>
  <title>&agrave;t&#233; -The online marketing website | Join Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Trirong|Poppins|Roboto">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:wght@700">
   <link href="https://fonts.cdnfonts.com/css/sweet-chili" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
 
  <script src="sweetalert.min.js"></script>  
<script src="jquery-1.11.3.min.js"></script>

<style type="text/css">
 
.footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 90px;

}

.footer a{
color:white;
}

body{
    
    
    overflow-x:hidden;
}


.waves {
  position:absolute;
  width: 100%;
  height:19vh;

 top: -126px;

 
}

::placeceholder{
    
    color:rgba(0,0,0,0.4);
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

 

html{
    
    scroll-behavior:smooth;
}

h4{
    
  font-family: 'Montserrat',sans-serif;font-weight: bold;margin-bottom:10px;font-size:17px;line-height:32px;margin-top:0px;  
    
    
}

h5{
    
   font-size:17px;font-weight:Bold;color:rgba(0,70,90,1);font-family: 'Montserrat',sans-serif; 
}


.fa-left{
   
   font-weight:bold; 
    
}


#signup-page{
    
 height:450px;width: 100%;
 background:linear-gradient(rgba(243,243,243,0.1),rgba(243,243,243,0.3)),url(<?php echo$main;?>);
 background-size:100% 100%;
 background-repeat: no-repeat;
 border-radius:15px 15px 15px 15px;   
    
}



.fa-eye{position:absolute;right:25px;top:55%;font-size:16px;opacity:0.6;display:block;cursor:pointer; }



#use{
    
    
  color: rgba(225,150,40,0.9);cursor: pointer;text-decoration-color:;text-decoration:underline;  
    
    
}



label{

  border: 1px solid transparent;

  background-color:red; 

align-content: center;

text-align: center;

padding:4px;

border-radius:5px;

color:white;

 font-family:arial;

font-size:14px;

cursor: pointer;

margin-top:10px;
margin-bottom:-8px; 

width: 100%;

box-shadow:0px 3px 5px rgba(0,0,0,0.4);

}


#loader{

width:80px;
height:50px;


}


#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}

.img{
    
 height:55px;  
 width:160px;
display:block;
margin-top:53%;
margin-left:auto;
margin-right:auto;
box-shadow:0px 3px 13px rgba(0,0,0,0.3);
background:rgba(0,0,0,0.6);
padding:5px;
    
}



#over{

width:100px;
height:100px;
margin-left: 50%;
 
position: fixed;
background-color:white;
z-index:9999;

}


#over-parent{

width:100%;
height:100%;

top:0; 
position: fixed;
background-color:white;
z-index:9999;

}









.parent{
border:;
width: 90%;
margin:40px auto;
border-radius:15px;
box-shadow:0px 3px 8px rgba(0,0,0,0.4); 
padding:45px;

}


#popup-signup.active{

visibility:visible;

opacity:1;
}

#popup{

font-family:arial,fontawesome;

position:fixed;
top: 55%;
left: 50%;
transform: translate(-50%,-50%);
width: 350px;
padding:18px 18px;
box-shadow: 0 15px 36px rgba(0,0,0,.80);

font-size:14px;
background-color:white;
background-color:white;
visibility:hidden;
opacity:1;
transition: 0.3s;
z-index: 800;

}
#popup.active,#popup-signup.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }



#popup input[type=email],#popup input[type=text],#popup input[type=password]{

font-family: arial,fontawesome;
width: 100%;
height:38px;
font-size:14px;
border: none;
margin:10px 0px;
border-bottom:1px solid rgba(0,0,0,0.3);
background-color: white;
background-color: white;
border-radius:5px;
}

#popup select{


width: 100%;
height:38px;
font-size:14px;
border: none;
margin:10px 0px;

background-color:rgba(0,70,90,0.8);

border-radius:5px;
}



#popup input[type=email]:focus, #popup input[type=password]:focus{

outline: none;


}

.fa-arrow-left{
  position:absolute; 
   top:5px;cursor:pointer;  
    padding:8px;border:1px soid transparent transparent;box-shadow:0px 0px 13px rgba(0,0,0,0.6);border-radius: 50%;color:rgba(255,164,60,1);margin-top:10px;background-color:white;
    
}


.icon-bar{


  position: fixed;
  top: 75%;
  left: 0px;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
    z-index:1;
}
.icon-bar a{

display:  block;
  text-align: center;
  padding:8px;
  transition: all 0.5s;
  color: white;
  font-size:13px;
}



.facebook{

background-color: #3b5998;
  color: white;

}
.twitter{

background-color: #55acee;
  color: white;
  
}

.instagram{

background-color: #dd4b39;
  color: white;
 
}

.telegram{

background-color: #bb0000;
  color: white;
 
}


#btn-signin{
margin-top:10px;
margin-bottom:5px;
height:35px;
color: white;
box-shadow:0px 8px 15px rgba(0,0,0,.3);

}





select{background-color:rgba(0,70,90,0.8)!important;}









.signup-form{


border:1px solid transparent transparent;
padding:10px;
width:%;
margin-left: auto;




}

#form-signup input{

font-family: arial,fontawesome;

font-size:15px;
border: none;
border-bottom:1px solid rgba(0,0,0,0.3);
margin:10px 0px;

}

#form-signup input[type=email]:focus, #form-signup input[type=password]:focus,#form-signup input[type=text]:focus,#form-signup select:focus{

outline: none;
box-shadow: none;

}

#close{

  position: absolute;
  left:86%;
  border-radius:5px;
  color:black;
  
  top:5px;
  font-size:18px;
  padding:5px 12px;
  cursor: pointer;
}


h5 svg{
    
    
    display:none;
}



@media only screen and (orientation:landscape){
 
 
 



}









@media only screen and (max-width:497px){


.waves {
    height:40px;
    min-height:40px;
    top: -40px;
   width: 100%;
  
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 80px;




  
}
  
    
h4{
    
  font-family:sweet chili;font-weight:bold;margin-bottom:30px;font-size:23px;line-height:32px;margin-top:8px;color:rgba(0,70,90,0.7);text-transform:capitalize; 
    
    
}    
    
    
  h5{
    padding:25px; padding-bottom:48px; position:absolute; width:100%;left:0;top:0; border-radius:13px 13px 0px 0px;
  color:white; font-family:gill sans;font-weight:bold;margin-bottom:15px;font-size:17px;line-height:30px;background-color:rgba(0,70,90,0.7);text-shadow:none;text-transform:capitalize;
      
  }  
    
    
h5 svg{
    
    
    position:absolute;
    bottom:-25px;
    left:0;
    width:100%;
    display:block;
}
    
    
    
   #signup-page{
  display:none; 
 height:55px;
 width: 100%;
 background:linear-gradient(to bottom left,rgba(0,70,90,0.9),rgba(243,243,243,0.5),rgba(0,70,90,0.9)),url(<?php echo$main;?>);
 background-size:cover;
 background-position:bottom center;
 background-repeat: no-repeat;
 border-radius:0px 0px 35px 35px; 
 box-shadow:0px 15px 15px rgba(0,70,90,0.3);
    
} 
    
    
    
    
    
    
    
    
    
    
    
    
    

#fillinform{

  margin-top:38px;
  
}




#use{
    
    
  color: rgba(225,140,50,0.9);cursor: pointer;text-decoration-color:;text-decoration:underline;  
    
    
}










.fa-eye{position:absolute;right:15px;top:56%;font-size:16px;opacity:0.6;display:block; }
 
 #form-signup input{

font-family: arial,fontawesome;

font-size:15px;
border: none;
border-bottom:1px solid rgba(0,0,0,0.3);
margin:10px 0px;

}
 
 #form-signup select{

font-family: arial,fontawesome;

font-size:15px;

background:rgba(0,70,90,0.7);

} 
 
 
 
 
 
    
 
 label{

  border: 1px solid transparent;

  background-color:rgba(255,255,255); 

align-content: center;

text-align: center;

padding:4px;

border-radius:5px;

color:rgba(255,0,30,0.6);

 font-family:arial;

font-size:15px;

cursor: pointer;

margin-top:13px;
margin-bottom:5px; 

width: 100%;

box-shadow:0px 0px 3px rgba(0,0,0,0.5);

}

 
 
 
 
 
 
 
    
    
    #over{

width:100px;
height:100px;

 
position: fixed;
background-color:white;
z-index:9999;

}


    
    
    
    
    
    
    
    
   .fa-arrow-left{
   position:absolute; 
   top:2px;
   left:15px;
    padding:8px;color:white;background:inherit;
    font-weight:bold
    
}
 
  
#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:10%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}   
      
    
    
    
    
    
    
    
    

#over{

width:100px;
height:100px;
margin-left: 35%;
 margin-top:50%;
position: fixed;
background-color:white;
z-index:9999;

}


#over-parent{

width:100%;
height:100%;

 
position: fixed;
background-color:white;
z-index:9999;

}















#regs{
    
    font-weight:bold;
    font-size:21px;
    color:white;
    font-family:gill sans;
    
}

#popup{

font-family:arial,fontawesome; 
position:fixed;
top: 55%;
left: 50%;
transform: translate(-50%,-50%);
width: 89%;
padding:18px 8px;
box-shadow: 0px 0px 150px rgba(0,0,0,.90);
border-radius:15px;

background-image:linear-gradient(to bottom right,rgba(243,243,243,1),rgba(243,243,243,1),rgba(245,245,245,1));


visibility:hidden;
opacity:0;
transition: 0.3s;
z-index:999;

}
#popup.active,#popup-signup.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }



#popup input[type=email],#popup input[type=text],#popup input[type=password]{

font-family: arial,fontawesome;
width: 100%;
font-size:16px;
border: none;
border-bottom:1px solid rgba(0,0,0,0.3);
background-color: white;
background-color: white;

}

#popup input[type=email]:focus, #popup input[type=password]:focus{

outline: none;


}














.icon-bar{


  position: fixed;
  top: 75%;
  left: 0px;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
    z-index:99999;
}
.icon-bar a{

  text-align: center;
  padding:8px;
  transition: all 0.5s;
  color: white;
  font-size: 15px;
}



.facebook{

background-color: #3b5998;
  color: white;

}
.twitter{

background-color: #55acee;
  color: white;
  
}

.instagram{

background-color: #dd4b39;
  color: white;
 
}

.telegram{

background-color: #bb0000;
  color: white;
 
}


#btn-signin{
margin-top:24px;
margin-bottom:15px;
height:45px;
color: white;

}



#signin-form{
    
    margin-top:85px !important;
    
}


input::placeholder{
    
 color:rgba(0,0,0,0.5);   
}

} 

@media only screen and (max-width:767px){
    
  
h5 svg{
    
    display:;
}
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 70px;




  
}
  
    
    
 .col-md-6 .img{margin-top:43%;
     
    height:55px;  
 width:120px;
display:none;

margin-left:auto;
margin-right:auto;
box-shadow:0px 3px 13px rgba(0,0,0,0.3);
background:rgba(0,0,0,0.6);
padding:5px; 
     
     
     
     
     
 }   
    
    
    
    
    
    
    
    
    
    
    

#close{

  position: absolute;
  left:91%;
 
  color:white !important;
  border-radius:50%;
  background-color:rgba(255,50,70,1);
  top:-10px;
  font-size:16px;
  padding:5px 13px;
  cursor: pointer;
  z-index:999;
  box-shadow:0px 0px 8px rgba(0,0,0,0.5);
}


.parent{
border:;
width: 100%;
margin:0px auto;
border-radius:0px;
box-shadow:0px 3px 8px rgba(0,0,0,0.4); 
padding:0px 15px;

}





h1{
 height:65px;

    
    
} 
h1 img{

float:left; 

opacity:1;

height: 45px;

width:135px;

margin-left:-3px;


    
}




#nameitem,#locitem,#conitem,#catitem,#messageitem,#priceitem{
  font-size:15px; 
   margin-left:0px; 
   padding:8px; 
 width:100%;
 word-wrap:break-word;
    
}
#main{
    
height:140px;
    
    
    
}


}

@media only screenand (min-width:768px) and (max-width:1266px){
#signup-page{
    
  display:block;  
    
}
}


@media only screen  and (min-width:497px)  and (max-width:1266px){
  
  .waves {
    height:40px;
    min-height:40px;
    top: -40px;
   width: 100%;
  
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 80px;




  
}
  
    
h4{
    
  font-family:sweet chili;font-weight:bold;margin-bottom:30px;font-size:23px;line-height:32px;margin-top:8px;color:rgba(225,40,10,0.7);text-transform:capitalize; 
    
    
}    
    
    
  h5{
      
   font-family:gill sans;font-weight:bold;margin-bottom:8px;font-size:18px;line-height:32px;margin-top:12px;color:rgba(0,70,90,0.8);text-shadow:none;text-transform:capitalize;
      
  }  
    
    
    

::placeholder{
    
    opacity:0.5;
}




    
    
    
   #signup-page{
  display:; 
 height:500px;
 width: 100%;
 background:linear-gradient(to bottom left,rgba(0,70,90,0.9),rgba(243,243,243,0.5),rgba(0,70,90,0.9)),url(<?php echo$main;?>);
 background-size:cover;
 background-position:bottom center;
 background-repeat: no-repeat;
 border-radius:0px 35px 35px 0px; 
 box-shadow:0px 15px 15px rgba(0,70,90,0.3);
 padding:20px;
    
} 
    
    
    
    
    
    
    
    
    
    
    
    
    

#fillinform{

  margin-top:18px;
  
}




#use{
    
    
  color: rgba(225,140,50,0.9);cursor: pointer;text-decoration-color:;text-decoration:underline;  
    
    
}










.fa-eye{position:absolute;right:15px;top:53%;font-size:16px;opacity:0.6;display:block; }
 
 #form-signup input{

font-family: arial,fontawesome;

font-size:15px;
border: none;
border-bottom:1px solid rgba(0,0,0,0.3);
margin:10px 0px;

}
 
 #form-signup select{

font-family: arial,fontawesome;

font-size:15px;

background:rgba(0,70,90,0.7);

} 
 
 
 
 
 
    
 
 label{

  border: 1px solid transparent;

  background-color:rgba(255,255,255); 

align-content: center;

text-align: center;

padding:4px;

border-radius:5px;

color:rgba(255,0,30,0.6);

 font-family:arial;

font-size:15px;

cursor: pointer;

margin-top:13px;
margin-bottom:5px; 

width: 100%;

box-shadow:0px 0px 3px rgba(0,0,0,0.5);

}

 
 
 
 
 
 
 
    
    
    #over{

width:100px;
height:100px;

 
position: fixed;
background-color:white;
z-index:9999;

}


#over-parent{

width:100%;
height:100%;

 
position: fixed;
background-color:white;
z-index:9999;

}




    
    
    
    
    
    
    
    
    
    
    
   .fa-arrow-left{
   position:absolute; 
   top:2px;
   left:15px;
    padding:8px;color:white;background:inherit;
    font-weight:bold
    
}
 
  
#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:10%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}   
      
    
    
    
    
    
    
    
    

#over{

width:100px;
height:100px;
margin-left: 35%;
 margin-top:50%;
position: fixed;
background-color:white;
z-index:9999;

}


#over-parent{

width:100%;
height:100%;

 
position: fixed;
background-color:white;
z-index:9999;

}















#regs{
    
    font-weight:bold;
    font-size:21px;
    color:white;
    font-family:gill sans;
    
}

#popup{

font-family:arial,fontawesome; 
position:fixed;
top: 55%;
left: 50%;
transform: translate(-50%,-50%);
width: 320px;
padding:18px 8px;
box-shadow: 0px 0px 150px rgba(0,0,0,.90);

background-image:linear-gradient(to bottom right,rgba(243,243,243,1),rgba(243,243,243,1),rgba(245,245,245,1));


visibility:hidden;
opacity:0;
transition: 0.3s;
z-index: 800;

}
#popup.active,#popup-signup.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }



#popup input[type=email],#popup input[type=text],#popup input[type=password]{

font-family: arial,fontawesome;
width: 100%;
font-size:16px;
border: none;
border-bottom:1px solid rgba(0,0,0,0.3);
background-color: white;
background-color: white;

}

#popup input[type=email]:focus, #popup input[type=password]:focus{

outline: none;


}














.icon-bar{


  position: fixed;
  top: 75%;
  left: 0px;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
    z-index:99999;
}
.icon-bar a{

  text-align: center;
  padding:8px;
  transition: all 0.5s;
  color: white;
  font-size: 15px;
}



.facebook{

background-color: #3b5998;
  color: white;

}
.twitter{

background-color: #55acee;
  color: white;
  
}

.instagram{

background-color: #dd4b39;
  color: white;
 
}

.telegram{

background-color: #bb0000;
  color: white;
 
}


#btn-signin{
margin-top:24px;
margin-bottom:15px;
height:45px;
color: white;

}







}









</style>




</head>
<body>








<div class="parent">




<div class="row" style="">
 
<div class="col-md-6 col-sm-6" style="" id="signup-page">
  
<img src='mymain.PNG' class='img'>

<a onclick="history.go(-1);"><i class="fa fa-arrow-left" style=""></i></a>

</div>

<div class="col-md-6 col-sm-6" id='fillinform' style="padding:0px 10px; padding-top:px;">


<h4 align="center" style=""><strong>Let's get started</strong></h4>



  <form style="margin-top:10px;" id="form-signup" class="container" method="post" enctype="multipart/form-data">

  <input type="hidden" name="verified" value="0">
  
  <input type="hidden" name="followers" value="0">
  
  <input type="hidden" name="sold" value="0">

  <select name="merchant" class="form-control" style="text-align: center;border:1px solid transparent;color:white;font-family:poppins; "><option value="Buyer">Buyer</option>
           <option value="Seller">Merchant</option>



  </select>
  
<br>
  <input type="text" style='font-family: arial,fontawesome;' maxlength="28" name="name" placeholder="&#xF007; Full Name  /  Business Name" class="form-control">

  <input type="email" style='font-family: arial,fontawesome;'  name="email" placeholder="&#xF1fa; Email" class="form-control">

   <input type="password" style='font-family: arial,fontawesome;'  name="password" placeholder="&#xF023; Password" class="form-control">

    <input type="password" style='font-family: arial,fontawesome;' name="cpassword" placeholder="&#xF023; Confirm Password" class="form-control">
    
    <div align="center" style="display: none;" id="loading-image"><img id="loader" src="loading-image.GIF"><br></div>

      <input type="submit" style="color: white;font-size:15px;font-family: 'Montserrat',sans-serif;box-shadow:0px 8px 15px rgba(0,0,0,0.3);border:1px solid transparent;" value="Sign up" id="btn-signup" class="form-control btn btn-warning "><br><br>

</form>


    
<p align="center" id='terms-agree'  style="font-size: 13.5px;margin-top:8px;font-family: poppins;">By signing up, you agree to <b>&agrave;t&#233;</b> <a style="font-size: 14px" href='terms.php'>Terms of use</a></p>


<p id="user" style="font-size:14px;font-family:Poppins;" align="center">Already have an account? <a id="use" class='use' style="font-size:14px;" onclick="toggle()">Login</a></p>
</div>


</div>
<br>

</div>

</div>

</div>

</div>

<div id="popup" style="">
<h5 align="center" id="h5" style=""  align=""><strong>Welcome back</strong> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8f8f8" fill-opacity="1" d="M0,160L120,133.3C240,107,480,53,720,53.3C960,53,1200,107,1320,133.3L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg></h5>
<br>  
<a onclick="toggle()" id="close"><i class="fa fa-close" style=''></i></a> 

  

 
 <form id="signin-form" style="padding:px;" method="post" enctype="multipart/form-data">


  <select name="merchant" class="form-control" style="border:1px solid transparent;text-align: center;opacity:1;color:white;font-family:poppins;font-size:16px;"><option value="Buyer">Buyer</option>
           <option value="Seller">Merchant</option>



  </select>



<input type="email" name="email" style=" font-family:arial,fontawesome;font-size:px;" placeholder="&#xF1fa; Email" class="">


<input type="password" id='myinput' style="" name="password" style =" font-family:arial,fontawesome;font-size:px;" id="myinput" placeholder="&#xF023; Password" class="">

<i class='fa fa-eye' id="show" style="" onClick='show()'></i>

<button id="btn-signin" style="font-size:15px;font-family:'montserrat';"  class="form-control btn btn-warning ">Sign in</button>

</form>
<p align="center"><br><a style="color:blue;font-family:poppins;" href="forget.php">Forgot password?</a></p>

<div align="center" style="display: none;" id="loading-div"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>

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







<p align="center" style="color: white;font-weight:bold; font-family:'Montserrat',sans-serif;font-size:14px;">Sign up for our newsletter</p>
<div class="container">

<div align="center">
  <form method="post" id="subscribe-form" enctype="multipart/form-data">

<input type="text" name="subscribe" maxlength="" style="" class="form-control" placeholder="    Enter your email address">

<button type="button" id="submit-subscribe" style="" class="btn btn-danger"><span id='sub'>Submit</span><span id='loading-image'></span></button>

</form>


</div>

<br><br>
 <div class="row" style="padding:10px">
<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:Poppins;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br><b style="color:white;">+2347033506332</b><br>Contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:Poppins;">About us<br><a style='color:white;' href='services.php'>Services</a><br>Our team<br><a style="color: white;" href="contact.php">Support center</a><br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:Poppins;">Career<br>Term & Conditions<br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:Poppins;">Our partners<br><a style="color: white;" href="faq.php">Faq</a><br><br></p>


</div>

</div>

<div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:'Monserrat',sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>

</div>


<div id="" class="icon-bar" align="">

  
<a class="facebook" href="https://web.facebook.com/profile.php?id=100076772181022"><i class='fab fa-facebook'></i></a>



<a  class="twitter" href="https://twitter.com/nimitechng"><i class='fab fa-twitter'></i></a>




<a class="instagram" href="https://instagram.com/ngnimitech"><i class='fab fa-instagram'></i></a>




<a class="telegram" href="https://t.me/ngnimitech"><i class='fab fa-telegram'></i></a>




</div>



<script type="text/javascript">

  $('#form-signup').on('submit',function(e){

        e.preventDefault();

        $("#loading-image").show();
        
        var formdata = new FormData();

      $.ajax({

            type: "POST",

            url: "signup-page.php",

            data:new FormData(this),

            cache:false,

            processData:false,

            contentType:false,

             success: function(response) {

             $("#loading-image").hide();

if (response==1) {

          
              swal({
                       title:"A verification link has been sent to the Email provided",
                       text:"Please check and click to continue",
                       
                      icon:"success",

              });

              $("#form-signup")[0].reset();
               
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



<input type="hidden" name="url" id="url" value="<?php echo$url;?>">




<script type="text/javascript">


  var postData = "text";

  $('#btn-signin').on('click',function(e){
        e.preventDefault();

$("#loading-div").show();

$("#show").hide();

      $.ajax({

            type: "POST",

            url: "login-page.php",

            data:  $("#signin-form").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {

             $("#loading-div").hide();
             
             $("#show").show();
             
             if (response==1) {
             
            if (url!=' ') {

              window.location=url;


             }
             
              else{
                
                window.location="index.php";

              }
          

             }
             
         

          else{
            
            swal({
               
               icon:"error",
                title:"Oops...",
               text:response
                
                
            }

          );
            $('#content').fadeOut(5000);

          

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
     text: response
     
  }
      
      );

            

  }
  
                 
             },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>









<script type="text/javascript">
  function show() { var x=document.getElementById('myinput');
  if (x.type==="password") {x.type="text";}
     else{
x.type="password";

     }   
    }  






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


<script type="text/javascript">
    
    function toggle() {


var popup = document.getElementById('popup');
popup.classList.toggle('active');


        }


</script>

<?php if(isset($_GET['mypage'])){$mypage = $_GET['mypage'];

if($mypage=='login'){
    
?>
<script>
    
  $(document).ready(function(){
      
   $('.use')[0].click(function(){
       
       this.click();
       
   }).click();
      
  });
    
</script>

<?php

}}

?>



</body>



</html>





