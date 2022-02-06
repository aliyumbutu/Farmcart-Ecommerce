<?php require_once("head.php") ?>




<?php require_once("side_bar.php") ?>


  <?php 

require_once("function.php");

$sql = "SELECT * FROM `add` ORDER BY am_p_kg   DESC";

$query = mysqli_query($conn, $sql)or die("Invalid query");

?>

    <!-- End Navbar -->
   <hr>

    <div>
      
      <div class="card mb-4">
                            <div class="card-header">
                                
                                <h4><i class="fas fa-table mr-1"></i> Buy Vegetables  </h4>
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

                                    echo ' <td><a href="../view.php?ps_id=' . $id . '" type="button" name="view" value="View" class="btn btn-danger">View</a> </td>';

                                    echo "</tr>";

                                            }

 ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
  </div>  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
</html>