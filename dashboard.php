
<?php  

session_start();

 require 'configure.php';  
 

 ?>    


<?php 

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
  
  if($seconds<=60){
      
    $time = "Just now";  
      
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


?>




<!DOCTYPE html>
<html>
<head>
	<title>&agrave;t&#233; -The online marketing website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

<link rel="stylesheet" href="flickity.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">

<script src="sweetalert.min.js"></script> 

  <script src="jquery-1.11.3.min.js"></script>
<script src="flickity.pkgd.min.js"></script>



<style type="text/css">
	
#info img{

	border-radius: 50%;

	height: 180px;

	width: 180px;

	border:3px solid rgba(250,130,40,0.5);

	padding:3px;

	margin-top: 10px;
}


.file{

	display: none;
}


label{

	cursor: pointer;
}


.fa-circle{

color: red;
font-size: 10px;
position: absolute;



}

#data{

	display: inline-block;
	margin:3px 10%;
	text-align: center;
}
ul{

	text-align: center;
}

.imgProfile{

  transition: height 0.5s ease-in,transform 2s;

}

.imgProfile:hover{

  


}
 
.overlay{
height:0%;
width: 100%;
display: block;
position:fixed;
z-index: 300;
top:0px;
right: 0;
color:#818181;
background-color:#f5f5f5;
background-color:#f5f5f5;
overflow-x:hidden;



}


.overlay-content{
position:relative;
top: 15%;
width: 95%;


}



.overlay .close-btn{
position: absolute;
top: -7px;
right: -2px;
font-size: 50px;
color:#818181;

}

#result{


font-size:13px;

top: 23%;

border:1px solid transparent transparent; 


left: 15%;

position: absolute;

width: 100%;

z-index:800;


font-weight:bold; 

 font-family:poppins;

word-wrap: break-word;

}




#info .fa-camera,#info .fa-sign-out{

border-radius: 50%;

margin-left:15px; 

margin-right:15px;

background-color: white;

color: rgba(0,0,0,0.4);

padding: 20px;

font-size: 25px;

position: relative;

top: -150px;

box-shadow: 0px 2px 8px rgba(0,0,0,0.6);
}

#info{

	padding: 0;
}


.jumbotron{

	font-family: poppins;
}

#member,#memberID{

	font-family: poppins;
	font-size: 14px;
	color: blue;
	text-align: center;
	text-transform: capitalize;
}

#name{

	font-family: poppins;
	text-transform: capitalize;
	font-weight: bold;
	text-align: center;
}

#memberID{

	color: red;
	padding-left:5px;


}

.fa-arrow-right{

	font-weight: bold;
}

.col-md-6{

	padding: 10px;

	font-size: 14px;
}



.jumbotron > .fas,.fa-solid,.fa-address-book,.fa-shopping-cart,.fa-envelope,.fa-search{

	font-weight: bold;

	color: rgba(255,140,50,0.9);

	margin: 1px 5px;
}

h6{

	font-weight: bold;
	font-size: 16px;
}

.jumbotron .col-md-6{

	border-bottom: 1px solid rgba(255,255,255,0.8);


}


.col-md-6 p{

opacity: 0.6;
font-size: 13px;

}



.footer{

	padding: 10px;

	border: 1px solid transparent;

	box-shadow: 0px 2px 13px rgba(0,0,0,0.6);

	border-radius: 15px 15px 0px 0px;

	
	position: relative;
	bottom: 0;
}


ul{

	list-style-type: none;
	text-align: center;
	
}

li{

	display: inline-block;

	margin: 1px 10%;

	font-size: 21px;

    color:rgba(0,70,90,0.7);
}



li a{

	

    color:rgba(0,70,90,0.7) !important;
}










h6 span{
float: right;
}

.fa-search{

	cursor: pointer;
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




@media only screen and (min-width: 450px) and (max-width: 487px){

h6 span{
float: right;
}


#info img{

	border-radius: 50%;

	height: 150px;

	width: 150px;

	border:3px solid rgba(255,130,50,0.7);

	padding:3px;

	margin-top: 10px;
}


#data{

	display: inline-block;
	margin:3px 2%;
	text-align: center;
}



#info .fa-camera,#info .fa-sign-out{

border-radius: 50%;

margin-left:13px; 

margin-right:13px;

background-color: white;

color: rgba(0,0,0,0.4);

padding: 14px;

position: relative;

top: -130px;

box-shadow: 0px 2px 8px rgba(0,0,0,0.6);
}

#info{

	padding: 0;
	text-align: center;
}


.jumbotron{

	font-family: poppins;
	background-color:rgba(192,192,255,0.8);
}

.col-md-6{

	padding: 10px;

	font-size: 14px;
}


