
<?php session_start(); 

if (!isset($_SESSION['id'])) {echo "<script>window.location.href='newsignup.php'</script>";
  
}


?>



<!DOCTYPE html>
<html lang='en'>

<title>&agrave;t&#233; -The online marketing website | Messages</title>
 <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Poppins">
<script src="jquery-1.11.3.min.js"></script>
<script src="sweetalert.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $("a.btn-danger").click(function(e){
        if(!confirm('Are you sure you want to delete this message?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});

</script>











<style>
body{

	background-image:linear-gradient(to top left,rgba(0,90,70,0.3),rgba(243,243,243,0.1));
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




#submit-subscribe{
    
   float: right;margin-top:-38px;margin-right:20.6%;  color: white;border-radius:0px 15px 15px 0px; 
}
#subscribe-form input{
    
   width:59%;height:40px;border-radius:15px 15px 15px 15px;font-size: 13px; 
}



.active-button{
border:transparent;
color:white !important;
background-color:rgba(0,70,90,0.9);
padding:4px 8px;
margin:4px;


}

.numbering{

  color:white;
  background-color:green;
  border-radius:50%;
  padding:3px 7px;
}


body {font-family: Arial;
overflow-x: hidden;

}


.icon-bar{


  position: fixed;
  top: 50%;
  left: 0px;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
    z-index:99999;
}


h3{

font-family:'Monserrat',sans-serif;
font-size:15px;
font-weight: bold;

}


.icon-bar a{

display:  block;
  text-align: center;
  padding: 13px;
  transition: all 0.5s;
  color: white;
  font-size:14px;
  z-index: 99999;
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

.tablinks{
    
    font-family:montserrat;
}









/* Style the tab */
#footer h6{

color: white;
font-family:century gothic;
padding-bottom: 8px;
font-size:25px;
text-shadow: none;
font-weight: bold;

}


a:hover{
  text-decoration: none;
color: black;

}

  }


h1 a{


}

h1 img{
float:left; 

opacity:1;

height: 40px;

width:105px;

margin-left:-5px;

margin-top:2px;

}
#compose{

  display:none;
  transition: 3s;
}
  
#activex{
 border-bottom: 2px solid rgba(255,165,50,1);
 border-radius: none;
   
}


h1{
position:;
z-index:100;

height:63px;
background-color:rgba(0,70,90,0.7);
padding: 8px;


} 

.delete-sent{

background-color: red;
color: white;
border: none;
cursor: pointer;

}


.fa-trash{
color:red;
padding:0px 10px;
cursor:pointer;

}




#content-subscribe{

color:rgba(192,0,0,0.8);

font-family:'Monserrat'sans-serif;

text-align: center;

font-size:14px;

}


#navbar a{


  margin: 0px 15px;
  font-size: 18px;
  color: white;
}


.faq{
font-family:'Monserrat'sans-serif;
display: block;

float: right;

font-size:14px;

cursor: pointer;

color: white;

border-radius:8px;

padding:8px 1px;

margin-right:13px;
font-weight: bold;
font-size:14px;


}


.faq:hover,.how:hover,.gallery:hover{

opacity: 0.8;

text-decoration: none;

color: white;





}

.how{

font-family:'Monserrat',sans-serif;
float: right;

font-size:14px;

cursor: pointer;

color:white;

border-radius:8px;

padding:8px 1px;

margin-right:15px;
font-weight: bold;

}

.gallery{

font-family:'Monserrat'.sans-serif;
float: right;

font-size:14px;

cursor: pointer;

color:white;



padding:8px 1px;

margin-right:15px;

font-weight: bold;

}
#loader{

width:80px;
height:50px;


}



  
#date{


color:;
font-style:;
font-size:14px;
padding-top: 13px;

}

#message{

color:rgba(0,30,10,0.7);
font-family:verdana,sans-serif;
font-size:14px;
text-transform: capitalize;
}

