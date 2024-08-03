<?php 
session_start();


error_reporting(E_ALL ^ E_NOTICE);

if (!isset($_SESSION['id'])) {

echo "<script>window.location.href='newsignup.php'</script>";

exit();

}

$simerchant=$_SESSION["merchant"];

$myid = $_SESSION['id'];

$myfollowers = $_SESSION['followers'];

$date = $_SESSION['date'];



 $time_elapsed = time()-strtotime($date);
 $seconds = $time_elapsed;
 $minutes= round($time_elapsed/60);
  $month= round($time_elapsed/2600640);
  $hours =  round($time_elapsed/3600);
  $days =  round($time_elapsed/86400);
  $weeks =  round($time_elapsed/604800);
  $years =  round($time_elapsed/31207680);
  
 if($seconds <= 60){
        $time_ago= "Just now";
    }
 
  
   
  elseif($minutes<=60){
      
      
      if($minutes==1){
    
    $time_ago = "A minute ago";    
        
        
    }  
    
    else{ $time_ago ="$minutes minutes ago";   }  
       
      
  }
   
  elseif($hours<=24){
      
      
      if($hours==1){
    
    $time_ago = "An hour ago";    
        
        
    }  
    
    else{ $time_ago ="$hours hours ago";   }  
       
      
  }
   
  
  
  
  
  elseif($days<=7){
      
      
      if($days==1){
    
    $time_ago = "Yesterday";    
        
        
    }  
    
    else{ $time_ago ="$days days ago";   }  
       
      
  } 
  
  
  
   elseif($weeks<=4.3){
      
      
      if($weeks==1){
    
    $time_ago = "A week ago";    
        
        
    }  
    
    else{ $time_ago ="$weeks weeks ago";   }  
       
      
  } 
   elseif($month<=12){
      
    if($month==1){
    
    $time_ago = "A month ago";    
        
        
    }  
    
    else{ $time_ago ="$month months ago";   }  
      
  }
  

  
  else{
      
     if($years==1){
    
    $time_ago = "A year ago";    
        
        
    }  
    
    else{ $time_ago ="$years years ago";   }  
        
      
         
      
      
  }



?>












<!DOCTYPE html>
<html lang='en'>
<head>

<title>&agrave;t&#233; -The online marketing website | Settings</title>

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



.fa-users{

color: rgba(0,70,90,0.7);

font-size: 16px;

font-weight: bold;

}



#followers{

color: black;

font-size: 14px;

font-weight: bold;

}

.footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 120px;

}

.footer a{
color:white;
}


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











body{user-select: none; 

overflow-x:hidden;
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




.cell-carousel #noviews{

position:relative;
top:45px;
left:2px;
background-color: rgba(192,192,192,0.8);
color:black;
font-weight: bold;
padding:3px;
z-index: ;
font-size:13px;
}


.cell-carousel #views{

position: relative;
left:7px;
font-size:13px;
padding:3px;

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

.btn-success,.btn-primary{
 
 cursor:pointer;   
    
    
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



#nameitem,#locitem,#conitem,#catitem,#messageitem,#priceitem{
  font-size:13px; 
   margin-left:5px; 
 width:100%;
 word-wrap:break-word;
 font-family:sans-serif; 
 opacity: 0.8;  
}

.imgProfile{
   height:180px; 
   width:220px;
    
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

margin-right:1.5%;margin-left:1.5%;

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
left:-38px;
font-size:14px;
padding:3px;

}

.myitems #discount{

position: relative;
left:190px;
font-size:14px;

}


#featured #discount{

position: relative;
left:170px;
font-size:14px;

}


#featured #views{

position: relative;
left:-49px;
font-size:14px;

}



.myitems #premium{

position: relative;
left:2px;
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
width:230px;


}


.cell-carousel img{

width:100%;
height:140px;
margin-top:-24px;
border-radius:17px 17px 0px 0px;
} 









#priceitem{
font-size:15px;
  color:rgba(255,0,100,0.7);
}



#popup,#popup-password,#popup-picture,#popupAccount{
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

