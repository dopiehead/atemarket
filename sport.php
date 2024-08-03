

<?php session_start();

error_reporting(E_ALL ^ E_NOTICE);






if (isset($_GET['mypage'])) {

$mypage=$_GET['mypage'];

  
}

if (isset($_GET['search'])) {

$search=$_GET['search'];

  
}

if (isset($_GET['mysort'])) {

$mysort=$_GET['mysort'];

 
  
}


if (isset($_GET['likes'])) {

$mylikes = $_GET['likes'];}




?>



<!DOCTYPE html>
<html lang='en'>
<head>
  <title>&agrave;t&#233; -The online marketing website | Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=0"  charset="utf-8">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="flickity.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Poppins"> 
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
 <script src="sweetalert.min.js"></script>  
 <script src="flickity.pkgd.min.js"></script>

  </head>
 
<script>
      
      
     $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 30) {
    $('.btn-down').fadeIn(300);
  } else {
    $('.btn-down').fadeOut(300);
  }
});



$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 30) {
    $('.btn-down').fadeIn(300);
  } else {
    $('.btn-down').fadeOut(300);
  }
}); 
      
      
    
      
  </script>
  
  
  
 






  
  
  


<style type="text/css">

#showing{
    
   margin-top:-26px;margin-right:;opacity:0.8;color:rgba(0,70,90,0.8);font-size:15px;font-family:; 
    
    
    
}




#heading{

font-size:21px;
color:rgba(0,70,90,0.7);
font-weight: bold;
font-family:poppins;

}


#head-category{

font-size:21px;
color:rgba(0,70,90,0.7);
font-weight: bold;
text-transform: capitalize;
font-family:poppins;



}









body{
    
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







.menu{

  width: 100%;
}



#main img{
width: 100%;
height: 150px;


}

#main .flickity-prev-next-button.previous {
 
  left:0px;
}

#main  .flickity-prev-next-button.next {
  

  right:0px;
  
}


#main  .flickity-prev-next-button {
  display: block;

  width:28px;
  height:28px;
}



#main  .flickity-page-dots{

  bottom:5px;
  display: inline-block;
}


#main  .flickity-page-dots .dot{

  width: 12px;
  height: 12px;
  opacity: 1;
  background: transparent;
  border: 2px solid white;

}

#main .flickity-page-dots .dot.is-selected{

  background-color: white;
}







.vehicles,.food,.farming,.housing,.fashion,.employment,.entertainment,.baby,.services{
    
display:none;    

padding:5px;

border-radius: 8px;

border:1px solid transparent;

box-shadow:0px 0px 8px rgba(0,70,90,0.8);

margin-left:40px;

height:40px;
    
}


.btn-success{

background-color: white;
box-shadow:0px 0px 2px rgba(0,70,90,0.7);
border:none;
padding: 8px;
color: rgba(0,70,90,0.9) !important;
cursor: pointer;

}

.prev,.next{
background-color: white;
box-shadow:0px 0px 2px rgba(0,70,90,0.7);
border:none;
padding:6px;
font-weight: bold;
cursor: pointer;
font-size:18px;  
}


.prev:focus,.prev:hover,.next:hover,.next:focus{
color: white !important;
box-shadow:0px 0px 2px rgba(0,70,90,0.7);
border:none;
padding:8px;

cursor: pointer;  
}


#blogspot{
    
    width:100%;
}



.btn-success:hover,.btn-success:focus{

background-color: rgba(0,70,90,0.7);
box-shadow:0px 0px 2px rgba(0,70,90,0.7);
border:none;
padding: 5px;
color: white !important;

}



.active-button{

background: rgba(0,70,90,0.7);
color:white !important;
padding: 8px;

}

#package{
display:inline-block;



}








body{



}

#page_num{
text-decoration: none;
color: white;




}




#sort{
    margin-top:12px;
    font-family:'montserrat';
    font-weight:bold;
    
    white-space:nowrap;
 text-overflow:ellipsis;
 display:block;
    
}



.fa-arrow-right{
    
    font-weight:bold;
}




#reset{

float:right;

cursor: pointer;

display: none;

color:black;

margin-top:-33px;

margin-right:15px;

}


#main{
    
    display:none;
}


.carousel select{

margin: 0px 8px 0px 8px;

border:1px solid transparent;

box-shadow:0px 0px 3px rgba(0,70,90,0.4);


}




.carousel h6,h6{

background-color: rgba(0,70,90,0.7);

color: white;

margin-left:5px;

padding:8px;

}




.carousel select{

padding:10px;

border-radius: 5px;

}


.display{

  display: block;
}





#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}


.fa-map-marker{
    
  color:blue;  
}


  
td{padding-left:20px;padding-right:20px;
}



h5 span{
padding:8px;
background-color: rgba(0,70,90,0.7);
  color:white;
  margin-bottom:10px;
  font-size:16px;

}



.carousel{

margin:20px 0px;
padding:px;
margin-left: 14%;
height: 60px;

}





html{
    
    scroll-behavior:smooth;
}


#catitem{

text-transform:capitalize;

}


#package{

background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:30px;border-radius:15px;box-shadow:0px 0px 8px rgba(0,0,0,0.3);

width:240px;

display: inline-block;
margin-left:1em;

margin-right:1em;

margin-bottom:45px;
}

tr{



}



#loading-image{

width:90px;

height: 90px;

margin: 120px 300px;


}




.flickity-prev-next-button {
  display:none;
}
.flickity-button:disabled {

}


#premium{
    
    position:relative;
   
    left:0%;
    
}    
    
#premium i{
    
    
    color:gold;
    font-size:15px;
}    



.flickity-page-dots{

  display:none;
}



#itemsparent{

  border: 1px solid rgba(192,192,192,0.9);overflow:auto;padding:15px;
}

.fa-user{

  font-size: 18px;
}



#popup{
background-color: rgba(248,248,248,0.3);  
background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width:350px;
padding:5px;
z-index: 99;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;
padding:35px;border-radius:10px;

}

#popup.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#close{

font-size: 15px;
position: absolute;
top: 8px;
left: 90%;
color:black;
padding:8px 10px;

cursor: pointer;
border-radius:3px;



}
#close:hover, #close:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

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


select{

font-size:13px;



font-family:'Montserrat',sans-serif;

color: rgba(0,0,0,0.6);

cursor: pointer;

}


