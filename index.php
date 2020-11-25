<?php
session_start();
$var=$_SESSION['var'];
if($var==1){
    
    $user=$_SESSION['userid'];
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'user_info');
    $sql_email="select email from signin where username='$user'";
    $r=$con-> query($sql_email);
    if($r-> num_rows >0){
        while($row=$r-> fetch_assoc()){
            $email=$row['email'];
            $_SESSION['email']=$email;
            $_SESSION['userid']=$user;
            }
        }
    

}
else{
    $email=$_SESSION['email'];
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'user_info');
    $sql_email="select username from signin where email='$email'";
    $r=$con-> query($sql_email);
    if($r-> num_rows >0){
        while($row=$r-> fetch_assoc()){
            $user=$row['username'];
            $_SESSION['userid']=$user;
            $_SESSION['email']=$email;

            }
        }
      
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">

    <title>Arts & Craft</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
        <div class="container">
            <a href="ideas.php" class="idealink">
                <button class="navbar-toggler" type="button" data-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </a>
            <!-- <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" height="30" width="41"></a>   -->
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    
                        <div class="col-12 col-sm-3 align-self-center">
                            <li class="nav-item active"><a class="nav-link" href="./index.php"> <span class="fa fa-home fa-lg"></span> Home</a></li>
                        </div>
                        <div class="col-12 col-sm-3 align-self-center">
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                        </div>

                        <div class="col-12 col-sm-3  align-self-center">
                        <li class="nav-item"><a class="nav-link" href="index_rate.php"><span class="fa fa-list fa-lg"></span> Rate</a></li>
                    </div> 
 
                        <div class="col-12 col-sm-3 align-self-center">
                            <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                        </div>    
                        <div class="col-12 col-sm-3 align-self-center">
                        <li class="nav-item active"><a class="nav-link" href="./logout.php"> <span class="fa fa-sign-in fa-lg"></span> LogOut</a></li>

                            <!-- <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Menu</a></li> -->
                        </div> 
                        <div class="col-12 col-sm-3 align-self-center">
                            <li class="nav-item"><a class="nav-link" href="./profile.php"><span class="fa fa-user fa-lg"></span>  <?php echo $user ?></a></li>
                        </div> 
   
                    </div>
                    
                    </div>
                </ul>
            </div>
        </div>
    </nav>  

    
    <header class="jumbotron" style="background-image: url(img/color6.PNG); background-size: 100%;">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-4 align-self-center">
                </div>

                <div class="col-12 col-sm-5 align-self-center">
                 
                 
                    <div class="row-jumbo ">
                        <div class="row-jumbo mt-sm-5">
                            <br><br>
                            <br><br>
                            <br>
                            <h1 class="h1name"> Arts & Crafts</h1>
                        </div>

                        <div class="row-jumbo">
                            <div class="col-12 col-sm-6"></div>
                            <div class="col-12 col-sm-7">
                                <p>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Innovate,Learn and Enjoy!</p>
                            </div>
                        </div>
                        <div class="row-jumbo">
                            <div class="col-12 col-sm-5"></div>
                            <div class="col-12 col-sm-8">
                                <a role="button" class="btn btn- nav-link btn-warning btn-sm" data-toggle="tooltip" data-html="true"  title="Or Write Us at:<br><strong>crafts@gmail.com</strong>"  data-placement="bottom" href="contributeForm1.php">
                                    &nbsp; &nbsp;&nbsp;Share Your Ideas
                                </a> 
                            </div>  
                        </div>


                       
                            
                    </div>

                    
                   
                </div>

    
                <div class="col-12 col-sm-2 align-self-center">
  
                </div>
                    
            </div>        
        </div>   
    </header>

    <div class="container">
        <div class="row row-content">

            <div class="col-sm-4">
                <a href="aboutpro.php" class="badge badge-light">
                    <div class="card">
                        <h3 class="card-header text-white" id="card-heading">
                        Science Model
                        </h3>
                        <img src="./img/tech2.PNG" class="img-fluid" >
                        
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="aboutpro.php" class="badge badge-light">
                    <div class="card">
                        <h3 class="card-header  text-white" id="card-heading">
                        Best Out Of Waste
                        </h3>
                        <img src="img/waste.jpg" class="img-fluid"> 
                    
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="aboutpro.php" class="badge badge-light">
                    <div class="card">
                        <h3 class="card-header  text-white" id="card-heading">
                        Origami
                        </h3>
                        <img src="img/or.jpg" class="img-fluid">
                    </div>
                </a>
            </div>

        </div>
       
    

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2 ">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./profile.php">Profile</a></li>
                        <li><a href="./index_rate.php">Rate Projects</a></li>
                        <li><a href="./logout.php">Logout</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              377, Near That Statue<br>
		              Knowledge House, Mumbai<br>
		              India<br>
		              <i class="fa fa-phone fa-lg"></i>   +9822345678<br>
		              <i class="fa fa-fax fa-lg"></i>   +9428764321<br>
		              <i class="fa fa-envelope fa-lg"></i>   <a href="mailto:dhundirajj00@gmail.com">crafts@gmail.com</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg" id="fb"></i></a>
                        <a href="http://google.com/+"><i class="fa fa-google-plus fa-lg" id="google"></i></a>
                        <a href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="http://youtube.com/"><i class="fa fa-youtube fa-lg" id="yt"></i></a>
                        <a href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg" id="li"></i></a>
                        <a href="mailto:"><i class="fa fa-envelope-o fa-lg" id="mail"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 Arts & Crafts</p>
                </div>
           </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script>

    </script>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        }
        );
    </script>
</body>

</html>