#popup.active,#popup-picture.active,#popupAccount.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }
#closex,#closeAccount{
color: white;
font-size: 21px;
position: absolute;
top: -2px;
left: 91%;


padding-top:8px;
cursor: pointer;

}
#closex:hover, #closex:focus,#closeAccount:focus{
opacity: 0.6;
border: none;
outline: none;
box-shadow: none;

}






#popup-password.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }
#close-password{
color: white;
font-size: 21px;
position: absolute;
top: -2px;
left: 91%;


padding-top:8px;
cursor: pointer;

}
#close-password:hover, #close-password:focus{
opacity: 0.6;
border: none;
outline: none;
box-shadow: none;

}




















#close{
color: white;
font-size: 21px;
position: absolute;
top: -2px;
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
cursor:pointer;

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

  margin-top:2px;
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

height: 60px;

width:135px;

margin-left:-8px;

margin-top:1px;

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



.cell-carousel #discount{

position: relative;
left:152px;
font-size:13px;

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

      position:fixed;
       
       right:15px;

       

   }

}









@media only screen and (max-width:497px){

#imgitem{
height: 170px;
width:195px;
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

.imgitem{

width:100%; 
margin-top:-22px;

height:180px;
border-radius:10px 10px 0px 0px;

}














html{
    
    scroll-behavior:smooth;
}

  
    

   h1{

       background-color:rgba(0,70,90,0.7);

    height:63px; 

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

  .myitems #discount{

position: relative;
right:-10px;
font-size:14px;

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

  
    
   #featured #noviews {
       
      position:relative;

left:-15px;
background-color: rgba(192,192,192,0.8);
color:black;
font-weight: bold;
padding:3px;
z-index:99 ;
font-size:13px; 
   } 
   
   
  #featured #views{
       
      position:relative;

left:-49px;
background-color: rgba(192,192,192,0.8);
color:black;
font-weight: bold;
padding:3px;
z-index:99 ;
font-size:13px; 
   }   
   
   
  
  
 #featured #premium{
     
     float:left;
 }     
    
    
 #featured #discount{
    
position: relative;
left:104px;
font-size:13px;    
}     
    
    
 .cell-carousel #nameitem{
     
  font-size:12.5px;   
     
 }     
    

  .myitems #discount{

position: relative;
left:122px;
font-size:13px;

}

.myitems #premium{

position: relative;
left:3px;
font-size:14px;

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


.myitems #views{

position: relative;
left:-35px;
font-size:13px;
padding:3px;

}











.myitems #imgitem{

width:100%;
height:145px;


}












.myitems{


background-color:rgba(192,192,192,0.1);padding-bottom: 8px;margin-bottom:40px;border-radius:15px;box-shadow:0px 0px 8px rgba(0,0,0,0.3);
margin-left:px;padding-left:px;
width:47%;
display: inline-block; 
margin-left:1%;margin-right:1%;

}


   
    
  
  
.carousel .flickity-prev-next-button {
  display: none;
}






.cell-carousel #discount{

position: relative;
left:85px;
font-size:13px;

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
    
    
    
     #btn-down{

    background-color:rgba(255,165,50,1);   

      position:fixed;
      
      top:80%;
       
       right:15px;

     }
    
    
 .cell-carousel #noviews{

position:relative;
top:45px;
left:2px;
background-color: rgba(192,192,192,0.8);
color:black;
font-weight: bold;
padding:3px;
z-index: ;
font-size:13px;
}


.cell-carousel #views{

position: relative;
left:3px;
font-size:13px;
padding:3px;

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

  
    
    
 .main{
     
     background-color:white;
 }   
    
    
   .com{
padding:10px;
line-height:28px;
border-radius:18px;
  background:white;
  font-size:14px;
  text-transform:capitalize;
  text-align: left;
}
 
    
   
   
#nameProfile{
    
    font-family:poppins;
    font-size:16px;
}    
 
 
 .imgProfile{
  
  width:150px;   
  height:150px;
  border-radius:50%;
  box-shadow:0px 0px 10px rgba(0,0,0,0.3);
  margin-bottom:10px;
     
     
 }
 
 
 
 
 
 
 
    
 