select:focus{

  outline: none;
  box-shadow: none;
  border:none;
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

display:  block;
  text-align: center;
  padding: 10px;
  transition: all 0.5s;
  color: white;
  font-size: 14px;

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



#page_num{
text-decoration: none;
color: white;
margin-right:8px;



}




#page_num:focus{
color: white;
background-color: purple;

}
#page_num_parent{
padding:5px;
border:1px solid transparent transparent;
position: absolute;

}


.container{


  z-index: 55;
}


#content{
margin-top:-15px;
font-weight: bold;
font-family: century gothic;
text-transform:capitalize;
position: absolute;
left:45.4%;
font-size:15px;
color:lightgreen;


}

.gallery:hover{

opacity: 0.8;

text-decoration: none;

color: white;

}


.overlay,#overlay{

  display:none;
}

.open-btn{

display: none;


}






#activex{
 border-bottom: 2px solid rgba(255,165,50,1);
 border-radius: none;
   
}



#noviews{

position:relative;
top:45px;
left:10px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size:13px;
}



 
#views{

position:relative;
top:45px;
left:-27px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size: 13px;
}



.count{position: relative;top:89%;left: 23%;padding:10px;color:white;font-weight: bold;border:1px solid transparent transparent transparent; background-color:rgba(0,0,0,0.8);z-index: 999;}


#discount{
background-color: rgba(255,195,50,0.4);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position:relative;
top:45px;
font-weight: bold;
padding:3px;
left: 75%;

font-size:13px;

} 



.faq:hover,.how:hover{

opacity: 0.8;

text-decoration: none;

color: white;



}

.how{
font-weight: bold;
font-family: 'Monserrat',sans-serif;
float: right;

font-size:14px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;

}

.gallery{

font-family: 'Monserrat',sans-serif;

float: right;

font-size:14px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;

font-weight: bold;

}




.btn-check{
  color: white;
float: right;
margin-top: -38px;
margin-right:1px;
background-color: rgba(255,165,50,1);
}

.btn-check:hover{
color: white;

opacity: 0.8;
}



::placeholder{



  color:;
  opacity: 1;

}


.btn-down{
    
box-shadow:0px 5px 8px 0px rgba(0,0,0,0.5);    
   

  top: 80%;
  display: none;

border:2px transparent transparent;

right: 15px;

font-weight: bold;

cursor: pointer;

background-color:rgba(255,165,50,1);

color: white !important;

font-size:14px;

position: fixed;

z-index: 100;
font-family:poppins;


  }

.col-md-3{
    
   
    
}

#main {
 
  width:100%;
 
}

.menu{
    
    
    width:100%;
}

#messageitem{

width:300px;
word-wrap:break-word;
font-family:sans-serif;
padding-left:15px;

}

#nameitem{
padding-left:10px;
font-family:'montserrat';
font-weight: bold;
color: green;
text-transform:capitalize;
font-size:14px;
text-decoration: none;
}
#nameitem a{
text-decoration: none;

color: green;


}
a:hover{

opacity: 0.8;

}


#price:focus{

outline:none;

}



#priceitem{

font-family:poppins;
font-weight: bold;
color:rgba(255,0,100,0.7);
text-transform:capitalize;
font-size:13px;
padding:10px;


}
#conitem,#locitem,#catitem{
font-size:13px;
font-family:poppins;
color: rgba(0,0,0,0.5);
padding:10px;
width:100%;
text-transform:capitalize;
}

#imgitem{
height: 140px;
width:100%;
margin-top:-24px;

border-radius:15px 15px 0px 0px;
}

#q:focus{
    
box-shadow:0px 0px 5px rgba(255,0,0,0.3);
    
    
}


#q{

outline:;

font-family: arial,fontawesome;
width:100%;
margin-left: auto;
margin-right: auto;
border-radius:5px;
border:none;
box-shadow:0px 0px 5px rgba(0,0,0,0.3);

}

.fa-sliders{

  font-size:18px;
float: right;
padding:8px;
border-radius:5px;
background-color: red;
color: white;
margin-right:0%;
margin-top: -37px;
margin-bottom:8px;
text-decoration: none;
cursor: pointer;
box-shadow:0px 0px 5px rgba(0,0,0,0.3);

}

.fa-sliders:focus,.fa-sliders:hover{

text-decoration: none;
opacity:0.6;
color: white;
font-size:19px;

}




#pricerange i{

         

}




option{
   text-transform:capitalize; 
    
    
}





#pricerange {
  
padding:px;
         

}

hr{

display:none;
border:2px solid red;
width:150px;


}




#filter{

  display: none;
}



select {
 

font-family: 'Monserrat',sans-serif;
  font-size: 14px;
 width: 150px;
}


/* CAUTION: Internet Explorer hackery ahead */






h4,h6{


  text-align:left;
}

ul{
    
    display:block;
}



h1{

top:0;

z-index:100;


width:100%;

height:60px;

background-color:rgba(0,70,90,0.7);;

padding:10px 8px;
transition:top o.3s;

box-shadow:0 0 5px rgba(0,0,0,0.3);

box-shaow:0 0 5px ;



} 



h1 img{

float:left; 

opacity:1;

height:43px;

width:105px;

margin-left:8px;

margin-top: -4px;

}
.faq{

display: block;

float: right;

font-size:14px;

cursor: pointer;

color: white;

border-radius:8px;

padding:8px 3px;

margin-right:13px;
font-weight: bold;
font-family: 'Monserrat',sans-serif;

}



@media only screen and (min-width:768px) and (max-width:998px){
  



#main img{
width: 100%;
height: 130px;


}

#main .flickity-prev-next-button.previous {
 
  left:0px;
}

#main  .flickity-prev-next-button.next {
  

  right:0px;
  
}


#main  .flickity-prev-next-button {
  display: block;

  width:25px;
  height:25px;
}



#main  .flickity-page-dots{

  bottom:5px;
  display: inline-block;
}


#main  .flickity-page-dots .dot{

  width: 12px;
  height: 12px;
  opacity: 1;
  background: transparent;
  border: 2px solid white;

}

#main .flickity-page-dots .dot.is-selected{

  background-color: white;
}



 
 
 
 
  
  
  .waves {
    height:40px;
    min-height:40px;
    top: -40px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 60px;

  
}

 
  
  
  
  
  
  
  
  
    
 #package{

