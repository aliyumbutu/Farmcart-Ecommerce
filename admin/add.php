


<?php require_once("head.php") ?>

<?php require_once("side_bar.php") ?>



<?php 

if(isset($_POST["submit"])){

     require_once("function.php");


    $veg = $_POST["veg"];
    $state = $_POST["state"];
    $av_kg = $_POST["av_kg"];
    $am_p_kg = $_POST["am_p_kg"];
    $city = $_POST["city"];
    $phone_number = $_POST["phone_number"];
    $addr = $_POST["addr"];


      $user_id = $ids;




$sql_query = "INSERT INTO `add`(`id`, `vegetable_name`, `state`, `av_kg`, `am_p_kg`, `city`, `phone_number`, `addr`, `user_id`) VALUES (NULL, '$veg', '$state', '$av_kg', '$am_p_kg', '$city', '$phone_number', '$addr', '$user_id')";

       $mysql = mysqli_query($conn, $sql_query) or die("cannot connect");


       echo "Added Succcesfully";

   }


 ?>

    <!-- End Navbar -->
   <hr>
   <form method="POST" class="register-form" id="register-form">
    <h4><i class="fas fa-table mr-1"></i> Add Vegetables  </h4>
    <div>
     
        <div class="container">
          <div class="row">
            <div class="col-md-6">


               <label for="state">Vegitables:</label>
            <select name="veg" id="veg" class="form-control" required="">
                <option value="cabbage">Cabbage</option>
            <option value="Carrot">Carrot</option>
          <option value="Chilli">Chilli</option>
          <option value="corn">corn</option>
          <option value="green_bean">Green Beans</option>
          <option value="green_pepper">Green pepper</option>
          <option value="potato">Potato</option>
          <option value="red_pepper">Red pepper</option>
          <option value="sweet_potato">Sweet Potato</option>
          <option value="tomato">Tomato</option>  
      </select>

      <div class="form-group">
            <label for="state">State:</label>
            <select name="state" id="state" class="form-control" required="">
                <option value="andhra_pradesh">Andhra Pradesh</option>
                <option value="arunachal_pradesh">Arunachal pradesh</option>
                <option value="assam">Assam</option>
                <option value="bihar">Bihar</option>
                <option value="chhattisgarh">Chhattisgarh</option>
                <option value="goa">Goa</option>
                <option value="gujarat">Gujarat</option>
                <option value="haryana">Haryana</option>
                <option value="himachal_Pradesh">Himachal Pradesh</option>
                <option value="jharkhand">Jharkhand</option>
                <option value="karnataka">Karnataka</option>
                <option value="kerala">Kerala</option>
                <option value="madhya_pradesh">Madhya Pradesh</option>
                <option value="maharashtra">Maharashtra</option>
                <option value="manipur">Manipur</option>
                <option value="meghalaya">Meghalaya</option>
                <option value="mizoram">Mizoram</option>
                <option value="nagaland">Nagaland</option>
                <option value="odisha">Odisha</option>
                <option value="punjab">Punjab</option>
                <option value="rajasthan">Rajasthan</option>
                <option value="sikkim">Sikkim</option>
                <option value="tamil Nadu">Tamil Nadu</option>
                <option value="telangana">Telangana</option>
                <option value="tripura">Tripura</option>
                <option value="uttar Pradesh">Uttar Pradesh</option>
                <option value="uttarakhand">Uttarakhand</option>
                <option value="west_bengal">West Bengal</option>
              </select>
        </div>

        <div class="form-group">
            <label for="av_kg">Available Kg:</label>
            <input type="number" class="form-control" id="av_kg" placeholder="Available Kg" name="av_kg" required="">
        </div>
        <div class="form-group">
            <label for="am_p_kg">Amount Per Kg</label>
            <input type="number" class="form-control" id="am_p_kg" placeholder="amount per Kg" name="am_p_kg" required="">
        </div>
              
            </div>

             <div class="col-md-6">

            
       
     
      <div class="form-group">
            <label for="city">City:</label>
            <input type="txt" class="form-control" id="city" placeholder="City" name="city" required="">
        </div>


      <div class="form-group">
            <label for="number">Mobile Number:</label>
            <input type="number" class="form-control" id="number" placeholder="Mobile Number" name="phone_number" required="">
        </div>

     <div class="form-group">
            <label for="addr">Address:</label>
            <input type="txt" class="form-control" id="addr" placeholder="Address" name="addr" required="">
        </div>
        <div>
          <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </div>
        </form>
              
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