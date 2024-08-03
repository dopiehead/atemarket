
<?php 

session_start(); 


error_reporting(E_ALL ^ E_NOTICE);


if (!isset($_SESSION['id'])) {
  echo "<script>window.location.href='signup.php'</script>";
  exit();
}








?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <title>&agrave;t&#233; -The online marketing website</title>
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<script src="jquery-1.11.3.min.js"></script>
<script src="sweetalert.min.js"></script>
<style>
body {font-family: Arial;
overflow-x: hidden;



	background-image:linear-gradient(to top left,rgba(0,90,70,0.3),rgba(243,243,243,0.1));



}



.subject{
    
 color:black;font-family:century gothic;font-weight:bold;    
    
}


.sender{
  margin-top:3px;   
 color:green;font-family:sans-serif;font-weight:bold;    
}







.icon-bar{


  position: fixed;
  top: 65%;
  left: 0px;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
}






.icon-bar a{

display:  block;
  text-align: center;
  padding: 13px;
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



#submit-subscribe{
    
   float: right;margin-top:-39px;margin-right:20%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:60%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}


















html{
    
    scroll-behavior:smooth;
}


/* Style the tab */


a:hover{text-decoration: none;
color: black;}
  
#activex{
 border-bottom: 2px solid rgba(255,165,50,1);
 border-radius: none;
   
}


h1 img{
float:left; 

opacity:1;

height: 60px;

width:135px;

margin-left:-8px;

margin-top:-4px;
}
#compose{

  display:none;
  transition: 3s;
}

.overlay,#overlay{

  display:none;
}

.open-btn{

display: none;


}








#output{display: none;

background-color:;
padding: 10px;
box-shadow: 0px 5px 8px rgba(0,0,0,3);
width:400px;
}  

#navbar a{


  margin: 0px 15px;
  font-size: 18px;
  color: white;
}

h1{
position:;
z-index:100;

height:68px;
background-color:rgba(0,70,90,0.7);
padding: 8px;


} 


.faq{
font-family:verdana;
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

#footer {

padding:10px;
height: 336px;
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


.how{

font-family:verdana;
float: right;

font-size:15px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;
font-weight: bold;

}

.gallery{

font-family:verdana;
float: right;

font-size:15px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;

font-weight: bold;

}


  
#date{


color:;
font-style:;
font-size:14px;
padding-top: 15px;
font-style:italic;

}

#message{

color:rgba(0,0,0,0.6);
font-family:verdana,sans-serif;
font-size:15px;
}

#from{
color:rgba(0,0,160,0.5);
font-family: century gothic;
font-size:14px;
font-weight:;
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

#popup.active{
  
visibility: visible;
opacity: 1;
transition: 0.3s;

    }

#compose.active{
  

display: block;
transition: 0.3s;

    }












#close{

font-size: 19px;
position: absolute;
top: 9px;
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

hr{
border:1px dotted rgba(192,192,192,0.8);

}

td{
padding: 10px 2px;

color:;
font-family: century gothic;
}


table{
margin-top: 10px;
border-collapse: collapse;
}
tr.border_bottom td{

border-bottom:1px dotted rgba(192,192,192,0.5);


}

.fa-trash{
color: white;
padding:0px 10px;

}


.btn-danger{

background-color: red;
border:1px solid transparent transparent;
border: none;
}



h5{

margin-top:10px;  
text-transform:capitalize;
font-family: century gothic;
font-weight: bold;
font-size: 25px;

}


h5:after,h5:before{
content: "";
display: inline-block;
border:1px solid rgba(192,192,192,0.6);
width:450px;
margin:3px;


}
.reply{
font-size:15px;
color:rgba(0,0,0,0.3);
border: none;


}



.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 10px 14px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}


/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 20px;
  border: 1px solid #ccc;
  border-top: none;
}


@media only screen and (max-width:1266px){

.icon-bar a{

display:  block;
  text-align: center;
  padding: 8px;
  transition: all 0.5s;
  color: white;
  font-size: 13px;
}









.subject{
  
   
 color:black;font-family:sans-serif;font-weight:bold;    
    
}

.sender{
  margin-top:8px;   
 color:green;font-family:sans-serif;font-weight:bold;    
}




#date{


color:;
font-style:;
font-size:14px;
padding-top: 15px;
color:red;

}