tr{
    
    float:left;
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
       
    
    
    
    
    
#count{

float:right;
color:white;

}


#closex,#close-password,#close,#closeAccount{
position:absolute;
top:-8px;
    
}





#h6{

  border:1px solid transparent transparent;

  background-color:rgba(0,70,90,0.7);  

  color:white;

height: 40px;
 

  width:100%;

  padding-top:8px;

  font-size:14px;
  
  margin-top:-3px;
 

  font-family:'Monserrat',sans-serif;
  font-weight: bold;
  text-transform: uppercase;

}



    
.cell-carousel{
padding-bottom:15px;
margin-bottom:5px;

 box-shadow:0px 0px 5px rgba(0,0,0,0.4);
 
width:170px;
padding:0px;

}


.cell-carousel img{

margin-top:-24px;



}    
    
 
 
#popup-picture,#popupAccount{
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
 
 
 
 
 
 
 
 
    
    
    
    
    
    
#popup,#popup-password{
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
padding:0px;

}


.cell-carousel img{

width:;



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










#footer p{

color: white !important;
padding-bottom: 10px;
font-family:;
font-size:17px;


}

#footer h6{

color: white;
font-family:verdana;
padding-bottom: 10px;
font-size:21px;
line-height:32px;
text-shadow: none;

}




#footer {


height: 355px;
font-family:verdana;




}



h6{margin-top:8px;}

label{
font-size:25px;
color: rgba(0,0,0,0.4);
margin:23px 10px;
text-align: center;
align-self: center;



}
#searchdata{
    
    margin-top:58px;
    
      display:none;
}

#catitem,#conitem{
  font-size:14px; 
   margin-left:5px; 
 width:100%;
 word-wrap:break-word;
 font-family:poppins; 
 opacity: 0.8;
 text-transform:capitalize;
}




#messageitem,#priceitem{
  font-size:13px; 
   margin-left:5px; 
 width:100%;
 white-space:nowrap;
 text-overflow:ellipsis;
 overflow:hidden;
 font-family:poppins; 
 opacity: 0.8;  
}




#locitem{
  font-size:14px; 
   margin-left:5px; 
 width:100%;
 white-space:nowrap;
 text-overflow:ellipsis;
 overflow:hidden;
 font-family:poppins; 
 opacity: 0.8;  
}





#nameitem{
  font-size:11px; 
   margin-left:5px; 
 width:100%;
 word-wrap:break-word;
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
font-size: 19px;
 font-family:poppins;

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

$you = $_SESSION['email'];

require 'connection.php';

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read=0 group by sender_email order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;

echo "(".$datafound.")";

 ?>



MESSAGES</a>

<a href="sport.php" class="" >GALLERY</a>

<a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="index.php?#sellnow" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>


    



<a href="logoutkwasaf.php" style="text-transform: uppercase;" class="" ><i class="fa fa-sign-out"></i>SIGNOUT</a>

  </div></div>





<h1>



 

<a href="logoutkwasaf.php" style="text-transform: uppercase;" class="how" ><i class="fa fa-sign-out"></i> SIGNOUT</a>



<a href="sport.php" class="gallery" >GALLERY</a>

<a href="hoverdowntabs.php" class="gallery" >


<?php 

$you=$_SESSION['email'];

require 'connection.php';

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read=0 group by sender_email order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;

echo "(".$datafound.")";



 ?>

<i class="fa fa-envelope"></i> MESSAGES</a>

<a class="btn open-btn" id="open-btn" onclick="openform()" ><i style="color: white;" class="fa fa-align-justify"></i></a>

<a href="index.php" class="" ><img style="" align="" src="mymain.PNG" height="100" width="200"></a>



</h1>




<br><br>





<div id="popup">

<a onclick="toggle()" id="closex"><i class="fa fa-close"></i></a>

<h6 align="center" id="h6">Edit Name</h6>

<div class="container">

<?php


