<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css/index.css -->
    <link rel="stylesheet" href="../assets/css/index.css">
    <!-- css/styel.css -->
    <link rel="stylesheet" href="../assets/css/Login.css">
    <!-- title -->
    <link rel="icon" type="logo" href="../assets/img/logo.png" sizes="16x16">

    <title>Sarahah - Login</title>
</head>

<body>

<!-- header -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="Login.view.php" class="navbar-brand" style="margin: 4px 10px 0 10px;">
           <span>
               <img src="../assets/img/logo300.png" width="54" height="26" style="margin-bottom: 10px">
           </span>
        </a>

        <input class="form-control mr-sm-0" type="text" placeholder="Search..." aria-label="Search">


        <a href="#" class="icon icon-globe"
           style="color : #fff;padding : 15px;display: inline-block;font-size : 19px; margin-bottom: 1px">
            <i class="fa fa-globe-americas"></i>
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

<section class="container p-t-md">

    <!-- user - login -->

    <div class="text-center t-c-d">
        <h3 style="color: #20bbb3">
            <span class="fa fa-user" style="font-size:40px; color:#c0c0c0">

            </span>
            <br/>
            Login
        </h3>
    </div>
    <br/>

    <!-- card form -->

    <div class="container text-center">
        <div class="card">
            <div class="card-body">
                <form class="app-login-form" method="post" action="../Login.php">
                    <div class="form-group row">
                        <div class="col-lg-9 col-md-10 col-sm-9">
                            <input type="text" placeholder="Email or Username"
                                   value=""
                                   class="form-control inp" id="emailOrUsername"
                                   name="emailOrUsername">
                            <?php if (isset($errors) && count($errors ['emailOrUsername']) > 0) { ?>
                                <ul class="list-unstyled text-left mb-0" style="font-size: 12.4px">
                                    <?php foreach ($errors['emailOrUsername'] as $k => $v) { ?>
                                        <li class="text-danger ml-1">
                                            <i class="fa fa-caret-right"></i>
                                            <?php echo $v; ?>
                                        </li>
                                    <?php } ?>

                                </ul>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-9 col-md-10 col-sm-9">

                            <input type="Password" placeholder="Password"
                                   value=""
                                   class="form-control inp" id="password"
                                   data-val="true"
                                   name="password">
                            <?php if (isset($errors) && count($errors ['password']) > 0) { ?>
                                <ul class="list-unstyled text-left mb-0" style="font-size: 12.4px">
                                    <?php foreach ($errors['password'] as $k => $v) { ?>
                                        <li class="text-danger ml-1">
                                            <i class="fa fa-caret-right"></i>
                                            <?php echo $v; ?>
                                        </li>
                                    <?php } ?>

                                </ul>
                            <?php } ?>
                        </div>
                    </div>


                    <div class="m-b-lg text-left row">
                        <div class="col-xs-6" style="padding-right: 21px;">
                            <label>
                                <input id="rememberMeChk" class="reme" type="checkbox" value="true">
                                <span class="reme">Remember me</span>
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <button
                                    class="btn btn-block btn-primary-outline" type="submit">
                                Login
                            </button>
                        </div>
                    </div>
                    <br>
                    <div>
                        <a id="forgotPasswordLink" class="text-muted" href="#">I Forgot My Password</a>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</section>
<br/>

<!-- footer -->

<?php include_once('tempate/footer.php') ?>

<!--Script Js -->

<?php include_once('tempate/script-js.php') ?>

</body>
</html>
