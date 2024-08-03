<?php


session_start();

error_reporting(E_ALL ^ E_NOTICE);

$sender = $_SESSION['email'];

if (!isset($_SESSION['id'])) {
  echo "<script>window.location.href='newsignup.php'</script>";
  exit();
}

if (isset($_GET['user_name'])) {

	$user_name= $_GET['user_name'];
	


require 'configure.php';

$user = mysqli_query($conn,"select * from profile where email='$user_name'");

if ($user->num_rows>0) {
    
while ($row = mysqli_fetch_array($user)) {
	
	$user_name=$row['email'];

   $_SESSION['username']=$row['email'];
	
	$img = $row['profile_pic'];
  
	$id = $row['id'];

}
}

else{
    
  $not_user= "<span id='phone' style='font-size:13px;border:1px solid transparent;'>This user is not a registered member</span>"; 
    
}


}
?>


<?php 



require 'connection.php';
  
$sql="UPDATE messages SET has_read = 1 where sender_email='$user_name' and receiver_email = '$sender'";

$query=mysqli_query($con,$sql);


  
?>
<!DOCTYPE html>
<html lang='en'>

<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
<title>&agrave;t&#233; -The online marketing website | Chat</title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Poppins">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="sweetalert.min.js"></script>

	<style type="text/css">
	
body{
 font-family: sans-serif;


}

#userProfile{

width: 100%;z-index:9999;background-color:rgba(0,70,90,0.8);background-color:rgba(0,70,90,0.8); border:1px solid transparent;box-shadow:0px 0px 4px green;height:80px;padding:3px 20px;color: white;


}


#footer{
    
    width:100%;
    position:fixed;
    
    left:0;
    right:0;
    margin:auto;
    bottom:15px;
}

#time{
   
    color:black;
    opacity:0.85;
    font-family:montserrat;
     margin-top:8px;
    font-size:12px;
}

#timex,.timex{
    
    color:rgba(30,35,120,0.7);
    font-family:montserrat;
    font-size:12px;
    
}


a{color:white;}

a.hover{
    color:white;
    text-decoration:none;
}



#name{
    
color:white;    
 
 font-family:montserrat;  
 
 font-weight:bold;
 
 display:none;
    
    
}

#nameprofile{
    


 text-transform:capitalize;  
 
color:white;    
 
 font-family:montserrat;  
 
 font-weight:bold;
 
 font-size:18px;
    
}

#loader{
    
    opacity:0.5;
}



#img{height:70px;width:70px;border-radius: 50%;font-size:21px;color: white; border:3px solid red;padding:;

}


#receiverbox{

color:white; width:65%;padding:10px 16px;border:1px solid transparent;border-radius:0px 40px 40px 40px;background-color:rgba(255,70,80,0.7);float: left;margin-bottom:10px;word-wrap:break-word;
}

#receiverbox::{
    text-transform;capitalize;
}
    
    




#senderbox{
background-color: rgba(0,70,90,0.4);padding:10px 16px; color: white;width:65%;float: right;margin-top: 10px;border-radius:40px 40px 0px 40px;margin-bottom: 15px;font-size:;word-wrap:break-word;
}

#senderbox::first-letter{
    
text-transform:capitalize;
    
}

#messagebox{

background:rgba(243,243,243,9.8);margin-bottom:15px; width:79%;color: white;margin-top:15px;height:433px;overflow-y:auto;
	
}

#message{

    
border:1px solid transparent;border-radius:25px;margin-top:29px;background-color:rgba(195,195,195,0.5);background-color:rgba(195,195,195,0.5);box-shadow:0px 0px 3px rgba(0,70,90,0.8);
width:100%;opacity:1;z-index:999;
}
#submit{
float:right;
font-size:25px;
margin-right:5px;
position:relative;
background-color:rgba(255,30,10,0.8);
Border:1px solid transparent; box-shadow:0px 0px 5px rgba(0,0,0,0.5);
margin-top:-55px;
height:100%;
border-radius:50%;
Padding:5px 10px;}

#phone{
    
  font-size:18px;  
    margin-top:21px;
    color:white;float:right;
    
    
}
.loading-image{
    
   position:absolute; 
   left:0px;
   right:0px;
   margin:auto;
   top:60%;
}


@media only screen and (max-width:1266px){
    
.profilecontent{
    
margin-top:-10px;    
    
}    
    

#footer{
    position:fixed;
    left:0px;
    right:0;
    margin:auto;
    width:100%;
    
    bottom:15px;
}





