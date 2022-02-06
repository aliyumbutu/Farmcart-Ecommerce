<?php require_once("head.php") ?>




<?php require_once("side_bar.php") ?>




    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">States</p>
                    <h5 class="font-weight-bolder mb-0">
                      28
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Cities</p>
                    <h5 class="font-weight-bolder mb-0">
                      320
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Vegitables</p>
                    <h5 class="font-weight-bolder mb-0">
                      12
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Number of users</p>
                    <h5 class="font-weight-bolder mb-0">
                      5+
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<div class="container">
  <div class="row">
    <div class="col-md-12">

      

    </div>
  </div>
</div>



    
      

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
          <img src="../images/' . $vegetables. '.jpeg" class="img-fluid" alt="Responsive image" style="border:5px solid rgba(255,255,255,0.1);">

          <center><h6>' . ucwords($vegetables) . ' - <i>Availability ('. $Availability.') <a href="../single_veg.php?sid_veg=' . $vegetables . '" class="btn btn-danger"><i class="icofont-caret-left"></i>View <i class="icofont-caret-right"></i></a></i></h6></center>
        </div>
      </div>

     ';
   

   }


 ?>

  </div>

  

  
  
</div>

    <div>

	</div>  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>