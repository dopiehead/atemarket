
<?php 
session_start();


if (!isset($_SESSION['id'])) {
   echo ("<script>location.href='signup.php'</script>"); 
   exit();
}

$simerchant=$_SESSION["merchant"];

 $siname=$_SESSION['email'];

 $sid=$_SESSION['id'];
 
 
 
 

?>
<!DOCTYPE html>
<html lang="en">
<head>


  <title>&agrave;t&#233; -The online marketing website | Dashboard</title>

  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

  <link rel="stylesheet" href="flickity.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">

    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    
   
<meta name="google-site-verification" content="ceWM28OEdCl4dgg-z7d9ytniljgNDubA3FxLf4L1MaM">

<script src="sweetalert.min.js"></script> 



  <script src="jquery-1.11.3.min.js"></script>
<script src="flickity.pkgd.min.js"></script>

<style type="text/css">

.profilepic{

  border-radius: 50%;
  border:2px solid transparent;
  box-shadow:0px 0px 13px rgba(0,0,0,0.3);
  padding:2px;
  height:180px;
  width:180px;
  margin-top:5px;
  margin-bottom: 5px;
}



body{

	background-image:linear-gradient(to top left,rgba(0,90,70,0.1),rgba(243,243,243,0.1));
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

 top: -126px;

 
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










.fashion,.vehicles,.housing,.pets,.farming,.food,.condition,.employment,.entertainment,.baby,.services{

  display: none;
}


#premium{
    
    position:absolute;
    top:10px;
    left:15px;
    
}    
    
#premium i{
    
    
    color:gold;
    font-size:15px;
}   











#over{

width:100px;
height:100px;
margin-left: 50%;
margin-top:15%;
position: fixed;
background-color:white;
z-index:9999;

}

#submitButton{
font-size: 14px;


}


#over-parent{

width:100%;
height:100%;

 
position: fixed;
background-color:white;
z-index:9999;

}
.imginfo{
display: none;
height:20px;
}


.details-head{
display: block;
text-align: center;
opacity: 0.7;
margin-top:15px;
margin-bottom: 20px;
font-size: 15px;
color:darkgreen;
}
#secondary{
  visibility:;
  border-bottom:1px dotted rgba(0,0,0,0.1);
  padding-bottom: 20px;
}

#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 14px; 
}



#hidehint{

  opacity:;  font-family:'Monserrat',sans-serif;font-size:15px;
  color:red;
  
  padding:10px;
}


.how,.gallery,.faq{display: block;}


.fa-eye,.fa-eye-slash{
color: rgba(0,40,255,0.8);


}

.switch {
  position: relative;
  display: inline-block;
  top: -17px;
  width: 70px;
  height: 30px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;

  cursor: pointer;
  top: 0px;
  left: 0;
  right: 0;
  bottom: 0;
  background-color:rgba(0,0,20,0.8);
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 24px;
  width: 18px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color:red;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(40px);
  -ms-transform: translateX(40px);
  transform: translateX(40px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

#catitem{

  font-size:15px;
}






.icon-bar{


  position: fixed;
  top: 70%;
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
  font-size:14px;
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


#discount{
background-color: rgba(255,195,50,0.4);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: absolute;
top:50px;
font-weight: bold;
padding: 3px;
right:98px;


}
#views{

position: absolute;
top:50px;
left: 15px;
background-color: rgba(192,192,192,0.9);
color: black;
font-weight: bold;
padding:3px;
font-size:14px;
 

z-index:;
}


.carousel{

  width: 100%;
  margin-top:-5px;margin-bottom:18px;
}

.form-control{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 13px;
  box-shadow: 0px 0px 8px solid rgba(0,0,0,0.3);

  
}

h4 span, h6 span{
padding:8px;
background-color: rgba(0,70,90,0.7);
  color:white;
 
}







#result{
  font-size:13px;

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

}





#views{

padding-left:15px;

opacity:0.7;

}

html{
    
    scroll-behavior:smooth;
}


body{user-select:; 

}
#contact-info{

 font-family:'Montserrat';




}

.overlay,#overlay{

  display:none;
}

.open-btn{

display: none;


}







#see{

padding:10px 15px;
background-color:rgba(255,165,50,1);
color:white;
border:1px solid transparent transparent;
border-radius:10px;
text-decoration: none;
box-shadow: 0px 0px 5px;
font-size: 15px;
box-shadow:0px 8px 15px rgba(0,0,0,0.3);


}
#see:hover{


text-decoration: none;


}

.post-pro{

 font-family:'Monserrat',sans-serif;
color: red;


}




h1{

height:65px;

background-color:rgba(0,70,90,0.7);

padding:10px 8px;


} 

a.open-button{
margin-top: 2px;
  float: right;

border:1px solid transparent transparent;

background-color: white; 

font-size:14px;

cursor: pointer;

color:black; 



}

a:hover{
    
    opacity:0.85;
    
    
    
}
#sale{

padding: 8px;
border:1px solid transparent transparent transparent;



}
#loader{

width:80px;
height:50px;


}

.flickity-prev-next-button {
  display: block;
}
.flickity-button:disabled {
  display:;
}
 

 
#menu{

height:250px;
width:290px;
color: white;
font-size: 16px;
text-align: center;
margin-left:3px;

background-color:rgba(0,0,20,0.6);

padding:150px 0px;



}

#menu p a{


color: white;
font-size: 16.5px;

text-decoration: none;




}

#menu i {


color: rgba(255,165,50,1);
font-size: 29px;

text-decoration: none;



}
#package{
  
}





.it textarea{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 15px;
  box-shadow: 0px 0px 2px rgba(0,0,0,0.3);
height:120px;
}









.it textarea,.it select,.it input{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 15px;
  box-shadow: 0px 0px 2px rgba(0,0,0,0.3);

}


#menu p a:hover{
opacity:0.8;

color: rgba(255,165,50,1);
font-size: 29px;





}

.it{

margin-bottom: 10px;
  font-size:15px;
  opacity:;
}


.it #dis{

line-height:32px;
  
  opacity:;
}









.fa-gavel,.fa-shopping-cart,.fa-user-plus{

  
  margin-right:20%;
  margin-left: auto;
  font-size:18px;
  padding:38px;
  color: white;
  background-color:rgba(0,70,90,0.7);
  border-radius: 50%;
  border:1px solid transparent transparent;
  box-shadow:0px 0px 8px rgba(0,0,0,0.4);
  margin-bottom:18px;
  margin-top:35px;
}






#serv1{
    
    
    display:none;
}




.faq{

font-weight:bold;

float: right;

font-size:14px;

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


.items{

  margin-top:0px;
  margin-bottom:10px;
}



#how{

  margin-top:-12px;
  margin-bottom:20px;
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
display: block;
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


.btn-up{

border:2px solid white;

font-weight: bold;

outline: none;

color: white;

font-size: 14px;

position: absolute;

left: 45%;

top: 45%;





}

.btn-up:focus{

    

   color:white; 

    

}

#footer p{

color: white !important;
padding-bottom: 10px;
 font-family:'Monserrat',sans-serif;



}

