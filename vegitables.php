<?php require_once("head.php") ?>


 <!-- ======= Hero Section ======= -->
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
      </a>f

    </div>
  </section><!-- End Hero -->

  <main id="main">

    
  
    
      </div>
    </section><!-- End Why Us Section -->

    </center>
   
    
<?php require_once("function.php");


$sql = "SELECT * FROM vegetables";

$query = mysqli_query($conn, $sql)or die("Invalid query");



?>

<div class="container">

  <br>

  <div class="row">

<?php 

while($array = mysqli_fetch_array($query)){
                                    
     $vegetables = $array["vegetable_name"];
     $Availability = $array["availability"];


     echo '

     <div class="col-md-4">
        <div class="" style="background-color:rgba(255,255,0,0.4)">
          <img src="images/' . $vegetables. '.jpeg" class="img-fluid" alt="Responsive image" style="border:5px solid rgba(255,255,255,0.1);">

          <center><h6>' . ucwords($vegetables) . ' - <i>Availability ('. $Availability.') <a href="single_veg.php?sid_veg=' . $vegetables . '" class="btn btn-danger"><i class="icofont-caret-left"></i>View <i class="icofont-caret-right"></i></a></i></h6></center>
        </div>
      </div>

     ';
   

   }


 ?>
      



  </div>

  

  
  
</div>


                    


  <?php require_once("footer.php"); ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>