background-color:rgba(192,192,192,0.1);padding-bottom: 8px;margin-bottom:30px;border-radius:15px;box-shadow:0px 0px 8px rgba(0,0,0,0.3);
margin-left:2.3%;margin-right:2.3%;
margin-top:px;
width:28%;
display:inline-block;
}


.blogspot{
    
    100%;
}    
  #imgitem{
      
      height:150px;
      
  }  
  
 
  
  
}






@media only screen and (min-width:993px) and (max-width:1200px){
    
 

#main img{
width: 100%;
height: 150px;


}

#main .flickity-prev-next-button.previous {
 
  left:-1px;
}

#main  .flickity-prev-next-button.next {
  

  right:-1px;
  
}


#main  .flickity-prev-next-button {
  display: block;

  width:25px;
  height:25px;
}



#main  .flickity-page-dots{

  bottom: 5px;
  display: inline-block;
}


#main  .flickity-page-dots .dot{

  width: 12px;
  height: 12px;
  opacity: 1;
  background: transparent;
  border: 2px solid white;

}

#main .flickity-page-dots .dot.is-selected{

  background-color: white;
}



    
    
  .waves {
    height:40px;
    min-height:40px;
    top: -40px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 70px;

  
}

 
    
    
    
    
    
    
    
    
    
 #package{

background-color:rgba(192,192,192,0.1);padding-bottom: 8px;margin-bottom:30px;border-radius:15px;box-shadow:0px 0px 8px rgba(0,0,0,0.3);
margin-left:4%;margin-right:4%;
margin-top:px;
width:25%;
display:inline-block;
}


.blogspot{
    
    100%;
}    
  #imgitem{
      
      height:160px;
      
  }  
}


















@media only screen and (orientation:landscape){
    
    
    
 

#reset{

float:right;

cursor: pointer;

display: none;

color:black;

margin-top:-33px;

margin-right:38px;

}

    

 
body{
height: 100vh; 


}
select:focus{

  outline: none;
  box-shadow: none;
  border:1px solid rgba(0,70,90,0.7);
}  
  

    h2{

margin-top: -5px;


    }


}


@media only screen and (max-width:zz7px){
    
   




} 
@media only screen and (max-width:767px){


#main img{

height:130px;
margin:0px 0px;
width: 100%;
object-fit:fill;

}  


   
#main{
    
    width:100%;
}



#main .flickity-prev-next-button.previous {
 
  left:0px;
}

#main  .flickity-prev-next-button.next {
  

  right:0px;
  
}


#main  .flickity-prev-next-button {
  display: block;

  width:25px;
  height:25px;
}



#main  .flickity-page-dots{

  bottom: 5px;
  display: inline-block;
}


#main  .flickity-page-dots .dot{

  width: 11px;
  height: 11px;
  opacity: 1;
  background: transparent;
  border: 2px solid white;

}

#main .flickity-page-dots .dot.is-selected{

  background-color: white;
}


  .waves {
    height:40px;
    min-height:40px;
    top: -40px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 10px;

  
}

 
 
    
    
 #sellOn{
     
  background-color:rgba(192,192,192,0.1);
  padding-top:8px;
  padding-bottom:8px;
  font-family:poppins;
     
 }   
    
    
    
    
    
    
    
  #sort,#showing{
    
    font-family:'montserrat';
    font-weight:200;
    
} 
 
#showing{
    
   position:relative;top:-15px;margin-right:;opacity:0.8;color:rgba(0,70,90,0.8);font-size:15px;font-family:; 
    
    
    
} 
 
 
 
 
  #sort{
    margin-top:25px;
    
    
} 
.flickity-button:disabled {

}    
  

select {
  margin-top:10px;
  width: 210px;
  padding: 5px 35px 5px 5px;
  font-size: 14px;
 font-family: 'Monserrat',sans-serif;
  height: 34px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: url(arrow-down.png) 96% / 3% no-repeat #EEE;
}










.count{position: relative;top:89%;left: 23%;padding:10px;color:white;font-weight: bold;border:1px solid transparent transparent transparent; background-color:rgba(0,0,0,0.8);z-index: 999;}


#discount{
background-color: rgba(255,195,50,0.4);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position:relative;
top:45px;
font-weight: bold;
padding:3px;
left: 75%;


font-size:12px;

} 
 







 
h1{
 height:64px;
margin-bottom:0px;
    
    
} 
h1 img{

float:left; 

opacity:1;

height:43px;

width:105px;

margin-left:-2px;

margin-top:-1px;
    
}

 



#sort{
    margin-top:12px;
    font-family:'montserrat';
    font-weight:bold;
    
}




.faq,.gallery,.how{

  font-size:14px;
}



}







@media only screen and (max-width:767px){

h3{
    
 margin-left:5%; 
    
}
    
#heading{

font-size:15px;
color: rgba(0,70,90,0.7);
font-weight: bold;
font-family:poppins;

}


#head-category{

font-size:15px;
color:  rgba(0,70,90,0.7);
font-weight: bold;

font-family:poppins;
text-transform: capitalize;


}
 

    
    
   
  .waves {
    height:40px;
    min-height:40px;
    top: -40px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 70px;

  
}


    
    
    
    
    
    
#blogspot{
    
    width:100%;
    margin:10px auto;
    margin-bottom:-30px;
}



.active-button{

background: rgba(0,70,90,0.7);
color:white !important;
padding: 13px;
font-size:16px;
padding: 8px 10px;
}

.btn-success{

background-color: white;
box-shadow:0px 0px 2px rgba(0,70,90,0.7);
border:none;
padding: 8px 10px;
color: rgba(0,70,90,0.9) !important;
cursor: pointer;
font-size:16px;

}



.btn-success:hover,.btn-success:focus{

background-color: rgba(0,70,90,0.7);
box-shadow:0px 0px 2px rgba(0,70,90,0.7);
border:none;
padding:10px;
color: white !important;

}





#package::focus,#package::hover{
    
    
   box-shadow:0px 0px 0px 0px; 
    
}




.btn-down{
    
box-shadow:0px 5px 8px 0px rgba(0,0,0,0.5);    
   

  top: 80%;
  display: none;

border:2px transparent transparent;

border-radius:10px;

right: 15px;

font-weight: bold;

cursor: pointer;

background-color:rgba(255,165,50,1);

color: white !important;

font-size:16px;

position: fixed;

z-index: 100;



  }

















