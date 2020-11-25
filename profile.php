<?php

session_start();
//This Code Will extract Email ID Given Username
$user=$_SESSION['userid'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'user_info');
$sql_email="select password,name,email,contribution,total_reviews from signin where username='$user'";
$r=$con-> query($sql_email);
if($r-> num_rows >0){
    while($row=$r-> fetch_assoc()){
        $email=$row['email'];
        $review=$row['total_reviews'];
        $contribution=$row['contribution'];
        $name=$row['name'];
        $password=$row['password'];
    
        }
    }

?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background:#e1eafa;">
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
                            <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                        </div>    
                        <div class="col-12 col-sm-3 align-self-center">
                        <li class="nav-item "><a class="nav-link" href="./logout.php"> <span class="fa fa-sign-in fa-lg"></span> LogOut</a></li>

                            <!-- <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Menu</a></li> -->
                        </div> 
                        <div class="col-12 col-sm-3 align-self-center">
                            <li class="nav-item active"><a class="nav-link" href="./profile.php"><span class="fa fa-user fa-lg"></span>  <?php echo $user ?></a></li>
                        </div> 
   
                    </div>
                    
                    </div>
                </ul>
            </div>
        </div>
    </nav> 
<br>
<br>
<br>
<br>
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body" style="box-shadow: -15px -15px 20px rgba(255,255,255,0.05), -15px -15px 25px #929aa8; ">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <!-- <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" /> -->
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"><?php echo $user ?></a></h2>
                                    <h6 class="d-block"><a href="javascript:void(0)"><?php echo $contribution; ?> </a> Project Uploads</h6>
                                    <h6 class="d-block"><a href="javascript:void(0)"> <?php echo $review; ?></a> Project Ratings</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Connected Services</a>
                                    </li> -->
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;"> Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $name ?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">User Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $user ?>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Password</label> 
                                            </div>
                                            <div class="col-md-8 col-6" id='demo'>
                                                ********
                                            </div>
                                            <button onclick="myFunction()" class='btn' id="buttontop">View</button>  

                                        </div>
                                      <hr />

                                      <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Email</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            <?php echo $email ?>
                                        </div>
                                    </div>
                                  <hr />

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                        Facebook, Google, Twitter Account that are connected to this account
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
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
        <script>
        function myFunction() {
            document.getElementById("demo").innerHTML = "<?php echo $password?>";
        }
        </script>   
    </body> 
</html>



