<?php 
$this->load->view('front/include/header.php');
?>
        <section class="about-breadcrumb">
            <div class="about-back section-tb-padding" style="background-image: url(<?=base_url()?>front/image/about-image.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="about-l">
                                <ul class="about-link">
                                    <li class="go-home"><a href="<?= base_url('home/home')?>">Home</a></li>
                                    <li class="about-p"><span>Your shopping cart</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- cart start -->
        <section class="cart-page section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                       <img src="<?=base_url()?>front/image/pro-img-01.jpg" width="100%">
                    </div>
                    <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                       <img src="<?=base_url()?>front/image/pro-img-03.jpg" width="100%">
                    </div>
                    <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                       <img src="<?=base_url()?>front/image/pro-img-04.jpg" width="100%">
                    </div>
                    <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                       <img src="<?=base_url()?>front/image/pro-img-02.jpg" width="100%">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                       <img src="<?=base_url()?>front/image/pro-img-04.jpg" width="100%">
                    </div>
                    <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                       <img src="<?=base_url()?>front/image/pro-img-05.jpg" width="100%">
                    </div>
                    <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                       <img src="<?=base_url()?>front/image/pro-img-06.jpg" width="100%">
                    </div>
                    <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                       <img src="<?=base_url()?>front/image/pro-img-01.jpg" width="100%">
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-one section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-service section-b-padding">
                            <ul class="service-ul">
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-truck"></i></a>
                                    <span>Free delivery</span>
                                </li>
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-rupee"></i></a>
                                    <span>Cash on delivery</span>
                                </li>
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-refresh"></i></a>
                                    <span>30 Days returns</span>
                                </li>
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-headphones"></i></a>
                                    <span>Online support</span>
                                </li>
                            </ul>
                        </div>
                        <div class="f-logo">
                            <ul class="footer-ul">
                                <li class="footer-li footer-logo">
                                    <a href="index.html">
                                        <img class="img-fluid" src="<?=base_url()?>front/image/logo1.png" alt="">
                                    </a>
                                </li>
                                <li class="footer-li footer-address">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="ion-ios-location"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Address</h6>
                                            <span>401 Broadway 24th floor
                                            </span>
                                            <span>Near ant mall cross road</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer-li footer-contact">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="ion-ios-telephone"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Contact</h6>
                                            <a href="tel:1-800-222-000">Phone: 1-800-222-000</a>
                                            <a href="mailto:demo@demo.com">Email: demo@demo.com</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer-li footer-address">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="fa fa-link"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Quick Links</h6>
                                            <a href="">About</a>
                                            <a href="">Contact</a>
                                            <a href="">Terms & conditions</a>
                                            <a href="">Privacy policy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
$this->load->view('front/include/footer.php');
?>