#reset{

position:relative;

right:-3%;

top:-5px;

cursor: pointer;

display: none;

font-size:21px;

opacity:0.6;

color:black;

}




.fashion,.vehicles,.fashion,.housing,.farming,.food,.employment,.entertainment,.baby,.services{
display:none;    

width:130px;

border:1px solid transparent;

box-shadow:0px 0px 5px rgba(0,70,90,0.8);

border-radius:8px;
margin:0px 3px;

height:35px;



}



#package{

background-color:rgba(192,192,192,0.1);padding-bottom: 8px;margin-bottom:30px;border-radius:15px;box-shadow:0px 0px 8px rgba(0,0,0,0.3);
margin-left:1%;margin-right:1%;
margin-top:px;
width:47%;
display:inline-block;
}

    
  
   
   
  
.carousel .flickity-prev-next-button {
  display: none;
}


tr{
    
    float:left;
}







#close{

font-size: 15px;
position: absolute;
top: -10px;
left: 91%;
color:white;
cursor: pointer;
border-radius:50%;
background-color:rgba(255,50,70,1);
padding:8px 13px;


}



select {
 
 

  font-size: 15px;
 font-family: 'Monserrat',sans-serif;

  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: url(arrow-down.png) 96% / 8% no-repeat #EEE;
}

.carousel {



margin-top:0px 0px 0px 0px;


}








.carousel select{

padding:5px;

border-radius: 10px;

border:1px solid transparent;

box-shadow:0px 0px 5px rgba(0,70,90,0.7);

width:113px;

font-size:15px;




}






 #premium{
    
    float:right;
    margin-right:8px;
   
    
    
}    
    
#premium i{
    
    
    color:gold;
    font-size:15px;
}       
    
    
    
    
    
    
    
     

#q{

font-family: arial,fontawesome;
width:83%;
margin-left:8px;
margin-right:0px;
border-radius:5px;
border:none;
box-shadow:0px 0px 5px rgba(0,0,0,0.3);

}








.carousel{

margin-left:0px;
padding:10px;

width:100%;
margin:10px 0px;


}



#loading-image{

width:90px;

height: 90px;

margin: 90px 123px;


}


input[type=submit]{

border:transparent;
background-color:rgba(0,70,90,0.8);
color: white;
font-size:14px;
margin:6px;
padding:10px;
border-radius:15px;
box-shadow:0px 0px 3px rgba(0,0,0,0.3);
text-transform: capitalize;
}



.carousel .flickity-prev-next-button {
  display: none;
}
.flickity-button:disabled {
  
}    
    
#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:10%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}    
    
  .icon-bar a{

display:  none;
  text-align: center;
  padding: 13px;
  transition: all 0.5s;
  color: white;
  font-size: 15px;
}
  
    
    
    



#imgitem{
    
  height:140px;
    width:100%;   

 
    
}




#messageitem,#priceitem{
  font-size:12px;

   margin-left:0px; 
 padding:5px;
 white-space:nowrap;
 text-overflow:ellipsis;
  font-family:poppins; 
}

#priceitem{




    font-weight:bold;
}

#locitem,#conitem,#catitem{
  font-size:13px;
width:100%;
overflow:hidden;
   margin-left:0px; 
   padding:2px 5px;
 white-space:nowrap;
 text-overflow:ellipsis;
 display:inline-block;
  font-family:poppins; 
}


#nameitem{
  font-size:12.2px;
  font-weight:normal;
  padding-left:5px;
  text-transform:uppercase;
  display:inline-block;
white-space:nowrap;
 text-overflow:ellipsis;
 overflow:hidden;
 text-align:center;
  font-family:poppins;  
}


.carousel h6{

background-color: rgba(0,70,90,0.7);

color: white;

font-size:15px;

margin-left:5px;
}












#views{

position:relative;
top:45px;
left:-33px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 3px;
z-index: ;
font-size:12px;
}

#noviews{

position:relative;
top:45px;
left:5px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding:3px;
z-index: ;
font-size:12px;
}

.fa-sliders{

  font-size:18px;
float: right;
padding:8px;
border-radius:5px;
background-color: red;
color: white;
margin-right:2.5%;
margin-top: -38px;
margin-bottom:8px;


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
   display: block;
  color: white;
  font-size: 30px;
  float: right;
  cursor: pointer;
   margin-top:-8px;
  
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

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read = 0 group by sender_email  order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;



echo "(".$datafound.")";

}

 ?>



MESSAGES</a>

<?php

 if (!empty($_SESSION['email'])) {echo'<a style="color:rgba(255,160,50,0.8);" href="sport.php" class="" >GALLERY</a>
 
 
<a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="index.php?#sellnow" class="" > &nbsp;<span style="padding:6px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>



<a  href="logoutkwasaf.php" class="" ><i class="fa fa-sign-out"></i>SIGN OUT</a>
 ';


} 


else{

echo'<a href="sport.php" style="color:rgba(255,160,50,0.8);" class="" >GALLERY</a>

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

 <a href="sport.php" style="color:rgba(255,160,50,0.8);"  class="gallery" >GALLERY</a>


 ';


} 


