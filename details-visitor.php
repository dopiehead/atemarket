

<?php session_start();

error_reporting(E_ALL ^ E_NOTICE);

?>




<!DOCTYPE html>

<html lang='en'>
<head>
<title>&agrave;t&#233; -The online marketing website | Details</title> 


<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Poppins">
<link rel="stylesheet" href="flickity.min.css">



    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">

<script src="sweetalert.min.js"></script> 



  <script src="jquery-1.11.3.min.js"></script>
<script src="flickity.pkgd.min.js"></script>

<style type="text/css">
  body{

user-select: none;
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




.seemore{

color: white !important;

font-size:14px;

float: right;


}







#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}

.tab{
    
    margin-top:10px;
}

.myslides{

  
  display:none;
  
}







.tabcontent input[type=text]:focus,.tabcontent input[type=email]:focus,.tabcontent textarea:focus{

  outline: none;
  box-shadow:0px 0px 3px red;

}




.flickity-page-dots{

  display: none;
}


.tab {
  overflow: hidden;
 
 margin-top: -12px;

}





.tab button {
background-color:inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 10px 15px 10px 5px;
  margin-top:3px;
  margin-bottom:14px;
  transition: 0.3s;
  font-size: 14px;
  font-weight: bold;
  font-family:'Monserrat',sans-serif;
}

.fa-map-marker{
    
  color:blue;  
}


.tab button:hover {
color: rgba(0,8,20,0.6);
 font-weight: bold;  
}


#review-box {
border:1px solid transparent transparent transparent;background-color: rgba(192,192,192,0.2);height:120px;overflow: auto;margin-top:10px;padding:10px 15px;


}

#london{
padding-top: 60px;

}






/* Create an active/current tablink class */
.tab button.active {
 color: rgba(0,8,20,0.6);
 
 font-weight: bold;
 font-family:'monserrat',sans-serif;
 font-size:14px;

}

/* Style the tab content */
.tabcontent {
  display:none;
  
  padding-top:10px;
  border:none;
  border-top: none;
}

.tabcontent input,.tabcontent textarea,.tabcontent .btn-warning{
 margin-top:15px;
 border:none;
 box-shadow:0px 0px 5px rgba(0,0,0,0.3);
 font-size:14px;
}


.btn-warning{

 border:none;

 font-size:15px;
 

}

#discount{
background-color: rgba(255,195,50,0.3);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: relative;
top:38px;
font-weight: bold;
padding: 6px;
left:145px;
font-size:13px;

}

.col-md-7 #discount{
background-color: rgba(255,195,50,0.3);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: relative;
top:40px;
font-weight: bold;
padding:6px;
left:180px;


}

.fa-chevron-left{
    
    

padding:10px 15px;
border:1px soid transparent;
box-shadow:0px 0px 8px rgba(0,0,0,0.3);
border-radius: 50%;
color:rgba(0,90,70,0.7);margin-bottom:-15px;margin-top:10px;
z-index:10;    
background-color:white; 
font-size:18px;
    
}

.col-md-5 #priceitem{
font-size:14px;
font-weight:bold;
font-family:Monserrat,sans-serif;
margin-left: -8px;
color:rgba(255,0,100,0.7);
}






#views{

position:relative;
top:39px;
right:35px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size:13px;
}

#report-form input,#report-form textarea{font-size: 13px;}


.imgitem{
margin-top: 20px;
width:350px;
height:380px;

}












.overlay,#overlay{

  display:none;
}

.open-btn{

display: none;


}

.pxname{
margin-top:10px;
font-family:Monserrat,sans-serif;
font-size:15px;



}

#popup-messaging{

background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 400px;
padding:5px;
font-size:14px;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;
z-index: 999;
}

#popup-messaging.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#popup-messaging input, #popup-messaging textarea{
  
font-size:13px;
    }






#close-messaging{

font-size: 18px;
position: absolute;
top: 12px;
left: 92%;
color:white;
cursor: pointer;



}
#close-messaging:hover, #close-messaging:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

}

#warning{
border:1px solid transparent transparent transparent;
background-color:rgba(0,70,90,0.7);
padding:20px 6px 6px 6px;

font-family:poppins;

}

#warning p{


font-size:14px;
font-family:poppins;
color: white;
}






h4{
    
color:white;
font-size:17px;
font-family: Monserrat,sans-serif;
font-weight: bold;
margin-top: 30px;
margin-bottom:20px;
padding:8px;
background-color: rgba(0,70,90,0.7);
}

h4:after{
content: " ";
display: inline-block;
width:0%;
border:1px solid rgba(192,192,192,0.8);
margin:3px 8px;


}


#priceitem{

font-family:poppins;
font-weight: bold;
color:rgba(255,0,100,0.7);
text-transform:capitalize;
font-size:13px;
margin-left:8px;
padding:8px;


}
#conitem,#locitem,#catitem{
font-size:13px;
font-family:poppins;
color: rgba(0,0,0,0.5);
margin-left:8px;
padding:8px;
text-transform:capitalize;
}

#imgitem{
  margin-top:-25px;
height: 160px;
width:100%;

border-radius:18px 18px 0px 0px;
}

#it{




}


.carousel{

  width: 100%;
  margin-top: 10px;margin-bottom:18px;
  height:100%;
}

.cell-carousel{
border-top: 1px solid rgba(0,0,0,0.1);
padding-bottom:8px;
 border:1px solid transparent transparent;
 box-shadow:0px 0px 5px rgba(0,0,0,0.4);
margin-right:21px;
border-radius:18px;
border-bottom:1px solid rgba(0,0,0,0.4);
width:210px;
}


.cell-carousel #priceitem{
font-weight:bold;
 font-size:12px;
 color:rgba(255,0,100,0.7);
}








#addx,.addx{

color:rgba(0,0,0,0.6);
font-family:Monserrat,sans-serif;
cursor: pointer;
font-size: 12px;
background-color:;
border:1px solid rgba(0,0,0,0.5); 
padding:10px;
margin: 1px 5px 18px 3px;

}
.btn-sold{

color:;


}







html{
    
    scroll-behavior:smooth;
}



#navbar a{


  margin: 0px 15px;
  font-size: 13px;
  color: white;
}

#mname{

color:rgba(0,0,0,0.6);font-family:Monserrat,sans-serif;
font-size:15px;


}
.fa-warning{

  font-size: 15px; color: red;
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
  padding:8px;
  transition: all 0.5s;
  color: white;
  font-size: 12px;
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


#comp{

margin-top: 90px;



}

#priceitem{



text-transform:capitalize;
font-size:12px;
font-weight:bold;
color: red;


}



