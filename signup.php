
<?php

session_start();

error_reporting(E_ALL ^ E_NOTICE);

require 'configure.php';

$getprofile = mysqli_query($conn,"select * from pic_setting where id=1 and id = 4 and=6 and id=7 and id=9 and id =10");

while($row = mysqli_fetch_array($getprofile)){
    
$main = $row['pic'];  


    
}


?>






<!DOCTYPE html>

<html lang='en'>

<title>&agrave;t&#233; -The online marketing website | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=0" charset="utf-8">
  <meta name="google-site-verification" content="yTRVEfrk-v_wznwn6c8yrU64womMfrq9I6Ns6JWFmqo">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Trirong|Poppins">
  <link href="https://fonts.cdnfonts.com/css/sweet-chili" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/montserrat-alternates" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="stylesheet" href="flickity.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script src="sweetalert.min.js"></script>
<script src="flickity.pkgd.min.js"></script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9711737947499937"
     crossorigin="anonymous"></script>

<head>
<style type="text/css">
  
body{

font-family: 'Montserrat';
overflow-x:hidden;
}



#soldMerchant{
    
    position:absolute;
    top:2px;
    right:-1px;
    padding:4px 12px;
    border:1px solid transparent;
    color:white;
    border-radius:50%;
    background-color:rgba(255,20,10,1);
}







 
 .flow{

height: 305px;


overflow:auto;



}

 
 
.footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 100px;

}

.footer a{
color:white;
}


.waves {
  position:absolute;
  width: 100%;
  height:17vh;

 top: -113px;

 
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




#recent{
    
   background-color:rgba(255,150,50,0.9); 
    
}


#hi{

font-family:'montserrat alternates';
margin-top:8px;
font-weight:bold;
color:rgba(0,70,90,0.8);
font-size:28px;
font-weight:bold;

}


#connect{
    margin-top:15px;
    padding:8px;
    width:100%;
    background-color:rgba(0,70,90,0.7);
}



#what{
   margin-top:-20px; 
  font-size:15px;
  font-family:poppins;
  line-height:23px;
  text-align:center; 
  width:100%;
    
}

#sales,#buyitem{

text-align: center;
margin-top:10px;
 display: inline-block;
 margin-left: 10px;
 margin-right: 10px;
margin-bottom: 15px;
 padding:5px 8px;
font-weight:bold;
text-decoration:none;
 border-radius:8px;
 font-size:18px;
 box-shadow:0px 3px 6px rgba(0,0,0,0.3);

}





#marketImg{

width: 100%;
height: 400px;

}


.btn-down{
    
box-shadow:0px 0px 13px rgba(0,0,0,0.5);    
  top: 80%;
  display: none;
border:2px transparent transparent;
right: 15px;
font-weight: bold;
cursor: pointer;
background-color:rgba(255,165,50,1);
color: white !important;
font-size: 20px;
position: fixed;
z-index: 100;

  }



.flickity-page-dots{
    
    bottom:22px;
    transition:0.3s;
}    
    
.flickity-page-dots .dot{
    
    height:4px;
    width:45px;
    margin:0;
    border-radius:0;
}    
    
.flickity-page-dots .dot.is-selected{
    
    background-color:rgba(255,165,50,1);
    
}


#popup{
background-color: rgba(248,248,248,0.3);  
background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 800px;
padding:5px;
z-index: 9999;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
display:none;
transition: 0.3s;

}


#closePopup{
color: red !important;
font-size: 21px;
position: absolute;
top: 0px;
left: 93%;
padding-top:8px;
cursor: pointer;

}


#closePopup:hover, #closePopup:focus{
    
opacity: 0.6;
border: none;
outline: none;
box-shadow: none;

}

#main .flickity-prev-next-button {
  display: block;

  width:25px;
  height:25px;
}
#mission{
    position:relative;
    margin-top:-5px;
    
}


#mission p{

 text-align: center;
 font-family: sans-serif;
 width:100%;

}



#main .flickity-page-dots{

 
  display:block;
  top:85%;
}


#main  .flickity-page-dots .dot{

  width: 12px;
  height: 12px;
  opacity: 1;
  background: transparent;
  border: 2px solid white;
  margin:0px 5px;
  
  border-radius:50%;
}

#main  .flickity-page-dots .dot.is-selected{

  background-color: white;
}






#main {



width: 100%;

 height:100%;
 background-repeat: no-repeat;
transition: all 300ms ease-in-out;
 box-shadow:none;
 position: relative;
  
}

#main img{

height:250px;
width: 100%;




}

#banner img{
    

 width:100%;
 height:235px;
 
 margin-top:8px;
 margin-bottom:8px;
    
}




.c-more{
    
color:;    
font-size:13px;
font-family:'montserrat';

}




.seemore{

color: white;
font-size:14px;
float: right;

}



input[type=text]::placeholder{
    
    color:rgba(192,192,192,0.7);
    
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
   
     
html{
    
    scroll-behavior:smooth;

    user-select: none;
}


.splashscreen{
  display: block;
margin-right: auto;
margin-left: auto;
margin-top: 20%;
margin-bottom: auto;
 width: 180px;
 height:100px;
}



.carousel{
    
 padding-top:8px;   

}



.cell{
margin-left:8px;
margin-bottom:15px;
border-top:1px solid transparent;
 border:1px solid transparent;
 box-shadow:none;
margin-right:21px;
 
}









.cell-carousel{
margin-left:8px;
margin-bottom:25px;
border-top:1px solid rgba(0,0,0,0.2);
 border:1px solid transparent transparent;
 box-shadow:0px 0px 5px rgba(0,0,0,0.4);
margin-right:21px;
border-radius:16px;

padding-bottom:5px;
z-index: -99;
 
}



#menu {
    
margin:15px 45px;

z-index: -99;
 
 
}


