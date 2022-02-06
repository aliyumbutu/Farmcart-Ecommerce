<?php require_once("head.php"); ?>



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
  </section><!-- End Hero -->

  <main id="main">

    
  
    
      </div>
    </section><!-- End Why Us Section -->

    </center>
   
    
<?php 

require_once("function.php");


$sql = "SELECT * FROM states";

$query = mysqli_query($conn, $sql)or die("Invalid query");

?>

 <div class="card mb-4">
                            <div class="card-header">
                                
                                <h4><i class="fas fa-table mr-1"></i>States in india</h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>

                                                <th>State Name</th>
                                                <th>Action</th>
                                                
                                                
                                            </tr>


                                        </thead>




                                        

                                 <?php while($array = $query->fetch_assoc()){
                                    $id = $array["id"];
                                  $state_name = $array["state_name"];

                                    echo "<tr>";
                                    echo ' <td>' . $id . '</td>';
                                    echo ' <td>' . $state_name . '</td>';
                                    echo ' <td><a href="single_state.php?single_state_n=' . $state_name . '" type="button" name="view" value="View" class="btn btn-danger"> View</a></td>';

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