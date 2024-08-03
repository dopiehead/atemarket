
<?php 
session_start();
$y = $_SESSION['id'];
$username = $_SESSION['name'];

if (!isset($_SESSION['id'])) {
   echo ("<script>location.href='newsignup.php'</script>");
   
   exit();
   
}


error_reporting(E_ALL ^ E_NOTICE);

?>




<?php           

require 'configure.php';





?>

















<title>&agrave;t&#233; -The online marketing website | Details</title> 


<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Poppins">

<link rel="stylesheet" href="flickity.min.css">

<script src="sweetalert.min.js"></script>  
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">

  <script src="jquery-1.11.3.min.js"></script>
  <script src="flickity.pkgd.min.js"></script>

<style type="text/css">

.tabcontent input[type=text]:focus,.tabcontent input[type=email]:focus,.tabcontent textarea:focus{

  outline: none;
  box-shadow: none;

}


h4{
    
color:white;    
margin-top:px;
font-family: 'monserrat',sans-serif;
font-weight: bold;
padding:8px;
background-color: rgba(0,70,90,0.7);
font-size: 17px;
margin-bottom:25px;
}


.simple{
    
    color:white;
}





.flickity-page-dots{

  display: none;
}

.cell-carousel{
margin-top:14px;
font-size:14px;
padding-bottom:8px;
width:195px;
}








#paris{

  padding-top: 10px;
}
.fa-arrow-left{

padding:8px;border:1px soid transparent transparent;box-shadow:0px 0px 8px rgba(0,0,0,0.3);border-radius: 50%;color:rgba(255,0,100,0.7);position:absolute;top:10%; z-index:100;background-color:white;

}


.fa-upload{

padding:8px;border:1px soid transparent transparent;box-shadow:0px 0px 8px rgba(0,0,0,0.3);border-radius: 50%;color:rgba(255,0,100,0.7);position:absolute;top:10%; right:10px; z-index:100;background-color:white;

}







.fa-star{

  font-size: 26px;
  display: inline-block;
  color: black;
  margin-top:10px;
  
  text-align: center;
  margin-left:6px;
}

.tab {
  overflow: hidden;
 
 margin-top: -12px;

}

/* Style the buttons inside the tab */
.tab button {
 background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 10px 15px 10px 5px;
  margin-bottom:14px;
  transition: 0.3s;
  font-size: 17px;
  font-weight: bold;
  font-family: century gothic;
}
.tab button:hover {
color: rgba(0,8,20,0.6);
 font-weight: bold;  
}
#review-box {
border:1px solid transparent transparent transparent;background-color: rgba(192,192,192,0.2);height:135px;overflow: auto;margin-top:36px;padding:10px 15px;


}

/* Create an active/current tablink class */
.tab button.active {
 color: rgba(0,8,20,0.6);
 
 font-weight: bold;
 font-family:'monserrat',sans-serif;

}

/* Style the tab content */
.tabcontent {
  display:none;
  
  padding-top:15px;
  border:none;
  border-top: none;
}

.tabcontent input,.tabcontent textarea,.tabcontent .btn-warning{
 margin-top:15px;
}

.tabcontent textarea,.tabcontent .btn-warning{
border: 1px transparent transparent;
box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
}


#views{
font-size:13px;
position:relative;
top:39px;
left:-28px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
}

#pxname{
font-family:poppins;text-transform:uppercase;;font-weight:bold;
color: green;
font-size:14px;

}


#nameitem{
color:rgba(0,0,0,0.6);font-family:poppins;text-transform:capitalize;font-size:13px;
font-weight:bold;
padding-left:5px;

}
.cell-carousel #priceitem{
color:rgba(255,0,100,0.7);font-family:poppins;text-transform:capitalize;font-size:13px;
font-weight:bold;
padding-left:5px;

}

#conitem,#locitem,#catitem{
color:rgba(0,0,0,0.6);font-family:poppins;text-transform:capitalize;font-size:13px;padding-left:5px;
}

.fa-map-marker{
    
  color:blue;  
}


.seemore{

color: white;

font-size:14px;

float: right;


}










.sold{

position: absolute;top: 64%;
text-align: center;
border: 1px solid transparent transparent;
background-color: orange;
color: white;
width: 100%;
margin-left: -10px;
padding:8px 0px;
font-weight: bold;
display: none;

}

.count{position: relative;top:89%;left:21%;padding:15px;color:white;font-weight: bold;border:1px solid transparent transparent transparent; background-color:rgba(0,0,0,0.8);z-index: 99;}



.col-md-7 #discount{
display:none;
background-color: rgba(255,195,50,0.4);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: absolute;
top:50px;
font-weight: bold;
padding:3px;
right: 26%;
z-index:;

}











#discount{
display:;
background-color: rgba(255,195,50,0.4);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: absolute;
top:50px;
font-weight: bold;
padding:3px;
right: 26%;
z-index:;

}

#warning{
border:1px solid transparent transparent transparent;
background-color:rgba(0,70,90,0.7);
margin-top: 30px;
margin-bottom: 30px;
padding: 15px;


}
#warning p{

font-size:15px;
font-family: poppins;color:white;
}


h4{

font-family: 'monserrat',sans-serif;
font-weight: bold;

font-size: 16px;
margin-top:10px;
}

#reviews,#defaultOpen{

font-family: 'monserrat',sans-serif;
font-size:14px;

}






.carousel{

  width: 100%;
  margin-top:10px;margin-bottom:39px;
}
.cell-carousel{

padding-bottom:5px;
 border:1px solid transparent transparent;
 box-shadow:0px 0px 5px rgba(0,0,0,0.4);
margin-right:21px;
border-radius:18px;
border-top:1px solid rgba(0,0,0,0.4);
border-bottom:1px solid rgba(0,0,0,0.4);
}




.cell-carousel #discount{
background-color: rgba(255,195,50,0.4);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: relative;
top:38px;
font-weight: bold;
padding:3px;
left:70%;
z-index:;
font-size:14px;
 
}

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
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5) infinite;
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











.overlay{

  display:none;
}

.open-btn{

display: none;


}
#navbar a{


  margin: 0px 15px;
  font-size: 18px;
  color: white;
  z-index: 1000;
}


html{
    
    scroll-behavior:smooth;
}
#pic-details{

font-family: monserrat,sans-serif;

}

#imgitem{
  margin-top:-21px;
height: 160px;
width:100%;

border-radius:18px 18px 0px 0px;
}


#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}






#loader{

width:80px;
height:50px;


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


#comp{

margin-top: 62px;



}


input[type=file]{

  border:1px solid rgba(192,192,192,0.1);
  font-family: monserrat,sans-serif;
}


h1 img{
float:left; 

opacity:1;

height: 48px;

width:145px;

margin-left:-3px;

margin-top:-1px;
}

  


h1{
position:;
z-index:100;
width:100%;
height:68px;
background-color:rgba(0,70,90,0.6);
padding: 8px;


} 

.pxname{
font-family: poppins;
font-size:15px;
color: black;

}

#myslides,.myslides{

  
  display:none;
  height: 400px;
  margin-top:10px;

  width: 350px;
}



.fa-camera{

  font-size: 35px;
  color:grey;
}
#popup-messaging,#popup-change{

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

#popup-messaging.active,#popup-change.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#close-messaging,#closeChange{

font-size: 17px;
position: absolute;
top: 14px;
left: 91%;
color:white;
cursor: pointer;



}
#close-messaging:hover, #close-messaging:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

}



.gallery:hover{

opacity: 0.8;

text-decoration: none;

color: white;

}

.faq{
font-family: monserrat,sans-serif;
display: block;

float: right;

font-size:15px;

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

font-family: monserrat,sans-serif;
float: right;

font-size:15px;

cursor: pointer;

color:white;

border-radius:8px;

padding:8px 1px;

margin-right:15px;
font-weight: bold;

}

