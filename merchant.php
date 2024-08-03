<?php 

error_reporting(E_ALL ^ E_NOTICE);


session_start();


if (isset($_GET['id'])) {

$userid=$_GET['id'];

require_once 'configure.php';

$merchant=mysqli_query($conn,"select * from profile where id='$userid'");

while ($row=mysqli_fetch_array($merchant)) {
  $myid = $row['id'];


  $name = $row['name'];
  
  if(!empty($row['profile_pic'])){
     
  
  $image = $row['profile_pic'];
     
 }


  $date = $row['date'];
  
  $followers = $row['followers'];


}


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




}


  
  



?>



<?php

$user_id = $_SESSION['id'];

$checkfollow = mysqli_query($conn, "select * from followers where user_id = '$myid' and follower_id ='$user_id'");

$followed = $checkfollow->num_rows;









?>
















<!DOCTYPE html>
<html lang='en'>
<head>

<title>&agrave;t&#233; -The online marketing website | Merchant</title>

  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Trirong|Poppins">

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
  font-family:'Monserrat',sans-serif;
  overflow-x:hidden;
}

.footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 130px;

}

.footer a{
color:white;
}


.waves {
  position:absolute;
  width: 100%;
  height:16vh;

 top: -106px;

 
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

z-index:999;





}



#followers{
    
margin-top:8px;    

color: black;

font-size: 18px;

font-weight: bold;

}


.btnFollow{

  margin: 5px;

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


.btnUnfollow{



  margin: 5px;

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


#featured #discount{

position: relative;
left:170px;
font-size:14px;

}



#featured #views{
    
position: relative;
left:-47px;
font-size:13px;    
} 



#featured #noviews{
    
position: relative;
left:-10px;
font-size:13px;    
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









.com{
padding:10px;
line-height:28px;
border-radius:18px;
  background:rgba(192,192,243,0.4);
  font-size:14px;
  text-transform:capitalize;
  text-align: left;
}





#nameitem{
  font-size:13px; 
   margin-left:5px; 
 width:100%;
 word-wrap:break-word;
 font-family:'montserrat'; 
 opacity: 0.8;  
}


.cell-carousel #discount{
    
    position:relative;
    
    left:150px;
    
}  









#locitem,#conitem,#catitem,#messageitem,#priceitem{
  font-size:13px; 
   margin-left:5px; 
 width:100%;
 word-wrap:break-word;
 font-family:poppins; 
 opacity: 0.8;  
}

.imgProfile{
   height:170px;
   width:200px;
   padding:3px;
    
}

#count{
float:right;


color:white;

}
.fa-map-marker{
    
  color:blue;  
}

#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}



.main{



}

.myitems{


background-color:rgba(243,243,243,0.1);padding-bottom: 8px;margin-bottom:50px;border-radius:15px;box-shadow:0px 0px 8px rgba(0,0,0,0.3);

width:230px;

display: inline-block;

margin-right:1.5%;

margin-left:1.5%;



}

tr{

float: left;

}

td{padding-left:20px;padding-right:20px;
}





.myitems #noviews{

position:relative;
top:45px;
left:0px;
background-color: rgba(192,192,192,0.8);
color:black;
font-weight: bold;
padding:3px;
z-index: ;
}


.myitems #imgitem{



}
.myitems #views{

position: relative;
left:-35px;
font-size:14px;
padding:3px;

}

.myitems #discount{

position: relative;
left:190px;
font-size:14px;

}





h4{
font-size:15px;
 font-family:'Monserrat',sans-serif;
color:white;
padding:8px;
background:rgba(0,70,90,0.7);


}

h5{
font-size: 15px;
 font-family:'Monserrat',sans-serif;

font-weight:;

}


.carousel{

  width: 100%;
  margin-top: 33px;
  margin-bottom:45px;
}

.cell-carousel{

border-bottom:1px solid rgba(0,0,0,0.2);
border-top:1px solid rgba(0,0,0,0.2);
padding-bottom:10px;
 border:1px solid transparent transparent;
 box-shadow:0px 0px 5px rgba(0,0,0,0.4);
margin-right:21px;
border-radius:18px;
width:205px;


}


.cell-carousel img{

width:100%;
height:140px;
margin-top:-21px;
border-radius:17px 17px 0px 0px;
} 









