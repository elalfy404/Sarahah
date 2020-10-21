<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/Message.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="icon" type="logo" href="../assets/img/logo.png" sizes="16x16">
    <title> Sarahah - Messages </title>
</head>
<body>


<!-- header -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="home.view.php" class="navbar-brand" style="margin: 4px 10px 0 10px;">
           <span>
               <img src="../assets/img/logo300.png" width="54" height="26" style="margin-bottom: 10px">
           </span>
        </a>

        <input class="form-control mr-sm-0" type="text" placeholder="Search..." aria-label="Search">


        <span class="icon icon-globe"
              style="color : #fff;padding : 15px;display: inline-block;font-size : 19px; margin-bottom: 5px">
                    <i class="fa fa-globe-americas"></i>
        </span>

        <button class="navbar-toggler butt " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
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
                    <a href="../Logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a href="../Settings/Settings.html">Settings</a>
                </li>
                <li class="nav-item">
                    <a href="../home.php">Messages</a>
                </li>
            </ul>
        </div>
    </nav>

</header>

<!-- section -->
<section class="container se-md">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="../sendMessage.php" method="post">
                    <div class="pull-right">
                        <img style="width: 20px;vertical-align : top" src="../assets/img/report.png">
                    </div>
                    <div class="text-center">
                        <img src="../assets/img/avatar.png" class="panel-profile-img" width="100" height="100" id="img">

                    </div>
                    <h5 class="panel-title">
                <span class="text-center" style="margin-right: 15px">
                    ahmed </span>
                    </h5>
                    <div class="textarea-container ">
                        <textarea
                                name="message"
                                id="message"
                                class="form-control"
                                  style="resize: none; background: none; height: auto;"
                                  rows="5">

                        </textarea>
                    </div>
                        <br/>
                        <div class="float-left" style="margin-left: 55px ">
                            <?php if (isset($errors) && count($errors['message']) > 0){ ?>
                            <ul class="list-unstyled text-left mb-0">
                                <?php foreach ($errors['message'] as $k => $v){ ?>
                                <li class="text-danger ml-1">
                                    <i class="fa fa-caret-right"></i>
                                    <?php echo $v; ?>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </div>
                        <br/>

                    <div class="text-center">
                        <button class="btn btn-primary-outline " type="submit" style="margin-top:5px" >
                            <i class="far fa-share-square"></i> Send </button>
                    </div>
                        <br/>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<br/>

<!-- footer -->

<?php include_once ('tempate/footer.php')?>

<!-- Script Js -->

<?php include_once ('tempate/script-js.php')?>

</body>
</html>