#menu a{

background-color: inherit;

color: rgba(0,70,90,0.7);

font-size:14px;

}



.fa-map-marker{
    
  color:blue;  
}


#menu figure img{

width: 100%;
height:180px;

}

#result img{
    
margin-left:0px;
height:110px;
margin-bottom:3px;

}


#nameitem{

font-family:'montserrat';
font-weight:bold;
color:green;
text-transform:capitalize;
font-size:13px;
text-decoration: none;
margin-left: 5px;


}


#nameitem a{
text-decoration: none;
color:green;

}




#nameMerchant{

font-family:'montserrat';
font-weight:bold;
color:rgba(0,70,90,0.7);
text-transform:capitalize;
font-size:13px;
text-decoration: none;
margin-top:5px;
text-align:center;

}


#nameMerchant a{
text-decoration: none;
color:rgba(0,70,90,0.7);
text-align:center;

}











#discount{
    
background-color: rgba(255,195,50,0.4);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: absolute;
top:65px;
font-weight: bold;
padding:3px;
right:15px;
z-index:;
font-size: 12px;

}



#views{

position: absolute;
top:60px;
left:10px;
background-color: rgba(192,192,192,0.9);
color: black;
font-weight: bold;
padding: 5px;
z-index:;
font-size: 12px;

}


h4{
    
background-color:rgba(0,70,90,0.7);
  font-size: 15px;
  font-family:sans-serif;
padding:8px;
  font-weight: 600;
  margin-bottom:25px;
  
}


h4 span{

  color:white;
 
 
}



h4 span a{

  color:white;
  
  margin:0px 15px;
 
}





.row{

margin-bottom:25px;

}



#result a{

color:green;

}



#priceitem{

font-family:poppins;
font-weight: bold;
color:rgba(225,10,40,0.7);
text-transform:capitalize;
font-size:12px;
margin-left:4px;

}



#conitem,#locitem,#catitem{
    
font-size:12px;
font-family:poppins;
color: rgba(0,0,0,0.5);
margin-left:5px;
text-transform:capitalize;

}

#imgitem{
height:170px;
width:190px;
margin-top:0px;
border-radius:15px 15px 0px 0px;


}


#imgMerchant{
height:170px;
width:170px;
margin-top:0px;
border-radius:50%;
box-shadow:0px 0px 8px rgba(0,0,0,0.4);
border:2px solid rgba(243,243,243,1);
padding:6px;


}





.carousel .flickity-page-dots{

display:none;
  
}


#submit-subscribe{
    
   float: right;
   margin-top:-39px;
   margin-right:20%;  
   color: white;
   border-radius:0px 15px 15px 0px; 
}


#subscribe-form input{
    
   width:60%;
   height:40px;
   border-radius:15px 15px 15px 15px;
   font-size: 13px; 
   
}


figure p{

font-family:sans-serif;
font-size: 15px;
opacity: 0.8;

}




.btn-warning{

  font-size: 13px;
  color: white;
  font-family:poppins;
  font-weight:bold;
}






figure h6{

font-family:sans-serif;
font-size: 21px;
font-weight: bold;

}


figure i{
    
font-size:31px;
background-color:red;
opacity:0.8;
padding:21px;
border-radius: 50%;
box-shadow:0px 3px 10px rgba(0,0,0,0.6);
color:white;
text-align: center;
margin-bottom:21px;
cursor: pointer;

    
}

.overlay{

  display: none;
}


#result{
    
  font-size:13px;
text-transform:capitalize;
padding:0px 23px;
border:1px solid transparent transparent; 
background-color:white; 
background-color:white; 
box-shadow: 0px 3px 6px 0px rgba(0,0,0,0.2);
position: absolute;
right:12%;
z-index:800;
width:25%;
font-weight:bold; 
 font-family:poppins;
word-wrap: break-word;
margin-top:10px;

}




#result #priceitem{
    
margin-left: -2px;
color: rgba(205,0,45,0.7);
font-size:12px;
font-family: sans-serif;

}

#result #item{
    
opacity: 0.7;
margin-top:7px;
font-size:13px;
font-family: sans-serif;
margin-bottom:5px;

}


#result #nameitem{

margin-left:-2px;
color:green;
font-size:14px;
font-family:'montserrat';
margin-bottom:2px;
font-weight: normal;

}



#result #discount{
    
background-color: rgba(0,70,90,0.8);
position: relative;
margin-left: 15px;
top:30px;
color: white;
border:none !mportant;

}


#q{


box-shadow:0px 0px 8px rgba(0,0,0,0.5) ;

border-radius:2px;

border:1px solid transparent;

font-family: arial,fontawesome;

width:85%;


height:33px;

margin-top:-1px; 

background: white;

 font-style: italic;

color:black;

}

#q:focus{
    
     
     outline:none;
     background: rgba(0,0,0,0.2);

    
}





figure p{
padding:10px;
text-align: center;
margin-bottom:31px; 
    
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
position: fixed;
background-color:white;
z-index:9999;

}

.btn-search{
display:;
  background-color:red;
    color: white;
     box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.2);
     float: right;
     margin-top: -38px;
     margin-right:10%;

}


.btn-search:focus{

  background-color: rgba(255,165,50,1);
    color: white;
    outline: none;
    box-shadow: none;
}


.btn-search:hover{

    color: white;
    opacity: 0.8;
}

#searchdata{

  top:100px; 
  left:0%; 
  right:0%; 
  position: absolute;  
  display: none;
  z-index: 1000;
}


h1{

  height:55px;
  background-color: rgba(0,70,90,0.8);
}



h1 img{

height: 43px;
width:105px;
background-color: inherit;
margin-left:8px;
margin-top:-3px;

}