#from{
color:rgba(0,0,160,0.6);
font-family:montserrat;
font-size:14px;
font-weight:;
text-transform:capitalize;
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




#td-action{

width: 70px; text-align: center;font-family:poppins;
}



#td-from{
width: 150px; text-align: center;font-family:poppins;
}



#td-subject{
 width: 450px; text-align: center;font-family:poppins;

}


#td-date{

width: 220px; text-align: center;font-family:poppins;


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
font-family:'Monserrat',sans-serif;
font-size:14px;
}


table{
margin-top: 10px;
border-collapse: collapse;
}
tr.border_bottom td{

border-bottom:1px dotted rgba(192,192,192,0.5);


}

.fa-trash{
color: red;
padding:0px 10px;
cursor:pointer;

}


.btn-danger{

background-color: red;
border:1px solid transparent transparent;
border: none;
}



h5{
font-size:18px;
margin-top:16px;  
text-transform:capitalize;
font-family:'Montserrat';
font-weight:900;
color:rgba(0,70,90,0.7);

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
  font-size: 14px;
  font-family:'Montserrat';
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
  padding: 6px 0px;
  border: 1px solid #ccc;
  border-top: none;
}

.overlay,#overlay{

  display:none;
}

.open-btn{

display: none;


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

 
 
 
 
 
 
 
 
#message{

color:rgba(0,30,10,0.7);
font-family:verdana,sans-serif;
font-size:13px;
text-transform: capitalize;
}


h1 img{

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


#message{

color:rgba(0,30,10,0.7);
font-family:verdana,sans-serif;
font-size:13px;
}


h5:after,h5:before{

width:150px;



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
  
    
h5{
font-size:18px;
margin-top:16px;  
text-transform:capitalize;
font-family:poppins;
font-weight:900;
color:rgba(0,70,90,0.7);

}    
    
    
    
 .remove,.remove-sent{
     
   margin:13px 8px;
   font-size:18px;
     
     
 }   
    
    
    
    
    
h1{
position:;
z-index:100;

height:63px;
background-color:rgba(0,70,90,0.7);
padding: 8px;


}     
 
 
.icon-bar a{

display:none;
  text-align: center;
  padding: 8px;
  transition: all 0.5s;
  color: white;
  font-size:13px;
  z-index: 99999;
}
 
 

 
 
.fa-trash{
color:red;
padding:0px 3px;
cursor:pointer;

} 
 
 
 
    
    
#from{
color:rgba(0,0,160,0.6);
font-family:montserrat;
font-size:14px;
font-weight:;
}    
    
    
    
    
    
 h1 img{
float:left; 

opacity:1;

height: 41px;

width:105px;

margin-left:-1px;

margin-top:-1px;

}
 
 
 
    
#submit-subscribe{
    
   float: right;margin-top:-38px;margin-right:10.5%;  color: white;border-radius:0px 15px 15px 0px; 
}

#subscribe-form input[type=text]{
    
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
    margin-top:-6px;
   display: block;
  color: white;
  font-size: 30px;
  float: right;
  cursor: pointer;
  
}

#footer {
  

height: 328px;


box-shadow:0px 5px 16px 0px rgba(0,0,0,0.3);


}



}



</style>

<body>

<div id="myform" class="overlay" id="overlay">

  <button class="btn close-btn" onclick="closeform()">&times;</button> 

  <div class="overlay-content">

<a  style="color:rgba(255,160,50,0.8);" href="hoverdowntabs.php" class="" >

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


<a href="contact.php" class="" >&nbsp;CONTACT&nbsp;&nbsp;</a>


<a href="index.php?#sellnow" class="" > &nbsp;<span style="padding:5px;background: rgba(255,165,40,1);color:white;border-radius:5px;">SELL ON ATE</span>&nbsp;&nbsp;</a>