h1 img{
float:left; 

opacity:1;

height: 45px;

width:135px;

margin-left:8px;

margin-top:2px;
}

  


h1{
position:;
z-index:100;
width:100%;
height:80px;
background-color:rgba(0,70,90,0.6);;
padding: 8px;


} 

.gallery:hover{

opacity: 0.8;

text-decoration: none;

color: white;

}

.faq{
font-family:verdana;
display: block;

float: right;

font-size:12px;

cursor: pointer;

color: white;

border-radius:8px;

padding:8px 1px;

margin-right:13px;
font-weight: bold;


}


.faq:hover,.how:hover{

opacity: 0.8;

text-decoration: none;

color: white;





}

.how{

font-family:verdana;
float: right;

font-size:12px;

cursor: pointer;

color:white;

border-radius:8px;

padding:8px 1px;

margin-right:15px;
font-weight: bold;

}

.gallery{

font-family: Monserrat,sans-serif;
float: right;

font-size:13px;

cursor: pointer;

color:white;

border-radius:8px;

padding:8px 1px;

margin-right:15px;

font-weight: bold;

}

.display-left, .display-right{
cursor: pointer;
position: absolute;
top: 50%;
width: auto;
padding:8px;
background-color: white;
color:black;
font-weight: bold;
font-size: 16px;
transition: 0.6s ease;
border-radius: 0 3px 3px 0;
user-select: none;

}
.display-right{
right: 0;

}
.display-left{
left: 0;

}


.display-left:hover,.display-right:hover,#display-left:hover, #display-right:hover{
background-color: rgba(0,0,0,0.8);
color:white;
}

.display-left:focus,.display-right:focus{
background-color: rgba(0,0,0,0.8);
color:white;
}
.fade {
-webkit-animation-name:fade;
-webkit-animation-duration:100000s;
animation-name: fade;
animation-duration:100000s;
}

@-webkit-keyframes fade{
from{opacity: .7}
to{opacity: 1}
}

@keyframes fade{

  from{opacity: .7}
  to{opacity: 1}
}

*{

  box-sizing: border-box;
  margin: 0;
}




.overlay,#overlay{

  display:none;
}

.open-btn{

display: none;


}



















a:hover{
opacity: 0.8;

}
a{
text-decoration:none;
color: rgba(0,0,0,0.5);
}

.fa-map-marker{

color: blue;

}


.col-md-7{
background-color: rgba(192,192,192,0.2);
padding:2px 10px;

}

.btn-next{
font-size: 21px;
color:black;


}

.btn-update{
font-size: 14px;
color:white;
background-color: rgba(255,185,50,1);

}


#edit-form input[type=text],#edit-form textarea{

font-family:verdana;
font-size:13px;

}

#add{

color:green;font-family: Monserrat,sans-serif;cursor: pointer;
font-size: 13px;


}



.btn-report{
float: right;
font-size:13px;
border: none;
outline: none;
box-shadow: none;
font-family: verdana;
cursor: pointer;
}

.btn-report:focus{


border: none;
outline: none;
box-shadow: none;
}


.row{
margin-top:0px;



}
#sim{
 position:absolute;  
top:60px;   
right:10px; 
display:none;
    
}



h5 a:hover{
 text-decoration:none;  
 opacity:1;   
    
}


h5 {
 text-decoration:none;  
letter-spacing:0.5px;    

    
}


hr{

border: 2px solid red;
width: 140px;
}

#item{
    
  color:rgba(0,0,0,0.6);
  font-family:poppins;
  font-size:15px;   
  text-transform:capitalize;
    
    
}









#footer {

padding:10px;
height: 318px;
background: linear-gradient(to right, rgba(0,0,20,0.6),rgba(0,0,20,0.6));
background-size: cover;
padding-top: 8px;
box-shadow:0px 5px 16px 0px rgba(0,0,0,0.3);


}
#footer input[type=email]{
background-color:rgba(192,192,192,0.4);
color: white;
border: none;
font-size:13px;


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

p{
 color: rgba(0,0,0,0.43);
font-size:13px;
font-family:Monserrat,sans-serif;



}


.cell-carousel img{

 
 
}






.fa-warning{

  font-size: 18px; color: red;
}


.imgitem{



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



#popup-edit{

background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 400px;
padding:5px;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;


}






















#popup1{

position:fixed;
transform: translate(-50%,-50%);
padding: 0px 5px;
padding-bottom: 0px;
left: 50%;
top: 50%;
background-color: white;
background-color: white;

z-index: 99;
box-shadow: 0 16px 40px rgba(0,0,0,.30);

visibility:hidden;
opacity:0;
transition: 0.3s;




}





#popup.active,#popup1.active,#popup-edit.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#close{

font-size: 12px;
position: absolute;
top: 15px;
left: 93%;
color:white;
cursor: pointer;



}
#close:hover, #close:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

}


#closex{
color: white;
font-size: 12px;
position: absolute;
top: 3px;
left: 91%;


padding:3px;
cursor: pointer;

}
#closex:hover, #closex:focus{
opacity: 0.6;
border: none;
outline: none;
box-shadow: none;

}









#nameitem{
color:green;font-family: Montserrat,sans-serif;text-transform:capitalize;font-size:13px;
margin-left:8px;
padding:8px;
}


#contentx{

font-weight: bold;color: rgba(192,30,0,0.6);
font-family:Monserrat,sans-serif;
text-transform:capitalize;
position: absolute;
padding: 2px 100px;
font-size:13px



}


#content-edit{

font-weight: bold;color: rgba(192,30,0,0.6);
font-family: century gothic;
text-transform:capitalize;
position: absolute;

font-size:15px;



}



#content{

font-weight: bold;
font-family: century gothic;
text-transform:capitalize;
position: absolute;
left:45.4%;
font-size:15px;
color:lightgreen;


}

.fade {
-webkit-animation-name:fade;
-webkit-animation-duration:100000s;
animation-name: fade;
animation-duration:100000s;
}

@-webkit-keyframes fade{
from{opacity: .7}
to{opacity: 1}
}

@keyframes fade{

  from{opacity: .7}
  to{opacity: 1}
}

*{

  box-sizing: border-box;
  margin: 0;
}











#h5{

  border:1px solid transparent transparent;

background-color:rgba(0,70,90,0.7);

  color:white;
height: 45px;
 

  width:100%;
padding-top: 8px;
  margin-top:-20px;

  font-size:14px;

  font-family:monserrat,sans-serif;

  font-weight: bold;
  text-transform: uppercase;

}