.open-btn{

display: none;

}



.faq:hover,.how:hover{

opacity: 0.8;
text-decoration: none;
color: white;



}



.gallery{

font-family: 'Montserrat',sans-serif;
float: right;
font-size:15px;
cursor: pointer;
color:white;
text-transform: uppercase;
margin-top: 10px;
margin-right:9px;
margin-left:9px; 
font-weight: bold;
font-family: 'Montserrat',sans-serif;

}





.gallery:hover{

opacity: 0.8;
text-decoration: none;
color: white;

}


figure p{

font-family:sans-serif;
font-size: 16px;
opacity: 0.8;

}


figure h6{

font-family:sans-serif;
font-size: 21px;
font-weight: bold;

}

.menu{
    
    padding:8px;
}






@media only screen and (min-width:608px) and (max-width:775px) {

.waves{
    
    top:-45px;
}


 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 70px;




  
}


#q{
    
    width:85%;
}



 #banner img{
    
 
 width:100%;
 height:155px;

    
}
 


}







@media only screen and (min-width:782px) and (max-width:1300px) {












  .waves {
    height:45px;
    min-height:45px;
    top: -45px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 70px;




  
}

   
#mission{
    
    margin-top:3px;
}
    
    
    

   
    #q{
        
        
        height:35px;
        width:45%;
    }
    
    .gallery{
        
       margin-top:19px; 
       font-size:17px;
        
        
    }
    
    

  
  h1{
      background:linear-gradient(to right,rgba(0,70,90,0.6),rgba(0,70,90,0.9),rgba(0,70,90,0.9),rgba(0,70,90,0.9)); 
    
      
      
  }
  
  
  
  #menu  figure p a{
      
      font-size:18px;
  }
  
  
  
  
 

 

}






@media only screen and (max-width:781px){
 
 
 
 
 
 
 #imgitem{
height:140px;
width:100%;
margin-top:0px;
border-radius:15px 15px 0px 0px;


}
 
 
 
 
 

 
 
 
 
 
 
 
 .flow{

height: 295px;

overflow:scroll;

position:relative;

}


#soldMerchant{
    
    position:absolute;
    top:2px;
    right:-1px;
    padding:4px 12px;
    border:1px solid transparent;
    color:white;
    border-radius:50%;
    background-color:rgba(255,20,10,1);
}

 
 

#imgMerchant{
height:140px;
width:140px;
margin-top:0px;
border-radius:50%;
box-shadow:0px 0px 8px rgba(0,0,0,0.4);
border:2px solid rgba(243,243,243,0.9);
padding:2px;


}



 
 
 
 
 
 
 #banner img{
    
 margin-top:19px;
 margin-bottom:19px;
 width:100%;
 height:125px;

    
}
 
 
 
 
 
 
 
  .waves {
    height:45px;
    min-height:45px;
    top: -45px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 70px;

border:none;


  
}

#main {
margin-top:-8px;
height:100%;

width:100%;

 position: relative;
transition: all 300ms ease-in-out;

  
}

#main img{
 height:113px;
width:100%;
object-fit:fill;
}



#main .flickity-prev-next-button {
  display: block;

  width:20px;
  height:20px;
}


#main .flickity-page-dots{

 
  display:block;
  top:83%;
}





  
    
    
.flickity-page-dots{
    
    bottom:-22px;
    transition:0.3s;
}    
    
.flickity-page-dots .dot{
    
    height:4px;
    width:45px;
    margin:0;
    border-radius:0;
}    
    
.flickity-page-dots .dot.is-selected{
    
    background-color:rgba(255,165,50,1);
    

    
}

#hi{

font-family:'sweet chili',sans-serif;
margin-top:5px;
margin-bottom:8px;
font-weight:400;
color:rgba(0,70,90,0.8);
font-size:23px;

}



#sales,#buyitem{

text-align: center;
display: inline-block;
 margin-left: 10px;
 margin-right: 10px;
margin-bottom: 15px;
margin-top:10px;
 padding:8px 15px;
font-weight:bold;
 border-radius:12px;
 font-size:14px;
 box-shadow:0px 3px 6px rgba(0,0,0,0.3);

}


#sales a i,#buyitem a i{
 
 font-size:15px;   
    
}



#marketImg{

width: 100%;
height: 235px;

}


#popup{
background-color: rgba(248,248,248,0.3);  
background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 335px;
padding:5px;
z-index: 9999;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
display:none;
transition: 0.3s;

}


#closePopup{
color: black important;
font-size: 15px;
position: absolute;
top: -13px;
left: 90%;
z-index:999;
padding:8px 15px;
box-shadow:0px 0px 5px rgb(192,192,192);
background-color:white;

border-radius:50%;


cursor: pointer;

}
#closePopup:hover, #closePopup:focus{
opacity: 0.6;
border: none;
outline: none;
box-shadow: none;

}




#mission{
    
    margin-top:5px;
}





h1{
    
    height:55px;
     background:linear-gradient(to bottom right,rgba(0,70,90,0.7) 3%,rgba(0,70,90,0.7) ,rgba(0,70,90,0.7),rgba(0,70,90,0.7)); 
}



#result #priceitem{
    
color: rgba(205,0,45,0.7);
font-size:12px;
font-family: sans-serif;

}


#result h6{

box-shadow:none;
color: rgba(0,0,0,0.5);
font-size:12px;
font-family: sans-serif;

}



#result #item{
opacity: 0.7;
margin-top:7px;
font-size:13px;
font-family:poppins;
margin-bottom:5px;
margin-left: 5px;
color:rgba(0,0,0,0.8);
}


#result #nameitem{
margin-left:5px;
color:green;
font-size:13px;
font-family:'montserrat';
margin-bottom:2px;
font-weight: normal;
}