<?php

 if (!empty($_SESSION['email'])) {echo'<a href="sport.php" class="" >GALLERY</a>


<a  href="logoutkwasaf.php" class="" ><i class="fa fa-sign-out"></i> SIGN OUT</a>
 ';


} 


else{

echo'<a href="sport.php" class="" >GALLERY</a>




';

}

     ?>
     


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



<div class="container">
<h5 align="center">Messages</h5><br>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Inbox <?php echo "(".$datafound.")";?></button>
  <button style="display:none" class="tablinks" onclick="openCity(event, 'Paris')">Sent</button>
 
</div>

<div id="London" class="tabcontent">
  <br>
 
  
<div align="center" class="">

<?php

require 'connection.php';

$you=$_SESSION['email'];
  
$limit = 20;  

$radius = 5;  

    $getQuery = "select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 group by sender_email";    

   

    $result = mysqli_query($con, $getQuery);  

    $total_rows = $result->num_rows;    

   

    $total_pages = ceil ($total_rows / $limit);    

  

    if (!isset ($_GET['page']) ) {  

        $page_number = 1;  

    } else {  

        $page_number = $_GET['page'];  

    }    

 

   $initial_page = ($page_number-1) * $limit;


$inbox="select *  from (

select * from messages where receiver_email = '$you' and is_receiver_deleted = 0 order by has_read asc limit 18446744073709551615)

as sub group by sender_email limit $initial_page,$limit";

$in =mysqli_query($con, $inbox);

$datafound=$in->num_rows;

echo"<table><th><tr style='background-color:rgba(192,192,192,0.1);'>

  <td id='td-action'>Action</td>

  <td id='td-from'>From</td>

    <td id='td-subject'>Subject</td>

    <td id='td-date'>Date</td>
</tr>
</th>";


