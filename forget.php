<?php 
session_start();

error_reporting(E_ALL ^ E_NOTICE);
?>

	<title>&agrave;t&#233; -The online marketing website</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Poppins">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
<script src="sweetalert.min.js"></script>
	<script src="jquery-1.11.3.min.js"></script>


<style type="text/css">

body{

overflow-x:hidden;
}


.footer{

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 90px;

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











p a{


  font-family:'monserrat',sans-serif;
  margin-left: auto;
  margin-right: auto;
  display: block;
}



#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}



#alert{

  color: rgba(0,0,0,0.6);
  font-family: sans-serif;
  font-weight: bold;
  font-size:15px;
  letter-spacing:0.5px;
  background-color: lightgreen;
  padding: 6px;


animation: fadeOut 3s forwards;

animation-delay:2s;

}

.icon-bar{


  position: fixed;
  top: 60%;
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









@keyframes fadeOut{



from{

opacity: 1;


}



to{

opacity: 0;


}

}




h2{
 
  transition: opacity 0.5s ease-in;
  text-align: center;
  text-transform:uppercase;
  font-family:century gothic;
  font-weight: bold;
  color:rgba(255,175,30,1);
  margin:15px 0px 13px 0px;
  font-size:19px;
  text-shadow:2px 4px 16px rgba(0,0,0,0.39),0px -2px 5px rgba(255,255,255,0.2);
}



#navbar a{


  margin: 0px 15px;
  font-size: 18px;
  color: white;
}


    

    h1{

        height:65px;

   -webkit-box-shadow:0 0 1px red;

box-shadow:0 0 1px red; 

  background-color:rgba(0,70,90,0.7);

  box-shadow:none;

        

    }


h1 img{

float:left; 



height: 43px;

width:135px;

margin-left:-3px;

margin-top:-1px;

opacity: 1;

}



h1 input[type=text]:focus{



border:1px solid lightblue;

-webkit-box-shadow:0 0 2px lightblue;

box-shadow:0 0 2px lightblue;

 



}







h5{
font-family:poppins;
font-weight: bold;
color: rgba(0,0,0,0.5);
font-size:15px;

}


#signup-form{

padding:20px 40px;
border: 1px solid transparent transparent;
box-shadow:0px 8px 16px rgba(0,0,0,0.3);
font-family: century gothic;
background-color: white;
background-color: white;
}



#signup-parent{

padding:20px 300px;


}

input[type=text],input[type=password],input[type=email]{

padding:23px;
border:1px solid rgba(192,192,192,0.4);
font-family: arial,fontawesome;
}


#btn-signup ,#btn-signin{

height: 50px;
}


#btn-signup:focus ,#btn-signin:focus{

background-color:green;
color: white;
}






#btn-signin{
margin-top:25px;
margin-bottom:15px;
}


input{

margin: 25px 0px;
padding:10px;


}

#user{
padding-top: 15px;
color: rgba(192,192,192,0.9);
font-size: 16px;
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

background-color:rgba(0,70,90,0.7);;padding-top:15px;position: relative;margin-top: 70px;

  
}




} 
@media only screen and (max-width:767px){
 


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

    
    
 .icon-bar a{

display:  block;
  text-align: center;
  padding: 8px;
  transition: all 0.5s;
  color: white;
  font-size:13px;
}
   
    
    
    
    
    
    
    
 
#signup-parent{

padding:30px 25px;


}

  
#submit-subscribe{
    
   float: right;margin-top:-72px;margin-right:10%;padding:10px;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}   
  

    

    h1{

        height:60px;

   -webkit-box-shadow:0 0 1px red;

box-shadow:0 0 1px red; 

  background-color:rgba(0,70,90,0.7);

  box-shadow:none;

        

    }









h1 img{

float:left; 



height: 40px;

width:105px;

margin-left:6px;

margin-top:7px;

opacity: 1;

}
.btn-success{
font-family:poppins;

}









} 







</style>
<body>



<h1>



<a href="index.php" class="" ><img style="" align="" src="mymain.PNG" height="100" width="200"></a>



</h1>








<br><br>




<div class="wrap">


<div class="" id="signup-parent">


	<div class="" id="signup-form">


	<h5 align="center">Change Password</h5>


	<form  action="" method="post" enctype="multipart/form-data">

  

  

  <input type="email" name="email" placeholder="&#xF1fa; Email" class="form-control">

  


    <button name="submit" class="form-control btn btn-success ">Submit</button>
    