h5{

margin-top:15px;  
text-transform:capitalize;
font-family:'montserrat';
font-weight:normal;
font-size:19px;
color:rgba(0,70,90,0.7);

}


 
h1{
position:;
z-index:100;

height:63px;
background-color:rgba(0,70,90,0.7);
padding: 8px;


}    
 
 
h1 img{
float:left; 

opacity:1;

height: 43px;

width:105px;

margin-left:-1px;

margin-top:-1px;
}
 
 
 
 
 
 
 
    
 #submit-subscribe{
    
   float: right;margin-top:-38px;margin-right:10%;  color: white;border-radius:0px 15px 15px 0px; 
}

#subscribe-form input[type=text]{
    
   width:80%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}
   
    
    
    
    
    
    
    
    
    
    
background-color:rgba(0,70,90,0.6);    
    
    
#footer {
  

height: 328px;


box-shadow:0px 5px 16px 0px rgba(0,0,0,0.3);


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

color: white;
font-family:verdana;
padding-bottom: 10px;
font-size:22px;
text-shadow: none;
font-weight: bold;

}






#footer input[type=email]:focus{
background-color:rgba(192,192,192,0.5);
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
















h1 img{






} 

h5:after,h5:before{
content: "";
display: inline-block;
border:1px solid rgba(192,192,192,0.6);
width:160px;
margin:3px;
display:none;

}

 .how,.gallery,.faq{display: none;}
 
.overlay{
height: 0%;
width: 100%;
display: block;
position:absolute;
z-index: 300;
top: 65px;
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
font-family:sans-serif;
transition: 0.3s;
}
.overlay .close-btn{
position: absolute;
top: -7px;
left: -2px;
font-size: 38px;
color:#818181;

}

.overlay a:hover,.overlay a:focus{
  color:red;
  text-decoration: none;
}


#open-btn{

  margin-top:-8px;
   display: block;
  color: white;
  font-size: 30px;
  float: right;
  cursor: pointer;
 
  
}



} 













</style>

<body>

<div id="myform" class="overlay" id="overlay">
  <button class="btn close-btn" onclick="closeform()">&times;</button>  
  <div class="overlay-content">
<a style="color:rgba(190,0,20,0.6);" href="hoverdowntabs.php" class="" >



<?php 
$you=$_SESSION['email'];

require 'connection.php';

$inbox="select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 and has_read=0 order by id desc ";

$inx =mysqli_query($con, $inbox);

$datafound=$inx->num_rows;

echo "(".$datafound.")";



 ?>








<i class="fa fa-envelope"></i> MESSAGES</a>
<a href="sport.php" class="" >GALLERY</a>

  <a href="logoutkwasaf.php" style="text-transform: uppercase;" class="" ><i class="fa fa-sign-out"></i> SIGNOUT</a>

  </div></div>
<script>
function openform() {
  document.getElementById("myform").
  style.height="38%";
}

function closeform() {
  document.getElementById("myform").
  style.height="0%";
}
  




</script>







<h1>
<a href="logoutkwasaf.php" style="text-transform: uppercase;" class="how" ><i class="fa fa-sign-out"></i> SIGNOUT</a>



<a href="sport.php" class="gallery" >GALLERY</a>

<a href="hoverdowntabs.php" class="gallery" id="activex" >


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

<a href="index.php" style="text-decoration: none;"><img style="" align="" src="mymain.PNG"></a>


</h1>


<div class="container">
<h5 align="center">Messages</h5><br>



<div class="tab">
  
  <button class="tablinks" onclick="openCity(event, 'Tokyo')" id="defaultOpen">Compose</button>
</div>


<div id="Tokyo" class="tabcontent">
 
  <?php 
   

if (isset($_GET['id'])) {
  
  $id= $_GET['id'];
    
require 'connection.php';

$yty = mysqli_query($con,"select *from messages where id='$id'");



 while ($row=mysqli_fetch_array($yty)) 
 {
  if ($yty) {

       $name=$row['name'];

        $username=$row['sender_email'];

        $subject=$row['subject'];



         $message=$row['compose']."<br><br>";

         $date=$row['date'];
        

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


         
         
         
         
         
         
         
         $item=$row['itemid'];
 }

}
}
?>  



  
<div id="wrap">
    
<div class="sender" style="">From:&nbsp; <?php echo$username; ?>&nbsp;&nbsp;&nbsp;&nbsp;</div><br>    
    

<div class="subject" style="">Subject:&nbsp; <?php echo"<a href='details.php?id=$item'>".$subject."</a>"; ?>&nbsp;&nbsp;&nbsp;&nbsp;</div><br>