#result a{
color:green;
font-size:12px;
font-family:'montserrat';

}


#result img{
height:110px;
width:90%;
margin-left:0px;
margin-bottom:3px;
margin-left:0px;

}


#result .btn-warning{
margin-top:8px;    
}



#result{
  font-size:13px;

padding:10px;

border:1px solid transparent transparent; 

background-color:white; 

background-color:white; 

box-shadow: 0px 3px 6px 0px rgba(0,0,0,0.2);

position: absolute;

right:12%;

z-index:800;

width:43%;

font-weight:bold; 



word-wrap: break-word;

top:58px;
}


#nameitem{

font-family:poppins;
color:green;
text-transform:uppercase;
font-size:12px;
text-decoration: none;
margin-left: 5px;
white-space:nowrap;
text-overflow:ellipsis;
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
     
    
  
.menu{
    
    
    
}    
    
#menu figure img{

width: 82%;
height:145px;
margin:0px 5px;
} 



#menu {

margin:3px 0px;

z-index: -99;
 
}



.flickity-prev-next-button {
  display:none;
}



.menu .flickity-page-dots{

  display:block;
  top:88%;
}


.menu{

 width:100%;
}

 .splashscreen{

width:100px;
height:100px;
margin-right:62%;
margin-top: 43%;
margin-bottom: auto;
 width:200px;
 height:80px;
}



 
 #over{

width:100px;
height:100px;
margin-left: 35%;
margin-top: 50%;
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
    

 
 #priceitem{

font-family:poppins;
font-weight: bold;
color:rgba(225,10,40,0.7);
text-transform:capitalize;
font-size:13px;
margin-left:4px;

}



#conitem,#locitem,#catitem{
font-size:13px;
font-family:poppins;
color: rgba(0,0,0,0.5);
margin-left:5px;
text-transform:capitalize;
white-space:nowrap;
text-overflow:ellipsis;
}

 
    
 h4{
  font-size: 17px;
  font-family:sans-serif;
padding:8px;
  font-weight: 600;
  margin-bottom:25px;
  
}


h4 span{
 color:white;
}


#menu figure p a{

font-family:poppins;
font-size: 18px;
opacity: 0.8;
text-align:center;

}


figure h6{

font-family:sans-serif;
font-size: 18px;
font-weight: bold;

}


 .get-started{margin-top:19%;
     font-family:poppins;
     margin-bottom:3%;
 }   


.cell-carousel{
margin-left:8px;
margin-bottom:25px;
 border:1px solid transparent transparent;
 box-shadow:0px 0px 5px rgba(0,0,0,0.4);
margin-right:21px;
border-radius:16px;
border-top:1px solid rgba(0,0,0,0.3);
padding-bottom:5px;
z-index: -99;
width:178px;
 
}

#imgitem{width:100%;}



.icon-bar a{

display: none;
  text-align: center;
  padding: 10px;
  transition: all 0.5s;
  color: white;
  font-size: 13px;
  z-index:999;
  font-weight: normal;
}



#q{



box-shadow:0px 0px 8px rgba(0,0,0,0.3);

border-radius:2px;

border:1px solid transparent;

font-family: arial,fontawesome;

width:63%;

float:right;

height:33px;
margin-top:-1px; 

background: white;

 font-style: italic;

color:black;

}
#q:focus{
    
     
     outline:none;
     background: rgba(0,0,0,0.2);

    
}





figure i{

font-size:25px;

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
  color:red;
  text-decoration: none;
}


#open-btn{
   display: block;
  color: white;
  font-size:25px;
  float: right;
  cursor: pointer;
 
}


h1 img{

height: 43px;
width:105px;
background-color: inherit;
margin-left:2px;
margin-top:-3px;

}




#close{

position: absolute;
right: 20px;
top: 10px;
font-size: 21px;
cursor: pointer; 
color: white;

}


#submit-subscribe{
    
   float: right;
   margin-top:-39px;
   margin-right:10%; 
   color: white;
   border-radius:0px 15px 15px 0px; 
   
}


#subscribe-form input{
    
   width:80%;
   height:40px;
   border-radius:15px 15px 15px 15px;
   font-size: 13px; 
}    
  


#result{
    
  font-size:13px;
padding:0px 8px;
border:1px solid transparent transparent; 
background-color:white; 
background-color:white; 
box-shadow: 0px 3px 6px 0px rgba(0,0,0,0.2);
position: absolute;
color:rgba(0,0,0,0.7);
right:12%;
text-transform:capitalize;
z-index:800;
width:43%;
font-weight:bold; 
font-family:poppins;
white-space:nowrap;
text-overflow:ellipsis;
overflow:hidden;
margin-top:35px;

}


#result #discount{
background-color: rgba(0,70,90,0.8);
position: relative;
left:-8px;
top:30px;
padding:3px;
color: white;

}

.fa-chevron-left,.fa-chevron-right{
    
    font-weight:bold;
} 
 
.menu{
    
    background-color:white;
}

#what{
    
  font-size:14px;
  font-family:poppins;
  line-height:23px;
  text-align:justify; 
  
    
    
}

#mission p{

 text-align: justify;
 font-family: sans-serif;
 width:100%;

}

}





@media only screen and (max-width:339px){
 
 h1 img{
     
     margin-top:-85px;
 }
    

}




</style>







</head>


<body>
 


<div id="myform" class="overlay" id="overlay">


  <button class="btn close-btn" onclick="closeform()">&times;</button> 

  <div class="overlay-content">

 
 
<a href="hoverdowntabs.php" class="" >MESSAGES</a>

<a href="sport.php" class="" >GALLERY<i class="fa fa-caret"></i> </a>

 <a href="newsignup.php" class="" > &nbsp;PROFILE&nbsp;&nbsp;</a>
    