require 'configure.php';



	 $sql="select* from profile where id='$myid'";

	 $dbc=mysqli_query($conn,$sql);
	
	 while ($row=mysqli_fetch_array($dbc)) {


		$myname=$row['name'];

		
		$myid=$row['id'];
		
		
$mypic=$row['profile_pic'];
	}
		
 ?>

	<form method="POST" id="changeinfo" enctype="multipart/form-data" >
		
		<input type="hidden" name="id" value="<?php echo $myid?>">
		
        <br><input style="font-size:14px;" type="text" name="name" class="form-control"value="<?php echo $myname ?>"><br>

		
		
	<label>User name:</label>	
	<input type="submit" name="submit" id="btn-changeinfo" value="Update" class="btn btn-danger form-control" style="color: white;"><br>

		
	


          <div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>



		
	</form>
	
	
	
	
	
	
	
	
	
	
</div>

</div>





<div id="popup-password">

<a onclick="togglepassword()" id="close-password"><i class="fa fa-close"></i></a>

<h6 align="center" id="h6">Change Password</h6>

<div class="container">

<?php


require 'configure.php';



	 $sql="select* from profile where id='$myid'";

	 $dbc=mysqli_query($conn,$sql);
	
	 while ($row=mysqli_fetch_array($dbc)) {


		
		$myid=$row['id'];
		
		
		$mypassword=$row['password'];
		
		
	
	}
		
 ?>

	<form method="POST" id="changepassword" enctype="multipart/form-data" >
		
		<input type="hidden" name="id" value="<?php echo $myid?>">
		
        <br><input style="font-size:14px;" type="text" name="password" id="password" class="form-control"value=""><br>

		
		
	<label>User name:</label>	
	<input type="submit" name="submit" id="btn-changepassword" value="Update password" class="btn btn-danger form-control" style="color: white;"><br>

		
	


          <div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>



		
	</form>
	
	
	
	
	
	
	
	
	
	
</div>

</div>



<div id="popupAccount">

<a onclick="toggleAccount()" id="closeAccount"><i class="fa fa-close"></i></a>

<h6 align="center" id="h6">Switch Account</h6>

<div class="container">

<?php


require 'configure.php';



   $sql="select* from profile where id='$myid'";

   $dbc=mysqli_query($conn,$sql);
  
   while ($row=mysqli_fetch_array($dbc)) {


    $myname=$row['name'];
    
    $merchant=$row['merchant'];
    
    $myid=$row['id'];

  }
    
 ?>

  <form method="POST" id="switchAccount-form" enctype="multipart/form-data" >
    
    <input type="hidden" name="id" value="<?php echo $myid?>">
    
        <br><select class="form-control" name="merchant">
          
<?php if ($_SESSION['merchant']=='Seller') {
 
echo'<option value="Buyer">Buyer</option>
<option selected value="Seller">Merchant</option>';


} 


else{


echo'<option selected value="Buyer">Buyer</option>
<option value="Seller">Merchant</option>';


}


 ?>
  
       




        </select><br>

    
    
    
  <input type="submit" name="submitAccount" id="submitAccount" value="Switch" class="btn btn-danger form-control" style="color: white;"><br>

    
  


          <div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>



    
  </form>
  
</div>

</div>












<?php 
if($mypic=='profile/'){
    
    $add = "Add"; }

else{
    
    $add = "Change";
    
}



?>












<div id="popup-picture">

<a onclick="togglepicture()" id="close"><i class="fa fa-close"></i></a>

<h6 align="center" id="h6"><?php echo$add;?> profile picture</h6>

<div class="container">




	
	<form method="POST" id="edituser-form" enctype="multipart/form-data" >
		
		<input type="hidden" name="id" value="<?php echo $myid?>">
	
<label>Add profile picture:</label>
		 <br><input style="font-size:14px;" type="file" name="profile_pic" class="form-control" value="<?php echo $mypic ?>"><br>
		
		
	<input type="submit" name="submit" id="submit" value="Add" class="btn btn-danger form-control" style="color: white;"><br>


          <div align="center" class="loading-image" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>



		
	</form>
	
	
	
	


	
	
	
	
	
	
	
	
	
