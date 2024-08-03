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

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
}



</style>





</head>
<body>
<br>



<a class="container" onclick="javascript:history.go(-1)"><i class="fa fa-arrow-left"></i></a>



<h6 align="center" id="h6">Change Password</h6>
<br>



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
<div class="row jumbotron">




<div class="col-md-6"> 
<form method="POST" id="changepassword" enctype="multipart/form-data" >
<input type="hidden" name="id" value="<?php echo $myid?>">

 <br><input style="font-size:14px;" type="text" name="opassword" id="opassword" class="form-control" placeholder="Enter old password" value="">

 </div>

 <div class="col-md-6">
    
        <br><input style="font-size:14px;" type="text" name="password" id="password" class="form-control" placeholder="Enter new password" value=""><br>

    <input style="font-size:14px;" type="text" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm new password" value=""><br>
    
  
</div>


 <input type="submit" name="submit" id="btn-changepassword" value="Update" class="btn btn-danger form-control" style="color: white;"><br>

    
  


          <div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>



    
  </form>



</div>





<script type="text/javascript">



  var postData = "text";

  $('#btn-changepassword').on('click',function(e){
      
      
    var password = $("#password").val();
    
    var opassword = $("#opassword").val();

    var cpassword = $("#cpassword").val();

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

             $("#changepassword")[0].reset();

              
}
       else{
            swal({


               
              icon:"error",

              text:response


            });
            
            

            $('input:checkbox').removeAttr('checked');

           }

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>


<div align="center" style="color:black;font-size:13px;text-transform:uppercase; font-family:'Monserrat',sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2021 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>
</body>

</html>





