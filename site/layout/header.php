<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dự Án Mẫu</title>
    <link href="<?php echo "$CONTENT_SITE_PATH" ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo "$CONTENT_SITE_PATH" ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo "$CONTENT_SITE_PATH" ?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo "$CONTENT_SITE_PATH" ?>/css/price-range.css" rel="stylesheet">
    <link href="<?php echo "$CONTENT_SITE_PATH" ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo "$CONTENT_SITE_PATH" ?>/css/main.css" rel="stylesheet">
    <link href="<?php echo "$CONTENT_SITE_PATH" ?>/css/responsive.css" rel="stylesheet">
    <?php
    if (isset($_GET['page']) && $_GET['page'] == "book-detail") : ?>
        <link href="<?php echo "$CONTENT_SITE_PATH" ?>/css/book-detail.css" rel="stylesheet">
        </link>
    <?php endif ?>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo "$CONTENT_SITE_PATH" ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo "$CONTENT_SITE_PATH" ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo "$CONTENT_SITE_PATH" ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo "$CONTENT_SITE_PATH" ?>/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="<?php echo $SITE_URL ?>"><img src="<?php echo "$CONTENT_SITE_PATH" ?>/images/home/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="?page=cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <?php if (isset($_SESSION['account'])) : ?>
                                    <li>Xin chào:<?php echo $_SESSION['account']['name'] ?><a href="?page=logout">Logout</a></li>
                                <?php else : ?>
                                    <li><a href="?page=login"><i class="fa fa-lock"></i> Login</a></li>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--main-menu-->
                        <?php
                        include __DIR__ . "/menu.php";
                        ?>
                        <!--end-main-menu-->
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->