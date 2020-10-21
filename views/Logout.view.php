<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/Logout.css">
    <link rel="icon" type="logo" href="../assets/img/logo.png" sizes="16x16">
    <title> Sarahah </title>
</head>
<body>

<!-- header -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="../About%20Us/About%20Us.html" class="navbar-brand" style="margin: 4px 10px 0 10px;">
           <span>
               <img src="../assets/img/logo300.png" width="54" height="26" style="margin-bottom: 10px">
           </span>
        </a>

        <input class="form-control mr-sm-0" type="text" placeholder="Search..." aria-label="Search">

        <a href="#">
        <span class="icon icon-globe"
              style="color : #fff;padding : 15px;display: inline-block;font-size : 19px; margin-bottom: 5px">
                    <i class="fa fa-globe-americas"></i>
        </span>
        </a>
        <button class="navbar-toggler butt" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav " style="margin-right: -15px;">
                <li class="nav-item">
                    <a href="../Contact%20Us/Contact%20Us.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="../About%20Us/About%20Us.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="../Login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a href="../Register.php">Register</a>
                </li>

            </ul>
        </div>

    </nav>

</header>


<!-- section -->

<section class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h3>
                    Get honest feedback from your coworkers and friends
                </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <button onclick="location.href='./Login.php';"
                        class="btn  btn-pill btn-default-outline m-a" style="width : 190px;font-weight: bold">
                    <span class="far fa-user"></span>&nbsp; Login
                </button>
                <br/>
                <br/>
                <button onclick="location.href='./Register.php';"
                        class="btn  btn-pill btn-default-outline" style="width : 190px;font-weight:bold"><span
                        class="far fa-edit"></span>&nbsp; Register
                </button>
            </div>
        </div>
    </div>

</section>
<br/>

<!-- footer -->

<?php include_once ('tempate/footer.php')?>

<!-- Script Js -->

<?php include_once('tempate/script-js.php'); ?>



</body>
</html>