.gallery{

font-family: monserrat,sans-serif;
float: right;

font-size:15px;

cursor: pointer;

color:white;

border-radius:8px;

padding:8px 1px;

margin-right:15px;

font-weight: bold;

}



#priceitem{

color:rgba(255,0,100,0.7); 
font-family:poppins;
text-transform:capitalize;
font-size:15px;
font-weight:bold;


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
#activex{
 border-bottom: 2px solid rgba(255,165,50,1);
 border-radius: none;
   
}

.col-md-7{
background-color: rgba(192,192,192,0.2);
padding:10px;
margin-bottom:20px;
}

.btn-next{
font-size: 35px;
color:black;


}

.btn-update{
font-size: 14px;
color:white;
background-color: rgba(255,185,50,1);

}
.btn-update:focus{
font-size: 14px;
color:white;
background-color: rgba(255,185,50,1);

}

#edit-form input[type=text],#edit-form textarea{

font-family: monserrat,sans-serif;
font-size:13px;

}


#addx,.addx{

color:rgba(0,0,0,0.6);
font-family: 'monserrat',sans-serif;
cursor: pointer;
font-size: 14px;
background-color:;
border:none; 
padding:8px;
margin: 1px 3px 1px 3px;
box-shadow:0px 2px 8px rgba(0,0,0,0.4);
border-radius:5px; 

}
.btn-sold{

color:;


}


.btn-report{

font-size:14px;
border: none;
outline: none;
box-shadow: none;
color: rgba(0,0,0,0.5);
font-weight: bold;
cursor: pointer;
font-family:poppins;
}

.btn-report:focus{


border: none;
outline: none;
box-shadow: none;
}


.row{
margin-top:px;



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
 font-family: 'monserrat',sans-serif;
  font-size:14px;   
    
    
    
}


p{
 color: rgba(0,0,0,0.43);
font-size:15px;
font-family: monserrat,sans-serif;



}

.fa-warning{

  font-size: 21px; color: red;
}


.imgitem{

width:300px;
height:400px;
margin-top:-15px;

}

#popup{

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

z-index: 999;
}

#popup-discount{

background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 300px;
padding:2px 4px;
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





#popup.active,#popup1.active,#popup-edit.active,#popup-discount.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#close{

font-size: 20px;
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

#close-discount{

font-size: 20px;
position: absolute;
top: 10px;
left: 91%;
color:white;
cursor: pointer;



}
#close-discount:hover, #close-discount:focus{
opacity: 0.6;
border: none;
outline: none;
 outline: none;

}










#closex{
color: white;
font-size: 21px;
position: absolute;
top: 8px;
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













.display-left, .display-right{
cursor: pointer;
position: absolute;
top: 50%;
width: auto;
padding:8px;
background-color: white;
color:black;
font-weight: bold;
font-size: 18px;
transition: 0.6s ease;
border-radius: 0 3px 3px 0;
user-select: none;

}
.display-right{
right: 3px;

}
.display-left{
left: 3px;

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











#h5{

  border:1px solid transparent transparent;

  background-color:rgba(0,70,90,0.6);  

  color:white;
height: 45px;
 

  width:100%;
padding-top: 8px;
  margin-top:-20px;

  font-size:15px;

  font-family: 'monserrat',sans-serif;

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

  font-size:15px;

  font-family: monserrat,sans-serif;

  font-weight: bold;
  text-transform: uppercase;

}







#result-pic{
font-family: monserrat,sans-serif;
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
    
    
 .col-md-7 img{

}   
    
    
    
    
 

.imgitem{



margin-top:-15px;

}


#myslides,.myslides{

  
  display:none;
  

  width: 350px;
}






 h1{
     
  background-color:rgba(0,70,90,0.6);
  height:68px;
     
 }
 h1 img{
float:left; 

opacity:1;

height:43px;

width:125px;

margin-left:-3px;

margin-top:-1px;
}
 
 

 
 
 
 
 
 h1 img{
   height:px;  
     
     
 }
 .btn-gallery{
  margin-top: 15px;
    float: right;
    font-size:21px;
    color:red;
    text-decoration: none;

}

 .gallery-btn{
    
    font-size:21px;
    color:red;
    text-decoration: none;

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

 .btn-gallery:hover{
    
  opacity: 0.6;
    
    text-decoration: none;
    
}





#item{
    
  color:rgba(0,0,0,0.5);
  font-family:poppins;
  font-size:14px;   
    
    
    
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

 









h1 img{
float:left; 

opacity:1;



margin-left:-3px;

margin-top:-1px;
}




 
h1{

background-color: rgba(0,70,90,0.7);

box-shadow:none;
display:none;

} 
.row{
   margin-top:0px; 
    
    
    
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


 .gallery-btn{
    float: right;
    font-size:21px;
    color:red;
    text-decoration: none;

}

#popup{

background-color:rgba(192,192,192,0.8);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 400px;
padding: 10px 0px;
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
color:rgba(0,0,0,0.6);font-family: montserrat,sans-serif;text-transform:capitalize;font-size:15px;



}

#popup{

background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 150px;
padding: 20px;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;





}

h4 span{

  color:white;
 
}



#popup.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }



#h6{

font-weight: bold;color:white;
font-family:'monserrat',sans-serif;
text-transform: uppercase;


}

#contentx{

font-weight: bold;color: rgba(192,30,0,0.6);
font-family: monserrat,sans-serif;

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

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top:0px;

  
}

 



 #discount{
background-color: rgba(255,195,50,0.3);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: relative;
top:15px;
font-weight: bold;
padding: 5px;
left:40px;
font-size:13px;


} 

#views{
position:relative;
top:39px;
left:-28px;
background-color: rgba(0,0,0,0.8);
color: white;
font-weight: bold;
padding: 7px;
z-index: ;
font-size:13px;

} 
 

.imgitem{

width:px;


}

.btn-gallery{
  margin-top:20px;   
    font-size:18px;
    color:red;

}




}

@media only screen and (max-width:1024px){
 


.imgitem{

width:px;


}




}

@media only screen and (max-width:1266px){
    
  
#close-discount{

font-size: 15px;
position: absolute;
top: -5px;
left: 91%;
color:white;
cursor: pointer;
border-radius:50%;
background-color:rgba(255,50,70,1);
padding:8px 13px;


}  
  
  
  
  
  
  
    
 #close-messaging,#closeChange{

font-size: 15px;
position: absolute;
top: -5px;
left: 91%;
color:white;
cursor: pointer;
border-radius:50%;
background-color:rgba(255,50,70,1);
padding:8px 13px;


}   
    
    
#closex{
color: white;
font-size: 15px;
position: absolute;
top: -5px;
left: 91%;
background-color:rgba(255,50,70,1);
border-radius:50%;

padding:8px 13px;
cursor: pointer;

}









    
 
 
 h4 span{

  color:white;
 
}
 

.icon-bar a{

display:  block;
  text-align: center;
  padding:8px;
  transition: all 0.5s;
  color: white;
  font-size: 13px;
}






 
 
 
 
 .cell-carousel #nameitem{

font-family:sans-serif;
font-size:13px;font-weight:normal;text-transform:uppercase;

}
 
 
 
 
    
  
.imgitem{
margin-top:-30px;
width:100%;
height:350px;

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
    

#addx,.addx{

color:rgba(0,0,0,0.6);
font-family: 'monserrat',sans-serif;
cursor: pointer;
font-size: 15px;
background-color:;
border:none; 
padding:8px;
margin: 1px 3px 1px 3px;
box-shadow:0px 2px 8px rgba(0,0,0,0.4);
border-radius:5px; 

}    
    
    
    
    
    
    
#popup-edit{

