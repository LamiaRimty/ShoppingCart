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

if (isset($_POST["getProduct"])) {
	# code...

	$Product_query = " SELECT * FROM products ORDER BY rand() LIMIT 0,9" ;
	$run_query = mysqli_query($con, $product_query)
	if (mysqli_num_rows($run_query)>0) {
		# code...
		while ($row = mysqli_fetch_array($run_query)) {
			# code...

			$pro_id =$row['product_id'];
			$pro_cat =$row['product_cat'];
            $pro_title =$row['product_title'];
            $pro_price =$row['product_price'];
            $pro_image=$row['product_image'];

            echo "<div class='col-md-4'>
					<div class='panel panel-info'>
						<div class='panel-heading'>$pro_title</div>
						<div class='panel-body'>
							<img src='Product_images/$pro_image'>
						</div>
						<div class='panel-heading'>$.$pro_price.00

							<button class='$pro_id' style='float:right;' class='btn btn-danger'>AddToCart</button>
						</div>
					</div>";

		}


	}

}






?>