</div>

</div>






<div class="container com">


<div id="com">
  <div id="cy">
<h5 style="color:rgba(255,165,70,1);font-weight: bold;font-size:px;" align="center">Welcome Boss !!</h5></div></div><br>


<div align="" class="container" id="items">

<div id="bom">
  <div id="my">
<div class="row">

<div align='center' class="col-md-6 col-sm-6 col-xs-6" style="">
 <?php
if(!empty($_SESSION['image'])){

echo "<img class='imgProfile' src=". $_SESSION['image']."><br>";

}

else{
    
  echo "<i class='imgProfile fa-solid fa-image'></i><br>";  
    
}


?>      
    
</div>

<div align='center' id='nameProfile' class="col-md-6 col-sm-6 col-xs-6 ">
 <?php


echo "Name: &nbsp;". $_SESSION['name']."<br>";

echo "Email: &nbsp;".$_SESSION['email']."<br>";



?>

<span id="followers" style='color:black;'>


<?php

if ($myfollowers<=1){

 echo$myfollowers;



 ?> <a href="getFollowers.php?id = <?php echo$_SESSION['id']; ?>"><i class="fa fa-user-alt"></i></a>
<?php

}

else{
echo$myfollowers;
?>

 <a href="getFollowers.php?id = <?php echo$_SESSION['id']; ?>"><i class="fa-solid fa-user-friends"></i></a>

<?php

}?>

</span>

<?php

echo"<br>";

echo "Joined: &nbsp;<span style='color:darkgreen;font-family:poppins;'>".$time_ago."</span>";

?>   
    
</div>    
    
    
</div>









</div></div>
<div class="" align="center">

<br><br>

<a style="color: white" class="btn btn-info" onclick="toggle()" > <i class="fa fa-edit"> </i></a>

<a style="color: white" class="btn btn-warning" onclick="togglepassword()" > <i class="fa fa-key"> </i></a>

<a style="color: white" class="btn btn-success" onclick="togglepicture()" > <i class="fa fa-camera"> </i></a>

<a style="color: white" id="btn-delete" href="delete-account.php?id=<?php echo$_SESSION['id'];?>" class="btn btn-danger"><i class="fa fa-trash">&nbsp; </i></a>

<a style="color: white" class="btn btn-primary" onclick="toggleAccount()" > Account <i class="fa-solid fa-toggle-on"> </i></a>
</div>
<br>


</div>

</div>




<?php

require 'configure.php';

$myid = $_SESSION['id'];

list($count)=mysqli_fetch_array(mysqli_query($conn,"select count(*) from comment where sid = '$myid' and sold = 0 and featured=1"));



?>





<br><br>

<div align="" class=" container">

<h4 align="">My paid Ad(s)<span id='count' style='float:right;'><?php echo $count." Item(s)";?></span></h4>
 








<br>


  
    
 

<?php 

