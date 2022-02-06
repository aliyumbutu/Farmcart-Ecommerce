<?php require_once("head.php") ?>

<link rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    type="text/css"
  />
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script
    src=
"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
    type="text/javascript"
  ></script>
  <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>

<br>
<hr/>
<br>
<hr/>
<hr/>
<hr/>

<html>
  
  <style>
    .container {
      width: 70%;
      margin: 15px auto;
    }
    body {
      text-align: center;
      color: green;
    }
    h2 {
      text-align: center;
      font-family: "Verdana", sans-serif;
      font-size: 30px;
    }
  </style>
  <body>
    <div class="container">
      <h2> Price Chart</h2>
      <div>
        <canvas id="myChart"></canvas>
      </div>
    </div>
  </body>
  
 <?php require_once("function.php");


$sql = "SELECT * FROM states";

$query = mysqli_query($conn, $sql)or die("Invalid query");



 ?>
  <script>
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: [

        "Rajasthan",
        "Mumbai",
        "Bihar",
        "Goa",
        "Gujarat",
        "Haryana",
        "Maharashtra",
        "Manipur",

          '<?php 
      while($array = mysqli_fetch_array($query)){
                                    
     $state_name = $array["state_name"];

   

   }


          ?>',
           
        ],
        datasets: [
          {
            label: "High Price",
            data: [2, 9, 3, 17, 6, 3, 7, 6,],
            backgroundColor: "rgba(153,205,1,0.6)",
          },
          {
            label: "Low price",
            data: [2, 2, 5, 5, 2, 1, 10, 7],
            backgroundColor: "rgba(255,0,0,0.4)",
          },
        ],
      },
    });
  </script>
</html>



  <?php require_once("footer.php"); ?>