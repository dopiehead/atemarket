<?php 
session_start();

if (!isset($_SESSION['id'])) {

echo "<script>window.location.href='newsignup.php'</script>";

}

$myid = $_SESSION['id'];



?>



<title>&agrave;t&#233; -The online marketing website</title>

  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<link rel="stylesheet" href="flickity.min.css">



    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">

<script src="sweetalert.min.js"></script> 



  <script src="jquery-1.11.3.min.js"></script>
<script src="flickity.pkgd.min.js"></script>
<style type="text/css">


html{
    
    scroll-behavior:smooth;
}



body{
    
    font-family: poppins;
}


h4{

  font-weight: bold;
  margin:10px;
}


@media only screen and (max-width:523px){
 


} 


@media only screen and (orientation:landscape){

  

   #post, #btn-down, #submit3, {

    background-color:rgba(255,165,50,1);   

       

       

   }

}









@media only screen and (max-width:497px){




}

 


@media only screen and (max-width:1266px){


} 


</style>









<body>

<br>



<a class="container" onclick="javascript:history.go(-1)"><i class="fa fa-arrow-left"></i></a>

<br>



<h4 align="center" id="h6">Edit Profile</h4>

<div class="jumbotron container">

<?php


require 'configure.php';



   $sql="select* from profile where id='$myid'";

   $dbc=mysqli_query($conn,$sql);
  
   while ($row=mysqli_fetch_array($dbc)) {


    $myname=$row['name'];

    $myaddress=$row['address'];

    if ($row['p_number'] > 0) {
     
       $myphone=$row['p_number'];

    }

    $myid=$row['id'];
    
    

  }
    
 ?>

  <form method="POST" id="changeinfo" enctype="multipart/form-data" >
    
    <input type="hidden" name="id" value="<?php echo $myid?>">
    
        <br><input style="font-size:14px;" required="" type="text" name="name" class="form-control"value="<?php echo $myname ?>"><br>


        <textarea style="font-size:14px;" required wrap="physical" placeholder="Enter address "name="address" class="form-control" value="<?php echo $address ?>"></textarea><br>

        <input style="font-size:14px;" minlength="11" maxlength="15" required="" type="number" name="phone_no" placeholder="Enter phone number" class="form-control" value="<?php echo $myphone ?>"><br>
    
  
  <input type="submit" name="submit" id="btn-changeinfo" value="Update" class="btn btn-danger form-control" style="color: white;"><br>

          <div align="center" style="display: none;" id="loading-image"><img id="loader" height="50" width="80" src="loading-image.GIF"></div>

    
  </form>
  

</div>

</div>

</div>



</div>






</div>    
    
    
</div>









</div></div>

<br>




<script type="text/javascript">



  var postData = "text";

  $('#btn-changeinfo').on('click',function(e){

        e.preventDefault();
        
        
    
        
        
        
        

     $("#loading-image").show();


      $.ajax({

            type: "POST",

            url: "edit-profile.php",

            data:  $("#changeinfo").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {

          $("#loading-image").hide();

             if (response==1) {

            swal({
                text:"Record has been saved",
                icon:"success",
                 
            });
            $("#popup").hide(1000);

 $('#bom').load(location.href + " #my");

 $('#com').load(location.href + " #cy");


            
              $("#form-signup")[0].reset();
              
}
       else{
            swal(response);
            
            $("#form-signup").find('input:text').val('');

             $("#form-signup").find('input:password').val('');

            $("#form-signup").find('input:email').val('');

            $('input:checkbox').removeAttr('checked');

           }

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });





</script>




<div align="center" style="color:black;font-size:12px;text-transform:uppercase; font-family:'Monserrat',sans-serif; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2021 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>

</div>


</div>



</body>