#h6{

  border:1px solid transparent transparent;

  background-color:rgba(0,70,90,0.7); 

  color:white;
height: 45px;
 

  width:100%;

  padding-top:10px;

  font-size:14px;

  font-family:'monserrat',sans-serif;

  font-weight: bold;
  text-transform: uppercase;

}







#result-pic{
font-family: century gothic;
animation: fadeOut 3s forwards;

animation-delay:2s;
position:;
padding: 10px;
color: red;
text-transform:capitalize;
}





@keyframes fadeOut{



from{

opacity: 1;





}



to{

opacity: 0;



}



}





@media only screen and (orientation:landscape){
 
.imgitem{
margin-top: 20px;
width:340px;
height:380px;

}

 h1{
     
  background-color:rgba(0,70,90,0.6);;
  height:68px;
     
 }
 h1 img{
float:left; 

opacity:1;





margin-top:px;
}
 
 
.cell-carousel img{

 
}
 
 
 
 
 h1 img{
   height:px;  
     
     
 }
 .btn-gallery{
    
    font-size:21px;
    color:red;
    text-decoration: none;

}

 .btn-gallery:hover{
    
  opacity: 0.6;
    
    text-decoration: none;
    
}





#item{
    
  color:rgba(0,0,0,0.5);
  font-family:poppins;
  font-size:;   
    
    
    
}
 
 
}



@media only screen and (max-width:497px){

#popup,#popup-messaging{
Width:340px;

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

 









h1 img{
float:left; 

opacity:1;

height: 45px;

width:145px;

margin-left:-6px;

margin-top:-4px;
}

.col-md-7{
   
    
   padding:0px; 
    
}


 
h1{

display:none;
height:68px;
box-shadow:rgba(0,0,0,0.5);


} 
.row{
   
    
    
    
}
#sim{
 position:absolute;  
top:60px;   
right:10px;    
    
}
.btn-gallery{
    
    font-size:18px;
    color:red;
}


#popup{

background-color:rgba(192,192,192,0.8);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 350px;
padding:0px 0px;
box-shadow: 0 5px 30px rgba(0,0,0,.70);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;





}

#popup.active{
    
visibility: visible;
opacity: 1;
transition: 0.3s;

    }



#nameitem{
color:green;font-family:poppins;text-transform:capitalize;font-size:13px;
font-weight: bold;


}

#popup{

background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 150px;
padding:2px 0px;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;





}

#popup.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#close{
color: white;
font-size: 16px;
position: absolute;
top: -12px;
left: 91%;
padding:8px 13px;
border-radius:50%;
background-color:rgba(255,50,70,1);


}
#close:hover, #close:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

}


#h6{

font-weight: bold;color: rgba(0,0,0,0.6);
font-family:'monserrat',sans-serif;
text-transform: uppercase;


}

#contentx{

font-weight: bold;color: rgba(192,30,0,0.6);
font-family:'monserrat',sans-serif;
text-transform:capitalize;
position: absolute;
padding: 2px 80px;
font-size:15px;







}



@keyframes fadeOut{



from{

opacity: 1;





}



to{

opacity: 0;



}



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

 
.display-left, .display-right{
cursor: pointer;
position: absolute;
top: 50%;
width: auto;
padding:12px;

color:black;
font-weight: bold;
font-size: 16px;
transition: 0.6s ease;
border-radius: 0 3px 3px 0;
user-select: none;

}
.display-right{
right: 0;

}
.display-left{
left: 0;

}


.display-left:hover,.display-right:hover,#display-left:hover, #display-right:hover{
background-color: rgba(0,0,0,0.8);
color:white;
}

.display-left:focus,.display-right:focus{
background-color: rgba(0,0,0,0.8);
color:white;
}



.imgitem{
margin-top:-5px;
width:100%;
height:345px;


}

.fa-chevron-left{
    
  position:absolute;  
  left:15px;
  top:5%;
    
}





 
#discount{
background-color: rgba(255,195,50,0.3);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: relative;
top:38px;
font-weight: bold;
padding: 5px;
right:0px;


} 

#views{
position:relative;
top:39px;
right:32px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 4px;
z-index: ;
font-size:13px;

} 







.btn-gallery{
    
    font-size:18px;
    color:red;
}




}

@media only screen and (max-width:1024px){
 
.waves {
    height:40px;
    min-height:40px;
    top: -40px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 70px;




  
}

 
 
 

.imgitem{

width:px;


}




}

@media only screen and (max-width:1266px){
    
    
    
    
    
#close-messaging{

font-size: 15px;
position: absolute;
top:-10px;
left: 91%;
color:white;
cursor: pointer;
padding:8px 13px;
border-radius:50%;
background-color:rgba(255,50,70,1);



}
#close-messaging:hover, #close-messaging:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

}    
    
    
    
    
    
    
 
 
 
 .tab{
    
    margin-top:0px;
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
 
 
 
    
.col-md-5 #priceitem{
font-size:15px;
font-weight:bold;
font-family:Montserrat,sans-serif;
margin-left: -8px;
color:rgba(255,0,100,0.7);
}
    
    
 .icon-bar a{

display:  block;
  text-align: center;
  padding: 8px;
  transition: all 0.5s;
  color: white;
  font-size: 13px;
}   
    
    
    
    
 .cell-carousel{
border-top: 1px solid rgba(0,0,0,0.1);
width:195px;

border-bottom:1px solid rgba(0,0,0,0.4);
}   
    
    
#popup{
width:350px;
}
#h6{color:white;margin-top:-5px;}

#imgitem{
  margin-top:-24px;
height: 160px;
width:100%;

border-radius:17px 17px 0px 0px;
}

#subscribe-form input{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}


#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:10%;  color: white;border-radius:0px 15px 15px 0px; 
}



.icon-bar{
    
    
    display:none;
}


.col-md-7 #discount{
position: relative;
left:80px;


}

.cell-carousel #priceitem{

 
}
.cell-carousel #priceitem{

font-family:sans-serif;
font-size:14px;


}

.cell-carousel #views{


float:left;
left:3px;
}

.cell-carousel #discount{
    
    position:absolute;
    right:3px;
}



.cell-carousel #nameitem{

font-family:sans-serif;
font-size:13px;font-weight:normal;text-transform:uppercase;

}

.cell-carousel #imgitem{
    
    
    margin-top:-28px;
}

#conitem,#locitem,#catitem{
font-size:13.5px;
font-family:poppins;
color: rgba(0,0,0,0.5);
text-transform:capitalize;
}



 
#warning{
border:1px solid transparent transparent transparent;
background-color:rgba(0,70,90,0.7);
padding:20px 6px 6px 6px;
box-shadow:0px 0px 5px rgba(0,0,0,0.2);



}