body{
 
    font-family: 'Roboto', sans-serif;
    font-size:14px;
    height:100%;
   
}



#img{height:70px;width:70px;border-radius: 50%;font-size:21px;color: white; border:3px solid red;padding:3px;

}

#userProfile{

height:60px;
 font-family:gill sans;
 z-index:9999;
margin-bottom:10px;
    
}



#submit{
float:right;
margin-right:1%;
font-size:21px;
position:relative;
background-color:rgba(255,30,10,0.8);
Border:1px solid transparent; box-shadow:0px 0px 5px rgba(0,0,0,0.5);
margin-top:-53px;
height:100%;
border-radius:50%;
Padding:6px 10px;


}

#receiverbox{

color:white; width:80%;padding:3% 5%;border:1px solid transparent;border-radius:0px 41px 41px 41px; background-color:rgba(255,70,80,0.7);float: left;margin-bottom:15px;font-size:16px;font-family:poppins;
}
#time{
   
    color:black;
    opacity:0.56;
    font-family:montserrat;
     margin-top:8px;
    font-size:12px;
}

#senderbox{
background-color: rgba(0,70,90,0.4);padding:3% 8%;font-family:poppins; color: white;width:80%;float:right;margin-top: 10px;border-radius:41px 41px 0px 41px;margin-bottom: 15px;font-size:16px;
}

#senderbox::first-letter{ 
    text-transform:capitalize;
}


#message{
border:1px solid transparent;border-radius:25px;margin-top:29px;background-color:rgba(195,195,195,0.5);background-color:rgba(195,195,195,0.5);box-shadow:0px 0px 3px rgba(0,70,90,0.8);
width:100%;opacity:1;z-index:999;
}

#messagebox{

background:rgba(240,240,240,8);margin-bottom:; width:100%;color: white;margin-top:19px;overflow-y:auto;margin-top:10px;height:380px;
	
}

#name{
    
color:white;    
 
 font-family:montserrat;  
 
 font-weight:bold;
 
 display:none;
    
    
}

#loader{
    
    opacity:0.5;
}


#nameprofile{
    
position:relative; 

top:-8px;

 text-transform:capitalize;  
 
color:white;    
 
 font-family:gill sans;  
 
 font-weight:bold;
 
 font-size:18px;
    
}

#phone{
    
  font-size:18px;  
    margin-top:8px;
    border-radius:50%;
    border:1px solid white;
    padding:3px 7px;
    color:white;float:right;
    
}
.fa-chevron-left{
position:relative;

top:-9px;
font-weight:bold;
font-size:16px;
}
.loading-image{
    
   position:absolute; 
   left:0px;
   right:0px;
   margin:auto;
   top:60%;
}

}
	</style>


</head>
<body>


<div class="" style=" position: fixed;top:0px;width: 100%;">
<div id="userProfile" style="">
	
<a class="fa-left" href="hoverdowntabs.php"><i style="color: white;font-weight: bold;" class="fa fa-chevron-left"></i>&nbsp; &nbsp; </a>

<span class='profilecontent'><a href='merchant.php?id=<?php echo $id?>'><img id="img" style="" src="<?php echo$img?>">&nbsp; &nbsp;<b id='nameprofile'><?php echo substr($user_name,0,4);?></b></a>

<?php

$getphone = mysqli_query($conn,"select * from comment where siname='$user_name' order by id desc limit 1");

if ($getphone ->num_rows>0) {
	
while ($row = mysqli_fetch_array($getphone)) {
	
	$phone=$row['cell'];

}

?>

<a id='phone' style='' href='tel: +234<?php echo$phone;?>'><i class='fa fa-phone'></i></a>



<?php

}


echo $not_user;

?>




</span>



</div>

</div><br><br><br>

<?php 


$sender= $_SESSION['email'];

require 'connection.php';  


	$read = mysqli_query($con,"select * from messages where is_sender_deleted = 0  and sender_email='$sender' and receiver_email = '$user_name' or sender_email='$user_name' and receiver_email = '$sender' ");

?>
 
 <div id="messagebox" class="container" style="">