background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 335px;
padding:5px;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;

z-index: 999;
}    
    
    
    
    
    
    
    
    
    
    

#popup-messaging,#popup-change{

background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 335px;
padding:5px;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;
z-index:999;

}

#close{

font-size:15px;
position: absolute;
top: -5px;
left: 91%;
color:white;
cursor: pointer;
padding:8px 13px;
border-radius:50%;
background-color:rgba(255,50,70,1);



}









#myslides,.myslides{
margin-top:0px;
  
  display:none;
  
  height: 310px;

  width:100%;
}

 
#popup{

background-color: rgba(248,248,248,0.3);  
position:fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width:320px;
padding:5px;
box-shadow: 0 5px 30px rgba(0,0,0,.30);
background: #fff;
visibility:hidden;
opacity:0;
transition: 0.3s;
z-index:999;

}



#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:10%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}


.flickity-page-dots{

  display: none;
}





.col-md-5{

padding:20px;

}





.cell-carousel{
margin-top:14px;
font-size:14px;
padding-bottom:8px;
width:179px;
}



.cell-carousel #imgitem{

width:100%;
}








#nameitem{
color:rgba(0,0,0,0.6);font-family:poppins;text-transform:capitalize;font-size:13px;
font-weight:bold;
padding-left:5px;

}
.cell-carousel #priceitem{
color:rgba(255,0,100,0.7);font-family:poppins;text-transform:capitalize;font-size:13px;
font-weight:bold;
padding-left:5px;

}

#conitem,#locitem,#catitem{
color:rgba(0,0,0,0.6);font-family:poppins;text-transform:capitalize;font-size:13px;padding:5px;
white-space:nowrap;
text-overflow:ellipsis;
overflow:hidden;
}


















h4{
margin-top:px;
font-family: 'monserrat',sans-serif;
font-weight: bold;
padding:8px;
background-color: rgba(0,70,90,0.7);
font-size: 17px;
margin-bottom:25px;
}







#warning p{

font-size:14px;
font-family:poppins,sans-serif;color:white;
}


.fa-arrow-left{
position:absolute;top:18%;left:15px;
padding:8px;border:1px soid transparent transparent;box-shadow:0px 0px 8px rgba(0,0,0,0.3);border-radius: 50%;color:rgba(255,0,100,0.7);margin-bottom:10px;margin-top:-35px; z-index:100;background-color:white;

}


.fa-upload{
position:absolute;top:18%;right:15px;
padding:8px;border:1px solid transparent transparent;box-shadow:0px 0px 8px rgba(0,0,0,0.3);border-radius: 50%;color:rgba(0,70,90,0.8);margin-bottom:10px;margin-top:-35px; z-index:100;background-color:white;

}


.count{position: relative;top:89%;left:10%;padding:15px;color:white;font-weight: bold;border:1px solid transparent transparent transparent; background-color:rgba(0,0,0,0.8);z-index: 99;}





body{


  overflow-x: hidden;
}


.sold{
display: none;
position: absolute;top: 57%;
text-align: center;
border: 1px solid transparent transparent;
background-color: orange;
color: white;
width:340px;
left:15.7%;

padding:8px 0px;
font-weight: bold;


}



 .how,.gallery,.faq{display: none;}
 
.overlay{
height: 30%;
width: 0;
display: block;
position:absolute;
z-index: 99;
top: 80px;
right: 0;
color: white;
background-color: rgb(0,0,0);
background-color: rgb(0,0,0,0.9);
overflow-x:hidden;
transition: 0.5s;

}
.overlay-content{
position:relative;
top: 13%;
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
font-family: monserrat,sans-serif;
transition: 0.3s;
}
.overlay .close-btn{
position: absolute;
top: -7px;
left: -2px;
font-size: 21px;
color: white;

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
  
}

#popup1{

position:fixed;
width:340px;
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





.col-md-7{
padding:0px;


}

#item{
    
  color:rgba(0,0,0,0.5);
  font-family:poppins;
  font-size:14px;   
    
    
    
}





#content{

font-weight: bold;
font-family: monserrat,sans-serif;
text-transform:capitalize;
position: absolute;
left:35.4%;
font-size:15px;
color:lightgreen;


}


.fa-warning{

  font-size: 21px; color: red;
}


p{
 color: rgba(0,0,0,0.43);
font-size:16px;
font-family: monserrat,sans-serif;



}

.faq,.gallery,.how{

  font-size:14px;
}

h1 img{



}

.col-md-5 #priceitem,.col-md-5 #nameitem{
font-size:14px;
font-weight:bold;
font-family:Montserrat,sans-serif;

}

.icon-bar{
    
    
   
}
} 




@media only screen and (max-width:1486px){
 
 .waves {
    height:40px;
    min-height:40px;
    top: -40px;
   width: 100%;
  }
 
 .footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 0px;

  
}

 
 
 


.imgitem{



}








} 






</style>
<body>

<div id="myform" class="overlay">

 




  </div></div>


<script type="text/javascript">
function openform() {
  document.getElementById("myform").
  style.width="40%";
}

function closeform() {
  document.getElementById("myform").
  style.width="0%";
}
  




</script>
















<h1>



<a href="index.php" style="text-decoration: none;"><img style="" align="" src="mymain.PNG"></a>


</h1>






<div class='container'>
  
<div class='row' style="border:2px solid transparent">



<div class='col-md-7 col-sm- col-xs-7 col-xxs-7' id="xr" style="">
 

<a href="sport.php"><i class="fa fa-arrow-left" ></i></a>



<?php
require 'configure.php';



if (isset($_GET['id'])) {
  
  $id= $_GET['id'];
  
  
  
  

$yty = mysqli_query($conn,"select *from comment where id='$id'");

 while ($row=mysqli_fetch_array($yty)) 
 {
  if ($yty) {
                  
 $sid=$row['sid'];
$y=$_SESSION['id'];
                if( $sid==$y){


?>

<a style='' onclick='changePicture()'><i  class='fa fa-upload' style='font-size:14px;cursor:pointer;' ></i> 

</a>

<?php
}
}
}
}
?>













<div id="edit-parent">
  
  <div id="edit-child">
    

<?php

require 'configure.php';



if (isset($_GET['id'])) {
  
  $id= $_GET['id'];


   

   $yty = mysqli_query($conn,"SELECT *from comment where id='$id'");



 while ($row=mysqli_fetch_array($yty)) 
 {

  if ($row['discount']>0) {



  

 
echo "<span id='discount'>-".$row['discount']."</span>";



echo"<div align='center' class=''><img id='myslides' class='myslides' src=".$row['photo']."></div>";





    }  


if ($row['discount']==0) {

 echo"<div align='center' class=''><img id='myslides' class='myslides' src=".$row['photo']."></div>";

 } 
    










 }


} 



?>

  </div>




</div>





<div id="bom">

<div id="cy">
    
<?php 

require 'configure.php';




if (isset($_GET['id'])) {
  
  $id= $_GET['id'];




$more= mysqli_query($conn,"SELECT *from picx where sid='$id'");

 while ($row=mysqli_fetch_array($more)) 
 {



  $rest=$more->num_rows;

if ($rest>0) {

echo"<div align='center' class=''><img  id='myslides' class='myslides' src=".$row['pictures']."></div>";

echo '<a class="display-left" id="display-left" style="color:;" onclick="plusDivs(-1)">&#10094;</a>

<a class="display-right" id="display-right" style="color:;" onclick="plusDivs(+1)">&#10095;</a>';

}  
    

 }


} 



 ?>




</div>

</div>



<?php  

require 'configure.php';

    
 $incViews = "UPDATE comment SET views = views +1 where id ='$id'";   