#warning p{

font-size:14px;
font-family:poppins;

}

.pxname{

font-family:sans-serif;




}

h4 span{
padding:8px;

  color:white;
 
}








h4{
margin-bottom:25px;
font-family: monserrat,sans-serif;
font-weight: bold;

}

h4:after{
content: " ";
display: inline-block;
width: 0%;
border:1px solid rgba(192,192,192,0.8);
margin:3px 8px;


}  
 .how,.gallery,.faq{display: none;}
 
.overlay{
height: 0%;
width: 100%;
display: block;
position:absolute;
z-index: 300;
top: 67px;
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
font-size:15px;
color: #818181; 
display: block;
text-transform: capitalize;
font-weight: bold;
font-family:century gothic;
transition: 0.3s;
}
.overlay .close-btn{
position: absolute;
top: -7px;
left: -2px;
font-size: 30px;
color:#818181;

}

.overlay a:hover,.overlay a:focus{
  color:red;
  text-decoration: none;
}


#open-btn{
   display: block;
  color: white;
  font-size: 30px;
  float: right;
  cursor: pointer;
  margin-top: 7px;
  
}

.col-md-7{
background-color: rgba(192,192,192,0.2);

margin-bottom: 15px;

}

#item{
    
  color:rgba(0,0,0,0.5);
  font-family:poppins;
  font-size:14px;   
    
    
    
}


#footer p{

color: white !important;
padding-bottom: 10px;
font-family:;
font-size:18px;


}

#footer h6{

color: white !important;
font-family:verdana;
padding-bottom: 10px;
font-size:22px;
line-height:32px;
text-shadow: none;
font-weight:bold;

}

#footer input[type=email]{
background-color:rgba(192,192,192,0.4);
color: white;
border: none;
font-size:13px;


}



#footer {


height: 330px;
font-family:verdana;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);


}
#content{

font-weight: bold;
font-family: century gothic;
text-transform:capitalize;
position: absolute;
left:35.4%;
font-size:15px;
color:lightgreen;


}


.fa-warning{

  font-size: 25px; color: red;
}


p{
 color: rgba(0,0,0,0.43);
font-size:16px;
font-family:Gill sans;



}





} 




@media only screen and (max-width:1486px){
 


.cell-carousel img{


}








} 








</style>







</head>

<body>




<div id="popup-messaging">
    
    <a onclick="messaging()" id="close-messaging"><i class="fa fa-close"></i></a>

    <h6 align="center" id="h6" style="">Send email</h6><br>

 <div class="container">

   <?php 
require 'configure.php';   

if (isset($_GET['id'])) {
  
  $id= $_GET['id'];

    


$yty = mysqli_query($conn,"select *from comment where id='$id'");



 while ($row=mysqli_fetch_array($yty)) 
 {
  if ($yty) {


        $productname=$row['name'];
      
         $siname=$row['siname'];
         
         $pid=$row['id'];
 }

}
}
?>  
<form method="post" id="message-form" enctype="multipart/form-data"> 

<div class="pxname">Product name: &nbsp; <?php echo$productname; ?></div>

  <input type="hidden" name="has" value="0" placeholder="" class="form-control"><br>


<input type="hidden" name="is_sender_deleted" value="0">

<input type="hidden" name="itemid" value="<?php echo$pid;?>">


<input type="hidden" name="is_receiver_deleted" value="0">

<input type="text" name="sentby" maxlength="21" class="form-control" style="font-family:arial,fontawesome;" placeholder="&#xF1fa; Email" value=""><br>

 <input type="text" maxlength="21" name="name" class="form-control" style="font-family:arial,fontawesome;"  placeholder="&#xF007; Name" value="" >

   <input type="hidden" name="sentto" value="<?php echo$siname ?>" placeholder="" class="form-control"><br>

   <input type="hidden" name="subject" placeholder="Subject" value="<?php echo$productname; ?>" class="form-control">

  <textarea type="text" wrap="physical" name="message" rows="6" placeholder="e.g phonenumber, price e.t.c" class="form-control"></textarea><br><br>



   <div align="center"><input type="submit" name="submit" id="submit-message" style="color: white;padding:10px;" class="btn btn-warning form-control" value="Send message"></div>

<div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>


   
   </form>
   
   

 <br>
 
 <?php
 
 require 'configure.php';
 
 
 if($hidenum==0){
     
     ?>
<p style="font-family:'montserrat';color:rgba(0,70,90,0.80);font-size:14px;" align="center">Already a member? <a style="color:rgba(220,0,30,0.7);" href="newsignup.php?#fillinform"><b>Login</b></a> to see number.</p> 


<?php

 
 
 }
 
 ?>
 
 
 
 
 
</div>



</div>




<?php  

require 'configure.php';

    
 $incViews = "UPDATE comment SET views = views +1 where id ='$id'";   

$update_views = mysqli_query($conn,$incViews);


  



?>





<div id="popup">
    <h6 align="center" id="h6" style="">Report Box</h6><br>
 <div class="container">


   <?php

    
 require 'configure.php';  

if (isset($_GET['id'])) {
  
  $id= $_GET['id'];
    




$yty = mysqli_query($conn,"select *from comment where id='$id'");



 while ($row=mysqli_fetch_array($yty)) 
 {
  if ($yty) {


        $pname=$row['name'];

        $product=$row['message'];

         $siname=$row['siname'];

         echo"<span style='font-size:15px;' id='nameitem'> Product name: ".$pname."</span>";
         
 }

}
}
?>  
<form style="" mehod="post" id="report-form" enctype="multipart/form-data"> 
<br>
    <input type="hidden" name="pname" value="<?php echo$pname; ?>">


   <input type="hidden" name="email" placeholder="&#xF1fa; Email" value="<?php echo$siname;?>"  class="form-control" >

   <input type="email" style="font-family:arial,fontawesome;" name="sender_email" placeholder="&#xF1fa; Email" value=""  class="form-control"><br>

   <input type="hidden" wrap="physical" name="product" placeholder="Product Details" value="<?php echo$product; ?>"  class="form-control"></textarea>

  <textarea type="text" wrap="physical" name="issue" placeholder="Issue " rows="8" class="form-control"></textarea><br><br>


   <div align="center"><input type="submit" name="submit" id="submit" style="color: white;" class="btn btn-warning form-control" value="Report ">



   </div>
   </form>
   <a onclick="toggle()" id="close"><i class="fa fa-close"></i></a>

   <div align="center" style="display: none;" class="loading-image" id="loading-image"><br><img id="loader" height="50" width="80" src="loading-image.GIF"></div><br>