</form>

<br>

<div id="" class="icon-bar" align="center">

  
<a class="facebook" href="https://web.facebook.com/profile.php?id=100076772181022"><i class='fa fa-facebook'></i></a>



<a  class="twitter" href="https://twitter.com/ngnimitech"><i class='fa fa-twitter'></i></a>




<a class="instagram" href="https://instagram.com/ngnimitech"><i class='fa fa-instagram'></i></a>




<a class="telegram" href="https://t.me/ngnimitech"><i class='fa fa-telegram'></i></a>




</div>
<?php 

require 'configure.php';


if (isset($_POST['submit'])) {


  
     $email = mysqli_escape_string( $conn,$_POST['email']);



    $vkey = md5(time().$email);



    if ($email == '') {echo"<span id = 'alert'>Email field is required...</span>";

}


else{

$check = "select *from profile where email = '$email'";


$we = mysqli_query($conn,$check);



$_SESSION['email'] = $_POST['email'];
  


$find_email = $we->num_rows;


if ($find_email<1) {



echo "<span id = 'alert'>This email address does not exist</span>";

}


else{

  $ins = "insert into forgotten values('','$email','$vkey')";


 $us = mysqli_query($conn,$ins);


    if ($us) {



require 'PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php';

$mail= new PHPMailer;


$mail->SMTPDebug = 0; 
                     // Enable verbose debug output
    $mail->isSMTP();
                                                // Send using SMTP
    $mail->Host= 'server191.web-hosting.com';


    $mail->Host='server191.web-hosting.com';

    $servername="server191";

$mail->Port=465;

$mail->SMTPAuth=true;

$mail->SMTPSecure='ssl';

$mail->Username='atemtmmu';

$mail->Password = 'A1vGYT1CXbrx';

$mail->setFrom('contact@atemarket.com','atemarket');

$mail->addAddress($email);

$mail->AddEmbeddedImage('myads.PNG','pic');

$mail->addReplyTo('contact@atemarket.com');

$mail->isHTML(true);

$mail->Subject = "Password change";

$mail->MsgHTML("


<meta name='color-scheme' content='light only'>

<meta name='supported-color-schemes' content='light only'>

<link rel='stylesheet' type='text/css' href='bootstrap.min.css'>

  

<body>


<img style='width:100%;opacity:1;margin-top:-5px;' align='' src='cid:pic' height='70' width=''>

<br>

<div align='' class='container' style='color:rgba(0,0,0,0.6);font-size:14px;font-family:sans-serif;opacity:0.6;'>
  
<br><br>

Click on the button provided to <b><a class='btn  form-control' style='border-radius:8px;opacity:1.0;background-color:blue;padding:8px;text-decoration:none;color:white;font-size:14px;font-family:sans-serif;box-shadow:0px 3px 8px rgba(0,0,0,0.3);' href ='http://atemarket.com/forgot-password.php?vkey=$vkey'>Change password</a></b>



</div>




<br>





</div>

</body>




  ");

if (!$mail->send()) {echo "message not sent".$mail->ErrorInfo;
  
}


else{



      echo "<span id='alert'>We have sent a link to <b style='color:red;'>".$email."</b></span>"; }
    }

}



}

}


 ?>

</div>

</div>
</div>

<br>
<br>
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

<input type="text" name="subscribe" class="form-control" placeholder="    Enter your email address">

<button type="button" id="submit-subscribe" style="" class="btn btn-danger">Submit</button>

</form>








</div>

<br><br>
 <div class="row" style="padding:10px;font-family:poppins;">
<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>2347033506332<br>Contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3 col-6 col-sm-3">
  <p style="color: white;font-size: 13px;font-family:poppins;">About us<br><a style='color:white; font-family:poppins;' href='services.php'>Services</a><br>Our team<br><a style='color:white; font-family:poppins;' href='contact.php'>Support center</a><br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins;">Career<br><a style='color:white; font-family:poppins;' href='terms.php'>Term & Conditions</a><br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">Our partners<br><a style="color: white; font-family:poppins;" href="faq.php">Faq</a><br>


</div>

</div>



<div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:poppins; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

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
            

            $("#subscribe-form")[0].reset();
}
            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>


</body>










