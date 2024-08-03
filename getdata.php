<?php

session_start();

require 'configure.php';

$condition = "SELECT * from comment where sold = 0";

if (isset($_POST['q']) && !empty($_POST['q'])) {

     $search = explode(" ",mysqli_escape_string($conn,$_POST['q'])) ;

    foreach ($search as $text) {


       $condition .= " AND (`name` LIKE '%".$text."%' OR `con` LIKE '%".$text."%' OR `message` LIKE '%".$text."%' OR `category` LIKE '%".$text."%' OR `loc` LIKE '%".$text."%' OR `carDetails` LIKE '%".$text."%' OR `vehicleType` LIKE '%".$text."%' OR `carMileage` LIKE '%".$text."%' OR `fashionSex` LIKE '%".$text."%' OR `fashionSize` LIKE '%".$text."%' OR `petsAge` LIKE '%".$text."%' OR `Numbertoilets` LIKE '%".$text."%' OR `Numberrooms` LIKE '%".$text."%' OR `housingType` LIKE '%".$text."%' OR `farmingType` LIKE '%".$text."%' OR `foodType` LIKE '%".$text."%' OR `employmentType` LIKE '%".$text."%' OR `entertainmentType` LIKE '%".$text."%'  OR `serviceType` LIKE '%".$text."%')";

     } 
}


if (isset($_POST['category'])) {

 $category = mysqli_escape_string($conn,$_POST['category']);

if ($category!='all') {
  
  $condition .= " AND category like '%".$category."%'";
}

}





if (isset($_POST['location'])  ) {

 $location = mysqli_escape_string($conn,$_POST['location']);

if ($location!='') {
  
  $condition .= " AND loc like '%".$location."%'";
}

}




if (isset($_POST['con'])  ) {

 $con = mysqli_escape_string($conn,$_POST['con']);

if ($con!='') {
  
  $condition .= " AND con like '%".$con."%'";
}

}






if (isset($_POST['employmentType'])  ) {

 $employmentType = mysqli_escape_string($conn,$_POST['employmentType']);

if ($employmentType!='') {
  
  $condition .= " AND employmentType like '%".$employmentType."%'";
}

}




if (isset($_POST['entertainmentType'])  ) {

 $entertainmentType = mysqli_escape_string($conn,$_POST['entertainmentType']);

if ($entertainmentType!='') {
  
  $condition .= " AND entertainmentType like '%".$entertainmentType."%'";
}

}



if (isset($_POST['babyproductType'])  ) {

 $babyproductType = mysqli_escape_string($conn,$_POST['babyproductType']);

if ($babyproductType!='') {
  
  $condition .= " AND babyproductType like '%".$babyproductType."%'";
}

}



if (isset($_POST['serviceType'])  ) {

 $serviceType = mysqli_escape_string($conn,$_POST['serviceType']);

if ($serviceType!='') {
  
  $condition .= " AND serviceType like '%".$serviceType."%'";
}

}







if (isset($_POST['housingType'])) {

 $housingType = mysqli_escape_string($conn,$_POST['housingType']);

if ($housingType!='') {
  
  $condition .= " AND housingType like '%".$housingType."%'";
}

}



if (isset($_POST['numberrooms'])) {

 $numberrooms = mysqli_escape_string($conn,$_POST['numberrooms']);

if ($numberrooms!='') {
  
  $condition .= " AND Numberrooms like '%".$numberrooms."%'";
}

}




if (isset($_POST['numbertoilets'])) {

 $numbertoilets = mysqli_escape_string($conn,$_POST['numbertoilets']);

if ($numbertoilets!='') {
  
  $condition .= " AND Numbertoilets like '%".$numbertoilets."%'";
}

}





if (isset($_POST['farmingType'])) {

 $farmingType = mysqli_escape_string($conn,$_POST['farmingType']);

if ($farmingType!='') {
  
  $condition .= " AND farmingType like '%".$farmingType."%'";
}

}




