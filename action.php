<?php
include "db.php";
if (isset($_POST["category"])) {
	# code...

$category_query ="SELECT * FROM categories";
$run_query = mysqli_query($con ,$category_query);
echo "

			<div class='nav nav-pills nav-stacked'>
				<li class='active'><a href='#'><h4>Categories</h4></a></li>

"; 


 if (mysqli_num_rows($run_query)>0) {
 	# code...
 	while ($row =mysqli_fetch_array($run_query)) {
 		# code...
 		$cid =$row["cat_id"];
 		$cat_name =$row["cat_title"];
 		echo "
 		
 		<li><a href='#'>$cat_name</a></li>

 		";
 	}

 	echo " </div>" ;
 }

}




if (isset($_POST["brand"])) {
	# code...

$brand_query ="SELECT * FROM brands";
$run_query = mysqli_query($con ,$brand_query);
echo "

			<div class='nav nav-pills nav-stacked'>
				<li class='active'><a href='#'><h4>Categories</h4></a></li>

"; 


 if (mysqli_num_rows($run_query)>0) {
 	# code...
 	while ($row =mysqli_fetch_array($run_query)) {
 		# code...
 		$bid =$row["brand_id"];
 		$brand_name =$row["brand_title"];
 		echo "
 		
 		<li><a href='#'>$brand_name</a></li>

 		";
 	}

 	echo " </div>" ;
 }

}









?>