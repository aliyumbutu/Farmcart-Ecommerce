

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>

    <!-- Font Icon -->
    <link href="bower_components/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-fileinput/js/fileinput.min.js" rel="stylesheet">

  <link href="bower_components/bootstrap/dist/js/bootstrap.min.js" rel="stylesheet">
  <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/materal-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


<?php if(isset($_POST["signup"])){

     require_once("function.php");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $category = $_POST["category"];
    $pass = $_POST["pass"];
    $re_pass = $_POST["re_pass"];


    if($pass !== $re_pass){

        echo "Incorrect Password";

    }else{

       $sql = "INSERT INTO users(name, email, category, pass) VALUES('$name', '$email', '$category', '$pass')";


       $myslme = mysqli_query($conn, $sql) or die("cannot connect");

       header("location:congrat.php");
    }






   

}


?>


    <div class="main">


       

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
     <h3 class="form-title"><h1><a class="btn btn-secondary" href="index.php">BACK HOME</a></h3>
                       <h3> Registration Form</h3>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/ required="">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/ required="">
                            </div>

                            <div class="form-group">
                                <h6> Category</h6>

                                <select class="form-control" name="category" required="">
                                    
                                    <option>Buyer</option>
                                    <option>Seller</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/ required="">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/ required="">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" / required="">
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/logo.png" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This <template></template>es was made by Colorlib (https://colorlib.com) -->
</html>