$update_views = mysqli_query($conn,$incViews);


  



?>

























<div id="popup1">
<a onclick="imageopen()" id="closex"><i class="fa fa-close"></i></a><br>   
 
<?php 

require 'configure.php';

if (isset($_GET['id'])) {

  $myid=$_GET['id'];
   
  
  $sql="select* from comment where id='$myid'";

  $dbc=mysqli_query($conn,$sql);
  
  while ($row=mysqli_fetch_array($dbc)) {


  
}

}


 ?>


<form id="myformx"  method="post" enctype="multipart/form-data">

<h5 align="center" id="h5" style="font-family: monserrat,sans-serif;">Add new</h5><br>

<p align="center" id="pic-details">Please upload at least one image below 2mb in 'jpeg' or 'png' format only.</p>

<div align="center" class="container"><i class="fa fa-camera"></i></div>


 <div class="container"> 



<input type="hidden" name="pict" value="<?php echo$myid;?>"> <br>



<input type="file" name="fileupload[]" class="form-control" multiple="multiple"><br>

<input type="submit" name="submitx" id="submitx" style="color: white;" class="btn btn-warning my-3 form-control" value=" Submit" >

<div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>

</form>

  
</div>


</div>












</div>



<div class='col-md-5 col-sm- col-xs-5 container' style="padding:px; ">
<div class="tab">
 <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">DESCRIPTION
  <button id="reviews" class="tablinks" onclick="openCity(event, 'Paris')">REVIEWS



<?php

require'configure.php';

if (isset($_GET['id'])) {
  
  $id= $_GET['id'];

  $yp = mysqli_query($conn,"select * from comment where id='$id'");
    
while ($data=mysqli_fetch_array($yp)) 
 {
  if ($yp) {


        $pname=$data['name'];
        $product=$data['message'];
         $siname=$data['siname'];
        $product_ID=$data['id'];
         
 }

}




$query = mysqli_query($conn,"select * from seller_comment where product_id='$product_ID' order by id desc");



echo' ('.$query->num_rows.')';


}



?>



  </button> 


<div><div>
<div id="London" class="tabcontent">
  <div id="com">
<div id="my">

 <?php
require 'configure.php';



if (isset($_GET['id'])) {
  
  $id= $_GET['id'];
    


$yty = mysqli_query($conn,"select *from comment where id='$id'");



 while ($row=mysqli_fetch_array($yty)) 
 {
  if ($yty) {
                   $price=$row['price'];

                 $sid=$row['sid'];
$y=$_SESSION['id'];
                if( $sid==$y){

$ix=$row["id"];?>
                  <br><br><span id='pxname'><span onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$ix;?>', 'name');"><?php echo$row['name'];?> 
<?php
echo'</span></span><br>';

 if ($row['discount']>0) { 
 ?>             
<span id='priceitem' style=''>Price: &#8358;<span onfocus='changeBackground(this)' contenteditable="true" onblur="saveData(this, '<?php echo$ix;?>', 'price');">

 <?php echo $price - ($row['discount']/100 * $price)."</span></span><br>";



}

if ($row['discount']==0) {
      ?>   <span id='priceitem' style=''>Price: &#8358;<span  onfocus='changeBackground(this)' contenteditable onblur="saveData(this, '<?php echo$row['id']?>', 'price');"><?php echo$row['price'];?></span></span><br>

<?php       

}

      
                if($row['category']!='Services' && $row['category']!='Employment' && $row['category']!='farming' && $row['category']!='housing' && $row['category']!='Pets' && $row['category']!='education ' && $row['category']!='food and beverages' && $row['category']!='health' && $row['category']!='employment') {
   ?>         
      <span id='item'>Condition: <span onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id'];?>', 'con');" ><?php echo$row['con']?></span></span><br>
<?php

}



?>
<?php 


if($sid==$y) {
 

 ?>
<span style='' id='item'>Location: <i class='fa fa-map-marker'></i><span  onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'loc');"  > <?php echo$row['loc']?></span></span><br>
      
<span id='item'>Contact: <?php echo$row['cell'];?></span></span><br>

<?php

}

?>

<?php 


if($sid!=$y){


?>
<span style='' id='item'>Contact: <span><?php echo$row['cell'];?></span>
</span><br>
<?php


}

?>




        
       <span style='' id='item'>Category: <span  onfocus='changeBackground(this)' onblur="saveData(this, '<?php echo$row['id']?>', 'category');"><?php echo$row['category']?></span></span><br>



<?php


if (!empty($row['carDetails'])) {

?>
   <span style='' id='item'>Vehicle Year:<span   onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'carDetails');" > <?php echo$row['carDetails']?></span></span><br>

<?php   
}




if (!empty($row['vehicleType'])) {


?>
   <span style='' id='item'>Vehicle type:<span   onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'vehicleType');"> <?php echo$row['vehicleType']?></span></span><br>




<?php

}


if (!empty($row['carMileage'])) {
?>
   <span id='item'>Vehicle mileage:<span   onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'vehicleType');"> <?php echo$row['carMileage']?></span></span><br>


<?php

}


if (!empty($row['serviceType'])) {
    
    
 ?>   
    
   <span id='item'>Service type:<span   onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'serviceType');"> <?php echo$row['serviceType']?></span></span><br>
   
<?php    
    
}





if (!empty($row['entertainmentType'])) {
    
 ?>   
    
 
   <span id='item'>Entertainment type:<span   onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'entertainmentType');"> <?php echo$row['entertainmentType']?></span></span><br>
   
    
    
<?php    
    
}


if (!empty($row['fashionSex'])) {


?>

   <span style='' id='item'>For:<span onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'fashionSex');" ><?php echo$row['fashionSex'];?></span></span><br>

<?php  

}


if (!empty($row['fashionSize'])) {
?>


  <span style='' id='item'>Size:<span onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'fashionSize');" > <?php echo$row['fashionSize'];?><span></span><br>


<?php


}



if (!empty($row['petsAge'])) {


?>  


  <span  style='' id='item'>Age:<span onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'petsAge');" > <?php echo$row['petsAge']?></span></span><br> 

<?php  


}



if (!empty($row['farmingType'])) {


?>  
  <span style='font-size:px;' id='item'>Farm type:<span onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'farmingType');" > <?php echo$row['farmingType'];?></span></span><br>



<?php   


}


if (!empty($row['foodType'])) {

?>
  
  <span style='' id='item'>Type:<span   onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'foodType');"> <?php echo$row['foodType']?></span></span><br>

<?php


}

if (!empty($row['housingType'])) {
?>

   <span style='' id='item'>House type:<span onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'housingtype');"> <?php echo$row['housingType']?></span></span><br>

   <?php
}


if(!empty($row['employmentType'])){
    
?>    

<span style='' id='item'>Employment type:<span onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'employmentType');"> <?php echo$row['employmentType']?></span></span><br>

<?php    
    
}


if (!empty($row['Numberrooms'])) {

?>
  <span  id='item'>Number of rooms:<span onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'Numberrooms');"> <?php echo$row['Numberrooms']?></span> <i class ='fa fa-bed'></> </span><br>


    <?php 
}


if (!empty($row['Numbertoilets'])) {
  
?>  <span id='item'>Number of toilets:<span onfocus='changeBackground(this)' contenteditable='true' onblur="saveData(this, '<?php echo$row['id']?>', 'Numbertoilets');"> <?php echo$row['Numbertoilets']?></span> <i class ='fa fa-bath'></i> </span><br>

<?php
}

}
                