require 'configure.php';





        $result=mysqli_query($conn,"SELECT * FROM comment where sid = '$myid' and sold = 0 and featured = 1 order by id desc");
        $count = 0;



        while($row=mysqli_fetch_array($result))
        {
            
             
            ?>
            
      <div id="featured" class='myitems' >      
            
        <?php   
  
  
$price = $row['price'];

if($row['featured']>0){echo"<span id='premium'><i class='fas fa-crown'></i></span>";}



            if ($row['discount']>0) {

 echo "<span id ='discount'>-".$row['discount']."%</span>";
 
}

       if ($row['discount']==0) {

 echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}
else
{
    
    
 echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";   
    
}


echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' src=".$row['photo'].">"." "."</div></a>";



echo "<span id='nameitem' style='' ><a  style='color:green;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";

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




  if($row['category']!='Services' && $row['category']!='Employment' && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
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





  ?> 




                <?php
                
                
           print"</div>";
       
         
           
        }
        


 





        ?>




  
    
    
    
    
    
    
    
    
    
    
</div>
  
</div>










<?php

require 'configure.php';

$myid = $_SESSION['id'];

list($count)=mysqli_fetch_array(mysqli_query($conn,"select count(*) from comment where sid = '$myid' and sold = 0"));



?>





<br><br>

<div align="" class=" container">

<h4 align="">My Item(s)<span id='count' style='float:right;'><?php echo $count." Item(s)";?></span></h4>
 








<br>


  
    


<?php 

require 'configure.php';





        $result=mysqli_query($conn,"SELECT * FROM comment where sid = '$myid' and sold = 0 order by id desc");
        $count = 0;



        while($row=mysqli_fetch_array($result))
        {
          
            ?>
        <?php   
  echo "<div class='myitems' id='myitems'>";   
$price = $row['price'];

            if ($row['discount']>0) {

 echo "<span id ='discount'>-".$row['discount']."%</span>";
 echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

       if ($row['discount']==0) {

 echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}


echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' src=".$row['photo'].">"." "."</div></a>";



echo "<span id='nameitem' style='' ><a  style='color:green;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";

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




  if($row['category']!='Services' && $row['category']!='Employment' && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
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








  ?> 




                <?php
                
                
           print"</div>";
       
          
           
        }
        


 





        ?>



  
    
    
    
    
    
    
    
    
    
    
</div>
  
</div>



<?php

require 'configure.php';

list($countx)=mysqli_fetch_array(mysqli_query($conn,"select count(*) from comment where sid = '$myid' and sold = 1"));





?>




<br><br>
<div align="" class=" container">
<h4 align="">Sold Item(s)<span id='count'><?php echo$countx." Item(s)"; ?></span></h4><br>
 







  
    


<?php 

require 'configure.php';

$myid = $_SESSION['id'];



        $result=mysqli_query($conn,"SELECT * FROM comment where sid = '$myid' and sold = 1 order by id desc");
        $count = 0;
        while($row=mysqli_fetch_array($result))
        {
           
         
            ?>
        <?php   
        echo"<div class='myitems' id='myitems'>";
     
$price = $row['price'];

            if ($row['discount']>0) {

 echo "<span id ='discount'>-".$row['discount']."%</span>";
 echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

       if ($row['discount']==0) {

 echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}



echo "<a href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' width='' src=".$row['photo'].">"." "."</div></a>";



echo "<span id='nameitem' style='' ><a  style='color:green;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";

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

 

  if($row['category']!='Services' && $row['category']!='Employment' && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
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
             echo"</div>";      
                
                
           
        }
        
        ?>


  
    
    
    
    
    
    
    
    
    
    
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
echo "<span id='discount'>-".$row['discount']."%</span>";
}
echo "<br><a href='details.php?id={$row['id']}&.{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><span style=''><img class='imgitem' width=''  src='https://via.placeholder.com/200' data-flickity-lazyload=".$row['photo'].">"." "."</span></a><br>";



echo "<span id='nameitem' style='' ><a style='color:green;' target='_blank' href='details.php?id={$row['id']}'>".$row['name']."</a></span>"."<br>";



    
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




  if($row['category']!='Services' && $row['category']!='Employment' && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
      echo"<div id='conitem'>Condition: ".$row['con'].""."</div>";


}


if (!empty($row['petsAge'])) {
  
  echo"<div id='conitem'>Age: ".$row['petsAge']."</div>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<div id='catitem'>Farm type: ".$row['farmingType']."</div>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<div id='conitem'>Type: ".$row['foodType']."</div>"; 
}




if (!empty($row['employmentType'])) {
  
  echo"<div id='conitem'>Type: ".$row['employmentType']."</div>"; 
}



if (!empty($row['serviceType'])) {
  
  echo"<div id='conitem'>".$row['serviceType']."</div>"; 
}






  
  echo "<br></div>";

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
    $("a#btn-delete").click(function(e){
        if(!confirm('Are you sure you want to delete your account?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});

</script>


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






<script type="text/javascript">



  var postData = "text";

  $('#btn-changeinfo').on('click',function(e){

        e.preventDefault();
        
        
    
        
        
        
        

     $("#loading-image").show();


      $.ajax({

            type: "POST",

            url: "edit-profile.php",

            data:  $("#changeinfo").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {

          $("#loading-image").hide();

             if (response==1) {

            swal({
                text:"Record has been saved",
                icon:"success",
                 
            });
            $("#popup").hide(1000);

 $('#bom').load(location.href + " #my");

 $('#com').load(location.href + " #cy");


            
              $("#form-signup")[0].reset();
              
}
       else{
            swal({icon:"error",
             title:"Oops...",
            text:response
                
                
            });
            
            $("#form-signup").find('input:text').val('');

             $("#form-signup").find('input:password').val('');

            $("#form-signup").find('input:email').val('');

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



  var postData = "text";

  $('#btn-changepassword').on('click',function(e){
      
      
    var password = $("#password").val();
    

        e.preventDefault();

     $("#loading-image").show();


      $.ajax({

            type: "POST",

            url: "edit-password.php",

            data:  $("#changepassword").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",
         
            
     success: function(response) {

          $("#loading-image").hide();

             if (response==1) {

            swal({
                text:"Password has been modified",
                icon:"success",
                 
            });
            $("#popup-password").hide(1000);

 
              
}
       else{
            swal({
                icon:"error",
                 title:"Oops...",
                text:response}
            
            
            );
            
            $("#form-signup").find('input:text').val('');

             $("#form-signup").find('input:password').val('');

            $("#form-signup").find('input:email').val('');

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



  $('#submitAccount').on('click',function(e){

   if (confirm("Are you sure to want to switch Account?")) {


        e.preventDefault();

   $("#loading-image").show();



      $.ajax({

            type: "POST",

            url: "switch-account.php",

            data:  $("#switchAccount-form").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {

             $("#loading-image").hide();


  if(response==1){



swal({

text:"Record has been saved",

icon:"success",

});


 $("#popupAccount").hide(1000);




            }


       else { 
           
             swal({

text:"Error in saving record",

 title:"Oops...",

icon:"error",

});


            }

 }
       

        });


 }


    });





</script>












<script type="text/javascript">


  $('#edituser-form').on('submit',function(e){

   if (confirm("Are you sure to change this?")) {


        e.preventDefault();

   $(".loading-image").show();

   var formdata = new FormData();


      $.ajax({

            type: "POST",

            url: "edit-profile-pic.php",

            data:new FormData(this),

             cache:false,

            processData:false,

            contentType:false,

             success: function(response) {

             $(".loading-image").hide();


  if(response==1){



swal({

text:"Image has been saved",

icon:"success",

});


 $("#popup-picture").hide(1000);

 $('#bom').load(location.href + " #my");

 $('#com').load(location.href + " #cy");





            }


       else { 
           
             swal({
                 icon:"error",
                  title:"Oops...",
                 text:response
                 
                 
                 
             });


            $("#edituser-form")[0].reset();

            
           

            }




 }
       

        })


 }




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









<script type="text/javascript">
    
    function toggle() {


var popup = document.getElementById('popup');
popup.classList.toggle('active');


        }




</script>



<script type="text/javascript">
    
    function toggleAccount() {


var popup = document.getElementById('popupAccount');
popup.classList.toggle('active');


        }




</script>








<script type="text/javascript">
    
    function togglepassword() {


var popup = document.getElementById('popup-password');
popup.classList.toggle('active');


        }




</script>

<script type="text/javascript">
    
    function togglepicture() {


var popup = document.getElementById('popup-picture');
popup.classList.toggle('active');


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
 <p style="color: white;font-size: 13px;font-family:poppins;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>+2347033506332<br>Contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:poppins;">About us<br>Services<br>Our team<br>Support center<br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins;">Career<br>Term & Conditions<br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">Our partners<br>Faq<br></p>


</div>



</div>

<div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:'Monserrat',sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>

</div>


</div>



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
               swal({icon:"success",
               text:"Thanks for subscribing"});
          
 $("#subscribe-form")[0].reset();
           
}

else{
    
       swal({icon:"error", title:"Oops...",text:response});
    
}
            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>






















</body>

