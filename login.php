

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<link href="bower_components/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-fileinput/js/fileinput.min.js" rel="stylesheet">

  <link href="bower_components/bootstrap/dist/js/bootstrap.min.js" rel="stylesheet">
  <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<?php if(isset($_POST["signin"])){

    require_once("function.php");

    $pass = $_POST["pass"];
    $email = $_POST["email"];



    $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass' ";

      $mysql = mysqli_query($conn, $sql) or die("cannot connect");

    if(mysqli_num_rows($mysql) > 0){

        $array_id = mysqli_fetch_array($mysql);

    
    $sessionid = $array_id["id"];





       session_start();

        $_SESSION["ids"] = $sessionid;

                if(isset($_SESSION['ids'])){

                   
                $sql = "SELECT email, pass FROM users WHERE email = '$email' AND pass = '$pass' ";
        
        

              $sql2 = "SELECT category FROM users WHERE email = '$email' AND pass = '$pass' ";

                $mysql2 = mysqli_query($conn, $sql2) or die("cannot connect");

              while($array = mysqli_fetch_array($mysql2)){
                                    
     $categories = $array["category"];

        if($categories == "Buyer"){

            header("location:buyer");

        }elseif($categories == "Seller"){

            header("location:seller");



        }elseif($categories == 0){

            header("location:admin");

        }else{
            echo "sorry you can hack this server";
        }

   


 }

    }else{
        echo "<h4>Incorrect Password</h4>";


                   
                   
                }


    }

  



}
?>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/logo.png" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h3 class="form-title"><h1><a class="btn btn-secondary" href="index.php">BACK HOME</a></h3>
                        <h2 class="form-title">Log In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="email" name="email" id="mail" placeholder=" Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password"/ required="">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>