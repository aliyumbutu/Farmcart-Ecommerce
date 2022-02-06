<?php require_once("head.php") ?>

 <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">  <span></span></h2>      
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"></h2>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"></h2>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->


  <hr>


  <?php 

  $ps_id = $_GET["ps_id"];

  require_once("function.php");

$sql = "SELECT * FROM `add` WHERE id = '$ps_id'";

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


$sql2 = "SELECT * FROM `users` WHERE id = '$user_id'";

$query2 = mysqli_query($conn, $sql2)or die("Invalid query");

$array2 = mysqli_fetch_array($query2);

$name = $array2["name"];



	


?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="" style="background-color:rgba(255,255,0,0.4)">
          <img src="images/<?php echo $vegetable_name; ?>.jpeg" class="img-fluid" alt="Responsive image" style="border:5px solid rgba(255,255,255,0.1);">

          <center><h2><?php echo ucwords($vegetable_name);?>s <a href="login.php" class="btn btn-danger"><i class="icofont-caret-left"></i> BUY <i class="icofont-caret-right"></i></a></i></h2></center>
        </div>
		</div>
		<div class="col-md-6">
			<hr>
			<h5>Seller Name: <i style="color: red"><?php echo ucwords($name); ?></i></h5></h5>
			<hr>
			<h5>Amount per Kg: <i style="color: red"><?php echo $am_p_kg; ?></i></h5>
			<hr>
			<h5>Availability: <i style="color: red"><?php echo $av_kg; ?></i></h5></h5>
	
			<hr>
			<h5>State: <i style="color: red"><?php echo ucwords($state); ?></i></h5></h5>
			<hr>
			<h5>City: <i style="color: red"><?php echo ucwords($city); ?></i></h5></h5>
			<hr>
			<h5>Contact Number <i style="color: red"><?php echo $phone_number; ?></i></h5></h5>
			<hr>
		</div>
	</div>
</div>
	




<?php require_once("footer.php"); ?>