<div id="parent"><div id="child">
<?php

	while ($messages=mysqli_fetch_array($read)) {

		
		
		  
		  if ($messages['sender_email']==$user_name) {
?><br>
		  	<div id="receiverbox"  style="" align="left" class="">

		   <b id='name' style="color: black;text-transform:;font-size:px;"><?php echo substr($messages['sender_email'],0,4)."<br>"?></b>	

           <?php echo$messages['compose']."<br>";?>
           
           
        <?php
   $date = $messages['date'];

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

    $item=$messages['itemid'];
        
        ?>
           
           
           
           
           
           
           

            <i id='time' style='font-size:;'>Received:  <?php echo$time_ago."";?></i>

		  	</div><br>

<?php		  	
		  }


		   if ($messages['receiver_email']==$user_name) {
?>		  
<br>
	<div id="senderbox" style="" align="right" class="">

		 <b id='name' style="color: black;text-transform: ;font-size:px;"><?php echo substr($messages['sender_email'],0,4)."<br>"?></b>
		  		
           <?php echo$messages['compose']."<br>"?>

<?php
if ($messages['has_read']==1) {
 ?> 
 <?php
   $datex = $messages['date'];

 $time_elapsed = time()-strtotime($datex);
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

    $item=$messages['itemid'];
        
        ?>
<i><?php echo"<i id='timex' class='timex' style='font-size:;'>Seen: ".$time_ago.'</i>';?></i> &nbsp; 

<?php
}

else{
?>
<?php
   $datey = $messages['date'];

 $time_elapsed = time()-strtotime($datey);
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

    $item=$messages['itemid'];
        
        ?> 
<i><?php echo"<i id='time' style='font-size:;'>Sent:  ".$time_ago.'</i>';?></i> &nbsp; 

<?php
}
?>

            

		  	</div><br>
            

	<?php	  	
		  

		}
	}
echo"<br><br>";

 ?>



</div></div></div>

</div>
<br><br><br>
	<div class="container">


<div style="display: none;text-align:center;" class="loading-image" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>
		

<form method="post" id="message-form">	
<input class="form-control" type="hidden" id="user_name" name="user_name" value="<?php echo$sender?>">

 <input type="hidden" name="has" value="0" placeholder="" class="form-control">

<input type="hidden" name="is_sender_deleted" value="0">

<input type="hidden" name="is_receiver_deleted" value="0">

<input type="hidden" name="itemid" value="<?php echo$item;?>">
   
<input type="hidden" name="sentto" value="<?php echo$user_name; ?>" placeholder="" class="form-control">

<?php

require 'connection.php';

$sub = mysqli_query($con,"select * from messages where sender_email='$sender' and receiver_email = '$user_name' or sender_email='$user_name' and receiver_email = '$sender' order by id desc limit 1");

while ($get = mysqli_fetch_array($sub)) {

if(empty($get['subject'])){

$subject ='item has been deleted';}

else{

$subject = $get['subject'];

}

}


?>

  <input type="hidden" name="subject" placeholder="" value="<?php echo$subject; ?>" class="form-control">

 <input type="hidden" name="sentby" value="<?php echo$_SESSION['email']; ?>">

 <input type="hidden" name="name" value="<?php echo$_SESSION['name']; ?>">

 <input type="hidden" id="receiver_name" name="receiver_name" value="<?php echo$user_name?>">
 
 
<div class="container" id='footer'>
<textarea style="" class="container form-control" required name="message" id="message" rows="2" wrap="physical" placeholder=" Type message here">

</textarea>
<button type="button" name="submit" id="submit" class="btn btn-success" style="color:white;" ><i class="fa fa-paper-plane"></i></button>
</div>
</form>


</div>





<script>
	
$('document').ready(function() {	
	
$('#submit').on('click',function(e) {
    	e.preventDefault();



$('#submit').hide();

var str = $('#message-form').serialize();

$('#message').val('');

	$.ajax({

           type: "POST",

            url: "message-process.php",

            data:  str,
            
            cache:false,
            
            timeout:50000,

             success: function(response){
            
            $('.loading-image').hide();
            
           
              $("#parent").load(location.href + " #child");
             
            
             $('#submit').show();
                 
         	var objDiv = document.getElementById('messagebox');

              	objDiv.scrollTop = objDiv.scrollHeight;

             }

	});
});	
	

  
});

</script>

<script>

       setInterval(function() {

    
 $.post(
     
    "getdatainfo.php",
    
    function(data){
        
       
        
       if(data == 1){ 
       
   	var objDiv = document.getElementById('messagebox');

              	objDiv.scrollTop = objDiv.scrollHeight; 

          $("#parent").load(location.href + " #child");    
        
    }
    
    
    }
    
     
     )
     
     
     
     
       },5000);  
     
 
    
    
</script>




</body>
</html>