if (isset($_POST['fashionSex'])  ) {

 $fashionSex = mysqli_escape_string($conn,$_POST['fashionSex']);

if ($fashionSex!='') {
  
  $condition .= " AND fashionSex like '%".$fashionSex."%'";
}

}



if (isset($_POST['fashionSize'])  ) {

 $fashionSize = mysqli_escape_string($conn,$_POST['fashionSize']);

if ($fashionSize!='') {
  
  $condition .= " AND fashionSize like '%".$fashionSize."%'";
}

}



if (isset($_POST['foodType'])  ) {

 $foodType = mysqli_escape_string($conn,$_POST['foodType']);

if ($foodType!='') {
  
  $condition .= " AND foodType like '%".$foodType."%'";
}



}



if (isset($_POST['carDetails'])  ) {

 $carDetails = mysqli_escape_string($conn,$_POST['carDetails']);

if ($carDetails!='') {
  
  $condition .= " AND carDetails like '%".$carDetails."%'";
}

}





if (isset($_POST['vehicleType'])  ) {

 $vehicleType = mysqli_escape_string($conn,$_POST['vehicleType']);

if ($vehicleType!='') {
  
  $condition .= " AND vehicleType like '%".$vehicleType."%'";
}

}



if (isset($_POST['min'])) {

  $min = mysqli_escape_string($conn,$_POST['min']);

  if($min!=''){

            $condition .= " AND `price` >=$min";
        }   
}



if (isset($_POST['max'])) {

  $max = mysqli_escape_string($conn,$_POST['max']);

  if($max!=''){

        $condition .= " AND `price` <= $max";
            
        }  
}
 


if (isset($_POST['sort'])) {

$sort = mysqli_escape_string($conn,$_POST['sort']);



 if ($sort=='promo') {


$condition .= " AND discount > 0 ";

}




 if ($sort=='featured') {


$condition .= " AND featured = 1 ";



}



if($sort=='recent'){

$condition .= " ORDER BY `featured` DESC,`id` DESC";

 }


if($sort=='views'){


          $condition .= " ORDER BY `featured` DESC,`views` DESC";
          

 }

if($sort=='highest'){


          $condition .= " ORDER BY `featured` DESC,CAST(`price` AS DECIMAL(10,2)) DESC";
          

 }


if($sort=='lowest'){


          $condition .= " ORDER BY `featured` DESC,CAST(`price` AS DECIMAL(10,2)) ASC";
          

 }

   	}
   	
   	
   	
else{

$condition .= " ORDER BY featured DESC, id DESC"; 

}


$num_per_page = 6;


if (isset($_POST['page'])) {
 
$page = $_POST['page'];

}

else{

 
$page = 1;  

}



$initial_page = ($page-1)*$num_per_page; 

$condition .= " limit $initial_page,$num_per_page";

$data = mysqli_query($conn,$condition);



$datafound = $data->num_rows;