else{

echo"<br><br><span id='pxname'>".$row['name']."</span><br>"; 

       
if ($row['discount']>0) {

echo"<span id='priceitem'><span style='text-decoration:line-through;'>&#8358;".$row['price']."</span></span>&nbsp;";


echo "<span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

      
                if($row['category']!='Services' && $row['category']!='Employment' && $row['category']!='farming' && $row['category']!='housing' && $row['category']!='Pets' && $row['category']!='education ' && $row['category']!='food and beverages' && $row['category']!='health' && $row['category']!='employment') {
            
      echo"<span id='item'>Condition: ".$row['con'].""."</span><br>";


}


       echo"<span style='' id='item'><i class='fa fa-map-marker'></i>  ".$row['loc']."</span><br>";
       
       echo"<span style='' id='item'>".$row['category']."</span><br>";

if (!empty($row['carDetails'])) {

   echo"<span style='' id='item'>Vehicle Year: ".$row['carDetails']."</span><br>";
}

if (!empty($row['vehicleType'])) {

   echo"<span style='' id='item'>Vehicle type: ".$row['vehicleType']."</span><br>";
}


if (!empty($row['carMileage'])) {

   echo"<span style='' id='item'>Vehicle mileage: ".$row['carMileage']."</span><br>";
}


if (!empty($row['fashionSex'])) {

   echo"<span style='' id='item'>For: ".$row['fashionSex']."</span><br>";
}


if (!empty($row['fashionSize'])) {

  echo"<span style='' id='item'>Size: ".$row['fashionSize']."</span><br>"; 
}


if (!empty($row['petsAge'])) {
  
  echo"<span style='' id='item'>Age: ".$row['petsAge']."</span><br>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<span style='font-size:px;' id='item'>Farm type: ".$row['farmingType']."</span><br>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<span style='font-size:px;' id='item'>Type: ".$row['foodType']."</span><br>"; 
}




if (!empty($row['housingType'])) {

   echo"<span style='' id='item'>House type: ".$row['housingType']."</span><br>";
}


if (!empty($row['Numberrooms'])) {

  echo"<span style='' id='item'>Number of rooms: ".$row['Numberrooms']." <i class ='fa fa-bed'></> </span><br>"; 
}


if (!empty($row['Numbertoilets'])) {
  
  echo"<span style='' id='item'>Number of toilets: ".$row['Numbertoilets']." <i class ='fa fa-bath'></i> </span><br>"; 
}



if (!empty($row['employmentType'])) {
  
  echo"<span style='' id='item'>Type: ".$row['employmentType']." </span><br>"; 
}



if (!empty($row['serviceTypeType'])) {
  
  echo"<span style='' id='item'>".$row['serviceType']." </span><br>"; 
}








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
  
  if($seconds<=60){
      
    $time_ago = "Just now";  
      
  }
  
  

   
  elseif($minutes<=60){
      
      
      if($minutes==1){
    
    $time_ago = "a minute ago";    
        
        
    }  
    
    else{ $time_ago ="$minutes minutes ago";   }  
       
      
  }
  
  
  
  
  
  
  
  
  
  elseif($hours<=24){
      
      
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
  
  
    
  elseif($month<=12){
      
    if($month==1){
    
    $time_ago = "a month ago";    
        
        
    }  
    
    else{ $time_ago ="$month months ago";   }  
      
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  else{
      
     if($years==1){
    
    $time_ago = "a year ago";    
        
        
    }  
    
    else{ $time_ago ="$years years ago";   }  
        
      
      
      
      
  }

















echo"<br><span style='color:rgba(0,70,90,0.7);font-weight:bold;' id='item'>Posted: ".$time_ago."</span><br>"; 


$user=$row['sid'];

echo"<br><a style='color:rgba(0,70,90,0.7);text-decoration:underline;text-decoration-color:rgba(0,70,90,0.6);' href='merchant.php?id=$user'>MerchantID: 0".$user."</a><br>";



        echo "<br><div align='center' style='text-align:center;text-decoration:underline;font-size:15px;font-family:monserrat,sans-serif;font-weight:bold;color:rgba(0,0,0,0.7);'>DETAILS:</div><br>";
  ?>      
        

          <span style='color:rgba(0,0,0,0.6);font-family:poppins;font-size:15px;'><span contenteditable onblur="saveData(this, '<?php echo$row['id']?>', 'message');"><?php echo$row['message'];?></span></span><br>

<?php
echo'<br>';

$y = $_SESSION['id'];

if ($sid==$y) {
 
 echo"<div class=''  align='' style='cursor:pointer;'>

 <a id='addx' class='btn btn-edit' style='' onclick='edit()'>".""."Edit</a>";

 
 echo"<a id='addx' href='del.php?id={$row['id']}' style=';;font-weight:;' class='btn btn-delete'></i>Delete</a>";

  echo'<a id="addx" class="btn" onclick="imageopen()">Add images</a>';

  echo'<a id="addx" class="btn" onclick="discount()">Add discount</a>'; 
   
  echo"<a class='addx btn btn-sold'style='color:rgba(0,0,0,0.6);' id='{$row['id']}'>Sold</a>"; 
  
  
  echo"<a class='addx btn btn-pay'style='color:rgba(0,0,0,0.6);' id='{$row['id']}'>Pay</a>"; 
  
  echo"<br>";

}

if ($sid!=$y) {
        echo"<div align='center' style='border:1px solid transparent transparent;-webkit-box-shadow:0 0 2px white;
box-shadow:0 0 2px white;border-radius:10px; background-color:rgba(255,165,80,1);padding:8px;color:rgba(0,0,0,0.1);font-family:times new roman;;font-size:17px;'>


<a style='color:white;' href='tel: +234{$row['cell']}'><i class='fa fa-phone' style='font-size:px;'></i>"."</a>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 


<a style='color:white;' href='sms:+234{$row['cell']}'><i class='fa-solid fa-comment-sms' style='font-size:px;'></i>".""."</a>




&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<a style='color:lightgreen;' href='https://api.whatsapp.com/send?phone=234{$row['cell']}'><i class='fab fa-whatsapp' style='font-size:px;'></i>".""."</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a style='color:white;' onclick='messaging()'><i class='fa fa-envelope' style='font-size:14px;cursor:pointer;'></i>

</div><br>


";
}















if ($sid!=$y){
 echo "<a style='color:rgba(0,0,0,0.6);font-size:14px;font-weight:bold;' onclick='toggle()' class='btn btn-report'><i class='fa fa-flag'></i> Report this product</a>

 </div>

 ";
}
 }

}
}


?>
</div>  

</div>

</div>


</div>

</div>
  
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
<input type="hidden" name="sender_name" placeholder="&#xF007; Name" style="margin-top: 35px; width:;font-family:arial,fontawesome" value="<?php echo$_SESSION['name']; ?>"  class="form-control">



<input type="hidden" name="sender_email" placeholder="&#xF1fa; Email" class="form-control" value="<?php echo$_SESSION['email']; ?>"  style="font-family:arial,fontawesome;margin-left: auto;width:;">

<input type="hidden" name="product_ID" value="<?php echo$product_ID  ?>">

<input type="hidden" name="product_name" value="<?php echo$pname  ?>">

<textarea class="form-control" name="comment" placeholder="...Your review" rows="4" style="margin-left: auto;width:"></textarea>
<button id="btn-comment" class="btn btn-warning form-control" style="color: white;box-shadow:0px 5px 8px rgba(0,0,0,0.3);border-radius:3px;font-family:arial;font-size:14px; background-color: orange;"><i class="fa fa-paper-plane"></i> Add comment</button>
</form>
<br>
<div align="center" style="display: none;" class="loading-image" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>

<div id="review-box" style="">

 <div id="tom">

    <div id="ty">
   

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
        $product_ID = $row['id'];
         
 }

}




$query = mysqli_query($conn,"select * from seller_comment where product_id='$product_ID' order by id desc");