#name{

	font-size: 14px;
}

.footer{

	padding: 2px;

	border: 1px solid transparent;

	box-shadow: 0px 2px 13px rgba(0,0,0,0.6);

	border-radius: 15px 15px 0px 0px;
	position:fixed;
	bottom: 0;
	z-index: 1;
	background-color: white;
	background-color: white;
}


ul{

	list-style-type: none;
	text-align: center;
	padding-right: 19px;
	
}

li{

	display: inline-block;

	margin: 5px 7%;

	font-size: 21px;


}

.col-md-6 p{

opacity: 0.6;
font-size: 13px;

}


.fa-arrow-right{

	font-weight: bold;
	
}


}





@media only screen and (min-width: 488px) and (max-width: 790px){


h6 span{
float: right;
}



#info img{

	border-radius: 50%;

	height: 185px;

	width: 185px;

	border:3px solid rgba(255,130,50,0.7);

	padding:3px;

	margin-top: 10px;
}


#data{

	display: inline-block;
	margin:3px 1%;
	text-align: center;
}



#info .fa-camera,#info .fa-sign-out{

border-radius: 50%;

margin-left:18px; 

margin-right:18px;

background-color: white;

color: rgba(0,0,0,0.4);

padding: 14px;

position: relative;

top: -150px;

box-shadow: 0px 2px 8px rgba(0,0,0,0.6);
}

#info{

	padding: 0;
	text-align: center;
}


.jumbotron{

	font-family: poppins;
}

.col-md-6{

	padding: 10px;

	font-size: 14px;
}


#name{

	font-size: 14px;
}

.footer{

	padding: 2px;

	border: 1px solid transparent;

	box-shadow: 0px 2px 13px rgba(0,0,0,0.6);

	border-radius: 15px 15px 0px 0px;
	position:fixed;
	bottom: 0;
	z-index: 1;
	background-color: white;
	background-color: white;
}


ul{

	list-style-type: none;
	text-align: center;
	padding-right: 18px;
	
}

li{

	display: inline-block;

	margin: 5px 8%;

	font-size: 21px;


}

.col-md-6 p{

opacity: 0.6;
font-size: 13px;

}

.fa-arrow-right{

	font-weight: bold;
	
}




}




@media only screen and (min-width: 325px) and (max-width: 450px){


h6 span{
float: right;
}



.col-md-6 p{

opacity: 0.6;
font-size: 13px;

}
#info img{

	border-radius: 50%;

	height: 160px;

	width: 140px;

	border:3px solid rgba(0,70,90,0.6);

	padding:5px;

	margin-top: 10px;
}


#data{

	display: inline-block;
	margin:3px 1%;
	text-align: center;
}



#info .fa-camera,#info .fa-sign-out{

border-radius: 50%;



background-color: white;

color: rgba(0,0,0,0.4);

padding: 13px;

position: relative;

top: -80px;

box-shadow: 0px 2px 8px rgba(0,0,0,0.6);
}

#info{

	padding: 0;
	text-align: center;
}


.jumbotron{

	font-family: poppins;
}

.col-md-6{

	padding: 10px;

	font-size: 14px;
}


#name{

	font-size: 14px;
}

.footer{

	padding: 0px;

	padding-right: 15px;

	border: 1px solid transparent;

	box-shadow: 0px 2px 13px rgba(0,0,0,0.6);

	border-radius: 15px 15px 0px 0px;
	position:fixed;
	bottom: 0;
	z-index: 1;
	background-color: white;
	background-color: white;
}


ul{

	list-style-type: none;
	text-align: center;
	
}

li{

	display: inline-block;

	margin: 5px 6%;

	font-size: 21px;


}



}



</style>







</head>
<body>


<div class="container">
	
<div id="info">
	
<div id="data">



<label class="" ><input type="file" class="file" name="imager"><i class="fa fa-camera"></i></label>


</div>


<div id="data">


<div id="bom"><div id="my">
<img class="imgProfile" src="<?php echo$_SESSION['image']; ?>"><br>
</div></div>

<span id="name"><?php echo$_SESSION['name'];?></span>




<span style="display: none;" id="member">member</span>


<span id="followers" style='color:black;'>


<?php

if ($myfollowers<=1){


 echo "<br>".$myfollowers;



 ?> <i style="color: rgba(0,70,90,0.8);" class="fa fa-user-alt"></i>
<?php

}

else{

echo "<br>".$myfollowers;
?>

 <a href="getFollowers.php?id = <?php echo$_SESSION['id']; ?>"><i style="color: rgba(0,70,90,0.8);" class="fa-solid fa-user-friends"></i></a>

<?php

}?>

</span>

<?php

echo "<br>Joined: &nbsp;<span style='color:rgba(255,50,70,0.8);'>".$time_ago."</span>";