#footer h6{

color: white;
 font-family:'Monserrat',sans-serif;
padding-bottom: 10px;
font-size:22px;
text-shadow: none;

}


#footer-logo img{

height: 150px;
width: 250px;
margin: 25px 10px;


}







#footer {

padding:10px;
height: 285px;
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
h6{



margin-bottom:8px;

}

h4,h6{


color: darkblue;
text-align: left;
font-size:16px;


}


col-md-4{


text-align: center;
}









h1 img{
float:left; 

opacity:1;

height: 60px;

width:135px;

margin-left:-8px;

margin-top:-5px;

opacity: 1;

}




#btn-gallery a{
font-weight: bold;
font-size:15px;
color: rgba(255,0,0,0.6);
 font-family:'Monserrat',sans-serif;
text-decoration:none;

}

.heading{

position:;

top:0;

z-index: 100;

width: 100%;

}





h6{  font-family:'Monserrat',sans-serif; font-weight: bold;color:black;text-align: center;text-shadow:;





}







h4,h6{


color: white;
text-align: left;
font-weight: bold;
font-size: 16px;

}






p{

 text-align:;



  color:black;

  font-size:13px;

   font-family:poppins;



}

#serv1{
    
    
    display:none;
}

#priceitem{

color: green;
font-size: 13px;

}







#com{

height:300px;

overflow:auto;
overflow-x: auto;
background-color:rgba(192,192,192,0.1);

padding:3px 8px;



}

#result img{

width:150px;
height:130px;

}

#result #discount{
background-color: rgba(255,195,50,0.8);
position: relative;
right: 0px;
top:40px;
padding:3px;

}





#result #priceitem{

color: rgba(255,100,40,1);
font-size: 13px;

}



#content-subscribe{
margin-top:-5px;
font-weight: bold;
 font-family:'Monserrat',sans-serif;
text-transform:capitalize;
position: absolute;
left:46.4%;
font-size:13px;
color:lightgreen;


}



   .col-md-4{

      

   } 


#contentx{

position:absolute;

font-size:13px;

color:red;

 font-family:'Montserrat';

font-style: italic;

text-transform: capitalize;

}



@keyframes fadeOut{



from{

opacity: 1;





}



to{

opacity: 0;



}







}





.main{margin-top: -33px;

width: 100%;

background:linear-gradient(to top left,rgba(0,0,0,0.3),rgba(0,0,0,0.1),rgba(0,0,0,0.4)),url(IMG_6999.JPG);

background-position:top center;

background-size: cover;

height: 325px;



}
.main p{


font-size:13px;

text-align: center;

padding: 0px 30px;

line-height:1; 

color: white;

text-shadow: 2px 4px 5px rgba(0,0,0,0.39),0px -4px 7px rgba(255,255,255,0.3);

letter-spacing: 1px;

font-weight: bold;
 font-family:'Monserrat',sans-serif;

}


.main button{


font-size:17px;

padding: 10px;

text-align: center;

margin: 50px 0px;

border: none;

background-color: rgba(255,165,50,1);

color: white;

font-weight: bold;

}




.fa-warning{
    
    
    font-size:80px;
}





h6:focus{
    
    border:none !important;
    
    outline:none !important;
}





.main h4{


font-size:30px;

text-align: center;

padding:25px;

color: white;

text-shadow: 2px 7px 5px rgba(0,0,0,0.3),0px -4px 10px rgba(255,255,255,0.3);

letter-spacing: 1px;

font-weight: bold;

}







#q{
box-shadow:0px 0px 5px rgba(0,0,0,0.3);

margin-top:-25px;

margin-bottom:25px;

border-radius:10px;

border:1px solid transparent transparent;



width:255px;

font-size:14px; 



 font-style: italic;

color:black;

}
#q:focus{
    
     box-shadow:none;
     outline:none;
    
}



#ht{

  border:1px solid transparent transparent;

  background-color:rgba(0,70,90,0.7);  

  color:white;

  padding:5px;

  width:100%;

  height:45px;

  font-size:13px;

   font-family:'Monserrat',sans-serif;

  font-weight: bold;

}







input[type=file]{



display: none;



}





hr{



}
.wave-top {
  position: relative;
  margin-top: 20px;
}

.wave-top::before,
.wave-top::after {
  border-bottom: 5px solid rgba(237, 30, 30, 1);
}

.wave-top::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 10px;
  background-size: 20px 40px;
  background-image: radial-gradient(circle at 10px -15px, transparent 20px, rgba(237, 30, 30, 1) 21px);
}

.wave-top::after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 15px;
  background-size: 40px 40px;
  background-image: radial-gradient(circle at 10px 26px, rgba(237, 30, 30, 1) 20px, transparent 21px);
}

.wave-mid {
  background-color: rgba(237, 30, 30, 1);
  height: 50px;
}

.main{
  position: relative;
}

.main::before,
.main::after {
 
}

.main::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 10px;
  background-size: 20px 40px;
  background-image: radial-gradient(circle at 10px -15px, transparent 20px, #fff 21px);
}

.main::after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 15px;
  background-size: 40px 40px;
  background-image: radial-gradient(circle at 10px 26px, #fff 20px, transparent 21px);
}


.main{
 ;
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






strong{
display: block;
color: green;


font-size: 13px;

}

col-md-4{

text-align: center;

}





label{

  border: 1px solid transparent transparent;

  background-color:; 

align-content: center;

height: 35px;

padding: 2px;

padding-left:;

color:white;

 font-family:'Monserrat',sans-serif;

font-size:20px;

cursor: pointer;

}




label:hover{

opacity: 0.5;}





input[type=submit]:hover{

opacity: 0.8

}





.form-popup{

display: none;

position: fixed;

bottom:8px ;

right:3px;

border-radiu: 20px 20px 0px 0px;

background-color: white;

background-color: white;

border: 2px solid #f1f1f1;

z-index: 100;

transition: all 3s linear;

}


.form-container{

  width: 360px;

max-width: 360px;

background-color: white;

background-color: white;

padding: 10px;

border-radius: 25px 25px 0px 0px;

transition: 0.8s;

}





.close-button{

color: white;

border: none;

font-size:27px;

position: absolute;

right:1px;

top: -1px;

}





.close-button:focus{



outline: none;

outline-color: transparent;

 border: none !important;



}


.btn-send{



font-size:13px; 



height:40px;



color: white;





margin-bottom:15px;
}


.btn-send:hover, .close-button:hover, .open-button:hover{

opacity: 0.8;

}


input[type=text]:focus{



outline: none;



}
.btn-comment{ background-color: rgba(255,165,50,1); color: white; }



button:hover{

opacity:1;



}



.btn-down{

  top: 65%;

border:2px transparent transparent;

right: 10px;

font-weight: bold;

cursor: pointer;

background-color:rgba(255,165,50,1);

color: white !important;

font-size: 20px;

position: fixed;

z-index: 100;
box-shadow:0px 3px 8px 0px rgba(0,0,0,0.8);


  }





.btn-down:hover{

opacity: 0.8;



  }

.row {



margin-top:1px;

color: rgba(0,0,0,0.8);



}


div#ret{


color:red;

font-style: italic;

z-index: 1;

text-transform: capitalize;

animation: fadeOut 5s forwards;

animation-delay:2s;

}



