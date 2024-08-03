
<?php 
session_start();


if (!isset($_SESSION['id'])) {
   echo ("<script>location.href='signup.php'</script>"); 
   exit();
}

$simerchant=$_SESSION["merchant"];

 $siname=$_SESSION['email'];

 $sid=$_SESSION['id'];
 
 
 
 

?>
<!DOCTYPE html>
<html lang="en">
<head>


  <title>&agrave;t&#233; -The online marketing website</title>

  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

  <link rel="stylesheet" href="flickity.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|sofia|Trirong|Poppins">

    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0" charset="utf-8">
    
   
<meta name="google-site-verification" content="ceWM28OEdCl4dgg-z7d9ytniljgNDubA3FxLf4L1MaM">

<script src="sweetalert.min.js"></script> 



  <script src="jquery-1.11.3.min.js"></script>
<script src="flickity.pkgd.min.js"></script>

<style type="text/css">


body{

  background-image:white;
  font-family: poppins;
}


.fashion,.vehicles,.housing,.pets,.farming,.food,.condition,.employment,.entertainment,.baby,.services{

  display: none;
}


#premium{
    
    position:absolute;
    top:10px;
    left:15px;
    
}    
    
#premium i{
    
    
    color:gold;
    font-size:15px;
}   











#submitButton{
font-size: 14px;


}




.details-head{
display: block;
text-align: center;
opacity: 0.7;
margin-top:15px;
margin-bottom: 20px;
font-size: 15px;
color:darkgreen;
}

#secondary{
  visibility:;
  border-bottom:1px dotted rgba(0,0,0,0.1);
  padding-bottom: 20px;
}


#hidehint{

  opacity:;  font-family:'Monserrat',sans-serif;font-size:15px;
  color:red;
  
  padding:10px;
}

.arrow-left{


  font-weight: bold;
}



.fa-eye,.fa-eye-slash{
color: rgba(0,40,255,0.8);


}

.switch {
  position: relative;
  display: inline-block;
  top: -17px;
  width: 70px;
  height: 30px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;

  cursor: pointer;
  top: 0px;
  left: 0;
  right: 0;
  bottom: 0;
  background-color:rgba(0,0,20,0.8);
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 24px;
  width: 18px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color:red;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(40px);
  -ms-transform: translateX(40px);
  transform: translateX(40px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


.form-control{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 13px;
  box-shadow: 0px 0px 8px solid rgba(0,0,0,0.3);

  
}

h4 span, h6 span{
padding:8px;
background-color: rgba(0,70,90,0.7);
  color:white;
 
}



html{
    
    scroll-behavior:smooth;
}


body{user-select:; 

}
#contact-info{

 font-family:poppins;




}







#see{

padding:10px 15px;
background-color:rgba(255,165,50,1);
color:white;
border:1px solid transparent transparent;
border-radius:10px;
text-decoration: none;
box-shadow: 0px 0px 5px;
font-size: 15px;
box-shadow:0px 8px 15px rgba(0,0,0,0.3);


}
#see:hover{


text-decoration: none;


}

.post-pro{

 font-family:'Monserrat',sans-serif;
color: red;


}


a:hover{
    
    opacity:0.85;
    
    
    
}
#sale{

padding: 8px;
border:1px solid transparent transparent transparent;



}
#loader{

width:80px;
height:50px;


}

.flickity-prev-next-button {
  display: block;
}
.flickity-button:disabled {
  display:;
}
 

 
#menu{

height:250px;
width:290px;
color: white;
font-size: 16px;
text-align: center;
margin-left:3px;

background-color:rgba(0,0,20,0.6);

padding:150px 0px;



}

#menu p a{


color: white;
font-size: 16.5px;

text-decoration: none;




}

#menu i {


color: rgba(255,165,50,1);
font-size: 29px;

text-decoration: none;



}
#package{
  
}





.it textarea{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 15px;
  box-shadow: 0px 0px 2px rgba(0,0,0,0.3);
height:120px;
}









.it textarea,.it select,.it input{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 15px;
  box-shadow: 0px 0px 2px rgba(0,0,0,0.3);

}


#menu p a:hover{
opacity:0.8;

color: rgba(255,165,50,1);
font-size: 29px;





}

.it{

margin-bottom: 10px;
  font-size:15px;
  opacity:;
}


.it #dis{

line-height:32px;
  
  opacity:;
}









