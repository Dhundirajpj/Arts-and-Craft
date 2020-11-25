<?php
session_start();
$user=$_SESSION['userid'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">   
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">

</head>
<body style="margin: auto 0; background-color: #c7d3d4;">
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
                            <li class="nav-item active"><a class="nav-link" href="./aboutpro.php"> <span class="fa fa-arrow-left fa-lg"></span>&nbsp;&nbsp;Projects</a></li>
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
                            <li class="nav-item"><a class="nav-link" href="./profile.php"><span class="fa fa-user fa-lg"></span>  <?php echo $user; ?></a></li>
                        </div> 
   
                    </div>
                    
                    </div>
                </ul>
            </div>
        </div>
</nav>   
    <br><br>


<div class="container" style="color: white; padding: 30px; background: linear-gradient(to bottom, #100036, #6438c8); box-shadow: -15px -15px 20px rgba(255,255,255,0.05), -15px -15px 25px rgba(0,0,0,0.5);">
    <h1 class="my-4">Photosynthesis Model</h1>

    <div class="row">

      <div class="col-md-6">
        <img class="img-fluid" src="https://i.ytimg.com/vi/SJq01B-0J8g/maxresdefault.jpg" alt="">
      </div>
  
      <div class="col-md-6">
        <h3 class="my-3">Description</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nam viverra euismod odio, gravida pellentesque urna varius vitae. 
            Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. 
            Mauris ultricies, justo eu convallis placerat, felis enim.
        </p>
        <p><strong>Difficulty: </strong>Easy</p>
        <p><strong>Time: </strong>1-2 hours</p>
        <p><strong>Cost: </strong>200-400 rupees</p>
      </div>

    </div>

    <div class="col">

        <div>
            <h3 class="my-3">Materials</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nam viverra euismod odio, gravida pellentesque urna varius vitae. 
                Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. 
                Mauris ultricies, justo eu convallis placerat, felis enim.
            </p>    
        </div>
    
        <div>
            <h3 class="my-3">Steps</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nam viverra euismod odio, gravida pellentesque urna varius vitae. 
                Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. 
                Mauris ultricies, justo eu convallis placerat, felis enim.
            </p>    
        </div>

        <div>
            <h3 class="my-3">Video</h3>
            <h5>Click <a href="https://www.youtube.com/watch?v=WpMWyDWfq98" target="_blank"><button class="btn btn-primary">Here</button></a> to view video</h5> 
        </div>
  
    </div>

</div>
</script>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
</body>
</html>