</div>

</div>











<h1>



<a href="signup.php" style="text-decoration: none;"><img style="" align="" src="mymain.PNG" height="80" width="200"></a>



</h1>






<div class='container'>
	
<div class='row' style="border:2px solid transparent;">






<br>

<div class='col-md-7 col-sm- col-xs-7 col-xxs-7'>


<a href="sport.php"><i class="fa-solid fa-chevron-left" style=""></i></a>














<?php


require 'configure.php';


if (isset($_GET['id'])) {
	


	$id= $_GET['id'];

 

   $yty = mysqli_query($conn,"SELECT *from comment where id='$id'");



 while ($row=mysqli_fetch_array($yty)) 
 {


 echo"<div class='myslides' align='center'><a href='{$row['photo']}' target='_blank'><img class='imgitem' src=".$row['photo']."></a><br></div>";

    
    

 }


} 





?>

<?php 

require 'configure.php';

if (isset($_GET['id'])) {
  
  $id= $_GET['id'];



$more= mysqli_query($conn,"SELECT *from picx where sid='$id'");

 while ($row=mysqli_fetch_array($more)) 
 {



  $rest=$more->num_rows;

if ($rest>0) {
echo "<div align='center' class='myslides'><a href='{$row['pictures']}' target='_blank'><img class='imgitem' src=".$row['pictures']."></a></div>"; 

echo '<a class="display-left" id="display-left" style="color:;" onclick="plusDivs(-1)">&#10094;</a>
<a class="display-right" id="display-right" style="color:;" onclick="plusDivs(+1)">&#10095;</a>';

}  
    

 }


} 



 ?>





</div>


<div class='col-md-5 col-sm- col-xs-5 container' style="padding:px; ">

<div class="tab">
 <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">DESCRIPTION</button>
  <button id="reviews" class="tablinks" onclick="openCity(event, 'Paris')">REVIEWS



<?php

if (isset($_GET['id'])) {
  
  $id= $_GET['id'];

  $yp = mysqli_query($conn,"select *from comment where id='$id'");
    
while ($row=mysqli_fetch_array($yp)) 
 {
  if ($yp) {


        $pname=$row['name'];
        $product=$row['message'];
         $siname=$row['siname'];
        $product_ID=$row['id'];
         
 }

}




$query = mysqli_query($conn,"select * from seller_comment where product_id='$product_ID' order by id desc");
echo' ('.$query->num_rows.')';


}



?>



  </button> 


<div id="London" class="tabcontent">


 <?php

require 'configure.php';