$product_comment=$query->num_rows;

if ($product_comment<1) {
  
  echo "<span style='font-family: monserrat,sans-serif;font-size:14px;opacity:0.6;'>There are no reviews for this product</span>";
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












 </div>  </div> </div>






<div class="container">
<div align="right" class="">
<?php


require 'configure.php';


if (isset($_GET['id'])) {
  


  $id= $_GET['id'];

 

   $you_may = mysqli_query($conn,"SELECT *from comment where id='$id'");

while ($row = mysqli_fetch_array($you_may)) {

        $you_may_like = $row['category'];


}

}



?>



</div>
</div>
</div>


<div class="container" id="warning">
<p class="container"><i class="fa fa-warning"></i> You can find many great deals on <b>&agrave;t&#233;</b>. Double check when the offer sounds too good to be true. <b>&agrave;t&#233;</b> will not be liable for any loss or damages should you fail to do so.</p>

</div>

<div class="container">

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
         echo"<span style='font-size:15px;font-weight:normal;' id='nameitem'> Product name: ".$pname."</span>";
         
 }

}
}
?>  
<form mehod="post" id="report-form" enctype="multipart/form-data"> 

    <input type="hidden" name="pname" value="<?php echo$pname; ?>">

   

    <input type="hidden" name="sender_email" placeholder="Email" value="<?php echo$_SESSION['email']; ?>"   class="form-control" ><br>

   <input type="hidden" name="email" placeholder="Email" value="<?php echo$siname;?>"  class="form-control">

   <input type="hidden" wrap="physical" name="product" placeholder="Product Details" value="<?php echo$product; ?>"  class="form-control"></textarea>

  <textarea type="text" wrap="physical" name="issue" placeholder="Issue " rows="8" class="form-control"></textarea><br><br>


   <div align="center"><input type="submit" name="submit" id="submit" style="color: white;" class="btn btn-warning form-control" value="Report">

<div align="center" style="display: none;" class="loading-image" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>

   </div>
   </form>
   <a onclick="toggle()" id="close"><i class="fa fa-close"></i></a>

  
</div>
<br>
</div>




<div id="popup-edit">

  <a onclick="edit()" id="close"><i class="fa fa-close"></i></a>

  
   
    <h6 align="center" id="h6" style="">Edit Box</h6>
 <div class="container">   
   

<?php 

require 'configure.php';

if (isset($_GET['id'])) {

  $myid=$_GET['id'];

  
  $sql="select* from comment where id='$myid'";

  $dbc=mysqli_query($conn,$sql);
  
  while ($row=mysqli_fetch_array($dbc)) {
    $myname=$row['name'];

if ($row['discount']==0) {

 $myprice=$row['price']; 

}


else{

    $myprice=$row['price'] - ($row['discount']/100 * $row['price']);
}
    $myid=$row['id'];
    $myimage=$row['photo'];
    $mydetails=$row['message'];
    $myloc=$row['loc'];
    $mycell=$row['cell'];
   
    $mycat=$row['category'];

  if($row['category']!='Services' && $row['category']!='Employment' && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
      $mycon=$row['con'];


}


if (!empty($row['petsAge'])) {
  
 $mypets= $row['petsAge']; 
}



if (!empty($row['farmingType'])) {
  
  $myfarm=$row['farmingType']; 
}


if (!empty($row['foodType'])) {
  
$myfood=$row['foodType']; 
}



if (!empty($row['employmentType'])) {
  
$employmentType=$row['employmentType']; 
}



if (!empty($row['serviceType'])) {
  
$myservice=$row['serviceType']; 
}



  }
  
}
 ?>



   <form method="POST" id="edit-form" enctype="multipart/form-data">
    
    <input type="hidden" name="id" value="<?php echo $myid?>">


<div style="color: green; font-style:;font-size:14px;">
  

 
    
         Name<input type="text" maxlength="22" required name="name" style="" class="form-control"value="<?php echo $myname ?>">
          
    Details:<textarea type="text" wrap="physical" required name="message" rows="3" style="color:rgba(0,0,0,0.8);" class="form-control" value="">

      <?php echo$mydetails?> </textarea>

    Phone no<input type="number" minlength="10" required maxlength="18" name="cell" style="" class="form-control" value="<?php echo $mycell; ?>">


    Location<input type="text" required maxlength="14" name="loc" style=";" class="form-control" value="<?php echo $myloc; ?>">


    Price<input type="number"minlength="3" required maxlength="12" name="price" style="" class="form-control" value="<?php echo $myprice; ?>">



    
    
   
   
    <?php 

require 'configure.php';

if (isset($_GET['id'])) {

  $myid=$_GET['id'];

  
  $sql="select* from comment where id='$myid'";

  $dbc=mysqli_query($conn,$sql);
  
  while ($row=mysqli_fetch_array($dbc)) {
    $myname=$row['name'];

if ($row['discount']==0) {

 $myprice=$row['price']; 

}


else{

    $myprice=$row['price'] - ($row['discount']/100 * $row['price']);
}
    $myid=$row['id'];
    $myimage=$row['photo'];
    $mydetails=$row['message'];
    $myloc=$row['loc'];
    $mycell=$row['cell'];
   $mycon=$row['con'];
    $mycat=$row['category'];
    
$mycat=$row['category'];

  if($row['category']!='Services' && $row['category']!='Employment' && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
     
  ?>   
            
      Condition: <input maxlength="14" type="text" name="con" style="" class="form-control" value="<?php echo$mycon;?>">

<?php

}


if (!empty($row['petsAge'])) {
  
 
 echo'Pet Age: <input maxlength="3" type="text" name="petsAge" style="" class="form-control" value="'.$mypets.'">';
 
}


if (!empty($row['employmentType'])) {
  
?> 

 Employment type: <input maxlength="18" type="text" name="employmentType" style="" class="form-control" value="<?php echo$employmentType;?>">


<?php

}

if (!empty($row['serviceType'])) {

?>
Service : <input maxlength="18" type="text" name="serviceType" style="" class="form-control" value="<?php echo$myservice;?>">

<?php

}

if (!empty($row['entertainmentType'])) {


?>


Employment type: <input maxlength="18" type="text" name="entertainmentType" style="" class="form-control" value="<?php echo$entertainmentType;?>">


<?php

}


if (!empty($row['farmingType'])) {
  
   echo'Farming Type: <input maxlength="18" type="text" name="farmType" style="" class="form-control" value="'.$myfarm.'">';
}


if (!empty($row['foodType'])) {

  
 
   echo'Food type: <input maxlength="18" type="text" name="foodtype" style="" class="form-control" value="'.$myfood.'">';

}

  }   
    
    
    
}  
    
    ?>
    
 
    <input type="hidden" name="category" style="" class="form-control"value="<?php echo $mycat; ?>">
    
<div align="center" style="display: none;" class="loading-image" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>
    
    <br><input type="submit" name="submit-edit" id="submit-edit" value="Update" class="btn btn-update form-control" style="">

  </div>


    
  </form>





</div>


</div>


<div id="popup-messaging">

    <h6 align="center" id="h6" style="">message box</h6><br>

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

<span class="pxname">Product name: <?php echo$pname; ?></span>

  <input type="hidden" name="has" value="0" placeholder="" class="form-control"><br>
  
<input type="hidden" name="itemid" value="<?php echo$pid;?>">

<input type="hidden" name="is_sender_deleted" value="0">


<input type="hidden" name="is_receiver_deleted" value="0">


   <input type="hidden" name="sentto" value="<?php echo$siname ?>" placeholder="" class="form-control"><br><br>

   <input type="hidden" name="subject" placeholder="Subject" value="<?php echo$productname; ?>" class="form-control">

  <textarea type="text" wrap="physical" name="message" rows="6" placeholder="write message..." class="form-control"></textarea><br><br>