<a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="newsignup.php" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>


    





 </div>



</div>



<h1>




<a href="newsignup.php" class="gallery" id="" ><i class="fa fa-user"></i></a>

<a href="sport.php" class="gallery" id="activex" >GALLERY</a>

<a href="hoverdowntabs.php" class="gallery" ><i class="fa fa-envelope"></i></a>


<a class="btn open-btn" id="open-btn" onclick="openform()" ><i style="color: white;" class="fa fa-align-justify"></i></a>




<a style="text-decoration: none;"><img style="" align="" src="mymain.PNG"></a>

</h1>

<div class="container">
<input style='background-color:white;float:right;box-shadow:0px 0px 5px rgba(0,0,0,0.4);' type="search" name="q" id="q"    class="form-control"  placeholder="&#xF002;     Live search" onkeyup="q()" style=""><a class="btn btn-warning" href="newsignup.php">Sell on ate <i class="fa fa-arrow-right"></i></a>
<div class="result" id="result"></div>
</div>


<br>
<div id="main">
    
<img src="https://via.placeholder.com/350" data-flickity-lazyload="homepic/electronics.png">
<img src="https://via.placeholder.com/350" data-flickity-lazyload="homepic/fashion.png">
<img src="https://via.placeholder.com/350" data-flickity-lazyload="homepic/housingnew.png">
<img src="https://via.placeholder.com/350" data-flickity-lazyload="homepic/beauty.png">
<img src="https://via.placeholder.com/350https://via.placeholder.com/350" data-flickity-lazyload="homepic/cars.png">

<img src="" data-flickity-lazyload="homepic/furniture.png">

</div>



<br>

    
</div>
















<div class="container">




<h4><span>Top categories</span></h4>







  
<div class="menu">
    





<div  id="menu" class="automobiles">
<figure>
 <a href='sport.php?likes=vehicles'><img class='imgMenu' src="https://via.placeholder.com/200" data-flickity-lazyload='signup-pic/vehicles.PNG'> </a>

<figcaption><p><a href='sport.php?likes=vehicles'> Automobiles</a></p></figcaption>

</figure>



  
   

</div>





<div id="menu" class="television">

<figure>
 <a href='sport.php?likes=electronics'><img class='imgMenu' src="https://via.placeholder.com/200"  data-flickity-lazyload='signup-pic/gadge.PNG'></a> 

<figcaption><p><a href='sport.php?likes=electronics'>Electronics</a></p></figcaption>
</figure>




 

</div>







<div id="menu" class="fashion">


<figure>
 <a href='sport.php?likes=fashion'><img class='imgMenu' src="https://via.placeholder.com/200"  data-flickity-lazyload='signup-pic/fashion.PNG'> </a>

<figcaption><p> <a href='sport.php?likes=fashion'>Fashion</a> </p> </figcaption>

</figure>


 

</div>




<div id="menu" class="furniture">


<figure>
 <a href='sport.php?likes=furniture'><img class='imgMenu' src="https://via.placeholder.com/200"  data-flickity-lazyload='signup-pic/furniture.PNG'></a> 

<figcaption><p><a href='sport.php?likes=furniture'>Furniture</a> </p></figcaption>

</figure>


 


</div>





<div id="menu" class="home">


 <figure>
 <a href='sport.php?likes=housing'><img class='imgMenu' src="https://via.placeholder.com/200"  data-flickity-lazyload='signup-pic/housing.PNG'> </a>

<figcaption><p><a href='sport.php?likes=housing'>Housing</a> </p></figcaption>

</figure> 
  
 

</div>




<div id="menu" class="pets">


<figure>
 <a href='sport.php?likes=pets'><img class='imgMenu' src="https://via.placeholder.com/200"   data-flickity-lazyload='signup-pic/pets.PNG'> </a>


<figcaption><p><a href='sport.php?likes=pets'>Pets</a></p></figcaption>
</figure>




  
   

</div>












  
  

</div>














</div>















</div>
<div class="container">
<?php


require 'configure.php';

$seeproduct=mysqli_query($conn,"select * from comment where featured=1");

$showrecent = $seeproduct->num_rows;

if ($showrecent>0) {
  echo' <br><h4 class="container" align="" id="" style=""><span>Featured Products</span><a class="seemore"  href="sport.php?mysort=featured">See all <i class="fa-solid fa-chevron-right"></i></a></h4><br> ';
}


?>





<div align="" class="carousel">
  

  



<?php


require 'configure.php';

$tree="select * from comment where featured = 1 and sold = 0 order by price desc";

$dbc=mysqli_query($conn,$tree);

