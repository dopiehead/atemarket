<?php session_start(); 


 ?>






<!DOCTYPE html>
<html>
<head>

   <title>&agrave;t&#233; -The online marketing website | Services</title>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=0"  charset="utf-8">
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
  <script>











</script>



<style type="text/css">
  

html{
    
    scroll-behavior:smooth;
}




body{
background:linear-gradient(to top right,rgba(195,195,195,0.1),rgba(0,70,90,0.2)); 
font-family:poppins;

}




 
h1{
 height:68px;

    
    
} 
h1 img{

float:left; 

opacity:1;

height: 43px;

width:135px;

margin-left:-3px;

margin-top:2;


    
}






.container{


  z-index: 55;
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



.faq:hover,.how:hover{

opacity: 0.8;

text-decoration: none;

color: white;



}

.how{
font-weight: bold;
font-family:verdana;
float: right;

font-size:15px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;

}

.gallery{

font-family:montserrat;
opacity:;
float: right;

font-size:15px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;

font-weight: bold;

}






::placeholder{


  font-style:;
  color:;
  opacity: 1;

}


.btn-down{
    
box-shadow:0px 5px 8px 0px rgba(0,0,0,0.5);    
   

  top: 80%;
  display: none;

border:2px transparent transparent;

left:15px;

font-weight: bold;

cursor: pointer;

background-color:rgba(255,165,50,1);

color: white !important;

font-size: 20px;

position: fixed;

z-index: 100;



  }




a:hover{

opacity: 0.8;

}



hr{

display:none;


}






h4{
  margin-bottom:15px;  
    
    
}



#navbar a{


  margin: 0px 15px;
  font-size: 18px;
  color: white;
}







h4,h6{


  text-align: center;
}

ul{
    
    display:block;
}



h1{
position:;
top:0;

z-index:100;


width:100%;

height:68px;

background-color:rgba(0,0,20,0.6);

padding:10px 8px;
transition:top o.3s;

-webkit-box-shadw:0 0 5px red !;

box-shaow:0 0 5px ;



} 




h1{

top:0;

z-index:100;


width:100%;

height:68px;

background-color:rgba(0,70,90,0.7);;

padding:10px 8px;
transition:top o.3s;

box-shadow:0 0 5px rgba(0,0,0,0.3);



} 


.faq{

display: block;

float: right;

font-size:15px;

cursor: pointer;

color: white;

border-radius:8px;

padding:8px 3px;

margin-right:13px;
font-weight: bold;
font-family:montserrat;

}
@media only screen and (orientation:landscape){
 



    h2{

margin-top: -5px;


    }









}