if (isset($_GET['id'])) {
	
	$id= $_GET['id'];
    


$yty = mysqli_query($conn,"select *from comment where id='$id'");



 while ($row=mysqli_fetch_array($yty)) 
 {
 	if ($yty) {

  echo"<br><br><span style='color:green;font-family:poppins;text-transform:uppercase;font-size:14px;font-weight:bold;'><b>".$row['name']."</b></span><br>";

$price = $row['price'] ;
       
if ($row['discount']>0) {

echo"<span id='priceitem' style='text-decoration:;font-size:;'>Price:<span id='' style='text-decoration:line-through;font-weight:bold;'><b>&#8358;".$row['price']."</b></span></span>&nbsp;&nbsp;";



echo "<span id='priceitem' >&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<b><span style='font-size:px;font-family:poppins;' id='priceitem' style=''>Price: &#8358;".$row['price']."</span></b><br>";

       

}  
       

echo"<span id='item'>Category: ".$row['category'].""."</span><br>";


  if($row['category']!='Employment' && $row['category']!='Services' && $row['category']!='farming' && $row['category']!='housing' && $row['category']!='Pets' && $row['category']!='education ' && $row['category']!='food and beverages' && $row['category']!='health' && $row['category']!='employment') {
            
      echo"<span id='item'>Condition: ".$row['con'].""."</span><br>";


}





       echo"<span style='font-size:14px;font-family:'Monserrat',sans-serif;' id='item'>Location: <i class='fa fa-map-marker'></i>  ".$row['loc']."</span><br>";
       
      

      $sid =$row['sid'];
       




if (!empty($row['carDetails'])) {

   echo"<span style='font-family:Monserrat,sans-serif;' id='item'>Vehicle Year: ".$row['carDetails']."</span><br>";
}

if (!empty($row['vehicleType'])) {

   echo"<span style='' id='item'>Vehicle type: ".$row['vehicleType']."</span><br>";
}


if (!empty($row['carMileage'])) {

   echo"<span style='' id='item'>Vehicle mileage: ".$row['carMileage']."</span><br>";
}


if (!empty($row['fashionSex'])) {

   echo"<span style='font-size:px;font-family:Monserrat,sans-serif;' id='item'>For: ".$row['fashionSex']."</span><br>";
}


if (!empty($row['fashionSize'])) {

  echo"<span style='' id='item'>Size: ".$row['fashionSize']."</span><br>"; 
}


if (!empty($row['petsAge'])) {
  
  echo"<span style='font-size:px;' id='item'>Age: ".$row['petsAge']."</span><br>"; 
}


if (!empty($row['farmingType'])) {
  
  echo"<span style='font-size:px;' id='item'>Farm type: ".$row['farmingType']."</span><br>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<span style='font-size:px;' id='item'>Type: ".$row['foodType']."</span><br>"; 
}






if (!empty($row['housingType'])) {

   echo"<span style='font-size:px;' id='item'>House type: ".$row['housingType']."</span><br>";
}



if (!empty($row['employmentType'])) {

   echo"<span style='font-size:px;' id='item'>type: ".$row['employmentType']."</span><br>";
}




if (!empty($row['entertainmentType'])) {

   echo"<span style='font-size:px;' id='item'>type: ".$row['entertainmentType']."</span><br>";
}


if (!empty($row['serviceType'])) {

   echo"<span style='font-size:px;' id='item'>type: ".$row['serviceType']."</span><br>";
}






if (!empty($row['Numberrooms'])) {

  echo"<span style='font-size:px;' id='item'>Number of rooms: ".$row['Numberrooms']." <i class ='fa fa-bed'></> </span><br>"; 
}


if (!empty($row['Numbertoilets'])) {
  
  echo"<span style='font-size:px;' id='item'>Number of toilets: ".$row['Numbertoilets']." <i class ='fa fa-bath'></> </span><br>"; 
}



$date = $row['date'];

 $time_elapsed = time()-strtotime($date);
 $seconds = $time_elapsed;
  $minutes= round($time_elapsed/60);
  $month= round($time_elapsed/2600640);
  $hours =  round($time_elapsed/3600);
  $days =  round($time_elapsed/86400);
  $weeks =  round($time_elapsed/604800);
  $years =  round($time_elapsed/31207680);
  
 if($seconds <= 60){
        $time_ago= "just now";
    }
  
  
 
  
   
  elseif($minutes<=60){
      
      
      if($minutes==1){
    
    $time_ago = "a minute ago";    
        
        
    }  
    
    else{ $time_ago ="$minutes minutes ago";   }  
       
      
  }
  
  
   elseif($month<=12){
      
    if($month==1){
    
    $time_ago = "a month ago";    
        
        
    }  
    
    else{ $time_ago ="$month months ago";   }  
      
  }
  
  
  elseif($hour<=24){
      
      
      if($hours==1){
    
    $time_ago = "an hour ago";    
        
        
    }  
    
    else{ $time_ago ="$hours hours ago";   }  
       
      
  }
  
  
  
  elseif($days<=7){
      
      
      if($days==1){
    
    $time_ago = "a day ago";    
        
        
    }  
    
    else{ $time_ago ="$days days ago";   }  
       
      
  } 
  
  
  
   elseif($weeks<=4.3){
      
      
      if($weeks==1){
    
    $time_ago = "a week ago";    
        
        
    }  
    
    else{ $time_ago ="$weeks weeks ago";   }  
       
      
  } 
  
  
  else{
      
     if($years==1){
    
    $time_ago = "a year ago";    
        
        
    }  
    
    else{ $time_ago ="$years years ago";   }  
        
      
      
      
      
  }






echo"<br><span style='color:rgba(0,70,90,0.7);font-weight:bold;' id='item'>Posted: ".$time_ago."</span><br>"; 


        $user=$row['sid'];

echo"<br><a style='color:rgba(0,70,90,0.7);text-decoration:underline;' href='merchant.php?id=$user'>MerchantID: 0".$user."</a><br><br>";


        echo "<div align='center' style='text-align:center;text-decoration:underline;font-size:15px;margin-top:28px;font-family:poppins;font-weight:bold;color:rgba(0,0,0,0.7);'>DETAILS:</div><br>";
        
        echo"<span id='mname' style='font-family:poppins;'>".$row['message']."</span><br><br>";


echo"&nbsp;&nbsp;&nbsp;";

$hidenum=$row['hidenum'];

if ($hidenum==1) {        echo"<div align='center' style='border:1px solid transparent transparent;-webkit-box-shadow:0 0 2px white;
box-shadow:0 0 2px rgba(0,0,0,0.4);border-radius:10px; background-color:rgba(255,165,50,1);padding:8px 8px 8px 29px ;color:rgba(0,0,0,0.1);font-family:times new roman;;font-size:19px;'>

<a  href='details.php?step={$id}' style='color:rgb(198,198,198);'><i class='fa fa-phone' style='font-size:18px;'></i>"."</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

<a  href='details.php?step={$id}' href='details.php?step={$id}' style='color:rgb(198,198,198);' ><i class='fa-solid fa-comment-sms' style='font-size:px;'></i>".""."</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href='details.php?step={$id}' style='color:rgb(198,198,198);'><i class='fab fa-whatsapp'></i>".""."</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;






<a style='color:white;' onclick='messaging()'><i class='fa fa-envelope' style='font-size:15px;cursor:pointer;'></i></a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
</div>

<br>

";
  
}
if ($hidenum==0) {

  echo"<div align='center' style='border:1px solid transparent transparent;-webkit-box-shadow:0 0 2px white;
box-shadow:0 3px 13px rgba(0,0,0,0.4);border-radius:10px; background-color:rgba(255,160,80,1);padding:8px;color:rgba(0,0,0,0.1);font-family:times new roman;font-size:18px;'>


<a style='color:white;' href='tel: +234{$row['cell']}'><i class='fa fa-phone' style='font-size:px;'></i>"."</a>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 


<a style='color:white;' href='sms:+234{$row['cell']}'><i class='fa-solid fa-comment-sms' style='font-size:px;'></i>".""."</a>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  


<a style='color:lightgreen;' href='https://api.whatsapp.com/send?phone=234{$row['cell']}'><i class='fab fa-whatsapp' style='font-size:px;'></i>".""."</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a style='color:white;' onclick='messaging()'><i class='fa fa-envelope' style='font-size:13px;cursor:pointer;'></i></a>

</div>


<br>";
}


 }

}
}


?>

</div>

</div>




<div>

<div id="Paris" class="tabcontent">

<?php

require 'configure.php';

if (isset($_GET['id'])) {
  
  $id= $_GET['id'];

  $yp = mysqli_query($conn,"select *from comment where id='$id'");
    
while ($row=mysqli_fetch_array($yp)) 
 {
  if ($yp) {


        $pname=$row['name'];
        $product=$row['message'];
         $siname=$row['siname'];
         $product_ID=$row['id'];
        
  }       
 }

}

?>





<form method="post" id="conv">

<input type="text" maxlength="21" name="sender_name" placeholder="&#xF007; Name" style="margin-top: 10px; width:;font-family:arial,fontawesome" class="form-control">



<input type="email" name="sender_email" placeholder="&#xF1fa; Email" class="form-control"  style="font-family:arial,fontawesome;margin-left: auto;width:;">

<input type="hidden" name="product_ID" value="<?php echo$product_ID  ?>">

<input type="hidden" name="product_name" value="<?php echo$pname  ?>">

<textarea class="form-control" name="comment" placeholder="...Your review" rows="4" style="margin-left: auto;width:"></textarea>
<button id='btn-comment' class="btn btn-warning form-control" style="color: white;box-shadow:0px 5px 8px rgba(0,0,0,0.3);border-radius:3px;font-family:arial;font-size:14px;"><i class="fa fa-paper-plane"></i> Add comment</button>
</form>
<br>

<div align="center" style="display: none;" class="loading-image" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>

<div id="review-box" style="">

 <div id="bom">

    <div id="cy">
   

<?php

require 'configure.php';