#priceitem{
font-size:15px;
  color:rgba(255,0,100,0.7);
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





.cell-carousel #discount{
    
    position:relative;
    
    left:115px;
    
}  










#loader{

width:80px;
height:50px;


}


#nameitem{

 font-family:'Montserrat';
font-weight: bold;
color: green;
text-transform:uppercase;
font-size:13px;
text-decoration: none;
}
#nameitem a{
text-decoration: none;

color: green;


}

#price{
margin-top:-20px;
width:150px;
color:rgba(0,0,0,0.5);
text-align-last:center;

}

#price:focus{

outline:none;



}

label{
font-size:25px;
color: rgba(0,0,0,0.4);
margin:18px 500px;
text-align: center;
align-self: center;
display:none;


}
.col-md-6{
    
    margin-bottom:10px;
   
    
}
#searchdata{
    
  margin-top:30px;  
    
    
}


#search-button:focus{
    
outline:none;
box-shadow:none;    
    
}
.btn-search{
display:none;
  background-color: rgba(255,165,50,1);
    color: white;
     box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.2);

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

#views{

position: relative;
top:37px;
left: 10px;
background-color: rgba(192,192,192,0.9);
color: black;
font-weight: bold;
padding:3px;
z-index:;
font-size:14px;
}


#discount{
background-color: rgba(255,195,50,0.4);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: relative;
top:37px;
font-weight: bold;
padding:3px;
left:90px;
z-index:;
font-size:14px;

}





#search-button{

font-weight:bold;

float: right;

font-size:18px;

cursor: pointer;

color: white;

border-radius:8px;

padding:8px;

margin-right:13px;
margin-top:-3px;


}
h4{
  margin-bottom:15px;  
    
    
}







h4{
 font-family:'Monserrat',sans-serif;

font-weight: bold;

}

#count{

float:right;
color:white;

}











ul{
    
    display:block;
}




#imgitem{
height: 170px;
width:100%;
border-radius:18px 18px 0px 0px;
margin-top:-24px;


}


.myitems #imgitem{

width:100%;
height:180px;


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

  margin-top:0px;
   display: none;
  color: white;
  font-size: 30px;
  float: right;
  cursor: pointer;
 
  
}



.btn-info,.btn-warning{

  color: white;


  cursor: pointer;
 
  
}





.overlay,#overlay{

  display:none;
}






h1{

height:68px;

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
#loader{

width:80px;
height:50px;


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











#content-subscribe{
margin-top:-5px;
font-weight: bold;
 font-family:'Monserrat',sans-serif;
text-transform:capitalize;
position: absolute;
left:46.4%;
font-size:15px;
color:lightgreen;


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




#navbar{
    display:none;
    
    background-color:#333;
    position:;
    padding

    width:100%;
  
}
#mydate{
    
    margin-top:10px;
}

#nameprofile{
    
    margin-top:8px;margin-bottom:7px;
}



@media only screen and (orientation:landscape){

 body{
 
height: 100%;

}
  
  .myitems #discount{

position: relative;
right:50px;
font-size:14px;

}

  
 #searchdata{
     
    
     display:none;
     
     
     
 } 
  
  

    .img{

margin-top: -5px;


    }


    h2{

margin-top: -5px;


    }

#company{
   
   color:red; 
   display:block !important;
    
    
}
.col-md-3{
    
   
    
}



    

    


    

    p{

        

      font-family:'Monserrat',sans-serif;  

        

    }

    

    

    



  
#navbar {
    
  height:350px; 
    
    
    
}
    

    

   #post, #btn-down, #submit3, {

    background-color:rgba(255,165,50,1);   

       

       

   }

}









@media only screen and (max-width:497px){

#imgitem{
height: 170px;
width:100%;
border-radius:18px 18px 0px 0px;
margin-top:-24px;


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

 





#searchdata{
    
    margin-top:60px;
      display:none;
    
}

#comp{
    
    font-weight:normal;
    font-size:13.5px;
    
}

#comp{
  font-size:13px;  
  font-weight:normal;
   margin-top:38px; 
    
}

#select{
    
    margin:20px 0px;
    margin-bottom:23px;
   
    
}