.fa-gavel,.fa-shopping-cart,.fa-user-plus{

  
  margin-right:20%;
  margin-left: auto;
  font-size:18px;
  padding:38px;
  color: white;
  background-color:rgba(0,70,90,0.7);
  border-radius: 50%;
  border:1px solid transparent transparent;
  box-shadow:0px 0px 8px rgba(0,0,0,0.4);
  margin-bottom:18px;
  margin-top:35px;
}


.btn-up{

border:2px solid white;

font-weight: bold;

outline: none;

color: white;

font-size: 14px;

position: absolute;

left: 45%;

top: 45%;





}

.btn-up:focus{

    

   color:white; 

    

}


h6{



margin-bottom:8px;

}

h4,h6{


color: darkblue;
text-align:center;
font-size:16px;


}



h6{  font-family:'Monserrat',sans-serif; font-weight: bold;color:black;text-align: center;text-shadow:;





}







h4,h6{


color: white;
text-align: center;
font-weight: bold;
font-size: 16px;

}






p{

 text-align:;



  color:black;

  font-size:13px;

   font-family:poppins;



}



#contentx{

position:absolute;

font-size:13px;

color:red;

 font-family:poppins;

font-style: italic;

text-transform: capitalize;

}






.fa-warning{
    
    
    font-size:80px;
}





h6:focus{
    
    border:none !important;
    
    outline:none !important;
}





#ht{

  border:1px solid transparent transparent;

  background-color:rgba(0,70,90,0.7);  

  color:white;

  padding:5px;

  width:100%;

  height:45px;

  font-size:13px;

   font-family:'Monserrat',sans-serif;

  font-weight: bold;

}







input[type=file]{



display: none;



}





hr{



}





input[type=submit]{

border: none;

background-color:rgba(255,165,50,1);

color:white;

width:;

box-shadow:0px 1px 3px rgba(0,0,0,0.2);

transition: all 0.3s ease 0s;

margin-bottom:10px;

height: 35px;

align-self:center;

-webkit-box-shadow:0 0 1px red;

box-shadow:0 0 1px red;





}

input[type=submit]:focus{

 background-color:rgba(255,165,50,1); 
}





button:hover{

opacity: 0.8;

}






strong{
display: block;
color: green;


font-size: 13px;

}
s


label{

  border: 1px solid transparent transparent;

  background-color:; 

align-content: center;

height: 35px;

padding: 2px;

padding-left:;

color:white;

 font-family:'Monserrat',sans-serif;

font-size:20px;

cursor: pointer;

}




label:hover{

opacity: 0.5;}





input[type=submit]:hover{

opacity: 0.8

}


@media only screen and (orientation:landscape){



.it textarea,.it select,.it input{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 13px;
  box-shadow: 0px 0px 3px solid rgba(0,0,0,0.3);

}
.form-control{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 13px;
  box-shadow: 0px 0px 3px solid rgba(0,0,0,0.3);


}
  

    

    p{

        

     font-family:poppins; 

        

    }

    

    

   




}









@media only screen and (max-width:497px){


html{
    
    scroll-behavior:smooth;
}
   

#name{
 font-size:13px;
 margin-top:5px;
  
     
 } 
  

#email{
 
   font-size:13px;
     
 } 


#edit{
 font-size:15px;
    
     
 } 


#serv1{
    
    
    display:block;
}




#serv{
    
    
    display:none;
} 
 

 h6{

  font-family:'Monserrat',sans-serif;

     font-size:14px;

 }

}



@media only screen and (max-width:767px){


#hidehint{
    
    font-family:poppins;
}





#slideinleft{
margin-left: -300px;
max-width: 100%;
opacity: 0;

}


#slideinright{
margin-right: -300px;
max-width: 100%;
opacity: 0;
}


#serv{
    
    
    display:none;
}





#serv1{
    
    
    display:block;
}





}

@media only screen and (max-width:1024px){

 

}  


@media only screen and (max-width:1266px){

  #contact-info{
      
      font-family:trirong;
  }
  
  
  
 
#hidehint{

  
}




 
.it{

  padding: 10px;
  font-family:poppins;
  font-size: 14px;
  opacity:;

}



.it textarea,.it select,.it input{

 border:1px solid transparent transparent;
  font-family:'Monserrat',sans-serif;
  font-size: 15px;
  box-shadow: 0px 0px 3px solid rgba(0,0,0,0.3);

}









#ht{
  font-size:13.5px;  
    font-family:'Monserrat',sans-serif;
     background-color:rgba(0,70,90,0.7);
}




strong{
display: block;

color: green;

font-size: 25px;

}



.fa-gear{font-size:21px;}

h4,h6{margin:8px 0px}






} 


</style>