@keyframes fadeOut{



from{

opacity: 1;


}



to{

opacity: 0;


}



}
.col-md-4 p{
    
 font-size:13px; 

 font-family:'Montserrat';
    
    
}


.con {

line-height:25px;

font-size:14px; 

word-wrap: break-word;

letter-spacing: 1px;

padding-top:8px;

padding-bottom: 25px;



}


.con button {background-color:rgba(255,165,50,1);

  

  border:1px solid transparent transparent;

  color: white;


}


.con button:focus {background-color:rgba(255,165,50,1);

  

  color: white;





}



.con button:hover {background-color:rgba(255,165,50,1);

  

  color: white;

  opacity:0.7;



}





.comment_result{



position: absolute;





color:red;



font-style: italic;



text-transform: capitalize;

animation: fadeOut 3s forwards;

animation-delay:2s;

}



@keyframes fadeOut{



from{

opacity: 1;





}



to{

opacity: 0;



}







}





#navbar{
    display:none;
    
    background-color:#333;
    position:;
    padding

    width:100%;
  
}





ul {
  list-style-type: none;
}

.comment-row {
  border-bottom: #e0dfdf 1px solid;
  margin-bottom:5px;
  padding: 10px;

}

.outer-comment {

  padding:0px;
  overflow-x: auto;

  
  
}

span.commet-row-label {
  
  font-family:'monserrat',sans-serif;
font-style: italic;
}

span.posted-by {
  color:red;
font-size:14px;
font-family:'monserrat',sans-serif;
font-weight: bold;
text-transform: capitalize;
}

span.posted-at {
  color:blue;
font-style: italic;
font-size:;
font-family:'monserrat',sans-serif;

}


.comment-info {
  font-size: 0.8em;

}
.comment-text {
    margin: 8px 0px;
    font-family: arial;
    font-size:14px;
}
.btn-reply, #btn-reply{
    font-size: 0.8em;
    text-decoration: underline;
    color:blue;
    cursor:pointer;
}
#comment-message {
    margin-left:13px;
    color: #189a18;
    display:none;
}




@media only screen and (orientation:landscape){

.how,.gallery,.faq{display: block;}


.it textarea,.it select,.it input{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 13px;
  box-shadow: 0px 0px 3px solid rgba(0,0,0,0.3);

}
.form-control{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 13px;
  box-shadow: 0px 0px 3px solid rgba(0,0,0,0.3);


}
  
h1 img{
float:left; 

opacity:1;

height: 43px;

width:125px;

margin-left:-3px;

margin-top:-1px;

opacity: 1;

}
    
   .main{

   margin-top:-33px;  

   padding:15px 1px;  

     

     

 }  
    
    
#serv1{
    
    
    display:none;
}

    
    
    
    



.btn-up{

     display: none;

    animation: change 3s infinite;

    

    transition: 0.3s;

  



  }





@keyframes change{

from{

  top: 40%;



}

to{

  top: 55%;

}




}


.comment_result{
    
position: absolute;

padding-bottom:3px;

color:red;

font-style: italic;

text-transform: capitalize;

animation: fadeOut 3s forwards;

animation-delay:2s;

}





hr{




}

    h6{

      font-family:'Monserrat',sans-serif;

        

        

    }

    

    

    .form-container{

       width:340px; 

      max-width:340px;

    

    }

    

    

    #items{

       font-size:18px; 

      

        

    }

    

    

    #q{

        width:300px;

        height:40px;

        font-family:century gothic;

        

    }

    

    

    

    p{

        

     font-family:poppins; 

        

    }

    

    

    

    h1{

        height:63px;

   box-shadow:0 0 5px rgba(0,0,0,0.3);



  background-color:rgba(0,70,90,0.6);

  box-shadow:none;

        

    }

    
#imgItem{
    
    width:250px;
    height:240px;
    border-radius:10px 10px 0px 0px;
    
}
    
#navbar {
    
  height:350px; 
    
    
    
}
    

    

   .col-md-4{

       

       

       

   } 

   

   #post, #btn-down, #submit3, {

    background-color:rgba(255,165,50,1);   

       

       

   }

   #ht{

  background-color:rgba(0,70,90,0.7);

   }

   

   hr{

     

       

   }




#serv1{
    
    
    display:none;
}









}









@media only screen and (max-width:497px){
    
    .col-md-4 p{
        font-family:poppins;
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

 



html{
    
    scroll-behavior:smooth;
}

#open-btn{

  margin-top:-1px;
   display: block;
  color: white;
  font-size:28px;
  float: right;
  cursor: pointer;
 display:;
  
}

}

    
 ul {
  list-style-type: none;
}

.comment-row {
  border-bottom: #e0dfdf 1px solid;
  margin-bottom: 5px;
  padding: 10px;
}

.outer-comment {

  padding:10px;
  
}

span.commet-row-label {
  
  font-family:'Monserrat',sans-serif;
font-style: italic;
}

span.posted-by {
  color:red;
font-size:14px;
font-family:'Monserrat',sans-serif;
font-weight: bold;

}

span.posted-at {
  color:blue;
font-style: italic;
font-size:;
font-family:'Monserrat',sans-serif;

}



.comment-info {
  font-size: 0.8em;
  font-family:
}
.comment-text {
    margin: 8px 0px;
    font-family:'Monserrat',sans-serif;
}
.btn-reply, #btn-reply{
    font-size: 0.8em;
    text-decoration: underline;
    color:blue;
    cursor:pointer;
}
#comment-message {
    margin-left: 10px;
    color: #189a18;
    display: none;
    font-family:'Monserrat',sans-serif;
 
    
    .col-md-4{

      
       

       

   } 

    
    
    
    
    
    
    
    
    
    

   h1{

       background-color:rgba(0,70,90,0.7);

    height:63px; 

     padding:6px 8px;

    -webkit-box-shadow:none;

box-shadow:none;   

   } 

#name{
 font-size:13px;
 margin-top:5px;
  
     
 } 
  

#email{
 
   font-size:13px;
     
 } 


#edit{
 font-size:15px;
    
     
 } 


#serv1{
    
    
    display:block;
}





   

   

 #q{

   font-family:poppins;

   width:210px;  

   height:38px;

     

 }