else{

echo'<a href="newsignup.php" class="gallery" ><i class="fa fa-user-alt"></i> PROFILE</a>';

echo'<a href="sport.php"  style="color:rgba(255,160,50,0.8);" class="gallery" >GALLERY</a>';

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

<div class="container" id="sellOn" align="right" style="">
    

   
    
</div>

</div>  

<br>
<h3 class='container'><span id="heading"><a style='color:inherit;' href='sport.php'>Gallery</a></span><?php

if (isset($_GET['mypage'])|| isset($_GET['likes'])) {
 echo'<span id="head-category"> > '.$mypage.$mylikes.'</span>';
}

  ?></h3>





 <?php require 'configure.php';

list($count)=mysqli_fetch_array(mysqli_query($conn,"select count(*) from comment where sold = 0"));

?>





<br>



<div class="container">

<?php 


   ?>


 <input type="search" name="q" id="q" placeholder="Filter Gallery" onkeyup="q()"  class="form-control" value="<?php if(isset($_GET["search"])) echo $_GET["search"]; ?>" /><i class="fa fa-sliders btn" onclick="toggle()"
></i>

</div>

<?php

if (isset($_GET["mypage"])) {

 $mypage=$_GET["mypage"];




 

}





?>


<div align="" class="container">

<div id=""  style="" class="carousel">

<h6>Categories</h6>
  
<select style="" class="" name="category" id="category" >


<option selected="" value="">All categories</option>




<?php if($mylikes=='baby'){echo"<option value='baby'>Baby product</option>";} 

else{

echo"<option value='baby'>Baby product</option>";

}?>
 



<?php if($mylikes=='beauty'){echo"<option selected value='beauty'>Beauty</option>";} 

else{

echo"<option  value='beauty'>Beauty</option>";

}?>


<?php if($mylikes=='catering'){echo"<option selected value='catering'>Catering</option>";} 

else{

echo"<option value='catering'>Catering</option>";

}?>



 



<?php if($mylikes=='electronics'){echo"<option selected value='electronics'>Electronics</option>";} 

else{

echo"<option value='electronics'>Electronics</option>";

}?>



<?php if($mylikes=='entertainment'){echo"<option selected value='entertainment'>Entertainment</option>";} 

else{

echo"<option value='entertainment'>Entertainment</option>";

}?>

<?php if($mylikes=='fashion'){echo"<option selected value='fashion'>Fashion</option>";} 

else{

echo"<option value='fashion'>Fashion</option>";

}?>

<?php if($mylikes=='farming'){echo"<option selected value='farming'>Farming</option>";} 

else{

echo"<option value='farming'>Farming</option>";

}?>


<?php if($mylikes=='food and beverages'){echo"<option value='food and beverages'>Food & Beverages</option>";} 

else{

echo"<option value='food and beverages'>Food & Beverages</option>";

}?>




<?php if($mylikes=='furniture'){echo"<option selected value='furniture'>Furniture</option>";} 

else{

echo"<option value='furniture'>Furniture</option>";

}?>


<?php if($mylikes=='gadget'){echo"<option selected value='gadget'>Gadget</option>";} 

else{

echo"<option value='gadget'>Gadget</option>";

}?>


<?php if($mylikes=='health'){echo"<option selected value='health'>Health</option>";} 

else{

echo"<option value='health'>Health</option>";

}?>


<?php if($mylikes=='housing'){echo"<option selected value='housing'>Housing</option>";} 

else{

echo"<option value='housing'>Housing</option>";

}?>


<?php if($mylikes=='jewelry'){echo"<option selected value='jewelry'>Jewelry</option>";} 

else{

echo"<option value='jewelry'>Jewelry</option>";

}?>



<?php if($mylikes=='kitchen'){echo"<option selected value='kitchen'>Kitchen</option>";} 

else{

echo"<option value='kitchen'>Kitchen</option>";

}?>


<?php if($mylikes=='pets'){echo"<option selected value='pets'>Pets</option>";} 

else{

echo"<option value='pets'>Pets</option>";

}?>


<?php if($mylikes=='phone & accessories'){echo"<option value='phone & accessories'>Phone & Accessories</option>";} 

else{

echo"<option value='phone & accessories'>phone & accessories</option>";

}?>

<option value='services'>Services</option>


<?php if($mylikes=='vehicles'){echo"<option selected value='vehicles'>Vehicles</option>";} 

else{

echo"<option value='vehicles'>Vehicles</option>";

}?>




<?php if($mylikes=='employment'){echo"<option selected  value='employment'>Employment</option>";} 

else{

echo"<option  value='employment'>Employment</option>";

}?>



<?php if($mylikes=='sport'){echo"<option selected value='sport'>Sport</option>";} 

else{

echo"<option value='sport'>Sport</option>";

}?>



</select>



<h6 style="font-family: 'Monserrat',sans-serif;">Location</h6>


<select class="" name="location" id="location" style="">
            <option selected="" value="">Entire Nigeria</option>
        <option value="Kwara">Kwara</option>
        <option value="Kogi">Kogi</option>
          <option value="Oyo">Oyo</option>
            <option value="Kano">Kano</option>
              <option value="Enugu">Enugu</option>
              <option value="Ebonyi">Ebonyi</option>
                <option value="Owerri">Owerri</option>
                  <option value="FCT-Abuja">FCT-Abuja</option>
                    <option value="Osun">Osun</option>
                    <option value="Ogun">Ogun</option>
                      <option value="Lagos">Lagos</option>
                        <option value="Port-Harcourt">Port-Harcourt</option>
                        <option value="Bauchi">Bauchi</option>
                          <option value="Benue">Benue</option>
                            <option value="Borno">Borno</option>
                              <option value="Cross-River">Cross-River</option>
                                <option value="Delta">Delta</option>
                                  <option value="Edo">Edo</option>
                                  <option value="Imo">Imo</option>
                                    <option value="Ondo">Ondo</option>
                                      <option value="Niger">Niger</option>
                                        <option value="Sokoto">Sokoto</option>
                                          <option value="Zamfara">Zamfara</option>
                                          <option value="Kebbi">Kebbi</option>
                                          <option value="Kaduna">Kaduna</option>
                                          <option value="Abia">Abia</option>
                                           <option value="Adamawa">Adamawa</option>
                                            <option value="Akwa-Ibom">Akwa-Ibom</option>
                                            <option value="Anambra">Anambra</option>
                                            <option value="Bauchi">Bauchi</option>
                                            <option value="Gombe">Gombe</option>
                                            <option value="Pleateau">Pleateau</option>
                                            <option value="Rivers">Rivers</option>
                                            <option value="Nassarawa">Nassarawa</option>



        </select>



<h6>Condition</h6>


<select style="" class="" name="con" id="con">
 
 <option  selected="" value="">All</option> 
 <option value="foreign used">Foreign Used</option> 
 <option value="new">New</option> 
 <option value="used">Used</option> 

</select>

</div>

 </div>


<div class='container'>
 
 
 
<select style="box-shadow:0px 0px 8px rgba(0,70,90,0.8);border:1px solid transparent;" class="baby" id="babyproductType" name="babyproductType">
 <option value="">Select Type</option>
 <option value="furniture">Baby's furniture</option>
 <option value="toys">Toys</option>
<option value="prams">Prams & Strollers</option>
<option value="shoes">Baby's shoes</option>
<option value="clothing">Baby's clothing</option>  
<option value="care">Baby care</option>
<option value="accessories">Baby's accessories</option>
</select>

    
<select style="box-shadow:0px 0px 8px rgba(0,70,90,0.8);border:1px solid transparent;"  id="entertainmentType" class="entertainment" name="entertainmentType">

 <option value="">Entertainment type</option>
 <option value="video games">Video games</option>
 <option value="card games">Card games</option>

 </select>
 
 

<select style="" class="fashion" name="fashionSex" id="fashionSex">
 
 <option value="">Sex</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
<option value="Boy">Boy</option>
  <option value="Girl">Girl</option>
<option value="Unisex">Unisex</option>

</select>


<select style="box-shadow:0px 0px 8px rgba(0,70,90,0.8);border:1px solid transparent;" class="fashion" name="fashionSize" id="fashionSize">
 

 <option value="">Size</option>
  <option value="XXL">XXL</option>
  <option value="XL">XL</option>
  <option value="L">L</option>
  <option value="M">M</option>
  <option value="S">S</option>
  <option value="XS">XS</option>


</select>






<select style="" id="housingType"  class="housing" name="housingType">
 
 <option value="">Type</option> 
  <option value="Houses & Apartments For rent">Houses & Apartments For rent</option>
  <option value="Houses & Apartments For sale">Houses & Apartments For sale</option>
  <option value="Short rent">Short rent</option>
 

</select>


<select style="width:23%;" id="numberrooms"  class="housing" name="numberrooms">
 
 <option value="">Rooms</option> 

  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
 <option value="10">10</option>

</select>


<select  style="width:23%;box-shadow:0px 0px 8px rgba(0,70,90,0.8);border:1px solid transparent;" id="numbertoilets"  class="housing" name="numbertoilets">

 <option value="">Toilets</option> 

   <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
 <option value="10">10</option>
 

</select>










<select style="box-shadow:0px 0px 8px rgba(0,70,90,0.8);border:1px solid transparent;"  id="employmentType"   class="employment" name="employmentType">
  
  <option value="">Employment type</option>
  <option value="employer">Employer</option>
  <option value="job seeker">Job seeker</option>
  
</select>





<select style="box-shadow:0px 0px 8px rgba(0,70,90,0.8);border:1px solid transparent;"  id="foodType"   class="food" name="foodType">
  
  <option value="">Category</option>
  <option value="drinks">Drinks</option>
  <option value="food">Food</option>
  <option value="livestock">Livestock</option>
</select>



<select style="" id="farmingType"   class="farming" name="farmingType">
  
  <option value="">Type</option>
  <option value="livestock">Livestock</option>
  <option value="crops">Crops</option>

</select>





<select  style="box-shadow:0px 0px 8px rgba(0,70,90,0.8);border:1px solid transparent;" id="carDetails"  class="vehicles" name="carDetails">
  

<option value="">Year</option>
  <option value="2000">2000</option>
<option value="2001">2001</option>
 <option value="2002">2002</option>
  <option value="2003">2003</option>
<option value="2004">2004</option>
 <option value="2005">2005</option>
  <option value="2006">2006</option>
<option value="2007">2007</option>
  
  <option value="2008">2008</option>
  <option value="2009">2009</option>
<option value="2010">2010</option>
 <option value="2011">2011</option>
  <option value="2012">2012</option>
<option value="2013">2013</option>
 <option value="2014">2014</option>
  <option value="2015">2015</option>
<option value="2016">2016</option>  
  <option value="2017">2017</option>
  <option value="2018">2018</option>
<option value="2019">2019</option>
 <option value="2020">2020</option>
  <option value="2021">2021</option>
<option value="2022">2022</option>
 

</select>

<select style="box-shadow:0px 0px 8px rgba(0,70,90,0.8);border:1px solid transparent;"  class="vehicles" id="vehicleType" name="vehicleType">
  

<option value="">Vehicle type</option>
<option value="Saloon">Saloon</option>
<option value="Suv">Suv</option>
<option value="Sport">Sport</option>
<option value="Buses & Shuttles">Bus & Shuttles</option>
<option value="Motor">Motor cycle</option>
<option value="Power bike">Power Bike</option>
<option value="Bicycle">Bicycle</option>
</select>


<select style=""  class="services" id="serviceType" name="serviceType">
  

<option value="">Service type</option>
<option value="barbing">Barbing</option>
<option value="engineering">Engineering</option>
<option value="fashion designer">Fashion designer</option>
<option value="graphics designer">Graphics designer</option>
<option value="medicine">Medicine</option>
<option value="phone repairer">Phone repairer</option>
<option value="ui/ux designer">Ui/Ux designer</option>
<option value="web development">Web development</option>
<option value="Teaching">Teaching</option>
<option value="shoe maker">Shoe maker</option>
<option value="baker">Bakers</option>


</select>


</div>






<div class='container'>


<select style="text-transform:capitalize;color: rgba(0,70,90,0.8);width: 180px;border:none;font-family:;font-weight: bold;font-size: 14px;margin-top:13px;opacity: 0.8;" class="form-control" id="sort" name="sort">  

<option value="highest">Highest to Lowest</option>
<option value="lowest">Lowest to Highest</option>
<?php if($mysort=='recent'){echo'<option selected value="recent">Recently Added</option>';}

else{

echo'<option selected value="recent">Recently Added</option>';

}?>

<?php if($mysort=='promo'){echo'<option selected value="promo">Promo</option>';}

else{

echo'<option value="promo">Promo</option>';

}?>



<?php if($mysort=='views'){echo'<option selected value="views">Most viewed</option>';}

else{

echo'<option value="views">Most viewed</option>';

}?>

<?php if($mysort=='featured'){echo'<option selected value="featured">Featured products</option>';}

else{

echo'<option value="featured">Featured products</option>';

}?>





</select>

  </div>


<div class="spinner-border text-info" id="loading-image"></div>



<div style='width:100%' id="blogspot" class="blogspot container"></div>

 











<br><br>
<?php

if(!empty($_SESSION['id'])){
    
 ?>
 
 <a href="index.php?#sellnow" onclick="" style="" id="btn-down" class="btn btn-down">Sell on &agrave;t&#233; &nbsp;<i class='fa fa-arrow-right'></i></a>
<?php 

}

else{
    
  ?>  
   <a href="newsignup.php?#fillinform" onclick="" style="" id="btn-down" class="btn btn-down">Sell on &agrave;t&#233; &nbsp;<i class='fa fa-arrow-right'></i></a> 
    
 <?php
 
}

?>








</div></div></div>




<div id="" class="icon-bar" align="center">

  
<a class="facebook" href="https://web.facebook.com/profile.php?id=100076772181022"><i class='fab fa-facebook'></i></a>



<a  class="twitter" href="https://twitter.com/ngnimitech"><i class='fab fa-twitter'></i></a>




<a class="instagram" href="https://instagram.com/ngnimitech"><i class='fab fa-instagram'></i></a>




<a class="telegram" href="https://t.me/ngnimitech"><i class='fab fa-telegram'></i></a>




</div>





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
 <div class="row" style="padding:10px;">
<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>+2347033506332<br>Contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:poppins;"><a style="color: white;" href="about.php">About us</a><br><a style='color:white;' href='services.php'>Services</a><br>Our team<br><a style="color: white;" href="contact.php">Support center</a><br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins;">Career<br>Term & Conditions<br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">Our partners<br>Faq<br><br>


</div>

</div></div>







<div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:'Monserrat',sans-serif;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>

</div></div>



<div id="popup">
 <a onclick="toggle()" id="close"><i class="fa fa-close"></i></a>

<br>

<h6 style="width:93%;">Price</h6>

<br>
<select name="min" class=' minprice' id="price" style=";border:none;text-transform:capitalize;color: rgba(0,0,0,0.6);font-size:14px;background-color: rgba(192,192,192,0.2);width:130px;height: 35px;border-radius: 3px;box-shadow:0px 0px 3px rgba(0,0,0.2); ">
  
  <option selected="selected" value="200">&#8358;200</option>
  <option value="1000">&#8358;1000</option>
  <option value="5000">&#8358;5000</option>
  <option value="20000">&#8358;20000</option>
  <option value="50000">&#8358;50000</option>
  <option value="100000">&#8358;100000</option>
 <option value="500000">&#8358;500000</option>
  <option value="1000000">&#8358;1000000</option>
  <option value="10000000">&#8358;10000000</option>
<option value="50000000">&#8358;50000000</option>
<option value="100000000">&#8358;100000000</option>
</select>
&nbsp;
<select name="max" id="price"  class='maxprice' style=";border:none;width:130px;height: 35px;text-transform:capitalize;color: rgba(0,0,0,0.6);font-size:14px;border-radius: 3px;background-color: rgba(192,192,192,0.2);box-shadow:0px 0px 3px rgba(0,0,0.2);">
  
<option value="1000">&#8358;1000</option>
  <option value="5000">&#8358;5000</option>
  <option value="20000">&#8358;20000</option>
  <option value="50000">&#8358;50000</option>
  <option value="100000">&#8358;100000</option>
 <option value="500000">&#8358;500000</option>
  <option value="1000000">&#8358;1000000</option>
  <option value="10000000">&#8358;10000000</option>
<option value="50000000">&#8358;50000000</option>
<option value="100000000">&#8358;100000000</option>
<option selected="selected" value="150000000">&#8358;150000000</option>

</select>



</div>






<script>
    
    function toggle() {


var popup = document.getElementById('popup');
popup.classList.toggle('active');

        }

</script>











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
                 
if(response==1){
    
    swal({
        
      icon:"success",
      text:"Thanks for subscribing."
        
        
        
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
  

  
  
  

<script>
  
$('.carousel').flickity({
 
  cellAlign: 'left',
  contain: true,
});

</script>
  






<script>



$("#loading-image").hide();

$(".blogspot").load('getdata.php?page=1'); 

$("#q").on('keyup',function() {

var x = $('#q').val();

if (x=='') {$("#reset").hide();}

else{

$("#reset").show();

}


getData(x);



});





$(document).on('click','.btn-success',function(e) {
    
  e.preventDefault();

var page = $(this).attr('id');

var x = $('#q').val();

var con_filter = $('#con').val();

var txt_filter = $('#location').val();

var maxprice = $('.maxprice').val();

var minprice = $('.minprice').val();

var sort = $('#sort').val();

var cat_filter = $('#category').val();

var fashion_sex = $('#fashionSex').val();

var fashion_size = $('#fashionSize').val();

var food_type = $('#foodType').val();

var house_type = $('#housingType').val();

var employment_type = $('#employmentType').val();

var farm_type = $('#farmingType').val();

var car_year = $('#carDetails').val();

var vehicle_type = $('#vehicleType').val();

var entertainment_type = $('#entertainmentType').val();

var babyproduct_type = $('#babyproductType').val();

var service_type = $('#serviceType').val();

var numberrooms= $('#numberrooms').val();

var numbertoilets= $('#numbertoilets').val();

if (page!='') {

$('.btn-success').removeClass('active-button');

$(this).addClass('active-button');

}



getData(x,con_filter,txt_filter,maxprice,minprice,sort,fashion_sex,fashion_size,food_type,house_type,farm_type,car_year,vehicle_type,employment_type,entertainment_type,babyproduct_type,service_type,numberrooms,numbertoilets,cat_filter,page);
  
});




  
$('#con,#location,#sort,#category,#fashionSex,#fashionSize,#foodType,#farmingType,#carDetails,#housingType,#vehicleType,#employmentType,#entertainmentType,#babyproductType,#serviceType,#numberrooms,#numbertoilets,#minprice,#maxprice').on('change',function(e) {

$("#loading-image").show();

$("#blogspot").hide();

var x = $('#q').val();

var con_filter = $('#con').val();

var txt_filter = $('#location').val();

var maxprice = $('.maxprice').val();

var minprice = $('.minprice').val();

var sort = $('#sort').val();

var cat_filter = $('#category').val();

var fashion_sex = $('#fashionSex').val();

var fashion_size = $('#fashionSize').val();

var food_type = $('#foodType').val();

var house_type = $('#housingType').val();

var farm_type = $('#farmingType').val();

var car_year = $('#carDetails').val();

var employment_type = $('#employmentType').val();

var entertainment_type = $('#entertainmentType').val();

var babyproduct_type = $('#babyproductType').val();

var service_type = $('#serviceType').val();

var numberrooms= $('#numberrooms').val();

var numbertoilets= $('#numbertoilets').val();



if (cat_filter=='fashion') {

$('.fashion').show().focus();



$('.vehicles,.employment,.entertainment,.baby,.services,.food,.farming,.housing').hide();


$('.vehicles,.employment,.entertainment,.baby,.services,.food,.farming,.housing').val('');


}


if (cat_filter=='services') {

$('.services').show();

$('.fashion,.housing,.food,.vehicles,.farming,.employment,.entertainment,.baby').hide();


$('.fashion,.housing,.food,.vehicles,.farming,.employment,.entertainment,.baby').val('');


}




if (cat_filter=='baby'){
    
$('#babyproductType').show().focus();

$('.vehicles,.employment,.fashion,#employmentType,.services,.housing,.farming,.food').hide();

$('.vehicles,.employment,.fashion,#employmentType,.services,.housing,.farming,.food').val('');



}




if (cat_filter=='entertainment') {

$('#entertainmentType').show().focus();

$('.vehicles,.employment,.fashion,#babyproductType,.services,.food,.farming,.housing').hide();

$('.vehicles,.employment,.fashion,#babyproductType,.services,.food,.farming,.housing').val('');

}



if (cat_filter=='housing') {

$('.housing').show().focus();

$('.fashion,.employment,.entertainment,#babyproductType,.services,.farming,.vehicles,.food').hide();

$('.fashion,.employment,.entertainment,#babyproductType,.services,.farming,.vehicles,.food').val('');

}



if (cat_filter=='farming') {

$('.farming').show().focus();;

$('.fashion,.housing,.vehicles,.food,.employment,.entertainment,#babyproductType,.services').hide();

$('.fashion,.housing,.vehicles,.food,.employment,.entertainment,#babyproductType,.services').val('');

}



if (cat_filter=='food and beverages') {

$('.food').show().focus();;

$('.fashion,.housing,.vehicles,.farming,.employment,.entertainment,#babyproductType,.services').hide();

$('.fashion,.housing,.vehicles,.farming,.employment,.entertainment,#babyproductType,.services').val('');

}



if (cat_filter=='vehicles') {

$('#vehicleType,#carDetails').show().focus();

$('.housing,.entertainment,#babyproductType,.services,.food,.farming,#employmentType,.fashion').val('');

$('.housing,.entertainment,#babyproductType,.services,.food,.farming,#employmentType,.fashion').hide();



}




if (cat_filter=='employment') {

$('.employment').show().focus();

$('.food,.farming').hide();

$('.housing').hide();

$('.fashion,.entertainment,#babyproductType,#vehicleType,.services').hide();

$('.fashion,.entertainment,#babyproductType,#vehicleType,.services,.housing,.food,.farming').val('');

}







if ((cat_filter!='entertainment') && (cat_filter!='services') &&  (cat_filter!='farming') &&  (cat_filter!='baby') && (cat_filter!='vehicles') && (cat_filter!='employment') &&  (cat_filter!='food and beverages') && (cat_filter!='housing') && (cat_filter!='fashion')                                                             ){
    
$('#vehicleType,#carDetails').hide();

$('.food,.farming,.employment,.housing,.fashion,#fashionSex,#fashionSize,.entertainment,.baby.services').val('');

$('.food,.farming,.employment').hide();

$('.housing').val('').hide();

$('.fashion,.entertainment,.baby,.services').hide(); 
    
    
}


if(cat_filter==''){
    
$('#vehicleType,#carDetails').hide();

$('.food,.farming,.employment,.housing,.fashion,#fashionSex,#fashionSize,.entertainment,.baby').val('');

$('.food,.farming,.employment').hide();

$('.housing').val('').hide();

$('.fashion,.entertainment,.baby').hide();   
    
}













var vehicle_type = $('#vehicleType').val();

getData(x,con_filter,txt_filter,maxprice,minprice,sort,fashion_sex,fashion_size,food_type,house_type,farm_type,car_year,vehicle_type,employment_type,entertainment_type,babyproduct_type,service_type,numberrooms,numbertoilets,cat_filter);


});




function getData(x,con_filter,txt_filter,maxprice,minprice,sort,fashion_sex,fashion_size,food_type,house_type,farm_type,car_year,vehicle_type,employment_type,entertainment_type,babyproduct_type,service_type,numberrooms,numbertoilets,cat_filter,page) {
  
$.ajax({

url:"getdata.php",

type:"POST",

data:{'q':x,'min':minprice,'max':maxprice,'location':txt_filter,'category':cat_filter,'fashionSex':fashion_sex,'fashionSize':fashion_size,'foodType':food_type,'housingType':house_type,'farmingType':farm_type,'carDetails':car_year,'vehicleType':vehicle_type,'serviceType':service_type,'employmentType':employment_type,'entertainmentType':entertainment_type,'babyproductType':babyproduct_type,'numberrooms':numberrooms,'numbertoilets':numbertoilets,'con':con_filter,'sort':sort,'page':page},

success:function(data) {

$("#loading-image").hide();

    $(".blogspot").html(data).show();


  }

});


};




</script>




<input type="hidden" name="" id="likes" value="<?php echo $mylikes;?>">



<?php 

if ($mylikes!='') {

  echo "<script>

$(document).ready(function(){

$('#category').children('option').each(function(){

if($(this).is(':selected')){

  $(this).trigger('change');
}

  });

});

</script>";
  
}




 ?>



<?php 

if ($mysort!='') {



  echo "<script>

$(document).ready(function(){

$('#sort').children('option').each(function(){

if($(this).is(':selected')){

  $(this).trigger('change');
}

  });

});

</script>";
  
}




 ?>


<input type="hidden" id="search" value="<?php echo$search;?>">


<?php 



if(isset($_GET['search'])){
    
 $search = $_GET['search'];
 
 
     
     echo"<script>
  
  $(document).ready(function(){
      
  var search = $('#search').val();
  
  if (search!=''){
      
  $('#q').val(search).trigger('keyup');   
      
  }
  
     
  });
  
  
 
  
  </script>";   
     
    
 
    
   
    
}


?>



<script>
  
$("#reset").on('click',function () {

  
   $("input[type=text]").val('');

});



</script>


<script type="text/javascript">
  

$('#main').flickity({
 
  cellAlign: 'left',
  contain: true,
  autoPlay: 2500,
  friction:0.52,

  wrapAround:true

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



</body>
</html>

    