html{
    
    scroll-behavior:smooth;
}

  
    

   h1{

       background-color:rgba(0,70,90,0.7);

    height:65px; 

     padding:6px 8px;

    box-shadow:rgba(0,0,0,0.3);

   

   } 

#name{
 font-size:19px;
 margin-top:5px;
  
     
 } 
  

#email{
 
   font-size:17px;
     
 } 


#edit{
 font-size:23px;
    
     
 } 





 a.open-button{

     font-size:15px;
margin-top:0px;
  opacity:0.9;   

     

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
 font-family:'Monserrat',sans-serif;
color:white;
padding:8px;
background:rgba(0,70,90,0.7);


} 
    
    
    
    
    
    
    
    
    
  
  
  .cell-carousel #views{

position: relative;
top:37px;
left:2px;
background-color: rgba(192,192,192,0.9);
color: black;
font-weight: bold;
padding:3px;
z-index:;
font-size:14px;
}
  
  
  
 .cell-carousel #nameitem{
     
  font-size:13px;
  
     
 } 
  
  
    
    
    
  .imgProfile{
   height:150px;
   width:150px;
   border-radius:50%;
   box-shadow:0px 0px 13px rgba(0,0,0,0.3);
    
}  
    
    
 .myitems #premium{

float:left;
font-size:14px;

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
       
      
   #featured #views{
       
      position:relative;

left:-50px;
background-color: rgba(192,192,192,0.8);
color:black;
font-weight: bold;
padding:3px;
z-index: ;
font-size:13px; 
   } 
   
    
   #featured #noviews {
       
      position:relative;

left:-15px;
background-color: rgba(192,192,192,0.8);
color:black;
font-weight: bold;
padding:3px;
z-index: ;
font-size:13px; 
   }   
    
    
  .myitems #noviews{

position:relative;
top:45px;
left:0px;
background-color: rgba(192,192,192,0.8);
color:black;
font-weight: bold;
padding:3px;
z-index: ;
font-size:13px;
}
  
    
.cell-carousel #discount{
    
    position:relative;
    
    left:103px;
    
}  
    
    
#featured #discount{
    
position: relative;
left:104px;
font-size:13px;    
}    
    
    
    
    

  .myitems #discount{

position: relative;
left:120px;
font-size:13px;

}



.myitems #imgitem{

width:100%;
height:145px;


}












.myitems{


background-color:rgba(192,192,192,0.1);padding-bottom: 8px;margin-bottom:40px;border-radius:15px;box-shadow:0px 0px 8px rgba(0,0,0,0.3);

width:47%;
display: inline-block; 
margin-left:1%;margin-right:1%;



}



   
    
td{}    
  
.carousel .flickity-prev-next-button {
  display: none;
}















.cell-carousel{

padding-bottom:10px;

 box-shadow:0px 0px 5px rgba(0,0,0,0.4);
;

padding:0px;

}


.cell-carousel img{




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

 


.com{
padding:10px;
line-height:28px;
border-radius:18px;
  background:white;
  font-size:15px;
  text-transform:capitalize;
  text-align: left;
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
    
margin:8px;    

color: black;

font-size: 16px;

font-weight: bold;

}


.btnFollow{

  margin-top: 13px;

font-size: 14px;

font-family:;

color: white;

padding: 3px 10px;

background-color: rgba(255,155,50,0.9);

border:1px solid transparent;

border-radius: 15px;

box-shadow: 0px 0px 15px rgba(0,0,0,0.3);

font-weight: bold;

}


.btnUnfollow{



  margin-top: 13px;margin-bottom: 13px;

font-size: 14px;

font-family:;

color: white;

padding: 3px 10px;

background-color: rgba(255,165,40,0.8);

border:1px solid transparent;

border-radius: 15px;

box-shadow: 0px 0px 15px rgba(0,0,0,0.3);

font-weight: bold;


}












tr{
    
    float:left;
} 
  
  
  
.fa-image {
    
    color:white;
    font-size:25px;
}
  
    
    
    
  
.cell-carousel #discount{


}  
    
    
    
    
    
    
#count{
font-weight:bold;
float:right;
color:white;

}






    
.cell-carousel{
padding-bottom:15px;
margin-bottom:5px;

 box-shadow:0px 0px 5px rgba(0,0,0,0.4);
;

padding:0px;
width:183px;

}


.cell-carousel #imgitem{

