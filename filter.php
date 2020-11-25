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
        <form   name="myForm" method="post" action="filter_output.php">   
            <div class="d-flex">
                <h1>Filters</h1>
            </div>

            <hr>

            <div class="d-flex">
                <h4 style="margin-right: 25px;">Cost</h4>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOption1" id="inlineRadio1" value="option1" checked="checked">
                    <label class="form-check-label" for="inlineRadio1"> less than ₹200 </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOption1" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2"> ₹200-400 </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOption1" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3"> ₹400-600 </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOption1" id="inlineRadio3" value="option4">
                    <label class="form-check-label" for="inlineRadio3"> more than ₹600 </label>
                </div>
            </div>

            <br>

            <div class="d-flex">
                <h4 style="margin-right: 25px;">Difficulty</h4>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOption2" id="inlineRadio1" value="option1" checked="checked">
                    <label class="form-check-label" for="inlineRadio1">Easy</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOption2" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Medium</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOption2" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Hard</label>
                </div>
            </div>

            <br>

            <div class="d-flex">
                <button class="btn"  id='buttontop' name='submit' type='submit'> Apply </button>
            </div>

            <br><br>



        </div>
    </div>





    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2 ">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./profile.html">Profile</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./signup_valid.php">Sign Up</a></li>
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
</body> 
</html>

