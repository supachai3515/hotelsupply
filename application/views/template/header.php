<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $header['description'];?>">
    <meta name="keyword" content="<?php echo $header['keyword'];?>" /> 
    <meta name="author" content="<?php echo $header['author'];?>">
    <meta property="fb:app_id" content=""/>
    <title><?php echo $header['title']; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('theme');?>/img/favicon-2.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,600" type="text/css" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Athiti|Kanit:200" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/css/jquery-ui.min.css">
     <!-- Add fancyBox Css-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('theme');?>/fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('theme');?>/fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('theme');?>/fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/custom-slider/css/preview.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/style.css">
    <link rel="stylesheet" href="<?php echo base_url('theme');?>/css/responsive.css">
    <script src="<?php echo base_url('theme');?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="home-2" ng-app="myApp" ng-controller="mainCtrl">
<img src="http://www.wisadev.com/wp-content/uploads/2016/11/black_ribbon_top_right.png" class="black-ribbon stick-top stick-right">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <header>
        <div class="header-container">
            <!-- header-top-area start -->
            <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="currency">
                                <span class="menu-lavel">
                                    LINE ID : @hotelsupply
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-12 hidden-sm hidden-xs col-md-4">
                            <div class="welcome-msg">
                                <p>ยินดีต้อนรับ hotelsupply.in.th</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="top-menu">
                                <nav>
                                    <ul>
                                        <li class="current"><a href="<?php echo base_url('dealer')?>"><i class="fa fa-user" aria-hidden="true"></i> Dealer</a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
                                        <li><a href="<?php echo base_url('cart') ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ตะกร้าสินค้า</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top-area end -->
            <div style="padding-bottom: 30px"></div>
            <!-- header-bottom-area start -->
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="<?php echo base_url()?>">
                                    <img src="<?php echo base_url('theme');?>/img/logo/logo-hotelsupply.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <!-- search-box start -->
                        <div class="col-md-6">
                            <div style="margin-top: -10px">
                                <form class="navbar-form ng-pristine ng-valid" role="search" action="<?php echo base_url('search')?>" method="GET">
                                    <div class="input-group search-form">
                                        <input type="text" class="form-control" placeholder="ค้นหาสินค้า" name="search" style="font-size: 18px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- search-box end -->

                        <!-- shopping-cart start -->
                        <div class="col-md-3">
                            <div class="shopping-cart">
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('cart') ?>">
                                            <b>ตะกร้าสินค้า</b>
                                            <span class="item">
                                            <span ng-bind="sumItems()"></span> - ชิ้น
                                            <span class="total-amu">
                                                <span ng-bind="sumTotal() | currency:'฿':0"></span>
                                            </span>
                                            </span>
                                        </a>
                                        <div class="mini-cart-content" ng-if="sumTotal() > 1">
                                            <div class="cart-img-details" ng-repeat="item in productItems" ng-if="item.price != '0'">
                                                <div class="cart-img-photo">
                                                    <a href="<?php echo base_url('product/'.'{{item.slug}}') ?>">
                                                        <img src="{{item.img}}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-img-contaent">
                                                    <a href="<?php echo base_url('product/'.'{{item.slug}}') ?>"  ><h4  ng-bind="item.name"></h4></a>
                                                    <span class="quantity"><span ng-bind="item.quantity"></span> ชิ้น</span>
                                                    <span ng-bind="item.price | currency:'฿':0"></span>
                                                </div>
                                                <div class="pro-del">
                                                    <a href="" ng-click="deleteProduct_click(item.rowid)"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                    
                                            <div class="cart-inner-bottom">
                                                <p class="total">รวม: <span class="amount"><span ng-bind="sumTotal() | currency:'฿':0"></span></p>
                                                <div class="clear"></div>
                                                <p class="buttons"><a href="<?php echo base_url('checkout') ?>">ยันยันการสั่งซื้อ</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- shopping-cart end -->
                    </div>
                </div>
            </div>
            <!-- header-bottom-area end -->
        </div>
        <!-- main-menu-area start -->
        <div class="main-menu-area">
            <div class="bg-half"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo base_url()?>"><i class="fa fa-home"></i></a></li>
                                    <li><a href="<?php echo base_url('products')?>">สินค้า</a></li>
                                    <li><a href="<?php echo base_url('howtobuy')?>">วิธีการสั่งซื้อ</a></li>
                                    <li><a href="<?php echo base_url('payment')?>">แจ้งชำระเงิน</a></li>
                                    <li><a href="<?php echo base_url('dealer')?>">Dealer</a></li>
                                    <li><a href="<?php echo base_url('content')?>">บทความ</a></li>
                                    <li><a href="<?php echo base_url('contact')?>">ติดต่อเรา</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-menu-area end -->
        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="<?php echo base_url()?>"><i class="fa fa-home"></i></a></li>
                                    <li><a href="<?php echo base_url('products')?>">สินค้า</a></li>
                                    <li><a href="<?php echo base_url('howtobuy')?>">วิธีการสั่งซื้อ</a></li>
                                    <li><a href="<?php echo base_url('payment')?>">แจ้งชำระเงิน</a></li>
                                    <li><a href="<?php echo base_url('dealer')?>">Dealer</a></li>
                                    <li><a href="<?php echo base_url('content')?>">บทความ</a></li>
                                    <li><a href="<?php echo base_url('contact')?>">ติดต่อเรา</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->
    </header>
    