#serv{
    
    
    display:none;
} 

 

 

 

 
  

 

 

 

 

 h6{

  font-family:'Monserrat',sans-serif;

     font-size:14px;

 }

 

 

 

 

 .col-md-4{

     

     margin-bottom:10px;

     

 }

 

 

 

 .form-container{

    width:320px;

    max-width:320px;

     

     

     

 }

 .btn-down{

    top:80%; 
right: 10px;

     

     

     

 }
#outer-circle {

   background:rgba(192,192,192,0.1);

   border-radius: 50%;

   height: 325px;

   width: 325px;

   position: absolute;
   z-index: -1;



 }

 #inner-circle {

   position: absolute;

   background:white;

   border-radius: 50%;

   height: 300px;

   width: 300px;
   

   /*

    Put top edge and left edge in the center

   */

   top: 50%;

   left: 20%;

   margin: -150px 0px 0px -150px;

   /* 

    Offset the position correctly with

    minus half of the width and minus half of the height 

   */

 }



 a.open-button{

     font-size:13px;
margin-top:-1px;
  opacity:0.9;   

     

 }
 body {
  
}

#bottom-menu {
  height: 600px;
 
  opacity: 0;
}
 
 

 .main h4{
     




   text-shadow: 2px 7px 5px rgba(0,0,0,0.3),0px -4px 10px rgba(255,255,255,0.3);  

  font-family:'Monserrat',sans-serif;
  display:;

  font-size:13px;
  
   margin-top:30px;
     color:;
     
     display:;

 }

 

 

 

 .main{



   margin-top:-33px;  

   padding:15px 1px;  

     display:;
     
     height:490px;

     

 }

 .btn-up{

    display:none;

    font-size:15.5px;

 

    animation: change 3s infinite;

    

    transition: 0.3s;

  



  }



@keyframes change{

from{

  top: 45%;



}

to{

  top: 65%;

}


}

 


 .col-sm-6{

   width:100px;  

     

     

 }

 

 a:hover{
         
         
      opacity:0.85;   

     }

     

     

     

 }

 

 #ret{

position:absolute;

 font-family:'Monserrat',sans-serif;



    

 }
#imgItem{
    
    width:250px;
    height:240px;
    
    margin-bottom:8px;
    
    
    
}
 



 

 .items{

    

    margin-bottom:21px;

 }



 

 

 

 




.container{
    
    margin-top:px;
    
}

.btn-down{
    
    opacity:0.9;
    display:none;
}
 

.vid1{

height: 230px;
width: 310px;



} 








 

}











@media only screen and (max-width:767px){
 .col-md-4{

      
 
       

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

 







#open-btn{

  margin-top:-1px;
   display: block;
  color: white;
  font-size:28px;
  float: right;
  cursor: pointer;
 display:;
  
}


#hidehint{
    
    font-family:poppins;
}










#fade {
  

  opacity: 1;
}

#outer-circle {

   background:rgba(192,192,192,0.1);

   border-radius: 50%;

   height: 325px;

   width: 325px;

   position: absolute;
   z-index: -1;

left:2%; 

 }

 #inner-circle {

   position: absolute;

   background:white;

   border-radius: 50%;

   height: 300px;

   width: 300px;
   

   /*

    Put top edge and left edge in the center

   */

   top: 50%;

   left: 20%;

   margin: -150px 0px 0px -150px;

   /* 

    Offset the position correctly with

    minus half of the width and minus half of the height 

   */

 }
















#slideinleft{
margin-left: -300px;
max-width: 100%;
opacity: 0;

}


#slideinright{
margin-right: -300px;
max-width: 100%;
opacity: 0;
}








 
 #imgitem{

width: 320px;
height: 350px;


} 

#serv{
    
    
    display:none;
}





#serv1{
    
    
    display:block;
}





}

@media only screen and (max-width:1024px){


 
 #imgitem{

width: 200px;
height: 200px;


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

  
  
 #secondary{
  visibility:;

 
}
 
  
  
#btn-gallery a{
font-weight: bold;
font-size:17px;
color: rgba(255,0,0,0.6);
 font-family:'Monserrat',sans-serif;
text-decoration:none;

}  
  
  
  
  #contact-info{
      
      font-family:trirong;
  }
  
  
  
  
 #if{
     
  margin-top:10px;   
     
     
 } 
   
.icon-bar a{

display:  block;
  text-align: center;
  padding: 8px;
  transition: all 0.5s;
  color: white;
  font-size:13px;
  z-index:999;
}   
   
   
   
   
   .col-md-4 p{
       
       font-family:poppins !important;
   }
   
 
 
 #result a{

   
        color:green;
    

    z-index:97;

     font-weight:bold;

     font-family:poppins;

 }
 
 
 
 
   
    
    


#result{

     margin-top:1px;
     padding:0px 10px;

     width:44%;

    z-index:97;

     font-weight:bold;

     font-family:poppins;

 }
    
    
    
    
    
    
    

#result img{

width:90px;
height:80px;

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
margin-top: 40%;
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
    
    








#hidehint{

  
}




.comment-text {
    margin: 8px 0px;
    font-family: arial;
    font-size:14px;
}


#discount{
background-color: rgba(255,195,50,0.4);
color: rgba(255,95,50,1);
border: 1px solid transparent transparent;
position: absolute;
top:50px;
font-weight: bold;
padding: 3px;
right:90px;



}












 
.it{

  padding: 10px;
  font-family:poppins;
  font-size: 14px;
  opacity:;

}



.it textarea,.it select,.it input{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 15px;
  box-shadow: 0px 0px 3px solid rgba(0,0,0,0.3);

}


#dis{
font-size: 14px;
line-height: 32px;
  font-family:poppins;
}


#content-subscribe{

font-weight: bold;
 font-family:'Monserrat',sans-serif;
text-transform:capitalize;
position: absolute;
left:35.4%;



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

  margin-top:-4px;
   display: block;
  color: white;
  font-size:28px;
  float: right;
  cursor: pointer;
 display:;
  
}






 
.col-md-4{

     
       
     

   } 

 
 #imgitem{

width: 200px;
height: 200px;


} 
#serv{
    
    
    display:none;
}




.col-md-4{
    
    display:;
    
}
#comment{
  height:100px;  
    
    
}


.main{



   margin-top:-33px;  

   padding:15px 1px;  

     display:;
     
     height:490px;

     

 }

 

 
.footer .row{
    
    
  padding:0px;  
    
}
 

 
.icon-bar{
    
    
    z-idex:999;
}




#ht{
  font-size:13.5px;  
    font-family:'Monserrat',sans-serif;
     background-color:rgba(0,70,90,0.7);
}




.col-md-4 p{
    
 font-size:13px; 

 font-family:'Montserrat';
    
    
}


strong{
display: block;

color: green;

font-size: 25px;

}

h1 img{
float:left; 

opacity:1;

height: 43px;

width:105px;

margin-left:-1px;

margin-top:-1px;

opacity: 1;

}