if ($dbc) {

  
  while ($row=mysqli_fetch_array($dbc)) {

echo "<div class='cell-carousel' align=''  id=''>";

$price = $row['price'];





echo "<span class='views' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";

if ($row['discount']>0) {
  echo "<span id='discount'>-".$row['discount']."%</span>";
}

 

if (!empty($_SESSION['id'])) {
  echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' data-flickity-lazyload=".$row['photo']." src='https://via.placeholder.com/150'>"." "."</div></a>";


echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";



}

else{

   echo "<a href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width=''  data-flickity-lazyload=".$row['photo']." src='https://via.placeholder.com/150'>"." "."</div></a>";



   echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";
}









    if ($row['discount']>0) {

echo"<span id='priceitem' style='text-decoration:line-through;'>&#8358;".$row['price']."</span> ";


echo " <span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

    
    
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row['category'].""."</span><br>";


  if($row['category']!='Services' && $row['category']!='Employment'  && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
      echo"<span id='conitem'>Condition: ".$row['con'].""."</span><br>";


}


if (!empty($row['petsAge'])) {
  
  echo"<span style='font-size:px;' id='conitem'>Age: ".$row['petsAge']."</span><br>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<span style='font-size:px;' id='conitem'>Farm type: ".$row['farmingType']."</span><br>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<span style='font-size:px;' id='conitem'>Type: ".$row['foodType']."</span><br>"; 
}



if (!empty($row['employmentType'])) {
  
  echo"<span style='font-size:px;' id='conitem'>Type: ".$row['employmentType']."</span><br>"; 
}




if (!empty($row['serviceType'])) {
  
  echo"<span style='font-size:px;' id='conitem'>".$row['employmentType']."</span><br>"; 
}






echo"<span id='premium'><i class='fas fa-crown'></i></span>";
   echo "</div>";


}

  } 



 ?>

</div>

</div>













<div class="container">



<?php

sleep(0);
require 'configure.php';

$seeproduct=mysqli_query($conn,"select * from comment");

$showrecent = $seeproduct->num_rows;

if ($showrecent>0) {
  echo' <br><h4 class="container" align="" id="recent" style=""><span>Recent items</span><a class="seemore"  href="sport.php?mysort=recent">See all <i class="fa-solid fa-chevron-right"></i></a></h4><br>';
}


?>





<div align="" class="carousel ">
  

  



<?php


require 'configure.php';

$tree="select * from comment where sold = 0 and featured=0 order by  featured desc,id desc";

$dbc=mysqli_query($conn,$tree);



if ($dbc) {

  
  while ($row=mysqli_fetch_array($dbc)) {

echo "<div class='cell-carousel' align=''  id=''>";

$price = $row['price'];



echo "<span class='views' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
if ($row['discount']>0) {
  echo "<span id='discount'>-".$row['discount']."%</span>";
}



 

if (!empty($_SESSION['id'])) {
  echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' data-flickity-lazyload=".$row['photo']." src='https://via.placeholder.com/150'src=".$row['photo'].">"." "."</div></a>";


echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";



}

else{

   echo "<a href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width=''   data-flickity-lazyload=".$row['photo']." src='https://via.placeholder.com/150'>"." "."</div></a>";



   echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";
}









    if ($row['discount']>0) {

echo"<span id='priceitem' style='text-decoration:line-through;'>&#8358;".$row['price']."</span> ";


echo " <span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

    
    
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row['category'].""."</span><br>";

  if($row['category']!='Employment' && $row['category']!='farming'  && $row['category']!='Services' && $row['category']!='housing' && $row['category']!='Pets' && $row['category']!='education ' && $row['category']!='food and beverages' && $row['category']!='health' && $row['category']!='employment') {
            
      echo"<span id='conitem'>Condition: ".$row['con'].""."</span><br>";


}


if (!empty($row['petsAge'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Age: ".$row['petsAge']."</span><br>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Farm type: ".$row['farmingType']."</span><br>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Type: ".$row['foodType']."</span><br>"; 
}



if (!empty($row['employmentType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Type: ".$row['employmentType']."</span><br>"; 
}



if (!empty($row['serviceType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>".$row['serviceType']."</span><br>"; 
}





   echo "</div>";



}

  } 



 ?>
   
  



</div>




<?php


require 'configure.php';

$seeproduct=mysqli_query($conn,"select * from profile where verified = 1 and merchant='Seller' and sold > 0");

$showrecent = $seeproduct->num_rows;

if ($showrecent>0) {
  echo' <br><h4 align="" style=""><span>Top sellers</span></h4><br> ';
}


?>





<div align="" class="carousel">
  

  



<?php


require 'configure.php';

$ree="select * from profile where verified = 1 and merchant='Seller' and sold > 0 order by sold desc limit 10";

$ubc=mysqli_query($conn,$ree);

if ($ubc) {

  
  while ($row=mysqli_fetch_array($ubc)) {
      
 
    
      

echo "<div class='cell' align=''  id=''>";

if(!empty($row['profile_pic'])){ 


   echo"<span id='soldMerchant'>".$row['sold']."</span>";


   echo "<a href='merchant.php?id={$row['id']}'><div style=''><img id='imgMerchant'  data-flickity-lazyload=".$row['profile_pic']." src='https://via.placeholder.com/150'>"." "."</div></a>";



   echo "<div id='nameMerchant' style='' ><a href='merchant.php?id={$row['id']}'>".$row['name']."</a></div>"."<br>";


 
}


   echo "</div>";


}

  } 




 ?>
   
  
</div>












<?php

sleep(0);
require 'configure.php';

$seeproduct=mysqli_query($conn,"select * from comment");

$showrecent = $seeproduct->num_rows;

if ($showrecent>0) {
  echo' <br><h4 align="" id="" style=""><span>Most viewed</span><a class="seemore"  href="sport.php?mysort=views">See all <i class="fa-solid fa-chevron-right"></i></a></h4><br> ';
}


?>





<div align="" class="carousel ">
  

  



<?php


require 'configure.php';

$tree="select * from comment where sold = 0 and featured=0 order by  featured desc,views desc";

$dbc=mysqli_query($conn,$tree);

if ($dbc) {

  
  while ($row=mysqli_fetch_array($dbc)) {

echo "<div class='cell-carousel' align=''  id=''>";

$price = $row['price'];




echo "<span class='views' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";

if ($row['discount']>0) {
  echo "<span id='discount'>-".$row['discount']."%</span>";
}


 

if (!empty($_SESSION['id'])) {
  echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width=''  data-flickity-lazyload=".$row['photo']." src='https://via.placeholder.com/150'>"." "."</div></a>";


echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";



}

else{

   echo "<a href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width=''  data-flickity-lazyload=".$row['photo']." src='https://via.placeholder.com/150'>"." "."</div></a>";



   echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";
}









    if ($row['discount']>0) {

echo"<span id='priceitem' style='text-decoration:line-through;'>&#8358;".$row['price']."</span> ";


echo " <span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

    
    
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row['category'].""."</span><br>";

  if($row['category']!='Emploment' && $row['category']!='Services' && $row['category']!='farming' && $row['category']!='housing' && $row['category']!='Pets' && $row['category']!='education ' && $row['category']!='food and beverages' && $row['category']!='health' && $row['category']!='employment') {
            
      echo"<span id='conitem'>Condition: ".$row['con'].""."</span><br>";


}


if (!empty($row['petsAge'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Age: ".$row['petsAge']."</span><br>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Farm type: ".$row['farmingType']."</span><br>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Type: ".$row['foodType']."</span><br>"; 
}



if (!empty($row['employmentType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Type: ".$row['employmentType']."</span><br>"; 
}




if (!empty($row['serviceType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>".$row['serviceType']."</span><br>"; 
}






   echo "</div>";


}

  } 



 ?>
   
  
</div>


</div>


<div id='banner'>
    
 <img src='homepic/banner.PNG'>  
    
    
    
    
    
    
    
    
    
    
</div>

<div class='container'>












<?php


require 'configure.php';

$seeproduct=mysqli_query($conn,"select * from comment where discount>0");

$showrecent = $seeproduct->num_rows;

if ($showrecent>0) {
  echo' <br><h4 align="" style=""><span>Promo Sales</span><a class="seemore"  href="sport.php?mysort=promo">See all <i class="fa-solid fa-chevron-right"></i></a></h4><br> ';
}


?>





<div align="" class="carousel">
  

  



<?php


require 'configure.php';

$tree="select * from comment where discount > 0 and sold = 0 and featured=0 order by featured desc,price desc";

$dbc=mysqli_query($conn,$tree);

if ($dbc) {

  
  while ($row=mysqli_fetch_array($dbc)) {

echo "<div class='cell-carousel' align=''  id=''>";

$price = $row['price'];



echo "<span class='views' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";

if ($row['discount']>0) {
  echo "<span id='discount'>-".$row['discount']."%</span>";
}

 

if (!empty($_SESSION['id'])) {
  echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width=''  data-flickity-lazyload=".$row['photo']." src='https://via.placeholder.com/150'>"." "."</div></a>";


echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";



}

else{

   echo "<a href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width=''  data-flickity-lazyload=".$row['photo']." src='https://via.placeholder.com/150'>"." "."</div></a>";



   echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";
}









    if ($row['discount']>0) {

echo"<span id='priceitem' style='text-decoration:line-through;'>&#8358;".$row['price']."</span> ";


echo " <span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

    
    
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row['category'].""."</span><br>";

  if($row['category']!='Employment' && $row['category']!='Services' && $row['category']!='farming' && $row['category']!='housing' && $row['category']!='Pets' && $row['category']!='education ' && $row['category']!='food & Beverages' && $row['category']!='health' && $row['category']!='employment') {
            
      echo"<span id='conitem'>Condition: ".$row['con'].""."</span><br>";


}


if (!empty($row['petsAge'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Age: ".$row['petsAge']."</span><br>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Farm type: ".$row['farmingType']."</span><br>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Type: ".$row['foodType']."</span><br>"; 
}



if (!empty($row['employmentType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Type: ".$row['employmentType']."</span><br>"; 
}



if (!empty($row['serviceType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>".$row['serviceType']."</span><br>"; 
}






   echo "</div>";


}

  } 




 ?>
   
  
</div>















<?php


require 'configure.php';

$seeproduct=mysqli_query($conn,"select * from comment where category like '%electronics%'");

$showrecent = $seeproduct->num_rows;

if ($showrecent>0) {
  echo' <br><h4 align="" id="recent" style=""><span>Electronics</span><a class="seemore"  href="sport.php?likes=electronics">See all <i class="fa-solid fa-chevron-right"></i></a></h4><br> ';
}


?>





<div align="" class="carousel">
  

  



<?php


require 'configure.php';

$tree="select * from comment where category like '%electronics%' and sold = 0 and featured=0 order by featured desc,price desc";

$dbc=mysqli_query($conn,$tree);

if ($dbc) {

  
  while ($row=mysqli_fetch_array($dbc)) {

echo "<div class='cell-carousel' align=''  id=''>";

$price = $row['price'];



echo "<span class='views' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";

if ($row['discount']>0) {
  echo "<span id='discount'>-".$row['discount']."%</span>";
}

 

if (!empty($_SESSION['id'])) {
  echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width=''  data-flickity-lazyload=".$row['photo']." src='https://via.placeholder.com/150'>"." "."</div></a>";


echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";



}

else{

   echo "<a href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width=''  data-flickity-lazyload=".$row['photo']." src='https://via.placeholder.com/150'>"." "."</div></a>";



   echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";
}









    if ($row['discount']>0) {

echo"<span id='priceitem' style='text-decoration:line-through;'>&#8358;".$row['price']."</span> ";


echo " <span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

    
    
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row['category'].""."</span><br>";

  if($row['category']!='Employment' && $row['category']!='Services' && $row['category']!='farming' && $row['category']!='housing' && $row['category']!='Pets' && $row['category']!='education ' && $row['category']!='food & Beverages' && $row['category']!='health' && $row['category']!='employment') {
            
      echo"<span id='conitem'>Condition: ".$row['con'].""."</span><br>";


}


if (!empty($row['petsAge'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Age: ".$row['petsAge']."</span><br>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Farm type: ".$row['farmingType']."</span><br>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Type: ".$row['foodType']."</span><br>"; 
}



if (!empty($row['employmentType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>Type: ".$row['employmentType']."</span><br>"; 
}



if (!empty($row['serviceType'])) {
  
  echo"<span style='font-size:13px;' id='conitem'>".$row['serviceType']."</span><br>"; 
}






   echo "</div>";


}

  } 




 ?>
   
  
</div></div>



</div></div>







<?php  

function getUserIpAddress(){


if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
}


elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
}


else {
    
  $ipaddress = $_SERVER['REMOTE_ADDR'];
 
}


return $ipaddress;

}$real_ip=getUserIpAddress();

require 'configure.php';


$the_real_ip = substr($real_ip,0,10);

$checkIp = mysqli_query($conn,"select * from ip where ipaddress ='$the_real_ip'"); 



if ($checkIp->num_rows<1) {

$insertIp = mysqli_query($conn,"insert into ip(ipaddress) values ('$the_real_ip')");


  

?>

<script>

$(document).ready(function(){
    
setTimeout(function(){
    
  $("#popup").show();   
    
},6000);

});

</script>




<?php  
}

else{}


 ?> 



<div class="container">

<div id="popup">
  
<a id="closePopup"><i class="fa fa-close"></i></a>
<h5 align="center" id="hi">Welcome to &agrave;t&#233;</h5>

<img id="marketImg" src="marketplace.JPG">

<div align="center">


<a id="sales" style="color: white" class="btn-success" href="newsignup.php?#fillinform">Sell Item <i class='fa-solid fa-chevron-right'></i></a>

<a id="buyitem" class="btn-success" href="sport.php">Shop Now <i class='fa-solid fa-chevron-right'></i></a>


</div>
</div>

</div>

<h4 class='' id='connect' style='display:inline-block;'><span>
    
    <a href='https://web.facebook.com/profile.php?id=100076772181022'><i class='fab fa-facebook'></i></a>
    <a href='https://twitter.com/nimitechng'><i class='fab fa-twitter'></i></a>
    

 <a href='https://instagram.com/ngnimitech'><i class='fab fa-instagram'></i></a>
 <a href='https://t.me/ngnimitech'><i class='fab fa-telegram'></i></a>

</span></h4>

<div id="mission" class="container" style="padding:30px;text-align:;">
  
<h3 id='' style="font-family:sans-serif;font-weight: bold;color:black;" align="center">What we do</h3><br>

<p  style=""><b style="font-size:15px;">&agrave;t&#233;</b> is an online marketing platform built for all business personnels nationwide. We provide an avenue for sellers to market there items to buyers online.
You can now upload pictures of your produce with a price tag and phone number to connect you with potential customers anytime and anywhere.
</p>


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



<p align="center" style="color:white;font-weight:bold; font-family:'montserrat';font-size:15px;">Sign up for our newsletter</p>
<div class="container">

<div align="center" style="font-family:sans-serif;">
  <form method="post" id="subscribe-form" enctype="multipart/form-data">

<input type="text" name="subscribe" style="" class="form-control" placeholder="    Enter your email address">

<button type="button" id="submit-subscribe" style="" class="btn btn-danger">Submit</button>

</form>



<script>



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

               if(response==1)
               {
                   
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












</div>

<br><br>
 <div class="row" style="padding:10px">
     
<div class="col-md-3 col-6 col-sm-3">
 <p style="color:white;font-size: 13px;font-family:poppins;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>+2347033506332<br>Contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:poppins;"><a style="color:white;" href="about.php">About us</a><br><a style='color:white;' href='services.php'>Services</a><br>Our team<br><a href="contact.php" style="color:white">Support center</a><br><br></p> 



</div>



<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins;">Career<br>Testimonials<br><a style="color: white;" href="terms.php">Term & Conditions</a><br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">Our partners<br><a style="color: white;" href="faq.php">Faq</a><br><br></p>


</div>

</div></div>


<a  onclick="topFunction()" style="" id="btn-down" class="btn btn-down">&#8593;</a>


<div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:poppins; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>


</div>




<script>
      
      
     $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 20) {
    $('.btn-down').fadeIn();
  } else {
    $('.btn-down').fadeOut();
  }
});



$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 20) {
    $('.btn-down').fadeIn();
  } else {
    $('.btn-down').fadeOut();
  }
}); 
      
      
    
      
  </script>



  <script>
      
    function topFunction() {



  document.body.scrollTop = 0;
  


  document.documentElement.scrollTop = 0;



}
  
      
      
  </script>



<script>
    
    
    var screen = $(window).width();
    
    if(screen>1280){
        
      
    }
    
    
    
    
</script>













<script type="text/javascript">

$("#closePopup").on('click',function() {
 
 $("#popup").hide();


});


</script>







<script>
  

$('.carousel').flickity({
 
  cellAlign: 'left',
  contain: true,
 
  lazyLoad:2,
  
 

});





</script>













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

function q() {

    var x= $('#q').val();
    
    if(x==''){
        
    $('#q').val("");    
        
    }


    document.getElementById('result').innerHTML=x;

    $.ajax({

            type:"GET",

            url:"searchf.php",

            data:{

              "q":x

            },

success:function(res) {document.getElementById('result').innerHTML=res;

  if(x!=""){



}

else{





}



}



    });

  }
  
  



</script>


<script>
  

$('.menu').flickity({
 
  cellAlign: 'left',
  contain: true,
  lazyLoad:2,
  fade:true,
 
 

});





</script>





<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9711737947499937"
     crossorigin="anonymous"></script>


<script>
  

$('#main').flickity({
 
  cellAlign: 'left',
  contain: true,
  autoPlay: 3000,
  
  friction:0.52,
  
    lazyLoad:2,

  wrapAround:true
 

});





</script>









</body>
</html>