<?php require_once("head.php") ?>




<?php require_once("side_bar.php") ?>




    

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