<input type="hidden" name="sentby" value="<?php echo$_SESSION['email']; ?>">

 <input type="hidden" name="name" value="<?php echo$_SESSION['name']; ?>" >

   <div align="center"><input type="submit" name="submit" id="submit-message" style="color: white;" class="btn btn-warning" value="Send message">

<div align="center" class="loading-image" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>


   </div>
   </form>
   <a onclick="messaging()" id="close-messaging"><i class="fa fa-close"></i></a>

   <div align="" id="content-messaging"></div><br>
</div>








</div>

</div>
</div>
</div>
</div>

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

$you_may_also_like = mysqli_query($conn,"SELECT *from comment where category like '%$you_may_like%' ORDER by featured desc,id desc ");



?>

<h4><span>You may also like</span> <a class="seemore"  href="sport.php?likes=<?php echo$you_may_like?>">See all <i class="fa-solid fa-chevron-right"></i></a></h4>

<div class="carousel">

<?php



while ($row_cat = mysqli_fetch_array($you_may_also_like)) {

  
echo "<div class='cell-carousel' id='it'>";
$price = $row_cat['price'];

if($row_cat['featured']>0){echo"<span id='premium'><i class='fas fa-crown'></i></span>";}

echo "<span id='discount'>-".$row_cat['discount']."%</span>";

echo "<span class='views' id='views'>".$row_cat['views']." <i class='fa fa-eye'></i></span>";


echo "<a href='details.php?id={$row_cat['id']}' target='_blank'><div style=''><img id='imgitem' width=''  src='https://via.placeholder.com/200' data-flickity-lazyload=".$row_cat['photo'].">"." "."</div></a>";



echo "<span id='nameitem' style='' ><a  style='color:green;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row_cat['name']."</a></span>"."<br>";

  

    if ($row_cat['discount']>0) {

echo"<span id='priceitem'>Price:<span style='text-decoration:line-through;'>&#8358;".$row['price']."</span></span>&nbsp;";

echo "<span id='priceitem' style=''>&#8358;";

 echo $price - ($row_cat['discount']/100 * $price)."</span><br>";



}


if ($row_cat['discount']==0) {
         
echo"<span id='priceitem' style=''>Price: &#8358;".$row_cat['price']."</span><br>";
       

}

    

    
   
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row_cat['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row_cat['category'].""."</span><br>";



   if($row_cat['category']!='Services' && $row_cat['category']!='farming' && $row_cat['category']!='Housing' && $row_cat['category']!='Pets' && $row_cat['category']!='Education ' && $row_cat['category']!='food and beverages' && $row_cat['category']!='Health' && $row_cat['category']!='Employment') {
            
      echo"<span id='conitem'>Condition: ".$row_cat['con'].""."</span><br>";


}


if (!empty($row_cat['petsAge'])) {
  
  echo"<span style='font-size:;' id='conitem'>Age: ".$row_cat['petsAge']."</span><br>"; 
}



if (!empty($row_cat['farmingType'])) {
  
  echo"<span style='font-size:;' id='conitem'>Farm type: ".$row_cat['farmingType']."</span><br>"; 
}


if (!empty($row_cat['foodType'])) {
  
  echo"<span style='font-size:;' id='conitem'>Type: ".$row_cat['foodType']."</span><br>"; 
}





if (!empty($row_cat['serviceType'])) {
  
  echo"<span style='font-size:;' id='conitem'>".$row_cat['serviceType']."</span><br>"; 
}









   echo "</div>";
  
}



}

?>

</div> 









<?php

require 'configure.php';

$tree="select * from comment where discount > 0 order by price DESC";



$dbc=mysqli_query($conn,$tree);


if ($dbc->num_rows>0) {
echo '<h4><span>Promo sales</span><a class="seemore"  href="sport.php?mysort=promo">See all <i class="fa-solid fa-chevron-right"></i></a></h4>';
echo '<div class="carousel">';

}
?>

  

<?php


require 'configure.php';

   $you_may = mysqli_query($conn,"SELECT *from comment where id='$id' and discount > 0");




while ($row = mysqli_fetch_array($you_may)) {

        $you_may_like = $row['category'];


}

$tree="select * from comment where discount > 0 order by featured desc,price asc";



$dbc=mysqli_query($conn,$tree);