@media only screen and (max-width:497px){




hr{
border:2px solid red;
width:120px;
display:none;

} 




h1 {

height:60px;

}




} 
@media only screen and (max-width:767px){

 
hr{
border:2px solid red;
width:120px;
display:none;

margin-bottom:;
}    
    
 h4:before, h4:after{
content: " ";
display: ;
width: 160px;
border:1px solid rgba(192,192,192,0.9);

}  


h4{
  font-family:sans-serif;  
  opacity:0.8;
    
}

label{
font-size:25px;
color: rgba(0,0,0,0.4);
margin:23px 10px;
text-align: center;
align-self: center;



}


.faq,.gallery,.how{

  font-size:14px;
}



@media only screen and (max-width:1266px){
    
    
    
    
 h1 img{

float:left; 

opacity:1;

height:43px;

width:105px;

margin-left:-2px;

margin-top:-1px;
    
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
   display: block;
  color: white;
  font-size: 30px;
  float: right;
  cursor: pointer;
  margin-top:-8px;
  
  
}



p{
    
    font-size:14px;
}


.btn-down{
    
    left:15px;
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

 if (!empty($_SESSION['email'])) {echo'<a style="" href="sport.php" class="" >GALLERY</a>


<a  href="logoutkwasaf.php" class="" ><i class="fa fa-sign-out"></i>SIGN OUT</a>
 ';


} 


else{

echo'<a href="sport.php"  class="" >GALLERY</a>

<a href="newsignup.php" class="" >&nbsp;PROFILE&nbsp;&nbsp;</a>


';

}

     ?>



<a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="newsignup.php" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>


    


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

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read = 0  group by sender_email order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;



echo "(".$datafound.")";

}

 ?>













<i class="fa fa-envelope"></i> MESSAGES</a>



<a class="btn open-btn" id="open-btn" onclick="openform()" ><i style="color: white;" class="fa fa-align-justify"></i></a>
<a href="index.php" style="text-decoration: none;"><img style="" align="" src="mymain.PNG" height="80" width="200"></a>


</h1>


<figure  id="categories">

<figcaption>
  <br> 
<h6><b style="font-size:18px;">Services</b></h6>

<div class='container' style='padding:8px;'>

<p  style="color:rgba(0,0,0,0.6);font-size:;font-family:;">

 <br><br><b>Ad title</b><br><br>

Short title matching the description of products not more than 18 words


<br><br><b>Ad description</b><br><br>

Your ad description should describe what is being advertised. It should not be copied from other advertisers (this is illegal under copyright laws). It should also not contain unnecessary search words, offensive remarks, or links to other auction/classifieds/marketplace sites. Unnecessary search words are words that do not directly refer to the item itself, but rather refer to closely related items. For example, ads for Nike shoes should not contain the words "Adidas", "Reebok", or "Puma".


<br><br><b>Ad language</b><br><br>

Only ads in English is allowed.


<br><br><b>Ad category</b><br><br>

You should place your ad in the category that best describes what is being advertised.


<br><br><b>No multiple items in 1 ad</b><br><br>

You should only advertise 1 unique item in each ad.


<br><br><b>No duplicates</b><br><br>

You should not place the same ad more than once. If you wish to advertise the same item again, please delete your previous ad before you insert a new ad of the same item. Posting the same ad using a different name or email is also not allowed.


<br><br><b>Links</b><br><br>

You can place links that are relevant to your ad in the ad text description. However, you cannot place links to another auction, classifieds, or marketplace site.


<br><br><b>Images</b><br><br>

You should add images that are relevant to your ad. Company logos should not be used as images except for the "Services", "Jobs" and "Businesses for Sale" categories.
<br>
<br>An image is not suitable if it:
<br>Was taken by another advertiser, and is being reused without their consent (this is illegal under copyright laws)
<br>Contains contact details (phone, email, links, Facebook, or any other personal info)
<br>Contains images of children
<br>Contains promotional words
<br>Contains an advertiser's own watermark of contact details and price
<br>Contains a watermark of a company logo placed in the centre or any of the four corners of the image; or covering more than 30% of the image
<br>Is a collage, i.e. includes multiple images edited into the same image
<br>Is a stock photo
<br>Is downloaded from the www.atemarket.com website
<br>Is not in JPEG or PNG format.
<br>Is greater than 2mb.
<br>Is reused from any other ad on www.atemarket.com
<br>Is too small or unclear, or is irrelevant
<br>Could be perceived to be offensive or provocative in nature, for example, images of live models for lingerie products



<br><br><b>Realistic offers</b><br><br>

You should provide the actual selling price of your item in your ad, except for ads under the "Jobs" category.  www.atemarket.com reserves the right to refuse unrealistic selling prices which we do not think are the actual full price of your item (strictly no instalments, down-payments or trade-in prices).


<br><br><b>Bidding and auctions</b><br><br>

We do not accept any ads related to auction or bidding. We only accept ads with actual prices.


<br><br><b>Illegal goods</b><br><br>

Ads featuring goods that are prohibited from sale according to Nigerian laws are not allowed on atemarket.com. For the list of illegal goods, click here.


<br><br><b>Prohibited goods and services</b><br><br>

atemarket.com has restrictions against the advertising of certain goods and services. For the list of prohibited goods and services, click here.


<br><br><b>Offensive content</b><br><br>

Ads or images that could be perceived as offensive to ethnic groups, individuals, or public figures are not allowed.




<br><br><b>Additional rules</b><br><br>


<br><br><b>Ads</b><br><br>
Users can post maximum 2 free ads at any one time. If an individual wishes to place more than 2 ads at any one time in the same category, he or she will be required to pay for a featured + and pay the appropriate ad listing fee.
<br>Swaps are not allowed.


<br><br><b>Other vehicle ads</b> (including vehicle accessories)<br><br>
Private Users can post 1 free ad at any one time. If an individual wishes to place more than 1 ad at any one time, he or she will be required to register for a featured + and pay the appropriate ad listing fee.
<br>Swaps are not allowed.


<br><br><b>Property ads</b><br><br>
Private Users can post 1 free ad at any one time. If an individual wishes to place more than 1 ad at any one time, he or she will be required to register for a featured + and pay the appropriate ad listing fee.
Swaps are not allowed.


<br><br><b>Electronics ads</b><br><br>

Private Users can post 5 free ads at any one time per sub-category [Sub-categories are Mobile phones and gadgets, Phones & Gadget accessories, TV/Audio/Video, Computers & Accessories and Camera & Photography]. If an individual wishes to place more than 5 ads at any one time, he or she will be required to register for a featured + and pay the appropriate ad listing fee. It is free to post ads in Games & Consoles.


<br><br><b>Job ads</b><br><br>
To post a job ad, employers or recruitment agencies are required to sign up for a featured plus and pay the appropriate ad listing fee
A job ad must include the following:<br><br>
Name of the company<br>
Fixed line number (employers may choose to hide this info in their contact details)<br>
Relevant information about the position offered, such as requirements of the job<br>
If an employer or recruitment agency has vacant positions in different locations to offer, the employer or recruitment agency is required to place separate ads for each vacant position and location


<br><br><b>Business for Sale ads</b><br><br>

This category is for business owners looking to sell off their existing business. Ads related to joint-ventures, partnerships, or looking for business funds are not accepted.




<a class='btn btn-down' onclick="topFunction()"><i class='fa fa-arrow-up'></i></a>




 <br><br><b>SECURITY</b><br><br>





<br><br>Transferring Money Online<br><br>
When you make payments and money transfers online, you should be aware of "Phishing". "Phishing" is when someone tries to trick you to obtain sensitive information such as passwords, bank account, or credit card numbers. It is often triggered by fake e-mails from Internet sites you know or trust, asking you to click on a link and fill in your personal data/information. The link will typically lead to a page that looks like that bank's website, but is controlled by someone else. Such sites are used to cheat the public and obtain personal information.






<br><br><b>Shop Safely</b><br><br>
Never pay in advance to a seller that you do not know.<br>
Even if the seller discloses his/her personal information or bank account number, this does not protect you from being cheated.<br>
Always request for the original receipt of purchase from the seller, to verify that he/her is the rightful owner of the item; and to verify that the item is authentic.<br>
Avoid sending goods or payment; instead, meet in person and do COD (Cash on Delivery).<br>
Meet at a public place to deal.

<br><br>Take extra caution when ...<br>
The offer sounds too good to be true.<br>
The other party keeps pushing you to complete the deal.<br>
The other party claims to be overseas or working offshore.<br>
You are asked for your bank account or credit card number.<br>
You are asked to pay large amounts of money without meeting the seller.<br>
Buying branded items. It is always advisable to meet up with the seller and check the authenticity of the item at a certified shop.<br>



<br><br>ate.com reserves the right to:<br>
Remove unsuitable images, and edit or delete any unnecessary search words or promotional words<br>
Request advertisers to amend their ad to comply with the above mentioned rules<br>
Exercise sole discretion in making a final decision on whether an ad violates atemarket.com's rules or spirit of use<br>
Suspend, deactivate and/or terminate any account which ate deems to be inappropriate<br>
</p>
</figcaption>

</figure>