.faq,.gallery,.how{



float: right;

font-size:15px;

font-weight:bold;

margin-right:7px;



font-family:'Monserrat',sans-serif;



} 
.gallery{
  font-family:verdana;  
    
   font-size:15px; 
   font-weight:bold;
   opacity:0.95;
    
    
}

.fa-gear{font-size:21px;}

h4,h6{margin:8px 0px}






} 


</style>









<body>
    
 <div id="over-parent"><div class="spinner-border text-info" id="over"></div>Loading...</div>   
    
    
    
    
    
    
    
    

<div id="myform" class="overlay" id="overlay">
  <button class="btn close-btn" onclick="closeform()">&times;</button>  
  <div class="overlay-content">
<a href="hoverdowntabs.php" class="" >

<?php 
$you=$_SESSION['email'];

require 'connection.php';

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read = 0 group by sender_email order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;

echo "(".$datafound.")";



 ?>




 MESSAGES</a>
<a href="sport.php" class="" >GALLERY</a>





<a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="index.php" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>


  <a href="logoutkwasaf.php" style="text-transform: uppercase;" class="" ><i class="fa fa-sign-out"></i> SIGN OUT</a>

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







  <div class="heading">

<h1>




<a href="logoutkwasaf.php" style="text-transform: uppercase;" class="how" ><i class="fa fa-sign-out"></i> SIGN OUT</a>



<a href="sport.php" class="gallery" >GALLERY</a>

<a href="hoverdowntabs.php" class="gallery" >


<?php 
$you=$_SESSION['email'];

require 'connection.php';

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read = 0 group by sender_email order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;

echo "(".$datafound.")";



 ?>








<i class="fa fa-envelope"></i> MESSAGES</a>

<a class="btn open-btn" id="open-btn" onclick="openform()" ><i style="color: white;" class="fa fa-align-justify"></i></a>

<a href="index.php" class="" ><img style="" align="" src="mymain.PNG" height="100" width="200"></a>

</h1>


</div>

 

  


<br>


<?php

require_once 'configure.php';


$check_pic = mysqli_query($conn,"select * from profile where id = '$sid'");

while($datafound=mysqli_fetch_array($check_pic)){
    
    
 if($datafound['profile_pic']=='profile/'){
 ?>    
 <div class='container'>
     
  <span style='background-color:lightgreen;color:black;padding:190px 15px;margin:auto; position:fixed;left:0,right:0;z-index:999;'>Please upload a profile picture to <a href='edituser.php?mypage=addimage'><b>continue <i class='fa fa-chevron-right'></i></b></a></span>  
</div>

<?php 
     
 }   
    
}











?>












<br>





<div class="wrap">


<div class="container" style=";">

<i><input type="text" class="form-control" name="q" id="q" placeholder="&#xF002;     Live search" onkeyup="q()" style="font-family: Arial, Fontawesome;width: 100%;" ></i></div>

<div class="" id="result"></div>

<div class="container">
    
<?php

if($_SESSION['merchant']=='Seller'){


if(!empty($_SESSION['image'])){


?>    



<div id="contact-info" align="center">
    
    
    <a href='edituser.php'><img class="profilepic" src="<?php echo$_SESSION['image'];?>"> </a><br> <br> 
          <b style="color: rgba(0,0,0,0.5);"><i class="fa fa-user-cirle"></i>&nbsp;&nbsp;Hi</b><span style="color: red;"><a href='edituser.php'><?php echo" &nbsp; ".$_SESSION['name']; ?> </a></span>&nbsp;&nbsp;&nbsp;<a href="edituser.php"><i class="fa fa-gear"></i></a>&nbsp;&nbsp;&nbsp;<?php echo$simerchant.'('.$sid.')';?><br><br></div><br>


<?php

}
else{
    
  echo "<i class='profilepic fa-solid fa-image'></i><br>"; 
  
     
}


}
?>
<div class="row" id="row">


<div class="col-md-4" id="sellnow"> 




<?php

if($_SESSION['merchant']=='Buyer'){
if(!empty($_SESSION['image'])){
?>    
<br>
<div id="contact-info" align="center">
    
    
     <a href='edituser.php'><img class="profilepic" src="<?php echo$_SESSION['image'];?>"></a> <br> <br> 
          <b style="color: rgba(0,0,0,0.5);"><i class="fa fa-user-cirle"></i>&nbsp;&nbsp;Hi</b><span style="color: red;"><a href='edituser.php'><?php echo" &nbsp; ".$_SESSION['name']; ?> </a></span>&nbsp;&nbsp;&nbsp;<a href="edituser.php"><i class="fa fa-gear"></i></a>&nbsp;&nbsp;&nbsp;<?php echo$simerchant.'('.$sid.')';?><br><br></div><br>


<?php



}
else{
    
  echo "<i class='profilepic fa-solid fa-image'></i><br>";  
    
}
}


?>
















<div class="it" id="slideinleft">

<?php if ($simerchant=='Seller') {
  echo "<h4><span>Sell your produce</span></h4>";
}  ?>



<form method="post" id="form-product" enctype="multipart/form-data">

<input type="hidden" name="sid" value="<?php echo $_SESSION['id'];?>">

<input type="hidden" name="siname" value="<?php echo $_SESSION['email'];?>">

<input type="hidden" name="views" value="0">

<input type="hidden" name="discount" value="0">

<input type="hidden" name="sold" value="0">

<input type="hidden" name="featured" value="0">

