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
                                    <li class="about-p"><span>Contact</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- map area start -->
        <section class="contact section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="map-area">
                            <div class="map-title">
                                <h1>Contact us</h1>
                            </div>
                            <div class="map1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.38256195103!2d75.6504695008812!3d26.88544791821389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1629368554013!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="map-details section-t-padding">
                                <div class="contact-info">
                                    <div class="contact-details">
                                        <h4>Drop us message</h4>
                                        <form>
                                            <label>Your name</label>
                                            <input type="text" name="name" placeholder="Enter your name">
                                            <label>Email</label>
                                            <input type="text" name="Email" placeholder="Enter your email address">
                                            <label>Message</label>
                                            <textarea rows="5" placeholder="Your message hare..."></textarea>
                                        </form>
                                        <a href="javascript:void(0)" class="btn-style1">Submit <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="information">
                                        <h4>Get in touch</h4>
                                        <p class="info-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum earum eveniet dolorum suscipit nesciunt incidunt animi repudiandae ab at, tenetur distinctio voluptate vel illo similique.</p>
                                        <div class="contact-in">
                                            <ul class="info-details">
                                                <li><i class="fa fa-street-view"></i></li>
                                                <li>
                                                    <h4>Address</h4>
                                                    <p>255 Parker St. Englishtown, NJ 07726</p>
                                                </li>
                                            </ul>
                                            <ul class="info-details">
                                                <li><i class="fa fa-phone"></i></li>
                                                <li>
                                                    <h4>Phone</h4>
                                                    <p>+12345678999</p>
                                                </li>
                                            </ul>
                                            <ul class="info-details">
                                                <li><i class="fa fa-envelope"></i></li>
                                                <li>
                                                    <h4>Email</h4>
                                                    <p>yoursite@demo.com</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
                                            <a href="#">Contact</a>
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