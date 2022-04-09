<!DOCTYPE html>
<html lang="en">  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>LGO</title>
        <link rel="shortcut icon" type="image/favicon" href="<?=base_url()?>front/image/fevicon.png">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/css/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/css/swiper.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/css/responsive.css">
    </head>
    <body class="home-1">
        <section class="top1">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="top-home">
                            <li class="top-home-li">
                                <!-- currency start -->
                                <div class="currency">
                                    <span class="currency-head"><span class="icon-phone"></span> 91+ 9075482421</span> 
                                  
                                </div>
                                <div class="r-search">
                                    <a href="#r-search-modal" class="search-popuup" data-bs-toggle="modal"><i class="fa fa-search"></i></a>
                                    <div class="modal fade" id="r-search-modal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="m-drop-search">
                                                        <input type="text" name="search" placeholder="Search products, brands or advice">
                                                        <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                                                    </div>
                                                    <button type="button" class="close" data-bs-dismiss="modal"><i class="ion-close-round"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </li>
                            <li class="top-home-li t-content">
                                <div class="top-content">
                                    <p class="top-slogn"><!-- <span class="top-c">free shipping</span>  -->Track You Order
                                    <span class="icons">
                                        <a href=""><i class="fa fa-facebook-f"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-instagram"></i></a>
                                        <a href=""><i class="fa fa-youtube"></i></a>
                                    </span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
           <header class="header-area">
            <div class="header-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header-main">
                                <!-- logo start -->
                                <div class="header-element logo">
                                    <a href="index.html">
                                        <img src="<?=base_url()?>front/image/logo1.png" alt="logo-image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="header-element search-wrap">
                                    <input type="text" name="search" placeholder="Search product.">
                                    <a href="javascript:void(0)" class="search-btn"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="header-element right-block-box">
                                    <ul class="shop-element">
                                        <li class="side-wrap nav-toggler">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                            <span class="line"></span>
                                            </button>
                                        </li>
                                        <li class="side-wrap user-wrap">
                                            <div class="acc-desk">
                                                
                                                <div class="user-info">
                                                    <span class="acc-title">Account</span>
                                                    <div class="account-login">
                                                    
                                                        <?PHP
                                                        if($this->session->userdata('id')):
                                                        ?>
                                                        <a href="<?= base_url('front/account')?>">My Account(<?=$this->session->userdata('name')?>)</a>
                                                        <a href="<?= base_url('front/register/logout')?>">Log out</a>
                                                        <?PHP else: ?>
                                                        <a href="<?= base_url('home/register')?>">Register</a>
                                                        
                                                        <a href="<?= base_url('front/register/login')?>">Log in</a>
                                                        <?PHP endif; ?>
                                                       
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="acc-mob">
                                                <a href="login.html" class="user-icon">
                                                    <span><i class="icon-user"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                       
                                        <li class="side-wrap cart-wrap">
                                            <div class="shopping-widget">
                                                <div class="shopping-cart">
                                                    <a href="<?= base_url('home/cart')?>" class="cart-count">
                                                        <span class="cart-icon-wrap">
                                                            <span class="cart-icon"><i class="icon-handbag"></i></span>
                                                            <span id="cart-total" class="bigcounter"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main-menu-area">
                                <div class="main-navigation navbar-expand-xl">
                                    <div class="box-header menu-close">
                                        <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                    </div>
                                    <!-- menu start -->
                                    <div class="navbar-collapse" id="navbarContent">
                                        <div class="megamenu-content">
                                            <div class="mainwrap">
                                                <ul class="main-menu">
                                                    <li class="menu-link parent">
                                                        <a href="<?= base_url('home/shop_2')?>" class="link-title">
                                                            <span class="sp-link-title">Shop</span>
                                                            
                                                        </a>
                                                        <a href="#collapse-mega-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Shop</span>
                                                           
                                                        </a>
                                                      
                                                    </li>
                                                    
                                                    <li class="menu-link parent">
                                                        <a href="<?= base_url('home/about_us')?>" class="link-title">
                                                            <span class="sp-link-title">About Us</span>
                                                           
                                                        </a>
                                                        <a href="" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">About Us</span>
                                                            
                                                        </a>
                                                        
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="<?= base_url('home/privacy_policy')?>" class="link-title">
                                                            <span class="sp-link-title">Privacy policy</span>
                                                                                   
                                                        </a>
                                                        <a href="#collapse-banner-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Privacy policy</span>
                                                           
                                                        </a>
                                                       
                                                    </li>
                                                    
                                                    <li class="menu-link parent">
                                                        <a href="<?= base_url('home/gallery')?>" class="link-title">
                                                            <span class="sp-link-title">Gallery</span>
                                                            
                                                        </a>
                                                        <a href="#feature1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Gallery</span>
                                                            
                                                        </a>
                                                        
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="<?= base_url('home/contact')?>" class="link-title">
                                                            <span class="sp-link-title">Contact Us<!-- <span class="hot">Hot</span> --></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- menu end -->
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>