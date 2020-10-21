<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/Messages.css">
    <link rel="icon" type="logo" href="../assets/img/logo.png" sizes="16x16">
    <title> Sarahah - Messages</title>
</head>

<body>

<!-- header -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="../home.php" class="navbar-brand" style="margin: 4px 10px 0 10px;">
           <span>
               <img src="../assets/img/logo300.png" width="54" height="26" style="margin-bottom: 10px">
           </span>
        </a>

        <input class="form-control mr-sm-0" type="text" placeholder="Search..." aria-label="Search">


        <span class="icon icon-globe"
              style="color : #fff;padding : 15px;display: inline-block;font-size : 19px; margin-bottom: 5px">
                    <i class="fa fa-globe-americas"></i>
        </span>

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
<section class="container-fluid p-t-md">
    <div class="row text-center">
        <div class="col-12">
            <!-- card -->
            <div class="card d-c-c">
                <div class="card-body d-c-b">
                    <img src="upload/<?php echo $row['user_img'];?> " name="image" data-toggle="modal" data-target="#exampleModal" width="95"
                         height="95" class="i-m-g img-fluid">
                    <h6 class="c-h-6">
                        <a href="">
                            <i class="fas fa-cog" style="font-size:16px;"></i>
                        </a>
                        ahmed
                    </h6>
                    <button class="btn btn-xs btn-default-outline" data-toggle="modal"
                            data-target="#exampleModalbutton">
                        <span class="fas fa-share-alt">

                        </span>
                        share
                    </button>
                    <a class="link-color" style="font-size: 18px; color: #0da39c" href="/sendMessage.php?to=<?php echo $emailOrUsername ;?>">
                        ahmed.Sarahah.com
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- alert -->

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="h-4 s-pa-n">Confirm email address</h4>
        <span class="s-pan"> Your e-mail is:</span>
        <strong class="text-danger s-p-an-4">15e880523b@mailox.biz</strong>

        <br/>
        <a href="#" class="alert-link s-pan">Change email</a>
        |
        <a href="#" class="alert-link s-pan">The email is correct</a>
    </div>
    <br/>

    <!-- pills -->

    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-body c-b">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active p-l-c" id="pills-Recceived-tab" data-toggle="pill"
                               href="#pills-Recceived"
                               role="tab" aria-controls="pills-Recceived"
                               aria-selected="true">Recceived</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link p-l-c" id="pills-Liked-tab" data-toggle="pill" href="#pills-Liked"
                               role="tab" aria-controls="pills-Liked"
                               aria-selected="false">Liked</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link p-l-c" id="pills-Pinned-tab" data-toggle="pill" href="#pills-Pinned"
                               role="tab" aria-controls="pills-Pinned"
                               aria-selected="false">Pinned</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Recceived" role="tabpanel"
                             aria-labelledby="pills-Recceived-tab">

                            <div class="d-i-v p-o border-top-none">

                                <span class="s-pan">You don't have any messages...Share your profile!</span>
                                <br/>
                                <div class="btn btn-xs btn-default-outline f-a" data-toggle="modal"
                                     data-target="#exampleModalbutton">
                                    <span class="fa fa-share-alt "></span>
                                    share
                                </div>

                            </div>
                            <div class="row">
                                <?php foreach ($rows as $k => $v) { ?>
                                    <div class="col-12 col-md-6 mt-2">
                                        <div class="float-right border-primary hvr-underline from-conter w-100">
                                            <div class="card-body p-2">
                                                <div class="float-right align-items-center d-flex mt-2"></div>
                                                <button class="btn btn-primary btn-vsm mr-1">
                                                    <i class="fa fa-eye-slash"></i>
                                                </button>
                                                <button class="btn btn-danger btn-vsm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                            <div class="align-items-center d-flex mt-1">
                                                <img src="../assets/img/avatar.png" width="30" height="30"
                                                     class="rounded-circle">
                                                <span class="ml-1 fant-weight-bold text-truncate-80vm font-0-9rem">
                    alfy
                </span>
                                                <span class="mr-auto ml-1 my-auto py-0">
                    <a href="#">
                        <i class="fa fa-anchor fa-xs"></i>
                    </a>
                </span>

                                            </div>
                                            <hr class="my-2">
                                            <div class="display-8 text-center">
                                                <P class="m-0 pt-0 py-0 block-truncate">
                                                    <?php echo $v['content']; ?>
                                                </P>
                                                <p class="text-muted mt-0 py-0 ml-2">
                                                    sent: <?php echo $v['sent timestamp']; ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="pills-Liked" role="tabpanel"
                             aria-labelledby="pills-Liked-tab">
                            <div class="d-i-v p-o border-top-none">
                                <span class="s-pan">You have no messages.</span>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-Pinned" role="tabpanel"
                             aria-labelledby="pills-Pinned-tab">
                            <div class="d-i-v p-o border-top-none">
                                <span class="s-pan">You have no pinned Sarahahs.</span>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- img modal -->

    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <form enctype="multipart/form-data" action="../home.php" method="post">

                    <h5 class="modal-title m-h-5" id="exampleModalLabel">Change photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <small class="m-small">The file size of the photo should not exceed 10 MB</small>
                    <input type="file" name="upload" class="form-control m-input">
                </div>
                <div class="modal-footer">
                    <button type="submit" name="sub" data-loading-text="Loading..." class="btn btn-primary-outline">Upload</button>
                    <button type="submit" data-loading-text="Loading..." class="btn btn-danger-outline b-t-n"
                            data-dismiss="modal">Remove Photo
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- button modal -->


    <div class="modal fade" id="exampleModalbutton" role="dialog" aria-labelledby="exampleModalbuttonTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-h-5" id="exampleModalbuttonTitle">Share Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h1 class="h-1">ahmed.Sarahah.com</h1>
                    <br/>

                    <a class="facebook" href="#">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    &#32;
                    &#32;
                    <a class="twitter" href="#">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    &#32;
                    &#32;
                    <a class="app" href="#">
                        <i class="fab fa-whatsapp-square"></i>
                    </a>
                    &#32;
                    &#32;
                    <span class="align">
                        <i class="fa fa-align-center"></i>
                    </span>

                </div>
            </div>
        </div>
    </div>


</section>

<br/>
<br/>


<!-- footer -->

<?php include_once('tempate/footer.php') ?>

<!-- Script Js -->

<?php include_once('tempate/script-js.php') ?>

</body>

</html>