?>  









</div>


<div id="data">

<i class="fa fa-sign-out"></i>


</div>


</div>


<br>

<div class="jumbotron">


<div class="row">	
<div class="col-md-6">	
<h6><i class="fa fa-address-book"></i> Personal info  <span id="arrow"><a style="color: black;" href="user-info.php"><i class="fa fa-arrow-right"></i></a></span></h6>
<p>Phone, Username, Address.</p>

</div>


<div class="col-md-6">	
<h6><i class="fas fa-shopping-cart"></i>My items  <span id="arrow"><a style="color: black;" href="edituser.php"><i class="fa fa-arrow-right"></i></a></span></h6>
<p>Sold items, Items for sale (Merchants only). </p>

</div>



<div class="col-md-6">	
<h6><i class="fa-solid fa-lock"></i>Password  <span id="arrow"><a style="color: black;" href="change-password.php"><i class="fa fa-arrow-right"></i></a></span></h6>
<p>For safety change regularly.</p>

</div>




<div class="col-md-6">


<h6><i class="fa-solid fa-upload"></i>Upload an item <span id="arrow">


<?php



require 'configure.php';

$sid=$_SESSION['id'];




$seller_active="select * from verify_seller where sid = '$sid' ";



$check_seller_active = mysqli_query($conn,$seller_active);


if ($check_seller_active->num_rows<1) {
	



?>




<a style="color: black;" href="seller-verify.php"><i class="fa fa-arrow-right"></i></a></span></h6>



<p>Verify your ID</p>


<?php


}



else{


while ($row = mysqli_fetch_array($check_seller_active)) {
	
   if ($row['verified']==0) {
   	   
?>

<a style="color: black;" href="seller-verify.php"><i class="fa fa-arrow-right"></i></a></span></h6>



<p>Verify your ID</p>


<?php

   }


else{


?>

<a style="color: black;" href="postAds.php"><i class="fa fa-arrow-right"></i></a></span></h6>

<p>Post Ads</p>


<?php

}

}

}
?>


</div>


</div>




</div>







</div>

</div>

<div class="container footer">
	

<div class="">
	

<ul>
	

<li><a style="color: rgba(0,70,90,0.8);" href="hoverdowntabs.php"><i style="color: rgba(0,70,90,0.8);" class="fa fa-envelope"></i></a>


<?php 

if (!empty($_SESSION['email'])) {

$you=$_SESSION['email'];

require 'connection.php';

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read = 0 group by sender_email order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;

if ($datafound>0) {
	
?>


	<i class="fa fa-circle"></i>


<?php

}

}
 ?>



</li>

<li><i style="color: rgba(0,70,90,0.8);" onclick="openform()" class="fa fa-search"></i></li>

<li><a  href="sport.php"><i style="color: rgba(0,70,90,0.8);" class="fa fa-shopping-cart"></i></a></li>

<li><a style="color: rgba(0,70,90,0.8);" href="user-settings.php"><i i style="color: rgba(0,70,90,0.8);" class="fa-solid fa-gear"></i></a></li>



</ul>





</div>



</div>



<div id="myform" class="overlay">
	

<button id="close-btn" class="btn close-btn" onclick="closeform()">&times;</button>



<input class="overlay-content container form-control" type="search"  name="q" id="q" placeholder="&#xF002;     Live search" onkeyup="q()"  style="font-family: Arial, Fontawesome;">


<div id="result"></div>


</div>




<script type="text/javascript">

function openform() {
  document.getElementById("myform").
  style.height="100%";
}


	

function closeform() {
  document.getElementById("myform").
  style.height="0%";
}




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


<script type="text/javascript">
$(document).ready(function(){
    $(".fa-sign-out").click(function(e){
        if(!confirm('Are you sure you want to sign out of ate?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});

</script>

<script type="text/javascript">


  $('#edituser-form').on('change',function(e){

   if (confirm("Are you sure to change this?")) {


        e.preventDefault();

   $("#loading-image").show();

   var formdata = new FormData();


      $.ajax({

            type: "POST",

            url: "edit-profile-pic.php",

            data:new FormData(this),

             cache:false,

            processData:false,

            contentType:false,

             success: function(response) {

             $("#loading-image").hide();


  if(response==1){



swal({

text:"Image has been saved",

icon:"success",

});


 $("#popup-picture").hide(1000);

 $('#bom').load(location.href + " #my");

 $('#com').load(location.href + " #cy");

$("#edituser-form")[0].reset();



            }


       else { 
           
             swal({

text:"Error in saving record",

icon:"error",

});


            $("#edituser-form")[0].reset();

            }
 }
       

        })

 }

    });

</script>







</body>
</html>