width:100%;



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


.cell-carousel{



 box-shadow:0px 0px 5px rgba(0,0,0,0.4);
;
border-bottom:1px solid rgba(0,0,0,0.4);
padding-bottom:10px;

}


.cell-carousel img{

width:100%;



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

  margin-top:-3px;
   display: block;
  color: white;
  font-size: 30px;
  float: right;
  cursor: pointer;
 
  
}











label{
font-size:25px;
color: rgba(0,0,0,0.4);
margin:23px 10px;
text-align: center;
align-self: center;



}


#locitem,#messageitem,#priceitem{
  font-size:13px; 
   margin-left:5px; 
 width:100%;
 white-space:nowrap;
 text-overflow:ellipsis;
 font-family:poppins; 
 opacity: 0.8;  
}


#catitem{
   
 text-transform:capitalize;
}





#conitem,#catitem{
  font-size:14px; 
   margin-left:5px; 
 width:100%;
 word-wrap:break-word;
 font-family:poppins; 
 opacity: 0.8;  
}









#nameitem{
  font-size:12px; 
   margin-left:5px; 
 width:100%;
 white-space:nowrap;
 text-overflow:ellipsis;
 font-family:poppins; 
 opacity: 0.8; 
 font-weight:normal;
}








#priceitem{
 font-family:'monserrat',sans-serif;

 
 color:rgba(255,0,100,0.7);   
}

#select{
color:rgba(0,0,0,0.5);
display:block;
font-family: sans-serif;
font-size:16px;
width:110px;
text-align-last: center;
margin:;
text-transform: capitalize;
margin-bottom:20px;

}
#highest, #lowest, #recent{
    margin-top:18px;
    
}

h5{
font-size: 16px;
 font-family:'Montserrat';

font-weight:;

}







