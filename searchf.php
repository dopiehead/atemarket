

<?php 
require 'configure.php';
session_start();

if (isset($_GET['q'])) {
    
	$q=$_GET['q']; 
	
	if ($q=='') {
	    
		 $y="No Match found";
		}




else{
    
    $condition .= "SELECT * FROM comment where sold = 0";
    
    $search = explode(" ",$_GET['q']) ;

    foreach ($search as $text) {

    
       $condition .= " AND (`name` LIKE '%".$text."%' OR `con` LIKE '%".$text."%' OR `message` LIKE '%".$text."%' OR `category` LIKE '%".$text."%' OR `loc` LIKE '%".$text."%' OR `carDetails` LIKE '%".$text."%' OR `vehicleType` LIKE '%".$text."%' OR `carMileage` LIKE '%".$text."%' OR `fashionSex` LIKE '%".$text."%' OR `fashionSize` LIKE '%".$text."%' OR `petsAge` LIKE '%".$text."%' OR `Numbertoilets` LIKE '%".$text."%' OR `Numberrooms` LIKE '%".$text."%' OR `housingType` LIKE '%".$text."%' OR `farmingType` LIKE '%".$text."%' OR `foodType` LIKE '%".$text."%')";
   
}

$condition .=" ORDER by id DESC LIMIT 3";


$result= mysqli_query($conn,$condition);

$datafound=$result->num_rows;

if ($result->num_rows==0) {
  echo "<span style='opacity:0.5;'><br>No Match Found!</span><br><br>";
}   
elseif($datafound>0) {
   
  echo "<span style='opacity:0.5;'>About"." ".$datafound." "."result(s) found!</span><br>";


while ($row=mysqli_fetch_array($result)) {



$price = $row['price'];




            if ($row['discount']>0) {

 echo "<span id='discount'>-".$row['discount']."%</span>";
 
}

if(!empty($_SESSION['id'])){
    
    
    
echo "<br><a target='_blank'  style='color:;font-weight:normal;' href='details.php?id={$row['id']}'><img width='100' src=".$row['photo'].">"."<a/><br>";


echo "<a target='_blank'  style='color:;font-weight:normal;' href='details.php?id={$row['id']}'>".$row['name'].""."</a><br>";    
    
}

else{
    
    
  echo "<br><a target='_blank' style='color:;font-weight:normal;' href='details-visitor.php?id={$row['id']}'><img width='110' src=".$row['photo'].">"."<a/><br>";


echo "<a target='_blank' style='color:;font-weight:normal;' href='details-visitor.php?id={$row['id']}'>".$row['name'].""."</a><br>";   
    
}

  if ($row['discount']>0) {

echo"<span id='priceitem'><span style='text-decoration:line-through;'>&#8358;".$row['price']."</span></span>&nbsp;&nbsp;";


echo "<span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

    


echo "<span style='font-weight:normal;'>".$row['loc']."</span>"."<br>";

    if($row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
      echo"<span style='font-size:px;font-weight:normal;'>Condition: ".$row['con'].""."</span><br>";


}


if (!empty($row['petsAge'])) {
  
  echo"<span style='font-size:px;font-weight:normal;text-transform:capitalize;' id=''>".$row['petsAge']."</span><br>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<span style='font-size:px;font-weight:normal;text-transform:capitalize;' id=''>".$row['farmingType']."</span><br>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<span style='font-size:px;font-weight:normal;text-transform:capitalize;' id=''>".$row['foodType']."</span><br>"; 
}







echo "<span style='font-weight:normal;'>".$row['category']."</span>"."<br><br>";
  

	
}


if ($datafound>2) {
echo"<span style='font-weight:normal;'><a href='sport.php?search=$q' style='color:white;padding:4px 8px;border:1px solid transparent;background-color:rgba(255,145,50,1);box-shadow:0px 3px 8px rgba(0,0,0,0.3);border-radius:10px;' class='c-more'>SEE ALL &nbsp;<i class='fa-solid fa-chevron-right'></i></a></span><br>";
}

echo"<br>";

echo mysqli_error($conn);








}

}


























}
 ?>