<?php if ($simerchant=='Seller') {
  
  echo '<br>';
  
  
  
  ?>

<input type="text" class="form-control" maxlength="22" name="name" minlenth="5"  placeholder="&#9817;Product name"><br>



<textarea class="form-control" name="details" placeholder="Details of produce" minlength="40"  cols="25" rows="8" wrap="physical"  style="outline: none;"></textarea><br>



<input class="form-control" type="number" maxlength="12" name="price" placeholder="Price &#9839;" style="outline: none;"><br>



<input type="number" class="form-control" name="cell" placeholder="Telephone&#128222;" minlength="10" maxlength="14" min="00000" ><br>



<input type="text" class="form-control" name="loc" placeholder="...Where are you right now?" minlength="3" maxlength="14" min="1" ><br>



<select class="form-control" id="category" name="category" >

  <option selected="">Choose category</option> 

  <option value="Baby">Baby Products</option> 

<option value="Beauty">Beauty</option>

<option value="Catering">Catering</option>



<option value="Electronics">Electronics</option> 

<option value="Entertainment">Entertainment</option>


 <option value="Farming">Farming</option> 

 
<option value="Fashion">Fashion</option> 

<option value="food and beverages">Food and Beverages</option>

<option value="Furniture">Furniture</option>

<option value="Gadget">Gadget</option>

<option value="Health">Health</option>

<option value="Housing">Housing</option>


<option value="Jewelry">Jewelry</option> 

<option value="Kitchen">Kitchen</option> 


<option value="Pets">Pets</option> 

<option value="Phone & Accessories">Phone & Accessories</option> 

 <option value="Vehicles">Vehicles</option> 


<option value="Employment">Employment</option>

<option value="Services">Services</option>

<option value="Sport">Sport</option>


</select>

  <br>



<div class='condition'>
<select class="form-control" name="condition">
 <option selected="" disabled="">Condition</option> 
 <option value="foreign used">Foreign Used</option>
<option value="Used">Used</option>
 <option value="New">New</option>
  

</select><br>

</div>



<div class='baby'>
<select class="form-control" name="babyproductType">
 <option selected="" disabled="">Select Type</option>
 <option value="furniture">Baby's furniture</option>
 <option value="toys">Toys</option>
<option value="prams">Prams & Strollers</option>
<option value="shoes">Baby's shoes</option>
<option value="clothing">Baby's clothing</option>  
<option value="care">Baby care</option>
<option value="accessories">Baby's accessories</option>
</select><br>

</div>







<div class='entertainment'>
<select class="form-control" name="entertainmentType">
 <option selected="" disabled="">Entertainment Type</option>
 <option value="video games">Video games</option>
 <option value="card games">Card games</option>

  
</select><br>

</div>











<div class="vehicles">



<select class="form-control" name="carDetails">
  
  <option selected="" disabled="" >Year</option>
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
 

</select><br>

<select class="form-control" name="vehicleType">
  
<option selected="" disabled=""  value="Vehicletype">Vehicle type</option>
<option value="Saloon">Saloon</option>
<option value="Suv">Suv</option>
<option value="Sport">Sport</option>
<option value="Buses & Shuttles">Bus & Shuttles</option>
<option value="Motor">Motor cycle</option>
<option value="Power">Power Bike</option>
<option value="Bicycle">Bicycle</option>
</select>

<br>




<input class="form-control" type="number" placeholder="mileage" name="carMileage"><br>

</div>


<div class="employment">

<select class="form-control" name="employmentType">
  <option selected="" disabled="">Type</option>
  <option value="job seeker">Job seeker</option>
  <option value="employer">Employer</option>

</select><br>
</div>






<div class="farming">

<select class="form-control" name="farmingType">
  <option selected="" disabled="">Type</option>
  <option value="livesock">Livestock</option>
  <option value="crops">Crops</option>

</select><br>
</div>
<div class="food">

<select class="form-control" name="foodType">
  <option selected="" disabled="">Type</option>
  <option value="drinks">Drinks</option>
  <option value="Ice cream & yoghurt">Ice cream & yoghurt</option>
  <option value="food">Food</option>
  
</select><br>

</div>


<div class="services" id="services">

<select class="form-control" id="serviceType" name="serviceType">
  
<option selected="" disabled=""  value="">Service type</option>
<option value="">All</option>
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


</select><br>

</div>








<div class="fashion">

<select class="form-control" name="fashionSex">
  <option selected="" disabled="">Sex</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
<option value="Boy">Boy</option>
  <option value="Girl">Girl</option>
<option value="Unisex">Unisex</option>
</select><br>


<select class="form-control" name="fashionSize">
  <option selected="" disabled="" ="" value="Size">Size</option>
  <option value="XXL">XXL</option>
  <option value="XL">XL</option>
  <option value="L">L</option>
  <option value="M">M</option>
  <option value="S">S</option>
  <option value="XS">XS</option>

</select>
<br>

</div>



<div class="pets">

<input class="form-control" maxlength="3" type="number" name="petsAge" placeholder="Age">

<br>
</div>


<div class="housing">


<select class="form-control" name="housingType">
 <option selected="" disabled="">Type</option> 
<option value="Land For rent">Land For rent</option>
 <option value="Land For sale">Land For sale</option>
  <option value="Houses & Apartments For rent">Houses & Apartments For rent</option>
  <option value="Houses & Apartments For sale">Houses & Apartments For sale</option>
  <option value="Short rent">Short rent</option>
  <option value="Event centres">Event centres</option>

</select>



<br>
<input class="form-control" type="text" name="Numberrooms" placeholder="&#128719; Number of rooms">
<br>
<input class="form-control" type="text" name="Numbertoilets" placeholder="&#128701; Number of toilets">

<br>



</div>


 
<span class="" style="font-size:14px;" id="">Add Product image</span>:&nbsp;
<label class="parentimage" >
<input type="file" name="imager">&#x1f4f7;</label>&nbsp; 
<img class="imginfo" src="imginfo.PNG"><div style='border:1px solid transparent;box-shadow:0px 0px 5px rgba(0,70,90,0.4);padding:8px;margin-bottom:19px;border-radius:8px;'>
<span id="hidehint" style="">Remove my number from public view. This will prevent non-members from communicating via calling, whatsapp or sms and only email messages will be made available to use. Default is at show phone number</span>.&nbsp;
<br><br><i class="fa fa-eye" style=""></i>&nbsp;<label class="switch">
 
  <input type="checkbox" name="hidemynumber" value="1">
  <span class="slider round"></span>

</label>&nbsp;
<i class="fa fa-eye-slash"></i>


</div>









<input type="submit" id="post" style="box-shadow:0px 8px 15px rgba(0,0,0,0.3);
transition: all 0.3s ease 0s;" class="form-control" name="submit1" value="Post &#10095;">


<?php


}  ?>
<div align="center" style="display: none;" id="loading-image"><img id="loader" src="loading-image.GIF"></div>
</form>