if (isset($_GET['id'])) {
  
  $id= $_GET['id'];

  $yp = mysqli_query($conn,"select *from comment where id='$id'");
    
while ($data=mysqli_fetch_array($yp)) 
 {
  if ($yp) {


        $pname=$data['name'];
        $product=$data['message'];
         $siname=$data['siname'];
        $product_ID = $data['id'];
         
 }

}




$query = mysqli_query($conn,"select * from seller_comment where product_id='$product_ID' order by id desc");

$product_comment=$query->num_rows;

if ($product_comment<1) {
  
  echo "<span style='font-family: monserrat,sans-serif;font-size:14.5px;opacity:0.6;color:black'>There are no reviews for this product</span>";
}

else{

while ($row = mysqli_fetch_array($query)) {

  echo "<b style='text-transform:uppercase;color:green;font-size:14px;margin-bottom:30px;'>".$row['sender_name']."</b><br>";




 

  echo "<span style='font-family: monserrat,sans-serif;font-size:14px;'>".$row['comment']."</span>&nbsp;";
 



echo"<br><i style='color:blue; align-self:center;font-size:14px;' >Public</i>"."  "."<i style='color:red;font-size:14px;'>". $row['date']."</i><br><br>";  
}
}
}
?>





</div> 

 </div> 

</div> 



<?php 





if (isset($_GET['id'])) {
  
  $id= $_GET['id'];

  $yp = mysqli_query($conn,"select *from comment where id='$id'");
    
while ($row=mysqli_fetch_array($yp)) 
 {
  if ($yp) {


        $pname=$row['name'];
        $product=$row['message'];
         $siname=$row['siname'];
        $product_ID = $row['id'];

         
 }

}

}
 ?>









 </div>  

</div> 

</div> 
























<a style='color:blue;font-size:14px;font-weight:;font-family:poppins;' onclick='toggle()' class='btn btn-report'><i class='fa fa-flag'></i> Report this product</a><br>

</div>	

</div>


</div>

</div><br>

<div class="container">


<div class="container" style="" id="warning">
<p class="container"><i class="fa fa-warning"></i> You can find many great deals on <b style="text-transform:;">&agrave;t&#233;</b>. Double check when the offer sounds too good to be true. <b style="text-transform:">&agrave;t&#233;</b> will not be liable for any loss or damages should you fail to do so.</p>
</div>

</div>
</div></div></div>
<br>
<div class="container">



 




<?php


require 'configure.php';


