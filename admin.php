
<?php session_start();

if($_SESSION['email']!='ngnimitech@gmail.com'){
    
    echo ("<script>location.href='index.php'</script>"); 
    
    exit();
}





?>








	<title>&agrave;t&#233; -The online marketing website</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">


<script src="jquery-1.11.3.min.js"></script>



<script type="text/javascript">
$(document).ready(function(){
    $("a.btn-delete").click(function(e){
        if(!confirm('Are you sure you want to delete this?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});

</script>









<style type="text/css">
h1 img{
float:left; 

}


h1{
	position:;
height:80px;
width: 100%;
background-color:rgba(0,0,20,0.6);
padding: 8px;
z-index: 100;

-webkit-box-shadow:;
box-shadow:;
}	

i:hover{
opacity: 0.8;

}

h1 img{
float:left; 
height: 60px;
width:150px;
margin-left: -10px;
margin-top: -3px;
}

@media only screen and (orientation:landscape){
 
#xr img{

width: 480px;
height: 480px;


} 







    
}



@media only screen and (max-width:497px){


h1 img{
float:left; 
height: 60px;
width:150px;
margin-left: -60px;
margin-top: -20px;
}


h1{

width:;

}

 
table{
overflow:hidden;

}  



 
 #xr img{

width: 350px;
height: 430px;


}   
}




@media only screen and (max-width:767px){
 

table{

overflow: hidden;

}  





}










</style>





<body>

<h1>

<a href="index.php" style="text-decoration: none;"><img style="" align="" src="kwasaf2.png" height="90" width="180"></a>


</h1>


<br>
<h4 align="center" class="container" style="font-family: century gothic;font-weight: bold; color:darkgreen;" >Welcome Chief</h4>

<br>




<br><br>	

<?php 
echo "<div class='container col-md-12 col-sm-12'>";

require 'configure.php';
$data="select *from comment";
$kenny=mysqli_query($conn,$data);




echo "<table class='table table-bordered table-hover table-striped' >";

echo "<thead>";

echo "<tr>";

echo "<th>Id</th>";

echo "<th>Pictures</th>";

echo "<th>Name</th>";

echo "<th>Details</th>";

echo "<th>Price</th>";

echo "<th>Location</th>";

echo "<th>Telephone</th>";

echo "<th>Condition</th>";

echo "<th>Category</th>";

echo "<th style=''>Action</th>";

echo "<th style=''>Action</th>";

echo "</tr>";

echo "</thead>";




while ($row=mysqli_fetch_array($kenny))
 {
  $id=$row['id'];

 	echo "<tbody>";

 	echo "<tr>";
 	
	
	echo"<td>".$row['id']."</td>";

	echo"<td><img width='100' src=".$row['photo']."></td>";

	echo"<td>".$row['name']."</td>";

	echo"<td>".$row['message']."</td>";

	echo"<td>".$row['price']."</td>";
	
	
	echo"<td>".$row['loc']."</td>";

	echo"<td>".$row['cell']."</td>";

	echo"<td>".$row['con']."</td>";

	echo"<td>".$row['category']."</td>";

   echo"<td><a class='btn ' href='edit.php?id={$row['id']}'><i class='fa fa-edit'></i></a></td>";
   
echo"<td><a class='btn btn-delete' href='del.php?id={$row['id']}'><i class='fa fa-trash'></i></a></td>";

} 

 ?>


	</tr>
  </table>



<script type="text/javascript">
	
function myfunction() {
	var r=confirm("Ok to delete?");
	if (r==false) {
		return false;
	}
}




</script>





 </div>
 <br><br>
 <div align="center" style="color:rgba(192,20,50,0.9);font-size:15px;font-family:century gothic;font-weight: bold; position:;bottom: 0;margin-top: 25px;">
©2021 &agrave;t&#233; All rights reserved by NIMITECH
</div>







