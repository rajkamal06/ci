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
                                    <li class="go-home"><a href="index.html">Home</a></li>
                                    <li class="about-p"><span>Account</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="shipping-area section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="account-title">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="account-area">
                            <div class="account">
                               <!--  <h4>My account</h4> -->
                                <ul class="page-name">
                                    <li class="register-id"><a href="account.html">Direct Referrals</a></li>
                                    <li class="register-id"><a href="">Tree View</a></li>
                                    <li class="register-id"><a href="level_status.html">Level Status</a></li>
                                    <li class="register-id"><a href="">Repurchase Status</a></li>
                                    <li class="register-id"><a href="">Repurchase Leg Status</a></li>
                                    <li class="register-id"><a href="">Previous Repurchase Status</a></li>
                                    <li class="register-id"><a href="">Statement</a></li>
                                    <li class="register-id"><a href="">Targets</a></li>
                                    <li class="register-id"><a href="">Achievements</a></li>
                                    <li class="register-id"><a href="">Dp List</a></li>
                                    <li class="register-id"><a href="<?= base_url('home/login')?>">Dp Login</a></li>
                                    <li class="register-id"><a href="<?= base_url('home/register')?>">New Registration</a></li>
                                    <li class="register-id"><a href="logout.html">Logout</a></li>
                                </ul>
                            </div>
                            <div class="account-detail">
                                <h4>Direct Referrals</h4>
                                <ul class="a-details">
                                    <li>Andrew louise</li>
                                    <li class="mail-register">andrew@gmail.com</li>
                                </ul>
                            </div>
                        </div>
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
            <?php 
$this->load->view('front/include/footer.php');
?>