<body>
<br>

<a class="container" onclick="javascript:history.go(-1)"><i class="fa fa-arrow-left"></i></a>



<br>
<h4 align="center"><span>Sell your produce</span></h4><br>

<div class="container jumbotron">

<form method="post" id="form-product" enctype="multipart/form-data">

<input type="hidden" name="sid" value="<?php echo $_SESSION['id'];?>">

<input type="hidden" name="siname" value="<?php echo $_SESSION['email'];?>">

<input type="hidden" name="views" value="0">

<input type="hidden" name="discount" value="0">

<input type="hidden" name="sold" value="0">

<input type="hidden" name="featured" value="0">

<input type="text" class="form-control" maxlength="22" name="name" minlenth="5"  placeholder="&#9817;Product name"><br>



<textarea class="form-control" name="details" placeholder="Details of produce" minlength="40"  cols="15" rows="5" wrap="physical"  style="outline: none;"></textarea><br>



<input class="form-control" type="number" maxlength="12" name="price" placeholder="Price &#9839;" style="outline: none;"><br>



<input type="number" class="form-control" name="cell" placeholder="Telephone&#128222;" minlength="10" maxlength="14" min="00000" ><br>



<input type="text" class="form-control" name="loc" placeholder="...Where are you right now?" minlength="3" maxlength="14" min="1" ><br>



<select class="form-control" id="category" name="category" >

  <option selected="">Choose category</option> 

  <option value="Baby">Baby Products</option> 

<option value="Beauty">Beauty</option>

<option value="Catering">Catering</option>



<option value="Electronics">Electronics</option> 

<option value="Entertainment">Entertainment</option>


 <option value="Farming">Farming</option> 

 
<option value="Fashion">Fashion</option> 

<option value="food and beverages">Food and Beverages</option>

<option value="Furniture">Furniture</option>

<option value="Gadget">Gadget</option>

<option value="Health">Health</option>

<option value="Housing">Housing</option>


<option value="Jewelry">Jewelry</option> 

<option value="Kitchen">Kitchen</option> 


<option value="Pets">Pets</option> 

<option value="Phone & Accessories">Phone & Accessories</option> 

 <option value="Vehicles">Vehicles</option> 


<option value="Employment">Employment</option>

<option value="Services">Services</option>

<option value="Sport">Sport</option>


</select>

  <br>



<div class='condition'>
<select class="form-control" name="condition">
 <option selected="" disabled="">Condition</option> 
 <option value="foreign used">Foreign Used</option>
<option value="Used">Used</option>
 <option value="New">New</option>
  

</select><br>

</div>



<div class='baby'>
<select class="form-control" name="babyproductType">
 <option selected="" disabled="">Select Type</option>
 <option value="furniture">Baby's furniture</option>
 <option value="toys">Toys</option>
<option value="prams">Prams & Strollers</option>
<option value="shoes">Baby's shoes</option>
<option value="clothing">Baby's clothing</option>  
<option value="care">Baby care</option>
<option value="accessories">Baby's accessories</option>
</select><br>

</div>







<div class='entertainment'>
<select class="form-control" name="entertainmentType">
 <option selected="" disabled="">Entertainment Type</option>
 <option value="video games">Video games</option>
 <option value="card games">Card games</option>

  
</select><br>

</div>











<div class="vehicles">



<select class="form-control" name="carDetails">
  
  <option selected="" disabled="" >Year</option>
  <option value="2000">2000</option>
<option value="2001">2001</option>
 <option value="2002">2002</option>
  <option value="2003">2003</option>
<option value="2004">2004</option>
 <option value="2005">2005</option>
  <option value="2006">2006</option>
<option value="2007">2007</option>
  
  <option value="2008">2008</option>
  <option value="2009">2009</option>
<option value="2010">2010</option>
 <option value="2011">2011</option>
  <option value="2012">2012</option>
<option value="2013">2013</option>
 <option value="2014">2014</option>
  <option value="2015">2015</option>
<option value="2016">2016</option>  
  <option value="2017">2017</option>
  <option value="2018">2018</option>
<option value="2019">2019</option>
 <option value="2020">2020</option>
  <option value="2021">2021</option>
<option value="2022">2022</option>
 

</select><br>

<select class="form-control" name="vehicleType">
  
<option selected="" disabled=""  value="Vehicletype">Vehicle type</option>
<option value="Saloon">Saloon</option>
<option value="Suv">Suv</option>
<option value="Sport">Sport</option>
<option value="Buses & Shuttles">Bus & Shuttles</option>
<option value="Motor">Motor cycle</option>
<option value="Power">Power Bike</option>
<option value="Bicycle">Bicycle</option>
</select>