strong{

display: block;

color: green;

font-size: 25px;

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

 if (!empty($_SESSION['email'])) {echo'<a href="sport.php" class="" >GALLERY</a>
 
 
 

<a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="index.php?#sellnow" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>


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




<h1>

<?php
if(!empty($_session['id'])){echo'
 

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



<div align="center" class="alertFollow"></div>
<div align="center" class="alertunFollow"></div>



<br>



<div class="container com">

<br>
<div id="com">
  <div id="cy">
</div></div>

<div align="" class="container" id="items">

<div id="bom">
  <div id="my">
<div class="row">

<div align='center' class="col-md-6 col-sm-6 col-xs-6" style="">
  <?php


echo "<img class='imgProfile' src=". $image."><br>";







?>    
    
</div>

<div align='center' style="font-family:poppins" class="col-md-6 col-sm-6 col-xs-6 ">
 <?php

echo '<span id="merch" style="color:blue;color:black;font-size:15px;opacity:0.8;" >MemberID: &nbsp;Merchant 0'.$myid.'</span><br>';

echo "<span id='nameprofile' style='color:green;font-size:15px;'> ". $name."</span>";

?>

<div id="tom"><div id="ty">

<span id="followers" style='color:black;'>

<?php


if ($followers<=1){

 echo$followers;



 ?> <a href="getmerchantFollowers.php?id=<?php echo$myid; ?>"><i class="fa fa-user-alt"></i></a>
<?php

}

else{
echo$followers;
?>

 <a href="getmerchantFollowers.php?id=<?php echo$myid; ?>"><i class="fa-solid fa-user-friends"></i></a>

<?php
}?>

</span>
</div></div>




<form method="post" id="formFollow" enctype="multipart/form-data">

<input type="hidden" name="user" class="user" value="<?php echo$myid;?>">

<input type="hidden" name="follower" class="follower" value="<?php echo$_SESSION['id'];?>">


<?php if (!empty($_SESSION['id'])) {
 
 if($_SESSION['id']!=$myid) {
     
     

?>

<button id="btnFollow" class="btn btnFollow">
  
<i class="fa-solid fa-user-plus"></i> Follow


</button>


<button id="<?php echo$myid;?>" class="btn btnhide btnUnfollow">
  
<i class="fa-solid fa-user-minus"></i> Unfollow


</button>


<?php
}

}

?>

</form>






<?php



echo "<span id='mydate' style='font-size:15px;color:black;font-family:poppins'>Joined : &nbsp;".$time_ago."</span><br>";


?>   
    
</div>    
    
   
</div>









</div></div>
<div class="" align="center">
    
<input type="hidden" name="user_name" class="user_name" value="<?php echo$name;?>">

</div>
<br>


</div>

</div>

<?php

require 'configure.php';



list($count)=mysqli_fetch_array(mysqli_query($conn,"select count(*) from comment where sid = '$myid' and sold = 0 and featured = 1"));



?>





<br>

<div align="" class=" container">

<h4 align="">Paid Ad(s)<span id='count' style='float:right;'><?php echo $count." Item(s)";?></span></h4>
 








<br>


  
    


<?php 

require 'configure.php';


list($count)=mysqli_fetch_array(mysqli_query($conn,"select count(*) from comment where sid = '$myid' and sold = 0 and featured=1"));



        $result=mysqli_query($conn,"SELECT * FROM comment where sid = '$myid' and sold = 0 and featured=1 order by id desc");
        $count = 0;



        while($row=mysqli_fetch_array($result))
        {
           
          
            
            ?>
        <?php   
  echo "<div id='featured' class='myitems'>";
  
  if($row['featured']>0){echo"<span id='premium'><i class='fas fa-crown'></i></span>";}
$price = $row['price'];



            if ($row['discount']>0) {

 echo "<span id ='discount'>-".$row['discount']."%</span>";
 echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

       if ($row['discount']==0) {

 echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

if (!empty($_SESSION['id'])) {
    
  echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' src=".$row['photo'].">"." "."</div></a>";


echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";



}

else{

   echo "<a href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' src=".$row['photo'].">"." "."</div></a>";



   echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";
}








    if ($row['discount']>0) {

echo"<span id='priceitem' style='text-decoration:line-through;'>&#8358;".$row['price']."</span>&nbsp;&nbsp;";


echo "<span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

    
    
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row['category'].""."</span><br>";



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







  ?> 




                <?php
           
          echo"</div>";


           
        }
       






        ?>




    
    
    
    
    
    
    
    
    
    
</div>
  
</div>












<?php

require 'configure.php';



list($count)=mysqli_fetch_array(mysqli_query($conn,"select count(*) from comment where sid = '$myid' and sold = 0"));



?>





<br><br>

<div align="" class=" container">

<h4 align="">Item(s) for Sale<span id='count' style='float:right;'><?php echo $count." Item(s)";?></span></h4>
 








<br>


  


<?php 

require 'configure.php';


list($count)=mysqli_fetch_array(mysqli_query($conn,"select count(*) from comment where sid = '$myid' and sold = 0"));



        $result=mysqli_query($conn,"SELECT * FROM comment where sid = '$myid' and sold = 0 order by id desc");
        $count = 0;



        while($row=mysqli_fetch_array($result))
        {
         
          
            
            ?>
        <?php   
  echo "<div class='myitems'>";   
$price = $row['price'];

            if ($row['discount']>0) {

 echo "<span id ='discount'>-".$row['discount']."%</span>";
 echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

       if ($row['discount']==0) {

 echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

if (!empty($_SESSION['id'])) {
    
  echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' src=".$row['photo'].">"." "."</div></a>";


echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";



}

else{

   echo "<a href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' src=".$row['photo'].">"." "."</div></a>";



   echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";
}








    if ($row['discount']>0) {

echo"<span id='priceitem' style='text-decoration:line-through;'>&#8358;".$row['price']."</span>&nbsp;&nbsp;";


echo "<span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

    
    
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row['category'].""."</span><br>";



  if($row['category']!='Employment' && $row['category']!='Services' && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
      echo"<span id='conitem'>Condition: ".$row['con'].""."</span><br>";


}

if (!empty($row['serviceType'])) {
  
  echo"<span style='font-size:;' id='conitem'>".$row['serviceType']."</span><br>"; 
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





  ?> 




                <?php
           
          echo"</div>";


           
        }
       






        ?>



</table>
  
    
    
    
    
    
    
    
    
    
    
</div>
  
</div>


<?php

require 'configure.php';



list($countx)=mysqli_fetch_array(mysqli_query($conn,"select count(*) from comment where sid = '$myid' and sold = 1"));



?>





<br><br>
<div align="" class=" container">
<h4 align="">Sold Item(s)<span id='count' style='float:right;'><?php echo $countx." Item(s)";?></span></h4><br>
 








<?php 

require 'configure.php';


list($count)=mysqli_fetch_array(mysqli_query($conn,"select count(*) from comment where sid = '$myid' and sold = 1"));



        $result=mysqli_query($conn,"SELECT * FROM comment where sid = '$myid' and sold = 1 order by id desc");
        $count = 0;
        while($row=mysqli_fetch_array($result))
        {
           
          
            ?>
        <?php  
        
     echo"<div style='box-shadow:0px 0px 8px rgba(0,0,0,0.2);' class='myitems'>";
     
$price = $row['price'];

            if ($row['discount']>0) {

 echo "<span id ='discount'>-".$row['discount']."%</span>";
 echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

       if ($row['discount']==0) {

 echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

if (!empty($_SESSION['id'])) {
    
  echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' src=".$row['photo'].">"." "."</div></a>";


echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";



}

else{

   echo "<a href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' src=".$row['photo'].">"." "."</div></a>";



   echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";
}





    if ($row['discount']>0) {

echo"<span id='priceitem' style='text-decoration:line-through;'>&#8358;".$row['price']."</span>&nbsp;&nbsp;";


echo "<span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

     
    
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row['category'].""."</span><br>";


  if($row['category']!='Employment' && $row['category']!='Services' && $row['category']!='farming' && $row['category']!='housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
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
  
  echo"<span style='font-size:px;' id='conitem'>".$row['serviceType']."</span><br>"; 
}






  ?> 




                <?php
           
           
          print"</div>";
       
      
           
           
        }
       
     
       
       
        ?>

</table>
  
    
    
    
    
    
    
    
    
    
    
    
</div>
  
</div>




















<a  onclick="topFunction()" style="" id="btn-down" class="btn btn-down">&#8593;</a>



<br><br>

</div></div>


  
 <div class="container">


<h4>Most viewed Items<a class="seemore"  href="sport.php?mysort=views">See all <i class="fa-solid fa-chevron-right"></i></a></h4>





<div class='carousel'>

 
  
<?php


require 'configure.php';

$tree="select * from comment where sold = 0 order by featured desc,views desc limit 10";

$dbc=mysqli_query($conn,$tree);

if ($dbc) {
echo""; 


  
  while ($row=mysqli_fetch_array($dbc)) {

echo"<div class='cell-carousel'>";


$price = $row['price'];

if($row['featured']>0){echo"<span id='premium'><i class='fas fa-crown'></i></span>";}

echo "<span class='views' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";

if($row['discount']>0){
echo "<span id='discount'>-".$row['discount']."%</span>";}

if (!empty($_SESSION['id'])) {
    
    
  echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' src='https://via.placeholder.com/200' data-flickity-lazyload=".$row['photo'].">"." "."</div></a>";


echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";



}

else{

   echo "<a href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' src='https://via.placeholder.com/200' data-flickity-lazyload=".$row['photo'].">"." "."</div></a>";



   echo "<span id='nameitem' style='' ><a  style='color:;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";
}






    
if ($row['discount']>0) {

echo"<span id='priceitem' style='text-decoration:line-through;'>&#8358;".$row['price']."</span>";


echo "&nbsp; &nbsp;<span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span>";



}

if ($row['discount']==0) {
         echo"<div id='priceitem' style=''>&#8358;".$row['price']."</div>";

       

}

    
    
  echo"<div id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</div>";
    
    
    echo"<div id='catitem'>".$row['category'].""."</div>";



  if($row['category']!='Employment' && $row['category']!='Services' && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
      echo"<div id='conitem'>Condition: ".$row['con'].""."</div>";


}


if (!empty($row['petsAge'])) {
  
  echo"<div style='font-size:px;' id='conitem'>Age: ".$row['petsAge']."</div>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<div style='font-size:px;' id='conitem'>Farm type: ".$row['farmingType']."</div>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<div style='font-size:px;' id='conitem'>Type: ".$row['foodType']."</div>"; 
}



if (!empty($row['employmentType'])) {
  
  echo"<div style='font-size:px;' id='conitem'>Type: ".$row['employmentType']."</div>"; 
}




if (!empty($row['serviceType'])) {
  
  echo"<div style='font-size:px;' id='conitem'>".$row['serviceType']."</div>"; 
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
</div>
</div>



<script type="text/javascript">

  $(document).ready(function(){
$("#search").on("keyup",function(){

  var value=
  $(this).val().toLowerCase();
  $("#mytable tr").filter(function(){
     $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)

  });




});



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
                   text:response
                   
                   
               });
            

            $("#subscribe-form")[0].reset();

}         

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

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
<script type="text/javascript">


 $(documen).ready(function() {

  $(window).scroll(function() {

  $('.group').each(function(i) {

    var windowBottom = $(window).scrollTop() + $(window).height();

   

      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      
      /* If the element is completely within bounds of the window, fade it in */
      if (objectBottom > windowBottom) { //object comes into view (scrolling down)
        $(this).animate({'opacity':'1','margin-left':'0px'},1000);
      }
     



    });
  }); //invoke scroll-handler on page-load
});
</script>




  <script>
      
    function topFunction() {



  document.body.scrollTop = 0;
  


  document.documentElement.scrollTop = 0;



}
  
      
      
  </script>

<script type="text/javascript">
  


$('.carousel').flickity({
 
  cellAlign: 'left',
  contain: true,
  lazyLoad:true,
});




</script>










<script>
$(document).ready(function(){
  $("#search-button").click(function(){
   
    $("#searchdata").fadeToggle(300);

     $("#search").focus();


  });
});
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





<p align="center" style="color: white;font-weight:bold; font-family:'Montserrat',sans-serif;font-size:14px;">Sign up for our newsletter</p>
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
 <p style="color: white;font-size: 13px;font-family:poppins">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>+2347033506332<br>Contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:poppins">About us<br><a style='color:white;' href='services.php'>Services</a><br>Our team<br><a style='color:white;' href='contact.php'>Support center</a><br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins;">Career<br><a style='color:white;' href='terms.php'>Term & Conditions</a><br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">Our partners<br><a style='color:white;' href='faq.php'>Faq</a><br></p>


</div>



</div>

<div align="center" style="color:white;font-size:12px;text-transform:uppercase; font-family:poppins,sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>

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

              if(response==1)
          {
 $("#subscribe-form")[0].reset();
 swal({
     
     icon:"success",
     text:"Thanks for subscribing"
     
 })
           
}
else{
    
    swal({
        
        
        text:response,
        icon:"error"
        
        
    })
    
    
}
            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>

<script type="text/javascript">
  
  $('#btnFollow').on('click',function(e) {

if (confirm("Do you want to follow this merchant?")) {

    e.preventDefault();

    var user_name = $('.user_name').val();

    var followers = $("#formFollow").serialize();

    $.ajax({

        type: "POST",

            url: "addFollowers.php",

            data:  $('#formFollow').serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

        success:function(response) {



if(response==1){

         
       $(".alertFollow").html('You have followed'+ ' '+ user_name + '').fadeIn();

       $(".alertFollow").fadeOut(4500);

    $('#tom').load(location.href + " #ty");
    
    $('.btnhide').show();

       $('.btnFollow').hide();
            
        }


}


    });

  }
    
  });






</script>





<script type="text/javascript">
  
  $('.btnUnfollow').on('click',function(e) {

    e.preventDefault();

    var user = $('.btnUnfollow').attr('id');

    if (confirm("Do you want to unfollow this merchant?")) {

    $.ajax({

        type: "POST",

            url: "del-Followers.php",

            data:{
              
              user_name:user

            },

            cache:false,

            contentType: "application/x-www-form-urlencoded",

        success:function(response) {

if(response==1){

   $('#tom').load(location.href + " #ty");
   
   $('.btnhide').hide();
   
 $('.btnFollow').show();

       $(".alertunFollow").html('You have unfollowed'+ ' '+ user_name + '').fadeIn();

       $(".alertunFollow").fadeOut(5000);

    
            
        }


}


    });

  }
    
  });






</script>



<?php if ($followed>0) {

?>

<script>
  
$('.btnFollow').hide();

$('.btnhide').show();

</script>


<?php

}


else{
  
?>

<script>
  

$('.btnFollow').show();

$('.btnhide').hide();


</script>

<?php

}

?>

























</body>

