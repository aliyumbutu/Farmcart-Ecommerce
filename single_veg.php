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
      </a>

    </div>
  </section>

  <!-- End Hero -->



  <?php 

  

  $sid_veg = $_GET["sid_veg"];



require_once("function.php");

$sql = "SELECT * FROM `add` WHERE vegetable_name = '$sid_veg'";

$query = mysqli_query($conn, $sql)or die("Invalid query");

?>

  <main id="main">

    
  
    
      </div>
    </section><!-- End Why Us Section -->

    </center>
   
    




 <div class="card mb-4">
                            <div class="card-header">
                                
                                <h4><i class="fas fa-table mr-1"></i> <?php echo ucwords($sid_veg); ?> Vagitable  </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>State</th>
                                                <th>Geographical Area</th>
                                                <th>Vegitables type</th>
                                                <th>Amount 1kg</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                            
                                           
                                 <?php while($array = $query->fetch_array()){
                                    $id = $array["id"];
                                  $state = $array["state"];
                                     $av_kg = $array["av_kg"];
                                        $am_p_kg = $array["am_p_kg"];
                                           $city = $array["city"];
                                            $addr = $array["addr"];
                                             $user_id = $array["user_id"];
                                             $vegetable_name = $array["vegetable_name"];


                                    echo "<tr>";
                                    echo ' <td>' . $id . '</td>';
                                    echo ' <td>' . ucwords($state) . '</td>';
                                    echo ' <td>' . ucwords($city) . '</td>';
                                    echo ' <td>' . ucwords($vegetable_name) . '</td>';
                                    echo ' <td>' . $am_p_kg . ' ' . "" . 'Rupees</td>';

                                    echo ' <td><a href="view.php?ps_id=' . $id . '" type="button" name="view" value="View" class="btn btn-danger">View</a> </td>';

                                    echo "</tr>";

                                            }

 ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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