<br>




<input class="form-control" type="number" placeholder="mileage" name="carMileage"><br>

</div>


<div class="employment">

<select class="form-control" name="employmentType">
  <option selected="" disabled="">Type</option>
  <option value="job seeker">Job seeker</option>
  <option value="employer">Employer</option>

</select><br>
</div>






<div class="farming">

<select class="form-control" name="farmingType">
  <option selected="" disabled="">Type</option>
  <option value="livesock">Livestock</option>
  <option value="crops">Crops</option>

</select><br>
</div>
<div class="food">

<select class="form-control" name="foodType">
  <option selected="" disabled="">Type</option>
  <option value="drinks">Drinks</option>
  <option value="Ice cream & yoghurt">Ice cream & yoghurt</option>
  <option value="food">Food</option>
  
</select><br>

</div>


<div class="services" id="services">

<select class="form-control" id="serviceType" name="serviceType">
  
<option selected="" disabled=""  value="">Service type</option>
<option value="">All</option>
<option value="barbing">Barbing</option>
<option value="engineering">Engineering</option>
<option value="fashion designer">Fashion designer</option>
<option value="graphics designer">Graphics designer</option>
<option value="medicine">Medicine</option>
<option value="phone repairer">Phone repairer</option>
<option value="ui/ux designer">Ui/Ux designer</option>
<option value="web development">Web development</option>
<option value="Teaching">Teaching</option>
<option value="shoe maker">Shoe maker</option>
<option value="baker">Bakers</option>


</select><br>

</div>








<div class="fashion">

<select class="form-control" name="fashionSex">
  <option selected="" disabled="">Sex</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
<option value="Boy">Boy</option>
  <option value="Girl">Girl</option>
<option value="Unisex">Unisex</option>
</select><br>


<select class="form-control" name="fashionSize">
  <option selected="" disabled="" ="" value="Size">Size</option>
  <option value="XXL">XXL</option>
  <option value="XL">XL</option>
  <option value="L">L</option>
  <option value="M">M</option>
  <option value="S">S</option>
  <option value="XS">XS</option>

</select>
<br>

</div>



<div class="pets">

<input class="form-control" maxlength="3" type="number" name="petsAge" placeholder="Age">

<br>
</div>


<div class="housing">


<select class="form-control" name="housingType">
 <option selected="" disabled="">Type</option> 
<option value="Land For rent">Land For rent</option>
 <option value="Land For sale">Land For sale</option>
  <option value="Houses & Apartments For rent">Houses & Apartments For rent</option>
  <option value="Houses & Apartments For sale">Houses & Apartments For sale</option>
  <option value="Short rent">Short rent</option>
  <option value="Event centres">Event centres</option>

</select>



<br>
<input class="form-control" type="text" name="Numberrooms" placeholder="&#128719; Number of rooms">
<br>
<input class="form-control" type="text" name="Numbertoilets" placeholder="&#128701; Number of toilets">

<br>



</div>


 
<span class="" style="font-size:14px;" id="">Add Product image</span>:&nbsp;
<label class="parentimage" >
<input type="file" name="imager">&#x1f4f7;</label>&nbsp; 
<img class="imginfo" src="imginfo.PNG"><div style='border:1px solid transparent;box-shadow:0px 0px 5px rgba(0,70,90,0.4);padding:8px;margin-bottom:19px;border-radius:8px;'>
<span id="hidehint" style="">Remove my number from public view. This will prevent non-members from communicating via calling, whatsapp or sms and only email messages will be made available to use. Default is at show phone number</span>.&nbsp;
<br><br><i class="fa fa-eye" style=""></i>&nbsp;<label class="switch">
 
  <input type="checkbox" name="hidemynumber" value="1">
  <span class="slider round"></span>

</label>&nbsp;
<i class="fa fa-eye-slash"></i>


</div>


<input type="submit" id="post" style="box-shadow:0px 8px 15px rgba(0,0,0,0.3);
transition: all 0.3s ease 0s;" class="form-control" name="submit1" value="Post &#10095;">



<div align="center" style="display: none;" id="loading-image"><img id="loader" src="loading-image.GIF"></div>
</form>


<script type="text/javascript">

