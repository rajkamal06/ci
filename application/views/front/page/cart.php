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
                                    <li class="go-home"><a href="http://[::1]/ci/index.php/home">Home</a></li>
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
                    <div class="col-xl-9 col-xs-12 col-sm-12 col-md-12 col-lg-8">
                        <?PHP foreach($data as $vs): ?>
                        <div class="cart-area">
                            <div class="cart-details">
                                <div class="cart-all-pro">
                                    <div class="cart-pro">
                                        <div class="cart-pro-image">
                                            <a href="shop.html"><?=$vs->product_image?></a>
                                        </div>
                                      
                                        <div class="pro-details">
                                            <h4><a>product_name=<?=$vs->product_name?></a></h4>
                                             <span class="pro-size">user_id=<?=$vs->user_id?></span>
                                            <!-- <span class="pro-shop"><?=$vs->quantity?></span> -->
                                            <span class="cart-pro-price">price=<?=$vs->amount?></span>
                                        </div>
                                    </div>
                                    <div class="qty-item">
                                        <div class="center">
                                            <div class="plus-minus">
                                                <span>
                                                    <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                                    <input type="text" name="name" value="<?=$vs->quantity?>">
                                                    <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                                </span>
                                            </div>
                                            <a href="<?=base_url('Home/delete/'.$vs->id)?>" class="pro-remove">Remove</a>
                                        </div>
                                    </div>
                                    <div class="all-pro-price">
                                        <span><?=$vs->amount?></span>
                                    </div>
                                </div>
                                <?PHP endforeach; ?>
                                <div class="other-link">
                                    <ul class="c-link">
                                        <li class="cart-other-link"><a href="<?= base_url('home/shop')?>">Update cart</a></li>
                                        <li class="cart-other-link"><a href="<?= base_url('home/shop')?>">Continue shopping</a></li>
                                        <li class="cart-other-link"><a href="index.html">Clear cart</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="cart-total">
                            <div class="cart-price">
                                <span>Subtotal</span>
                                <span class="total">$78.44 CAD</span>
                            </div>
                            <div class="cart-info">
                                <h4>Shipping info</h4>
                                <form>
                                    <label>Country</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option>---</option>
                                        <option>Afghanistan</option>
                                        <option>Åland Islands</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                        <option>Andorra</option>
                                        <option>Angola</option>
                                        <option>Anguilla</option>
                                        <option>Antigua & Barbuda</option>
                                        <option>Argentina</option>
                                        <option>Armenia</option>
                                        <option>Aruba</option>
                                        <option>Ascension Island</option>
                                        <option>Australia</option>
                                        <option>Austria</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                    </select>
                                    <label>Zip/postal code</label>
                                    <input type="text" name="code" placeholder="Zip/postal code">
                                </form>
                                <a href="javascript:void(0)" class="cart-calculate">Calculate</a>
                            </div>
                            <div class="shop-total">
                                <span>Total</span>
                                <span class="total-amount">$78.44 CAD</span>
                            </div>
                            <a href="<?= base_url('home/checkout')?>" class="check-link">Checkout</a>
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
        </section>
        <?php 
$this->load->view('front/include/footer.php');
?>