<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300i" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/Register.css">
    <title>Sarahah - Register</title>
    <link rel="icon" type="logo" href="../assets/img/logo.png" sizes="16x16">

</head>
<body>
<!-- header  -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="../Sarahah/Sarahah.html" class="navbar-brand" style="margin: 4px 10px 0 10px;">
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
<br/>
<!-- section -->
<section class="container p-t-md">
    <div class="text-center" style="margin-top:50px">
        <h3 style="color:#20bbb3">
            <i class="fa fa-edit" style="font-size:40px; color:#C0C0C0"></i>
            <br>Register</h3>
    </div>
    <br/>
    <?php if (isset($errors) && count($errors['registration']) > 0) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php foreach ($errors['registration'] as $k => $v) { ?>
                <strong>ERROR</strong>
                <?php echo $v; ?>
            <?php } ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    <div class="row">
        <div class="col-md-9 col-sm-12">
            <form class="form-horizontal" method="post" action="/Register.php">
                <div class="form-group row">

                    <label class="col-form-label " for="email">Email</label>
                    <!--<div class="col-md-8">-->
                    <div class="col-lg-7 col-md-8 col-sm-7">
                        <input class="form-control" data-toggle="email" title=""
                               value="<?php echo $email; ?>"
                               autocomplete="off"
                               type="email" data-val="true" name="email"
                               id="email">
                        <?php if (isset($errors) && count($errors ['email']) > 0) { ?>
                            <ul class="list-unstyled text-left mb-0" style="font-size: 12.4px">
                                <?php foreach ($errors['email'] as $k => $v) { ?>
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
                    <label class="col-form-label" for="password">Password</label>
                    <div class="col-lg-7 col-md-8 col-sm-7">
                        <input class="form-control" type="Password" data-val="true"
                               autocomplete="off"
                               id="password" name="password">
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
                <div class="form-group row">
                    <label class=" col-form-label" for="rePassword">Password Confirmation</label>
                    <div class="col-lg-7 col-md-8 col-sm-7">
                        <input class="form-control" type="Password" data-val="true"
                               autocomplete="off"
                               id="rePassword"
                               name="rePassword">
                        <?php if (isset($errors) && count($errors ['rePassword']) > 0) { ?>
                            <ul class="list-unstyled text-left mb-0" style="font-size: 12.4px">
                                <?php foreach ($errors['rePassword'] as $k => $v) { ?>
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
                    <label class="col-form-label" for="username">Username</label>
                    <div class="col-lg-7 col-md-8 col-sm-7">
                        <input class="form-control" type="text" data-val="true"
                               autocomplete="off"
                               value="<?php echo $username; ?>"

                               id="username" name="username">
                        <?php if (isset($errors) && count($errors ['username']) > 0) { ?>
                            <ul class="list-unstyled text-left mb-0" style="font-size: 12.4px">
                                <?php foreach ($errors['username'] as $k => $v) { ?>
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
                    <label class="col-form-label" for="Name">Name</label>
                    <div class="col-lg-7 col-md-8 col-sm-7">
                        <input class="form-control" type="text" data-val="true"
                               autocomplete="off"
                               value="<?php echo $fullName; ?>"
                               id="fullName" name="fullName">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 all">
                        <label style="font-size: 15px">
                            <input type="checkbox" value="TRUE" class="checkbox-inline" data-val="true"
                                   id="acceptTermsCheck" name="acceptTermsCheck">
                            Notifications
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 all">
                        <a class="link-color" target="_blank" href="#">Terms and Conditions</a>
                        <br>
                        <label style="font-size: 15px">
                            <input type="checkbox" value="true" class="checkbox-inline" id="acceptTermsCheck"
                                   name="acceptTermsCheck">
                            I am at least 17 years old and have read and accepted the terms and conditions
                        </label>
                        <?php if (isset($errors) && count($errors ['acceptTermsCheck']) > 0) { ?>
                            <ul class="list-unstyled text-left mb-0" style="font-size: 12.4px">
                                <?php foreach ($errors['acceptTermsCheck'] as $k => $v) { ?>
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
                    <div class="col-md-8 all">
                        <!--  onclick="location.href='home.view.php';"-->
                        <button

                                type="submit" id="RegisterBtn" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- footer -->

<?php include_once('tempate/footer.php') ?>

<!-- Script Js -->

<?php include_once('tempate/script-js.php') ?>

</body>
</html>