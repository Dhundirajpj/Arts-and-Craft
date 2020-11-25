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
                            <li class="nav-item "><a class="nav-link" href="./index.php"> <span class="fa fa-home fa-lg"></span> Home</a></li>
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
                            <li class="nav-item active"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                        </div>    
                        <div class="col-12 col-sm-3 align-self-center">
                        <li class="nav-item "><a class="nav-link" href="./logout.php"> <span class="fa fa-sign-in fa-lg"></span> LogOut</a></li>

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
                                <a role="button" class="btn btn- nav-link btn-warning btn-sm" data-toggle="tooltip" data-html="true"  title="Or Write Us at:<br><strong>crafts@gmail.com</strong>"  data-placement="bottom" href="./contributeForm1.php">
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
        <div class="row">
            <div class='col-12'>
                <br>
               <h2>About Us</h2>
               <hr>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-12">
                <h2>Created By</h2>
                
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" role="tab" id="peterhead">
                            <h3 class="mb-0">
                                <a data-toggle="collapse" data-target="#peter">
                                    Dhundiraj Jogalekar 
                                </a>
                            </h3>
                        </div>
                        <div role="tabpanel" class="collapse show" id="peter" data-parent="#accordion">
                            <div class="card-body">
                                <p class="d-none d-lg-block">Roll Number: 1814027</p>
                                <p class="d-none d-lg-block">TY IT A2</p>
                            </div>
                        </div>  



                        <div class="card-header" role="tab" id="dannyhead">
                            <h3 class="mb-0">
                                <a data-toggle="collapse" data-target="#danny">
                                    Keval Karani
                                </a>
                            </h3>
                        </div>
                        <div role="tabpanel" class="collapse" id="danny" data-parent="#accordion">
                            <div class="card-body">
                                <p class="d-none d-lg-block">Roll Number: 1814031</p>
                                <p class="d-none d-lg-block">TY IT A2</p>
                            </div>
                        </div> 
                    </div>  
                </div> 
            </div>
       </div>
    </div>

    <div class="container">

        <div class="row row-content">
           <div class="col-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-md-9">
                <form>
                    <div class="form-group row">
                        <label for='firstname' class="col-md-2 col-form-label">First Name</label>
                        <div class="col-md-10"><input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label for='lastname' class="col-md-2 col-form-label">Last Name</label>
                        <div class="col-md-10"><input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                        <div class="col-5 col-md-3">
                            <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code">
                        </div>
                        <div class="col-7 col-md-7">
                            <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">
                        </div>
                    </div>
                        
                
                    <div class="form-group row">
                        <label for='emailid' class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10"><input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                   
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <div class='form-check'>
                                <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
                                <label class="form-check-label" for="approve">
                                    <strong>Can we contact You?</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control">
                                <option>Tel.</option>
                                <option>Email</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for='feedback' class="col-md-2 col-form-label">Your Feedback</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>
                        </div>
                   
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn" id="buttontop">
                                Send Feedback
                            </button>
                        </div>
                    </div>
                </form>
            </div>
             <div class="col-12 col-md">
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
       <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
       <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
       <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