<div class="main" >
  

<?php echo$message ;?>


<span id="date">Received: <?php echo$time_ago ;?></span>



</div>

<form method="post" action="" id="message-form" enctype="multipart/form-data"> 
<br><br>
   <input type="hidden" name="has" value="0" placeholder="" class="form-control">

<input type="hidden" name="is_sender_deleted" value="0">



<input type="hidden" name="itemid" value="<?php echo$item;?>">

<input type="hidden" name="is_receiver_deleted" value="0">
   
<input type="hidden" name="sentto" value="<?php echo$username; ?>" placeholder="" class="form-control">

  <input type="hidden" name="subject" placeholder="" value="<?php echo$subject; ?>" class="form-control">

  <textarea type="text" wrap="physical" id="message" name="message" rows="8" placeholder="Write message..." class="form-control"></textarea><br>

 <input type="hidden" name="sentby" value="<?php echo$_SESSION['email']; ?>">

 <input type="hidden" name="name" value="<?php echo$_SESSION['name']; ?>">

   <div align="center"><button type="submit" name="submit" id="submit" style="color: white;" class="btn btn-warning" value=""><i class="fa fa-paper-plane"></i> Reply</button>

<div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>

<a  style="color: white;" href="hoverdowntabs.php" class="btn btn-info" value="">Go back to inbox</a>





   </div>

   

   

   </form>


<?php 

    

if (isset($_GET['id'])) {
  
  $id= $_GET['id'];

require 'connection.php';
  
$sql="UPDATE messages SET has_read = 1 where id ='$id'";

$query=mysqli_query($con,$sql);


  
} ?>












<br>
<div align="center" style="text-transform: capitalize;" id="contentx"></div>




</div>





</div> 






<script type="text/javascript">



  var postData = "text";

  $('#submit').on('click',function(e){
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
                
        $("#message-form")[0].reset();
                  

             }
             else{
            $("#message-form").find('input:text').val('');

           $("#message-form").find('textarea').val('');

           $('input:checkbox').removeAttr('checked');

           swal({
              text:"Message field is required",
              icon:"error",
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

</div>
</div></div><br>





<br><div id="" class="icon-bar" align="center">

  
<a class="facebook" href="https://web.facebook.com/profile.php?id=100076772181022"><i class='fab fa-facebook'></i></a>



<a  class="twitter" href="https://twitter.com/ngnimitech"><i class='fab fa-twitter'></i></a>




<a class="instagram" href="https://instagram.com/ngnimitech"><i class='fab fa-instagram'></i></a>




<a class="telegram" href="https://t.me/ngnimitech"><i class='fab fa-telegram'></i></a>




</div>

<div style="background-color:rgba(0,70,90,0.7);;padding-top:20px;">
<p align="center" style="color: white;font-weight:bold; font-family:'Montserrat';font-size:15px;">Sign up for our newsletter</p>
<div class="container">

<div align="center">
  <form method="post" id="subscribe-form" enctype="multipart/form-data">

<input type="text" name="subscribe" style="" class="form-control" placeholder="    Enter your email address">

<button type="button" id="submit-subscribe" style="" class="btn btn-danger">Submit</button>

</form>
</div>


<div class="row" style="margin-left:23px;margin-top:20px;">
<div class="col-md-3">
 <p style="color: white;font-size: 14px;font-family:'Monserrat',sans-serif;">103 Awolowo Rd, opp<br>Rhema chapel, <br>Ilorin,<br>Kwara state<br>+2349074456453<br>ngnimitech@gmail.com<br><br></p> 


</div>

<div class="col-md-3">
  <p style="color: white;font-size: 14px;font-family:'Monserrat',sans-serif;">About us<br>Services<br>Our team<br>Support center<br><br></p> 



</div>

<div class="col-md-3">

<p style="color: white;font-size: 14px;font-family:'Monserrat',sans-serif;">Career<br>Term & Conditions<br><br></p> 

</div>



<div class="col-md-3">
 <p style="color: white;font-size: 14px;font-family:'Monserrat',sans-serif;">Our partners<br>Faq<br>Career<br>


</div>

</div>


<div align="center" style="color:white;font-size:14px;text-transform:uppercase; font-family:'Monserrat',sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>



</div>












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

function compose() {

  document.getElementById("compose").

  style.display="block";
}



  document.getElementById("compose").

  style.display="none";








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

              swal(response);


$("#subscribe-form")[0].reset();
           

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>















</body>
</html>