<script type="text/javascript">


  $('#form-product').on('submit',function(e){

        e.preventDefault();

        $("#loading-image").show();
        
        var formdata = new FormData();

      $.ajax({

            type: "POST",

            url: "postproduce.php",

            data:new FormData(this),

            cache:false,

            processData:false,

            contentType:false,

             success: function(data) {

             $("#loading-image").hide();

if (data==1) {

          
              swal({
                       text:"Item(s) uploaded successfully",
                      icon:"success",

              });
                
               $('#bom').load(location.href + " #cy");
               $("#form-product")[0].reset();
               
} 

else{
          swal({
              
              icon:"error",
              title:"Oops...",
              text:data
              
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






<br>


</div>





<div class="col-md-4 col-sm-8 col-xs-4 " id="">







<h6 class="items"><span>Items for sale</span></h6>


<div id="bom">

<div id="cy">
<?php 

require 'configure.php';




$jonas="select *from comment where sold = 0 order by featured desc,id desc limit 4";

$sonia=mysqli_query($conn,$jonas);

$askia=$sonia->num_rows;



  while ($row = mysqli_fetch_array($sonia)) {


echo""."<div class='container it'  style='color:blue; position:relative; border:1px transparent transparent; background-color:rgba(192,192,192,0.3);padding:10px;font-size:px;border-radius:10px;'>";



     echo "<span class='views' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>"; 
     
     if($row['featured']>0){echo"<span id='premium'><i class='fas fa-crown'></i></span>";}

       if ($row['discount']>0) {

  echo "<span id='discount'>-".$row['discount']."%</span>";
}
          

          echo "<div style=''><img id='imgItem' width='' src=".$row['photo'].">"." "."</div>";

          

          echo "<div style='color:red;opacity:0.9; text-transform:capitalize; font-family:monserrat,sans-serif; font-weight:bold;' ><a style='color:red; text-transform:uppercase; font-family:monserrat,sans-serif; font-weight:bold;' >".$row['name']."</a></div>"."";


$price = $row['price'] ;
       
if ($row['discount']>0) {

echo"<span id='priceitem' style=';'><span id='' style=''>Price: <span id='' style='text-decoration:line-through;'>&#8358;".$row['price']."</span></span>";


echo "&nbsp;&nbsp;<span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";

}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}  
          echo"<div id='catitem' style='color:rgba(0,0,0,0.7); text-transform:capitalize;'>".$row['category']."</div>";


             
   if($row['category']!='farming' && $row['category']!='Services' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
      echo"<div id='conitem'>Condition: ".$row['con'].""."</div>";


}

if (!empty($row['petsAge'])) {
  
  echo"<div style='font-size:;' id='catitem'>Age: ".$row['petsAge']."</div>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<div style='font-size:;' id='catitem'>Farm type: ".$row['farmingType']."</div>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<div style='font-size:;' id='catitem'>Type: ".$row['foodType']."</div>"; 
}



if (!empty($row['serviceType'])) {
  
  echo"<div style='font-size:;' id='catitem'>Type: ".$row['serviceType']."</div>"; 
}
            
         

            echo"<div id='catitem' style='color:rgba(0,0,0,0.7);text-transform:capitalize;'><i style='color:blue;' class='fa fa-map-marker'></i> ".$row['loc']."</div>";
                echo "<br><a style='text-decoration:none;' href='details.php?id={$row['id']}.{$row['name']}.{$row['loc']}.{$row['category']}.{$row['message']} 'target='_blank'><span id='see' >See more</a></span>";


    echo"<br><br><i id='catitem' style='color:red; align-self:center;' >Posted on</i>"."  "."<i>". $row['date']."</i><br>";

    
    echo "</div>";

  

}

  if ($askia>3) {
      
      echo "<div id='btn-gallery' align='center'><a href='sport.php?mysort=recent'>Go to gallery <i class='fa fa-arrow-right'></i></a></div><br>";
    }
  

?>


<br>
</div>


</div>

</div>

<div class="container col-md-4 col-sm-4 col-xs-4 " id="" >

<div class="con" id='con'>


<div class="it" style="font-family:poppins;" id="">

<h6 id="how"><span>How to Use</span> </h6>





<p style="color:black;font-size:;font-family:poppins;">

This page is user friendly and easy to use. The logo is the home button. Please follow these steps to have a smooth running on <b style="font-size:px;">&agrave;t&#233;</b> 


<p>Write your product name.</p>



<p>Full details of the product that you want to sell.</p>

 

<p>Select if it's used or new.</p>




<p>Tell us your location to know potential buyers around you.</p>




<p>Price of product, negotiable or not negotiable.</p>



<p>Upload product image: size cannot be more than 2mb.</p>

<p>Phone number to reach you<b>(DO NOT USE A DISCONNECTED PHONE NUMBER).</b></p>

</p>


</div>
<br>

<div class="it">


<h6><span>Leave a comment</span></h6>

 
<br>


<form method="post" action="" id="frm-comment" enctype="multipart/form-data">


<div class="" tabindex="1" id="input-form">
<input type="hidden" name="comment_id" id="commentId" placeholder="Name" value="0">
<input type="text"  name="name" id="name" value="<?php echo$_SESSION['name'];?>"   class="form-control" placeholder="&#xF007; Name" style="text-transform:capitalize;font-family: arial,Fontawesome" value=""></div><br>
<div class="">
<textarea class="form-control" id="comment"  placeholder="..Write  comment here"  cols="" wrap="physical"  name="comment" style="outline: none;"></textarea>
</div>

<span class="comment_result" id="comment-message"></span>

<br>

<?php 


require 'configure.php';

$seebutton="select *from comment where sid='$sid' and sold = 0";

$showbutton=mysqli_query($conn,$seebutton);

$seeshowbutton=$showbutton->num_rows;

if ($seeshowbutton>0) {
  
  echo '<div align="center"><button type="button" id="submitButton" name="submitButton" class="btn btn-comment" style="box-shadow:0px 8px 15px rgba(0,0,0,0.3);transition: all 0.3s ease 0s;">Add comment</button></div>';
}

else{

echo "<div align='center' class='post-pro' style='padding:5px 5px;'>You have to post a produce to add comment</div>";


}

  ?>



</form>

</div>


<span class="comment_result" id="error-message" style="display: none;"></span>

<script>
  function postReply(commentId) {
    $('#commentId').val(commentId);
    $("#name").focus();
  }

  $("#submitButton").click(function() {

   
    $("#comment-message").css('display', 'none');
    var str = $("#frm-comment").serialize();



    $.ajax({
      url : "comment-add.php",
      data : str,
      type : 'post',
beforeSend:function() {

 

 var name = $("#name").val();
 var comment = $("#comment").val();

if (name=='') {swal({

text:"Name field is required",
title:"Oops...",

icon:"error",

});  }

if (comment=='') {swal({

text:"Comment field is required",

title:"Oops...",
icon:"error",

});  }

},



      success : function(response) {
        var result = eval('(' + response + ')');
        if (response) {
         
swal({

text:"Comment added successfully",
icon:"success",

});


          $("#name").val("");
          $("#comment").val("");
          $("#commentId").val("0");
          listComment();

        } else {

          alert("Failed to add comments !");

          return false;
        }
      }
    });
  });

  $(document).ready(function() {
    listComment();
  });

  function listComment() {
    
    $.post(
            "comment-list.php",
            function(data) {
              var data = JSON.parse(data);

              var comments = "";
              var replies = "";
              var item = "";
              var parent = -1;
              var results = new Array();

              var list = $("<ul class='outer-comment'>");
              var item = $("<li>").html(comments);

              for (var i = 0; (i < data.length); i++) {
                var commentId = data[i]['comment_id'];
                parent = data[i]['parent_comment_id'];

                if (parent == "0") {
                  comments = "<div class='comment-row'>"
                      + "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>"
                      + data[i]['comment_sender_name']
                      + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>"
                      + data[i]['date']
                      + "</span></div>"
                      + "<div class='comment-text'>"
                      + data[i]['comment']
                      + "</div>"
                      + "<div><a class='btn-reply' id='btn-reply' onClick='postReply("
                      + commentId + ")'>Reply</a></div>"
                      + "</div>";

                  var item = $("<li>").html(comments);
                  list.append(item);
                  var reply_list = $('<ul>');
                  item.append(reply_list);
                  listReplies(commentId, data, reply_list);
                }
              }
              $("#output").html(list);
            });
  }

  function listReplies(commentId, data, list) {
    for (var i = 0; (i < data.length); i++) {
      if (commentId == data[i].parent_comment_id) {
        var comments = "<div class='comment-row'>"
            + " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>"
            + data[i]['comment_sender_name']
            + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>"
            + data[i]['date'] + "</span></div>"
            + "<div class='comment-text'>" + data[i]['comment']
            + "</div>"
            + "<div><a class='btn-reply' id='btn-reply' onClick='postReply("
            + data[i]['comment_id'] + ")'>Reply</a></div>"
            + "</div>";
        var item = $("<li>").html(comments);
        var reply_list = $('<ul>');
        list.append(item);
        item.append(reply_list);
        listReplies(data[i].comment_id, data, reply_list);
      }
    }
  }
</script>


<div id='content'></div>
<br>

<div id='com'>
 <div id='output'></div>   
    
    

    <div id='my'>

<?php

require 'db.php';





list($count)=mysqli_fetch_array(mysqli_query($con,"select count(*) from tbl_comment"));

$count;



?>

</div>

</div>



<div id="comm" align="right" style="font-family:sans-serif;font-size:16px;">
<div id="myt">
<?php 

if (isset($count)) {

 echo" ".$count.""."<i class='fa fa-comments'></i>"." ";

}



?>

</div>
</div>


</div>


<br>

<div class="it" id="">

<h6 id="how" tabindex="1"><span>Disclaimer</span></h6>


<p style="color:black;">

<span id="dis">
Due to the need for high sales of product, we have initiated an online E-commerce center to give each of our members the opportunity to showcase their products on <b style="font-size:16px;">&agrave;t&#233;</b> website , this is in a way of providing 100% solution to all of BUSINESS OWNERS as your secured sales is our priority. Please ensure your customer/buyer is legit before making payment.  We will not be liable for any loss or damages should you fail to do so.
</span>

</p>





</div>
</div>
</div>


</div>

</div>

</div>  




</div>

<a  onclick="topFunction()" style="" id="btn-down" class="btn btn-down">&#8593;</a>
 
<br>
<div id="" class="icon-bar" align="">

  
<a class="facebook" href="https://web.facebook.com/profile.php?id=100076772181022"><i class='fab fa-facebook'></i></a>



<a  class="twitter" href="https://twitter.com/ngnimitech"><i class='fab fa-twitter'></i></a>




<a class="instagram" href="https://instagram.com/ngnimitech"><i class='fab fa-instagram'></i></a>




<a class="telegram" href="https://t.me/ngnimitech"><i class='fab fa-telegram'></i></a>




</div>

<script type="text/javascript">
  $('.parentimage').hover(function() {



  $('.imginfo').show();
     
  
    
   
  });

</script>





<script type="text/javascript">
  


$('.carousel').flickity({
 
  cellAlign: 'left',
  contain: true,
  autoPlay: true,
  

});




</script>












<script type="text/javascript">





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

function q() {

    var x= $('#q').val();

    document.getElementById('result').innerHTML=x;

    $.ajax({

            type:"GET",

            url:"searchf.php",

            data:{

              "q":x

            },

success:function(res) {document.getElementById('result').innerHTML=res;

  // body...

}


    });

  }
  
 </script>
 
 
 
 
 
 
 
 <script>
  
function topFunction() {



  document.body.scrollTop = 0;



  document.documentElement.scrollTop = 0;



}



</script>












<script>
      
      
     $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 90) {
    $('.btn-down').fadeIn();
  } else {
    $('.btn-down').fadeOut();
  }
});
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 90) {
    $('.btn-down').fadeIn();
  } else {
    $('.btn-down').fadeOut();
  }
}); 
      
  
      
      
  </script>
</div></div>


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
  <form method="post" id="subscribe-form" enctype="multipart/form-data">

<input type="text" name="subscribe" style="" class="form-control" placeholder="    Enter your email address">

<button type="button" id="submit-subscribe" style="" class="btn btn-danger">Submit</button>

</form>
</div>






<br><br>
 <div class="row" style="padding:10px;z-index:-1;">
<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>+2347033506332<br>contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:poppins;"><a style="color: white;" href="about.php">About us</a><br><a style='color:white;' href='services.php'>Services</a><br>Our team<br><a style="color: white;" href="contact.php">Support center</a><br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins;">Career<br>Testimonials<br><a style="color: white;" href="terms.php">Term & Conditions</a><br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">Our partners<br><a style="color: white;" href="faq.php">Faq</a><br><br></p>


</div>

</div></div>





<div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:poppins; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>


</div>



<script>
  $(window).load(function() {
    $('#over').hide();
    $('#over-parent').hide();
  });
</script>




<script type="text/javascript">
  

$(document).ready(function() {

$('#category').on('change',function() {

var category  = $("#category").val();




if (category=='Fashion') {

$('.fashion,.condition').show();

$('.housing,.farming,.pets,.vehicles,.food,.employment,.entertainment,.baby,.services').hide();

}




if (category=='Services') {

$('.services,#services').show();

$('.fashion,.housing,.food,.vehicles,.farming,.employment,.condition,.baby,.pets').hide();

}





if (category=='Entertainment') {

$('.entertainment,.condition').show();

$('.housing,.farming,.pets,.vehicles,.food,.employment,.fashion,.baby,.services').hide();

}





if (category=='Baby') {

$('.baby,.condition').show();

$('.housing,.farming,.pets,.vehicles,.food,.entertainment,.fashion,.services').hide();

}





if (category=='Employment') {

$('.employment').show();

$('.housing,.farming,.pets,.vehicles,.food,.condition,.entertainment,.baby,.fashion,.services').hide();

}





if (category=='Housing') {

$('.housing').show();

$('.fashion,.farming,.pets,.vehicles,.food,.employment,.condition,.entertainment,.baby,.services').hide();

}




if (category=='Farming') {

$('.farming').show();

$('.fashion,.housing,.pets,.vehicles,.food,.employment,.condition,.entertainment,.baby,.services').hide();

}





if (category=='food and beverages') {

$('.food').show();

$('.fashion,.housing,.pets,.vehicles,.farming,.employment,.condition,.entertainment,.baby,.services').hide();

}





if (category=='Pets') {

$('.pets').show();

$('.fashion,.housing,.food,.vehicles,.farming,.employment,.condition,.entertainment,.baby,.services').hide();

}





if (category=='Vehicles') {

$('.vehicles,.condition').show();

$('.fashion,.housing,.food,.pets,.farming,.employment,.entertainment,.baby,.services').hide();

}




if ((category!='Services') && (category!='Farming') && (category!='Fashion') &&  (category!='Pets') && (category!='Housing') && (category!='food and beverages') &&  (category!='Employment') && (category!='Entertainment') && (category!='Baby')) {

$('.condition').show();

$('.housing,.food,.pets,.farming,.employment,.entertainment,.baby,.fashion,.services').hide();


}




});

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










<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9711737947499937"
     crossorigin="anonymous"></script>

</body>

</html>