if (isset($_GET['id'])) {
  


  $id= $_GET['id'];


  

   $you_may = mysqli_query($conn,"SELECT *from comment where id='$id'");

while ($row = mysqli_fetch_array($you_may)) {

        $you_may_like = $row['category'];


}

$you_may_also_like = mysqli_query($conn,"SELECT *from comment where category like '%$you_may_like%' ORDER by featured desc,id desc");


?>

<h4><span>You may also like</span> <a class="seemore" href="sport.php?likes=<?php echo$you_may_like;?>">See all <i class="fa-solid fa-chevron-right"></i></a></h4>

<div class="carousel">

<?php





while ($row_cat = mysqli_fetch_array($you_may_also_like)) {

echo "<div class='cell-carousel'  align='' id='it'>";
$price = $row_cat['price'];

if($row_cat['featured']>0){echo"<span id='premium'><i class='fas fa-crown'></i></span>";}

if($row_cat['discount']>0){
echo"<span id='discount'>".$row_cat['discount']." %</span>";
}

echo "<span class='views' id='views'>".$row_cat['views']." <i class='fa fa-eye'></i></span>";


echo "<div style=''><a href='details-visitor.php?id={$row_cat['id']}' target='_blank'><img id='imgitem' width=''  src='https://via.placeholder.com/200' data-flickity-lazyload=".$row_cat['photo'].">"." "."</a></div>";



echo "<span id='nameitem' style='' ><a  style='color:green;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row_cat['name']."</a></span><br>";

  

    if ($row_cat['discount']>0) {

echo"<span id='priceitem' style='font-size:14px;'><span id='' style='text-decoration:line-through;font-size:14px;'>&#8358;".$row_cat['price']."</span></span>&nbsp;";


echo "<span id='priceitem' style='font-size:14px;'>&#8358;";

 echo $price - ($row_cat['discount']/100 * $price)."</span><br>";



}


if ($row_cat['discount']==0) {
         
echo"<span id='priceitem' style=''>Price: &#8358;".$row_cat['price']."</span><br>";
       

}

    

    
   
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row_cat['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row_cat['category'].""."</span><br>";

      

  if( $row_cat['category']!='Employment' && $row_cat['category']!='Services'  && $row_cat['category']!='farming' && $row_cat['category']!='Housing'  && $row_cat['category']!='Pets' && $row_cat['category']!='Education ' && $row_cat['category']!='food and beverages' && $row_cat['category']!='Health' && $row_cat['category']!='Employment') {
            
      echo"<span id='conitem'>Condition: ".$row_cat['con'].""."</span><br>";


}


if (!empty($row_cat['petsAge'])) {
  
  echo"<span style='font-size:px;' id='conitem'>Age: ".$row_cat['petsAge']."</span><br>"; 
}



if (!empty($row_cat['farmingType'])) {
  
  echo"<span style='font-size:;' id='conitem'>Farm type: ".$row_cat['farmingType']."</span><br>"; 
}


if (!empty($row_cat['foodType'])) {
  
  echo"<span style='font-size:;' id='conitem'>Type: ".$row_cat['foodType']."</span><br>"; 
}


if (!empty($row_cat['employmentType'])) {
  
  echo"<span style='font-size:;' id='conitem'>Type: ".$row_cat['employmentType']."</span><br>"; 
}



if (!empty($row_cat['serviceType'])) {
  
  echo"<span style='font-size:;' id='conitem'>".$row_cat['serviceType']."</span><br>"; 
}



   echo "</div>";
  
}



}

?>

</div> 
</div>
</div>
</div>


<div class="container">
<br><h4><span>Promo sales</span><a class="seemore"  href="sport.php?mysort=promo">See all <i class="fa-solid fa-chevron-right"></i></a></h4><br>

<div class="carousel">  
<?php

require 'configure.php';

$tree="select * from comment where category like '%$you_may_like%' and discount > 0 order by price asc,";



$dbc=mysqli_query($conn,$tree);


if ($dbc->num_rows>0) {
echo '';
echo '';
echo '';

}
?>

  
  

<?php


require 'configure.php';

   $you_may = mysqli_query($conn,"SELECT *from comment where id='$id'");




while ($row = mysqli_fetch_array($you_may)) {

        $you_may_like = $row['category'];


}

$tree="select * from comment where discount > 0 order by  featured desc,price asc";



$dbc=mysqli_query($conn,$tree);

if ($dbc) {

  
  while ($row=mysqli_fetch_array($dbc)) {




echo "<div class='cell-carousel' align='' id=it>";

$price = $row['price'];
if($row['featured']>0){echo"<span id='premium'><i class='fas fa-crown'></i></span>";}
if ($row['discount']>0) {
  echo "<span id='discount'>-".$row['discount']."%</span>";
}
echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";

echo "<a href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width=''  src='https://via.placeholder.com/200' data-flickity-lazyload=".$row['photo'].">"." "."</div></a>";



echo "<span id='nameitem' style='' ><a  style='color:green;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";

    if ($row['discount']>0) {

echo"<span id='priceitem' style='text-decoration:line-through;'>&#8358;".$row['price']."</span>&nbsp;";


echo "<span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

    
    
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'> ".$row['category'].""."</span><br>";

       


  if($row['category']!='Employment' && $row['category']!='Services' && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
      echo"<span id='conitem'>Condition: ".$row['con'].""."</span><br>";


}


if (!empty($row['petsAge'])) {
  
  echo"<span style='font-size:;' id='conitem'>Age: ".$row['petsAge']."</span><br>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<span style='font-size:;' id='conitem'>Farm type: ".$row['farmingType']."</span><br>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<span style='font-size:;' id='conitem'>Type: ".$row['foodType']."</span><br>"; 
}



if (!empty($row['employmentType'])) {
  
  echo"<span style='font-size:;' id='conitem'>Type: ".$row['employmentType']."</span><br>"; 
}


if (!empty($row['serviceType'])) {
  
  echo"<span style='font-size:;' id='conitem'>".$row['serviceType']."</span><br>"; 
}


   echo "</div>";

}

  } 



 ?>












</div>


</div>













</div>




</div>

</div>

<br><div id="" class="icon-bar" align="center">

  
<a class="facebook" href="https://web.facebook.com/profile.php?id=100076772181022"><i class='fab fa-facebook'></i></a>



<a  class="twitter" href="https://twitter.com/ngnimitech"><i class='fab fa-twitter'></i></a>




<a class="instagram" href="https://instagram.com/ngnimitech"><i class='fab fa-instagram'></i></a>




<a class="telegram" href="https://t.me/ngnimitech"><i class='fab fa-telegram'></i></a>




</div>




</div>
</div>

<script type="text/javascript">
    
    function toggle() {


var popup = document.getElementById('popup');
popup.classList.toggle('active');


        }




</script>















<script type="text/javascript">



  var postData = "text";

  $('#submit-message').on('click',function(e){
        e.preventDefault();

 $("#loading-image").show();


      $.ajax({

            type: "POST",

            url: "message-process.php",

            data:  $("#message-form").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {

 $("#loading-image").hide();

            if (response==1) {

            swal({

              text:"Message sent",

              icon:"success",
            });
                
            $("#popup-messaging").hide(1000);
               
             $("#message-form")[0].reset();     

             }

         else{
            
              swal({
                  
              icon:"error",
                 title:"Oops...",
              text:response
                  
              });

            $("#message-form").find('input:text').val('');

           $("#message-form").find('textarea').val('');

            $('input:checkbox').removeAttr('checked');

           }

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>

<script type="text/javascript">
    
    function messaging() {


var popup = document.getElementById('popup-messaging');
popup.classList.toggle('active');


        }




</script>




<script type="text/javascript">
  


$('.carousel').flickity({
 
  cellAlign: 'left',
  contain: true,

   autoPlay: true,
   lazyLoad:true,

  
});




</script>

<script>
function openCity(evt, cityName) {
 var i, tabcontent, tablinks;
 tabcontent = document.getElementsByClassName("tabcontent");
 for (i = 0; i < tabcontent.length; i++) {
   tabcontent[i].style.display = "none";
 }
 tablinks = document.getElementsByClassName("tablinks");
 for (i = 0; i < tablinks.length; i++) {
   tablinks[i].className = tablinks[i].className.replace(" active", "");
 }
 document.getElementById(cityName).style.display = "block";
 evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<script type="text/javascript">

  var postData = "text";

  $('#btn-comment').on('click',function(e){
      
    e.preventDefault();
    
    $('.loading-image').show();

      $.ajax({

            type: "POST",

            url: "seller-comment.php",

            data:  $("#conv").serialize(),

             success: function(response) {
                 
                  $('.loading-image').hide();

if (response==1) {


$('#bom').load(location.href + " #cy");

$("#conv")[0].reset();

swal({

text:"Comment added successfully",

icon:"success",

});



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












<script type="text/javascript">
  var slideIndex = 1;
  showDivs(slideIndex);
  function plusDivs(n) {
    showDivs(slideIndex += n);
  }


function currentSlide(n){
showDivs(slideIndex = n)

}

function showDivs(n){
var i;
var slide = document.getElementsByClassName("myslides");
var dot = document.getElementsByClassName("demo");
if (n > slide.length) {slideIndex = 1
}
if (n < 1) {slideIndex = slide.length
};
for (i = 0; i < slide.length; i++) {
  slide[i].style.display = "none";

}



slide[slideIndex-1].style.display = "block";




}

</script>





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





<p align="center" style="color: white;font-weight:bold; font-family:'Montserrat',;font-size:16px;">Sign up for our newsletter</p>
<div class="container">

<div align="center">
  <form method="post" id="subscribe-form" enctype="multipart/form-data">

<input type="text" name="subscribe" style="" class="form-control" placeholder="    Enter your email address">

<button type="button" id="submit-subscribe" class="btn submit-subscribe btn-danger">Submit</button>

</form>




<script type="text/javascript">



  var postData = "text";

  $('#submit').on('click',function(e){
        e.preventDefault();
$('.loading-image').show();



      $.ajax({

            type: "POST",

            url: "report-page.php",

            data:  $("#report-form").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {
                 
            $('.loading-image').hide();

            if(response==1){

swal({

text:"Your message has been recieved. Thank you!",

icon:"success",

});

 $("#popup").hide(1000);


            }

       else { 
       
           
             swal({
title:"Oops...",                 

text:"Issue field is required",

icon:"error"

});


            $("#report-form").find('input:text').val('');

            $("#report-form").find('textarea').val('');

            $('input:checkbox').removeAttr('checked');
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
 <div class="row" style="pasding:10px 33px 10px 8px;">
<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>+2347033506332<br>Contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:poppins;">About us<br><a style='color:white;' href='services.php'>Services</a><br>Our team<br><a style='color:white;' href='contact.php'>Support center</a><br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins;">Career<br><a style='color:white;' href='terms.php'>Term & Conditions</a><br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">Our partners<br><a style='color:white;' href='faq.php'>Faq</a><br>


</div>

</div></div>



<div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:'Monserrat',sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>




</div>




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
if (response==1) {


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