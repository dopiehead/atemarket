
<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);


?>

<title>&agrave;t&#233; -The online marketing website</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="sweetalert.min.js"></script>
	<script src="jquery-1.11.3.min.js"></script>


<style type="text/css">

body{


}

p a{


  font-family: verdana;
  margin-left: auto;
  margin-right: auto;
  display: block;
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


#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}



    

    h1{

        height:63px;

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
#alert-danger{

  color: rgba(0,0,0,0.6);
  font-family: sans-serif;
  font-weight: bold;
  font-size:15px;
  letter-spacing:0.5px;
  background-color:rgba(255,50,30,0.6);
  padding: 10px;


animation: fadeOut 8s forwards;

animation-delay:2s;

}


#alert{

  color: rgba(0,0,0,0.6);
  font-family: sans-serif;
  font-weight: bold;
  font-size:15px;
  letter-spacing:0.5px;
  background-color: lightgreen;
  padding: 10px;


}


@keyframes fadeOut{



from{

opacity: 1;





}



to{

opacity: 0;



}



}








#footer {

padding:10px;
height: 350px;
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

#footer h6{
color: white !important;
font-family:century gothic;
padding-bottom: 10px;
font-size:18px;
line-height:23px;
text-shadow: none;
font-weight:bold;}





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







h5{

font-weight: bold;
color: rgba(0,0,0,0.5);


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


h1 img{

float:left; 



height: 43px;

width:135px;

margin-left:2px;

margin-top:5px;

opacity: 1;

}











 

#submit-subscribe{
    
   float: right;margin-top:-74px;margin-right:10%;padding:12px;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}


}









@media only screen and (max-width:497px){
    
    
    
    
  
    h1{

        height:60px;

   -webkit-box-shadow:0 0 1px red;

box-shadow:0 0 1px red; 

  background-color:rgba(0,70,90,0.7);

  box-shadow:none;

        

    }  
    
    
    
    
    
    
  
h1 img{

float:left; 



height: 43px;

width:135px;

margin-left:2px;

margin-top:5px;

opacity: 1;

}
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 
#footer h6{
color: white !important;
font-family:verdana;
padding-bottom: 10px;
font-size:18px;
line-height:23px;
text-shadow: none;
font-weight:bold;} 
 
 
 
 
 
 
#footer {

padding:10px;
;
background: linear-gradient(to right, rgba(0,0,20,0.6),rgba(0,0,20,0.6));
background-size: cover;
padding-top: 20px;


}


#submit-subscribe{
    
   float: right;margin-top:-73px;margin-right:10%;font-size: 15px;padding:12px;   color: white;border-radius:0px 15px 15px 0px; 
 }
#subscribe-form input{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}    
 

} 



@media only screen and (max-width:767px){
 


}   

@media only screen and (max-width:1266px){
 
#signup-parent{

padding:30px 45px;


}









} 







</style>
<body style="font-family:verdana;">



<h1>



<a href="index.php" class="" ><img style="" align="" src="mymain.PNG" height="" width=""></a>



</h1>








<br>



<?php 
require 'configure.php';
if (isset($_GET['vkey'])) {

	$vkey = $_GET['vkey'] ;


 $sql = "select * from forgotten where vkey='$vkey'";

  $dbc = mysqli_query($conn,$sql);
  
  while($row = mysqli_fetch_array($dbc)){
  
  $email = $row['email'];
  
  
  };
         
         

if ($dbc->num_rows>0) {

$bbc = "select * from profile where email='$email'";

$abc = mysqli_query($conn,$bbc);

  while ($row = mysqli_fetch_array($abc)) {
  
     $x = $row['id'];

     $y = $row['email'];

     $z = $row['password'];
     



}



    

  }



}



 ?>
<div class="container">

<form method="POST" action="" id="edit-form" enctype="multipart/form-data">

    Email:&nbsp;&nbsp;&nbsp;&nbsp; <b style="color: red;font-family:verdana;"><?php echo$y?></b>

    <br><br><br>
   

   

       Password: <input type="text" name="password" class="form-control" value=""> 

        Confirm Password: <input type="text" name="cpassword" class="form-control" value="">

    <br><input type="submit" name="submit" id="submit-edit" value="Update" class="btn btn-success form-control" style=""></i>
    
  </form>

</div>



<?php 


require 'configure.php';





if (isset($_POST['submit'])) {



$z = mysqli_real_escape_string($conn,$_POST['password']);


$cp= mysqli_real_escape_string($conn,$_POST['cpassword']);

echo"<div align='center'>";  

if ($z!=$cp) {

	echo "<span id = 'alert-danger'>Password does not match</span>";
}



elseif($z==''){echo"<span id = 'alert-danger'>Password field is required</span>";}


elseif($cp==''){echo"<span id = 'alert-danger'>Confirm password field is required...</span>";}



    else{
 
    $secret_password= sha1($z);
	

	$query= "update profile set password ='$secret_password' where email='$email'";

	$bgt = mysqli_query($conn,$query);


	if ($bgt) { echo "<div align='center'><span id='alert'>Password changed. Please continue to <a href='newsignup.php?mypage=login'>login page</a></span></div>";}


else{ echo mysqli_error($bgt);}

}

echo"</div>";
}
?>




<br>










<br>



<br><br><br>







<div id="" class="icon-bar" align="">

  
<a class="facebook" href="https://web.facebook.com/profile.php?id=100076772181022"><i class='fa fa-facebook'></i></a>



<a  class="twitter" href="https://twitter.com/nimitechng"><i class='fa fa-twitter'></i></a>




<a class="instagram" href="https://instagram.com/ngnimitech"><i class='fa fa-instagram'></i></a>




<a class="telegram" href="https://t.me/ngnimitech"><i class='fa fa-telegram'></i></a>




</div>



















<div style="background-color:rgba(0,70,90,0.7);;padding-top:20px;">
<p align="center" style="color:white;font-weight:bold; font-family:sans-serif;font-size:16px;">Sign up for our newsletter</p>
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
                 
                 if(response==1){

               swal({icon:"success",text:"Thanks for subscribing"});
          
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
 <div class="row" style="margin-left:23px;">
<div class="col-md-3">
 <p style="color:white;font-size: 15px;font-family:sans-serif;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>+2347033506332<br>Contact@atemarket.com<br><br></p> 


</div>

<div class="col-md-3">
  <p style="color: white;font-size: 15px;font-family:sans-serif;"><a style="color:white;" href="about.php">About us</a><br>Services<br>Our team<br><a href="contact.php" style="color:white">Support center</a><br><br></p> 



</div>

<div class="col-md-3">

<p style="color: white;font-size: 15px;font-family:sans-serif;">Career<br>Testimonials<br><a style="color: white;" href="terms.php">Term & Conditions</a><br><br></p> 

</div>



<div class="col-md-3">
 <p style="color: white;font-size: 15px;font-family:sans-serif;">Our partners<br><a style="color: white;" href="faq.php">Faq</a><br><br></p>


</div>

</div></div>





<div align="center" style="color:white;font-size:14px;text-transform:uppercase; font-family:sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2021 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>


</div>