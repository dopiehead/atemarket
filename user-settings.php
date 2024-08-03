<?php 
session_start();

if (!isset($_SESSION['id'])) {

echo "<script>window.location.href='newsignup.php'</script>";

}

$myid = $_SESSION['id'];



?>
<head>
  
  <title>&agrave;t&#233; -The online marketing website</title>

  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">


  <link rel="stylesheet" href="flickity.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">

<script src="sweetalert.min.js"></script> 



  <script src="jquery-1.11.3.min.js"></script>
<script src="flickity.pkgd.min.js"></script>

<style type="text/css">
  
body{


  font-family: poppins;
}

h6{

  font-weight: bold;

  color: black;

  font-family: poppins;

  text-align: center;
}

.col-md-6{

  margin-bottom: 15px;
  border-bottom: 1px dotted rgba(0,0,0,0.8);
}

p{

font-size: 13px;
color: rgba(0,0,0,0.6);

}



</style>





</head>
<body>
<br>



<a class="container" onclick="javascript:history.go(-1)"><i class="fa fa-arrow-left"></i></a>




<br>



<div class="container">


<div class="row jumbotron">




<div class="col-md-6"> 

    
<h6>Switch my account</h6>  

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


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
  
  <input type="submit" name="submitAccount" id="submitAccount" value="Switch" class="btn btn-primary form-control" style="color: white;"><br>

  <div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>
  
  </form>



</div>



<div class="col-md-6"> 

    
<h6>Remove my account</h6>  

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>



<br>
<a style="color: white" id="btn-delete" href="delete-account.php?id=<?php echo$_SESSION['id'];?>" class="btn btn-danger form-control"><i class="fa fa-trash">&nbsp;</i> Delete my account </a>  




</div>

</div>

</div>

<div align="center" style="color:black;font-size:13px;text-transform:uppercase; font-family:'Monserrat',sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2021 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

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

else if (response==2) {

  
    window.location="seller-verify.php";


}




       else { 
           
             swal({

text:"Error in saving record",

icon:"error",

});


            }

 }
       

        });


 }


    });

</script>


</body>

</html>





