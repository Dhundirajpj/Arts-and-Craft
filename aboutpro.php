<?php
session_start();
$user=$_SESSION['userid'];
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
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
                            <li class="nav-item"><a class="nav-link" href="./profile.php"><span class="fa fa-user fa-lg"></span>  <?php echo $user; ?></a></li>
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
                                <a role="button" class="btn btn- nav-link btn-warning btn-sm" data-toggle="tooltip" data-html="true"  title="Or Write Us at:<br><strong>crafts@gmail.com</strong>"  data-placement="bottom" href="ideas.html">
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

    <div class="row row-content">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1>
                     Science Projects
                </h1>

                <div class="d-flex align-self-center" id="filter">
                    &nbsp;&nbsp; <a href="filter.php">
                    <button class='btn' id="buttontop"
                    > Filter </button></a>
                </div>

            </div>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" role="tab" id="peterhead">
                        <h3 class="mb-0">
                            <a data-toggle="collapse" data-target="#peter">
                                Photosynthesis Model <span class="badge badge-success"> Easy</span> <span class="badge badge-pill badge-primary"> 2 Hrs. </span>
                            </a>
                        </h3>
                    </div>
                    <div role="tabpanel" class="collapse show" id="peter" data-parent="#accordion">
                        <div class="card-body">
                            <p class="d-none d-lg-block">Photosynthesis is the process in which light energy is converted to chemical energy in the form of sugars. In a process driven by light energy, glucose molecules (or other sugars) are constructed from water and carbon dioxide, and oxygen is released as a byproduct. The glucose molecules provide organisms with two crucial resources: energy and fixed—organic—carbon.<br>
                                <a href="ideas.php" class="idealink">
                                <br>
                                    <button class="btn" id="buttontop">
                                        Open Project
                                    </button>
                                </a>
                            </p>
                        </div>
                    </div>  



                    <div class="card-header" role="tab" id="dannyhead">
                        <h3 class="mb-0">
                            <a data-toggle="collapse" data-target="#danny">
                                Chemistry at Home <span class="badge badge-warning"> Medium </span> <span class="badge badge-pill badge-danger"> 5 Hrs. </span>
                            </a>
                        </h3>
                    </div>
                    <div role="tabpanel" class="collapse" id="danny" data-parent="#accordion">
                        <div class="card-body">
                            <p class="d-none d-lg-block">Chemistry is the process in which light energy is converted to chemical energy in the form of sugars. In a process driven by light energy, glucose molecules (or other sugars) are constructed from water and carbon dioxide, and oxygen is released as a byproduct. The glucose molecules provide organisms with two crucial resources: energy and fixed—organic—carbon.</em></p>
                            <a href="ideas1.php" class="idealink">
                                <br>
                                    <button class="btn" id="buttontop">
                                        Open Project
                                    </button>
                            </a>
                        </div>
                    </div> 


                    <div class="card-header" role="tab" id="agumbehead">
                        <h3 class="mb-0">
                            <a data-toggle="collapse" data-target="#agumbe">
                                Physics in Games <span class="badge badge-success"> Easy</span> <span class="badge badge-pill badge-warning"> 4 Hrs. </span>
                            </a>
                        </h3>
                    </div>
                    <div role="tabpanel" class="collapse" id="agumbe" data-parent="#accordion">
                        <div class="card-body">
                            <p class="d-none d-lg-block">Blessed with the most discerning gustatory sense, Agumbe, our CTO, personally ensures that every dish that we serve meets his exacting tastes. Our chefs dread the tongue lashing that ensues if their dish does not meet his exacting standards. He lives by his motto, <em>You click only if you survive my lick.</em></p>
                            <a href="ideas.php" class="idealink">
                                <br>
                                    <button class="btn" id="buttontop">
                                        Open Project
                                    </button>
                            </a>
                        </div>
                    </div> 


                    <div class="card-header" role="tab" id="albertohead">
                        <h3 class="mb-0">
                            <a data-toggle="collapse" data-target="#alberto">
                                Maths Magic <span class="badge badge-danger"> Hard</span> <span class="badge badge-pill badge-primary"> 2 Hrs. </span>

                            </a>
                        </h3>
                    </div>
                    <div role="tabpanel" class="collapse" id="alberto" data-parent="#accordion">
                        <div class="card-body">
                            <p class="d-none d-lg-block">Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. He says, <em>Put together the cuisines from the two craziest cultures, and you get a winning hit! Amma Mia!</em></p>
                            <a href="ideas.php" class="idealink">
                                <br>
                                    <button class="btn" id="buttontop">
                                        Open Project
                                    </button>
                            </a>
                        </div>
                    </div> 
                </div>  
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