while ($row=mysqli_fetch_array($in)) {

echo "<tbody><tr id='{$row['id']}' class='border_bottom'>";

  echo "<td id='delete' style='width:; text-align: center;'>

<a style='color:red;' class='remove' name='' id='{$row['sender_email']}'><i class='fa fa-trash'></i></a>


  </td>";

$user_name=$row['sender_email'];

$getUsercount = mysqli_query($con,"select * from messages where sender_email = '$user_name' and is_receiver_deleted = 0 and receiver_email='$you' and has_read = 0");

?>



<?php
if ($getUsercount->num_rows>0) {

$countgetuser = "<span class='numbering'>".$getUsercount->num_rows."</span> ";

}

 else{

$countgetuser="";

 }



?>



<td id='from' style='width: ; text-align: center;'><a href='chat.php?user_name=<?php echo urlencode($user_name);?>'><?php echo substr($row['sender_email'],0,4);?></a><br></td>

<?php

   if ($row['has_read']==0) {
 ?>   
   <td id='message' style='text-align: center;font-weight:bold;font-size:14px;font-family:poppins;'><a style='text-align: center;font-weight:bold;font-size:13px;'  href='chat.php?user_name=<?php echo urlencode($user_name);?>' id='reply' onclick='' id='' class='reply'><?php echo$countgetuser."".$row['subject'];?></a></td>
 
<?php

 }

 if ($row['has_read']==1) {

?>
    <td id='message' style='text-align: center;text-transform: capitalize;font-weight:normal;font-family:poppins;'><a href='chat.php?user_name=<?php echo urlencode($user_name);?>' style='font-size:13px;' onclick='' id='reply' class='reply'><?php echo$countgetuser."".$row['subject'];?></a></td>

<?php


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








  
  
  


  echo "<td id='date' style=' text-align: center;'>".$time_ago."<br></td>";


  


}



?>

</tr></tbody>

</table>
 
 <br><br>
</div>


<?php 


if ($page_number>=2) {
    
    
    echo '<a  href = "hoverdowntabs.php?page=' . ($page_number-1) . '"> &lt; </a>';  
    
    
}



 for($page_number = 1; $page_number<= $total_pages; $page_number++) {  

      if(($page_number >= 1 && $page_number <= $radius) || ($page_number > $page_number - $radius && $page_number < $page_number + $radius) || ($page_number <= $total && $i > $total_pages - $page_number)){
    
      if ($page_number==$total_pages) {
          

        echo '<a id class="active-button"  href = "hoverdowntabs.php?page=' . $page_number . '">' . $page_number . ' </a>'; 
      }

} 


  elseif($page_number == $page_number - $radius ||$page_number == $page_number + $radius) {
      
    echo "... ";}

      else{

        echo '<a id="spage" href = "hoverdowntabs.php?page=' . $page_number . '">' . $page_number . ' </a>'; 

      }

    }  






if ($page_number<$total_pages) {
    echo '<a  href = "hoverdowntabs.php?page=' . ($page_number+1) . '">&gt;</a>';  
}


?>


</div>





<div id="Paris" style="overflow-x: hidden; margin-left:" class="tabcontent"><br>

  <h3 align="center">Sent </h3>

 

<div align="center" class="">

<div id="bom">

 <div id="cy">



</tr></tbody>

</table>


</div></div>



</div>





</div>
</div>



<div class="out"></div>
</div>
</div>


<br><div class="icon-bar" id="" align="">

<a class="facebook" href="https://web.facebook.com/profile.php?id=100076772181022"><i class='fab fa-facebook'></i></a>



<a class="twitter" href="https://twitter.com/ngnimitech"><i class='fab fa-twitter'></i></a>




<a class="instagram" href="https://instagram.com/ngnimitech"><i class='fab fa-instagram'></i></a>




<a class="telegram" href="https://t.me/ngnimitech"><i class='fab fa-telegram'></i></a>




</div><br><br>


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
  <p style="color: white;font-size: 13px;font-family:poppins;">About us<br><a style='color:white;' href='services.php'>Services</a><br>Our team<br>Support center<br><br></p> 



</div>

<div class="col-md-3 col-6 col-sm-3">

<p style="color: white;font-size: 13px;font-family:poppins">Career<br>Term & Conditions<br><br></p> 

</div>



<div class="col-md-3 col-6 col-sm-3">
 <p style="color: white;font-size: 13px;font-family:poppins;">Our partners<br><a style="color: white;" href="faq.php">Faq</a><br></p>


</div>


</div><div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:'Monserrat',sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div></div>

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





<script>

$(document).ready(function(){
 
 $('.remove').click(function(){
  
  if(confirm("Are you sure you want to delete this?"))
  {
   var id = $(this).attr('id');

   var rowElement =$(this).parent().parent();


     $.ajax({
     url:'remove.php',
     method:'POST',
     data:{id:id},

     success:function(response)
     {
     
      if (response==1) {
       swal({
         
         text:"Message has been deleted",
         icon:"success",


       });

       rowElement.fadeOut('slow').remove();
} 

else{

swal({icon:"error",title:"Oops...",text:response});

}


     }
     
    });
   }
   
  

 });
 
});

</script>




<script>

$(document).ready(function(){
 
 $('.removeSent').click(function(){
  
  if(confirm("Are you sure you want to delete this?"))
  {
   var id = $(this).attr('id');

   var rowElement =$(this).parent().parent();


     $.ajax({
     url:'remove-sent.php',
     method:'POST',
     data:{id:id},

     success:function(response)
     {
     
      if (response==1) {
       swal({
         
         text:"Message has been deleted",
         icon:"success",


       });

       rowElement.fadeOut('slow').remove();
} 

else{

swal(response);

}


     }
     
    });
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




<script>
    
    
 $('#spage').on('click',function(){

$('#spage').removeClass('active-button');

$(this).addClass('active-button');
     
 });
     
     
      
 $('#rpage').on('click',function(){

$('#rpage').removeClass('active-button');

$(this).addClass('active-button');
     
 });   
    
    
    
    
    
    
</script>

















</body>
</html>