echo"<div class='container' id='showing' align='right' style='margin-right:;opacity:0.8;color:rgba(0,70,90,0.8);font-size:px;font-family:;'>".$datafound." Item(s)</div><br>"; 



        while($row=mysqli_fetch_array($data))

        {


         
            
            
            ?>
        <?php   
        
       
echo "<div id='package'>";
$price = $row['price'];

 
            if ($row['discount']>0) {

 echo "<span id='discount'>-".$row['discount']."%</span>";
 echo "<span class='' id='views'>".$row['views']." <i class='fa fa-eye'></i></span>";
}

       if ($row['discount']==0) {

 echo "<span class='' id='noviews'>".$row['views']." <i class='fa fa-eye'></i></span>";
}
   
    if($row['featured']=='1'){echo "<span id='premium'><i class='fas fa-crown'></i></span>";
        
        
    }

if (!empty($_SESSION['email'])) {


echo "<a target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img loading='lazy' id='imgitem' width='' data-src='https://via.placeholder.com/150' src=".$row['photo'].">"." "."</div></a>";

  echo "<span id='nameitem' style='' ><a  style='color:green;' target='_blank' href='details.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";
}

else{

echo "<a href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}' target='_blank'><div style=''><img id='imgitem' loading='lazy' width='' src=".$row['photo'].">"." "."</div></a>";


echo "<span id='nameitem' style='' ><a  style='color:green;' target='_blank' href='details-visitor.php?id={$row['id']}&{$row['name']}&{$row['loc']}&{$row['category']}&{$row['message']}'>".$row['name']."</a></span>"."<br>";


}

    if ($row['discount']>0) {

echo"<span id='priceitem' ><span style='text-decoration:line-through;'>&#8358;".$row['price']."</span></span>";

echo "<span id='priceitem' style=''>&#8358;";

 echo $price - ($row['discount']/100 * $price)."</span><br>";



}

if ($row['discount']==0) {
         echo"<span id='priceitem' style=''>Price: &#8358;".$row['price']."</span><br>";

       

}

    
    
  echo"<span id='locitem'><i class='fa fa-map-marker'></i> ".$row['loc'].""."</span><br>";
    
    
    echo"<span id='catitem'>".$row['category'].""."</span><br>";



  if($row['category']!='Employment' && $row['category']!='Services' && $row['category']!='farming' && $row['category']!='Housing' && $row['category']!='Pets' && $row['category']!='Education ' && $row['category']!='food and beverages' && $row['category']!='Health' && $row['category']!='Employment') {
            
      echo"<span id='conitem'>Condition: ".$row['con'].""."</span><br>";


}


if (!empty($row['petsAge'])) {
  
  echo"<span style='font-size:px;' id='conitem'>Age: ".$row['petsAge']."</span><br>"; 
}



if (!empty($row['farmingType'])) {
  
  echo"<span style='font-size:px;' id='conitem'>Farm type: ".$row['farmingType']."</span><br>"; 
}


if (!empty($row['foodType'])) {
  
  echo"<span style='font-size:px;' id='conitem'>Type: ".$row['foodType']."</span><br>"; 
}



if (!empty($row['employmentType'])) {
  
  echo"<span style='font-size:px;' id='conitem'>Type: ".$row['employmentType']."</span><br>"; 
}




if (!empty($row['serviceType'])) {
  
  echo"<span style='font-size:px;' id='conitem'>".$row['serviceType']."</span><br>"; 
}


  ?> 

               <?php
          echo"</div>";      
          
          
                
                
           
        
        
           

}
        ?>

<br><br>



 <?php 

require 'configure.php';

$radius=6;

$pageres = mysqli_query($conn,"select * from comment where sold=0");

$numpage = $pageres->num_rows;

$total_num_page =ceil($numpage/$num_per_page);

?>


<div>

<?php

echo "<br>";

if ($page>1) {

$previous = $page-1;

echo'<span id="page_num"><a style="" class="btn-success prev" id="'.$previous.'">&lt;</a></span>';

}

 for ($i=1; $i<=$total_num_page; $i++) { 


 if(($i >= 1 && $i <= $radius) || ($i > $page - $radius && $i < $page + $radius) || ($i <= $total_num_page && $i > $total_num_page - $radius)) {

    if($i == $page) {echo'<span id="page_num"><a class="btn-success active-button" id="'.$i.'">'.$i.'</a></span>';}
  }

  elseif($i == $page - $radius || $i == $page + $radius) {

    echo "... ";
}


else{

echo'<span id="page_num"><a class="btn-success" id="'.$i.'">'.$i.'</a></span>';

}

} 





if ($page<$total_num_page) {

$next = $page+1;

  echo'<span id="page_num"><a style="" class="btn-success next" id="'.$next.'">&gt;</a></span>';
}

 ?> 






<?php




?>





