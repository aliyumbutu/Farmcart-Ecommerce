<?php require_once("head.php") ?>




<?php require_once("side_bar.php") ?>


<?php   require_once("function.php");

$id_test = $ids;

$sql2 = "SELECT * FROM `users` WHERE id = '$id_test'";

$query2 = mysqli_query($conn, $sql2)or die("Invalid query");

$array2 = mysqli_fetch_array($query2);

$name = $array2["name"];
$email = $array2["email"];
$category = $array2["category"];


$sql = "SELECT * FROM `add` WHERE user_id = '$id_test'";

$query = mysqli_query($conn, $sql)or die("Invalid query");

$array = mysqli_fetch_array($query);

	
	$item_id = $array["id"];
    $state = $array["state"];
    $av_kg = $array["av_kg"];
    $am_p_kg = $array["am_p_kg"];
    $city = $array["city"];
    $addr = $array["addr"];
    $user_id = $array["user_id"];
    $phone_number = $array["phone_number"];

    $vegetable_name = $array["vegetable_name"];

 ?>


    <!-- For Address and phone Number-->


   <hr>

    <div>
     <h4>User Profile</h4>


      	<div class="container">
	<div class="row">
		
		<div class="col-md-6">
			
			<h5>Name: <i style="color: red"><?php echo ucwords($name); ?></i></h5></h5>
		
			<h5>Email: <i style="color: red"><?php echo $email; ?></i></h5>
			<hr>
			<h5>Categoty: <i style="color: red"><?php  



				if($category != 0){
					
					echo "Admin";

				}else{
					echo $category;
				}


			?></i></h5></h5>
	
			<hr>
			<h5>Vegitable selling: <i style="color: red"><?php echo ucwords($state); ?></i></h5></h5>
			<hr>
			<h5>Phone Number: <i style="color: red"><?php echo ucwords($city); ?></i></h5></h5>
			<hr>
			<h5>Address <i style="color: red"><?php echo $phone_number; ?></i></h5></h5>
			<hr>
		</div>
	</div>
</div>
  </div>  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>