if ($dbc) {

  
  while ($row=mysqli_fetch_array($dbc)) {




echo "<div class='cell-carousel' id=it>";

$price = $row['price'];
if($row['featured']>0){echo"<span id='premium'><i class='fas fa-crown'></i></span>";}

if ($row['discount']>0) {
  echo "<span id='discount'>-".$row['discount']."%</span>";
}
echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";

echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width=''  src='https://via.placeholder.com/200' data-flickity-lazyload=".$row['photo'].">"." "."</div></a>";



echo "<span id='nameitem' style='' ><a  style='color:green;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";

    if ($row['discount']>0) {

echo"<span id='priceitem'><span style='text-decoration:line-through;'>&#8358;".$row['price']."</span></span>&nbsp;";


echo "<span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

    
    
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row['category'].""."</span><br>";

                    if($row['category']!='Services' && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
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

















<div id="" class="icon-bar" align="">

  
<a class="facebook" href="https://web.facebook.com/profile.php?id=100076772181022"><i class='fab fa-facebook'></i></a>



<a  class="twitter" href="https://twitter.com/ngnimitech"><i class='fab fa-twitter'></i></a>




<a class="instagram" href="https://instagram.com/ngnimitech"><i class='fab fa-instagram'></i></a>




<a class="telegram" href="https://t.me/ngnimitech"><i class='fab fa-telegram'></i></a>




</div>


</div>

<div id="popup-discount">

  <a onclick="discount()" id="close-discount"><i class="fa fa-close"></i></a>

  
   
    <h6 align="center" id="h6" style="">Add discount</h6>
 <div class="container">   
   

<?php 

require 'configure.php';


if (isset($_GET['id'])) {

  $id = $_GET['id'];

  $sql="select * from comment where id = '$id'";

  $dbc=mysqli_query($conn,$sql);
  
  while ($row = mysqli_fetch_array($dbc)) {

    $mydiscount = $row['discount'];
  


  }
  
}
 ?>



  <form method="POST" id="discount-form" enctype="multipart/form-data">
    
    <input type="hidden" name = "id" value="<?php echo $id?>">

 <p>Amount(%)</p>

<input type="number" maxlength="18" name = "dis" style="" placeholder="%" class="form-control"value="<?php echo $mydiscount; ?>">
<br><input type="submit" name="submit-discount" id="submit-discount"  value="Update" class="btn btn-update form-control" style="">




    <div align="center" style="display: none;" class="loading-image" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>
  </form>
<br>

</div>

  
</div>




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
 <div class="row" style="padding:10px">
<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br><b style="color:white;">+2349074456453</b><br>contact@temarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:poppins;">About us<br>Services<br>Our team<br>Support center<br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins;">Career<br>Term & Conditions<br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">Our partners<br><a style="color: white;" href="faq.php">Faq</a><br>Career<br>


</div>

</div>

<div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:'Monserrat',sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>




</div>


<div id="popup-change">

  <a onclick="changePicture()" id="closeChange"><i class="fa fa-close"></i></a>

  
   
    <h6 align="center" id="h6" style="">Change Picture</h6><br>
 <div class="container">   
   

<?php 

require 'configure.php';

if (isset($_GET['id'])) {

  $myid=$_GET['id'];

  
  $sql="select* from comment where id='$myid'";

  $dbc=mysqli_query($conn,$sql);
  
  while ($row=mysqli_fetch_array($dbc)) {



    $myimage=$row['photo'];



  }
  
}
 ?>



   <form method="POST" id="changePicture-form" enctype="multipart/form-data">
    
    <input type="hidden" name="id" value="<?php echo $myid?>">

  

  Photo:<input type="file" name="fileupload" class="form-control" value="<?php echo $myimage; ?>">
    
        
    <br><input type="submit" name="pictureChange" id="pictureChange" value="Update" class="btn btn-update form-control" style="">


    <div align="center" style="display: none;" class="loading-image" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>
    
  </form>

<br>



</div>
</div>







<script type="text/javascript">



  $('#changePicture-form').on('submit',function(e){

        e.preventDefault();

$(".loading-image").show();

       var form_data = new FormData();



      $.ajax({

            type: "POST",

            url: "changeItemPic.php",

            data: new FormData(this),

           cache:false,

            processData:false,

            contentType:false,

             success: function(response) {

if (response==1) {

$(".loading-image").hide();

var mylink = 'details.php';

            swal({

              title:"Image uploaded successfully",
              
              text:"Please refresh to see change",

              icon:"success",

            });

              $('#edit-parent').load(location.href + " #edit-child");

             

              $('#popup-change').fadeOut(1000);
           } 
            
else{

              swal({
                icon:"error",
                title:"Oops...",
                text:response});

          

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

  $('#submit').on('click',function(e){

   
        e.preventDefault();

 $(".loading-image").show(); 


      $.ajax({

            type: "POST",

            url: "report-page.php",

            data:  $("#report-form").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {

 $(".loading-image").hide();

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

icon:"error",

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














<script type="text/javascript">



  var postData = "text";

  $('#submit-message').on('click',function(e){
        e.preventDefault();

 $(".loading-image").show();


      $.ajax({

            type: "POST",

            url: "message-process.php",

            data:  $("#message-form").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {

 $(".loading-image").hide();

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
                    
                title:"Oops...",    
                icon:"error",
                text:response});

           

           }

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>




<script type="text/javascript">
    
    function toggle() {


var popup = document.getElementById('popup');
popup.classList.toggle('active');


        }




</script>


<script type="text/javascript">
    
    function discount() {


var popup = document.getElementById('popup-discount');
popup.classList.toggle('active');


        }





</script>

<script type="text/javascript">
   


   function edit() {


var popup = document.getElementById('popup-edit');
popup.classList.toggle('active');


        }


</script>




<script type="text/javascript">
    
    function imageopen() {


var popup = document.getElementById('popup1');
popup.classList.toggle('active');


        }


</script>


<script type="text/javascript">
    
    function messaging() {


var popup = document.getElementById('popup-messaging');
popup.classList.toggle('active');


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
         
         swal({
             
             icon:"success",
             text:"Thanks for subscribing"
         });
         
         $('#subscribe-form')[0].reset();
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


  $('.btn-pay').on('click',function(e){
    

 if (confirm("Do you want to add this item to featured product list?")) {
         

    var pay = $('.btn-pay').attr('id');

  

      $.ajax({

            type: "POST",

            url: "product-pay.php",

            data: 'id='+pay,

            success: function(data) {

             
            if (data==1) {
                
             window.location="payment.php"; 



           
            }
              
else{

   swal({
                icon:"error",
                title:"Oops...",
                text:data});

}
           

           

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })
}
    });





</script>















<script type="text/javascript">
  


$('.carousel').flickity({
 
  cellAlign: 'left',
  contain: true,
  autoPlay: true,
  lazyLoad:true,
});




</script>

<script type="text/javascript">
$(document).ready(function(){
    $("a.btn-delete").click(function(e){
        if(!confirm('Are you sure you want to delete this item?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});

</script>
<script type="text/javascript">



  var postData = "text";

  $('#discount-form').on('submit',function(e){

        e.preventDefault();

$(".loading-image").show();

       var form_data = new FormData();



      $.ajax({

            type: "POST",

            url: "discount-edit.php",

            data: new FormData(this),

           cache:false,

            processData:false,

            contentType:false,

             success: function(response) {

$(".loading-image").hide();

if (response==1) {

            swal({

              text:"Saved successfully",

              icon:"success",

            });

              $('#edit-discountparent').load(location.href + " #edit-discount-child");



              $('#popup-discount').fadeOut(1000);
            
            

            $("#discount-form").find('input:text').val('');

           $("#discount-form").find('textarea').val('');

            $('input:checkbox').removeAttr('checked');

           }
else{

  swal({
                icon:"error",
                title:"Oops...",
                text:response});



}
            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>
<script type="text/javascript">


  $('#myformx').on('submit',function(e){

 $("#loading-image").show();

        e.preventDefault();
        var formdata = new FormData();

     

      $.ajax({

            type: "POST",

            url: "addnew.php",

            data:new FormData(this),

            cache:false,

            processData:false,

            contentType:false,

             

             success: function(data) {

  $("#loading-image").hide();

if (data==1) {

          
              swal({
                       title:"Image(s) uploaded successfully",
                       
                       text:"Please refresh page to see changes",
                       
                      icon:"success"

              });

              

                $("#popup1").hide(1000);
                
                 $('#bom').load(location.href + " #cy");

} 

else{
            swal({
                icon:"error",
                title:"Oops...",
                text:response
                
                
            }); 


            $("#myformx").find('input:file').val('');

           $("#myformx").find('textarea').val('');

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


  $('.btn-sold').on('click',function(e){
    

 if (confirm("Are you sure to update this?")) {
         

    var del_id = $(this).attr('id');


  

      $.ajax({

            type: "POST",

            url: "update-sold.php",

            data: 'id='+del_id,

            success: function(data) {

             
            if (data==1) {

swal({
              
              text:"Record saved successfully",

               icon:"success",

            });

window.location="edituser.php#myitems";

           
            }
              
else{

  swal({
                icon:"error",
                title:"Oops...",
                text:data});

}
           

           

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })
}
    });





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


$('#tom').load(location.href + " #ty");

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
                text:response});

}         

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

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
    function changeBackground(obj) {
        $(obj).removeClass("bg-success");
        $(obj).addClass("bg-danger");
        $(obj).addClass("simple");

    }

    function saveData(obj, id, column) {
        var customer = {
            id: id,
            column: column,
            value: obj.innerHTML
        }
        $.ajax({
            type: "POST",
            url: "savedata.php",
            data: customer,
            dataType: 'json',
            success: function(data){
                if (data) {

                swal({

                text:"Record saved",
                icon:"success",


                });  
                 
                  $(obj).removeClass("bg-danger");
        $(obj).removeClass("simple");  
                   
                }
                
                
                else{
                    
                    swal({
                        icon:"error",
                        title:"Oops...",
                        text:"Record was not saved"
                    })
                }
            }
       });
    };
    </script>

<script type="text/javascript">





  $('#edit-form').on('submit',function(e){

        e.preventDefault();

$(".loading-image").show();

       var form_data = new FormData();



      $.ajax({

            type: "POST",

            url: "edit-page.php",

            data: new FormData(this),

           cache:false,

            processData:false,

            contentType:false,

             success: function(response) {

if (response==1) {

$(".loading-image").hide();

            swal({

              text:"Saved successfully",

              icon:"success",

            });

              

              $('#com').load(location.href + " #my");

              $('#popup-edit').fadeOut(1000);
           } 
            
else{

            swal({
                icon:"error",
                title:"Oops...",
                text:response});

            

           }

            },
            
            complete:function(){
              
              setTimeout(  
                
               function() {
                
             
                
                
              }, 1000);  
                
            },
            
            
            
            
            
            

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>





<script type="text/javascript">
    
    function changePicture() {


var popup = document.getElementById('popup-change');
popup.classList.toggle('active');


        }





</script>






</body>
</html>