$('#bom').load("nu.php");

  $('#form-product').on('submit',function(e){

        e.preventDefault();

        $("#loading-image").show();
        
        var formdata = new FormData();

      $.ajax({

            type: "POST",

            url: "postproduce.php",

            data:new FormData(this),

            cache:false,

            processData:false,

            contentType:false,

             success: function(data) {

             $("#loading-image").hide();

if (data==1) {

          
              swal({
                       text:"Item(s) uploaded successfully",
                      icon:"success",

              });
                
               $('#bom').load(location.href + " #cy");
               $("#form-product")[0].reset();
               
} 

else{
          swal(data); 


            
               

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






<script type="text/javascript">
  $('.parentimage').hover(function() {



  $('.imginfo').show();
     
  
    
   
  });

</script>





<script type="text/javascript">
  


$('.carousel').flickity({
 
  cellAlign: 'left',
  contain: true,
  autoPlay: true,
  

});




</script>












<script type="text/javascript">





  $('#submit-subscribe').on('click',function(e){
        e.preventDefault();




      $.ajax({

            type: "POST",

            url: "subscribe-page.php",

            data:  $("#subscribe-form").serialize(),

            cache:false,

            contentType: "application/x-www-form-urlencoded",

             success: function(response) {

            swal(response);

            $("#subscribe-form")[0].reset();

            },

            error: function(jqXHR, textStatus, errorThrown) {

                console.log(errorThrown);

            }

        })

    });


</script>


 
 
 
 
 
 
 
 <script>
  
function topFunction() {



  document.body.scrollTop = 0;



  document.documentElement.scrollTop = 0;



}



</script>




<script type="text/javascript">

$('.imginfo').hide();

  $('.parentimage').hover(function() {



  $('.imginfo').show();
     
  
    
   
  });

</script>







<script>
      
      
     $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 90) {
    $('.btn-down').fadeIn();
  } else {
    $('.btn-down').fadeOut();
  }
});
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 90) {
    $('.btn-down').fadeIn();
  } else {
    $('.btn-down').fadeOut();
  }
}); 
      
  
      
      
  </script>





<div align="center" style="color:white;font-size:13px;text-transform:uppercase; font-family:poppins; position:;bottom: 0;margin-top:8px;font-weight: bold;">

©2022 &agrave;t&#233;. Website by <b style="color: rgba(255,165,50,1);">Nimitech</b>

</div>






<script type="text/javascript">
  

$(document).ready(function() {

$('#category').on('change',function() {

var category  = $("#category").val();




if (category=='Fashion') {

$('.fashion,.condition').show();

$('.housing,.farming,.pets,.vehicles,.food,.employment,.entertainment,.baby,.services').hide();

}




if (category=='Services') {

$('.services,#services').show();

$('.fashion,.housing,.food,.vehicles,.farming,.employment,.condition,.baby,.pets').hide();

}





if (category=='Entertainment') {

$('.entertainment,.condition').show();

$('.housing,.farming,.pets,.vehicles,.food,.employment,.fashion,.baby,.services').hide();

}





if (category=='Baby') {

$('.baby,.condition').show();

$('.housing,.farming,.pets,.vehicles,.food,.entertainment,.fashion,.services').hide();

}





if (category=='Employment') {

$('.employment').show();

$('.housing,.farming,.pets,.vehicles,.food,.condition,.entertainment,.baby,.fashion,.services').hide();

}





if (category=='Housing') {

$('.housing').show();

$('.fashion,.farming,.pets,.vehicles,.food,.employment,.condition,.entertainment,.baby,.services').hide();

}




if (category=='Farming') {

$('.farming').show();

$('.fashion,.housing,.pets,.vehicles,.food,.employment,.condition,.entertainment,.baby,.services').hide();

}





if (category=='food and beverages') {

$('.food').show();

$('.fashion,.housing,.pets,.vehicles,.farming,.employment,.condition,.entertainment,.baby,.services').hide();

}





if (category=='Pets') {

$('.pets').show();

$('.fashion,.housing,.food,.vehicles,.farming,.employment,.condition,.entertainment,.baby,.services').hide();

}





if (category=='Vehicles') {

$('.vehicles,.condition').show();

$('.fashion,.housing,.food,.pets,.farming,.employment,.entertainment,.baby,.services').hide();

}




if ((category!='Services') && (category!='Farming') && (category!='Fashion') &&  (category!='Pets') && (category!='Housing') && (category!='food and beverages') &&  (category!='Employment') && (category!='Entertainment') && (category!='Baby')) {

$('.condition').show();

$('.housing,.food,.pets,.farming,.employment,.entertainment,.baby,.fashion,.services').hide();


}



});

});




</script>











<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9711737947499937"
     crossorigin="anonymous"></script>

</body>

</html>