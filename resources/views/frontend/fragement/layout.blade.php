<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>

    @include('frontend.fragement.style')

</head>
<body class="header_sticky">
<div class="boxed">

    <div class="overlay"></div>

    <!-- Preloader -->
    <div class="preloader">
        <div class="clear-loading loading-effect-2">
            <span></span>
        </div>
    </div><!-- /.preloader -->

    <section id="header" class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="flat-support">
                            <li>
                                <a href="faq.html" title="">Support</a>
                            </li>
                            <li>
                                <a href="store-location.html" title="">Store Locator</a>
                            </li>
                            <li>
                                <a href="order-tracking.html" title="">Track Your Order</a>
                            </li>
                        </ul><!-- /.flat-support -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <ul class="flat-infomation">
                            <li class="phone">
                                Call Us: <a href="#" title="">(888) 1234 56789</a>
                            </li>
                        </ul><!-- /.flat-infomation -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <ul class="flat-unstyled">
                            <li class="account">
                                <a href="#" title="">My Account<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <a href="#" title="">Login</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" title="">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html" title="">My Cart</a>
                                    </li>
                                    <li>
                                        <a href="my-account.html" title="">My Account</a>
                                    </li>
                                    <li>
                                        <a href="shop-checkout.html" title="">Checkout</a>
                                    </li>
                                </ul><!-- /.unstyled -->
                            </li>
                            <li>
                                <a href="#" title="">USD<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <a href="#" title="">Euro</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">Dolar</a>
                                    </li>
                                </ul><!-- /.unstyled -->
                            </li>
                            <li>
                                <a href="#" title="">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <a href="#" title="">English</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">Khmer</a>
                                    </li>
                                </ul><!-- /.unstyled -->
                            </li>
                        </ul><!-- /.flat-unstyled -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-top -->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div id="logo" class="logo" style="text-align: center;">
                            <a href="index.html" title="">
                                <img src="/frontend/images/logos/weone.png" alt="" width="80px">
                            </a>
                        </div><!-- /#logo -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-6">
                        <div class="top-search">
                            <form action="#" method="get" class="form-search" accept-charset="utf-8">
                                <div class="cat-wrap">
                                    <select name="category">
                                        <option hidden value="">All Category</option>
                                        <option hidden value="">Cameras</option>
                                        <option hidden value="">Computer</option>
                                        <option hidden value="">Laptops</option>
                                    </select>
                                    <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    <div class="all-categories">
                                        <div class="cat-list-search">
                                            <div class="title">
                                                Electronics
                                            </div>
                                            <ul>
                                                <li>Components</li>
                                                <li>Laptop</li>
                                                <li>Monitor</li>
                                                <li>Mp3 player</li>
                                                <li>Scanners</li>
                                            </ul>
                                        </div><!-- /.cat-list-search -->
                                        <div class="cat-list-search">
                                            <div class="title">
                                                Furniture
                                            </div>
                                            <ul>
                                                <li>Bookcases</li>
                                                <li>Barstools</li>
                                                <li>TV stands</li>
                                                <li>Desks</li>
                                                <li>Accent chairs</li>
                                            </ul>
                                        </div><!-- /.cat-list-search -->
                                        <div class="cat-list-search">
                                            <div class="title">
                                                Accessories
                                            </div>
                                            <ul>
                                                <li>Software</li>
                                                <li>Mobile</li>
                                                <li>TV stands</li>
                                                <li>Printers</li>
                                                <li>Media</li>
                                            </ul>
                                        </div><!-- /.cat-list-search -->
                                    </div><!-- /.all-categories -->
                                </div><!-- /.cat-wrap -->
                                <div class="box-search">
                                    <input type="text" name="search" placeholder="Search what you looking for ?">
                                    <span class="btn-search">
											<button type="submit" class="waves-effect"><img src="/frontend/images/icons/search.png" alt=""></button>
										</span>
                                    <div class="search-suggestions">
                                        <div class="box-suggestions">
                                            <div class="title">
                                                Search Suggestions
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="image">
                                                        <img src="/frontend/images/product/other/02.jpg" alt="">
                                                    </div>
                                                    <div class="info-product">
                                                        <div class="name">
                                                            <a href="#" title="">Razer RZ02-01071500-R3M1</a>
                                                        </div>
                                                        <div class="price">
																<span class="sale">
																	$50.00
																</span>
                                                            <span class="regular">
																	$2,999.00
																</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="image">
                                                        <img src="/frontend/images/product/other/03.jpg" alt="">
                                                    </div>
                                                    <div class="info-product">
                                                        <div class="name">
                                                            <a href="#" title="">Notebook Black Spire V Nitro VN7-591G</a>
                                                        </div>
                                                        <div class="price">
																<span class="sale">
																	$24.00
																</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="image">
                                                        <img src="/frontend/images/product/other/05.jpg" alt="">
                                                    </div>
                                                    <div class="info-product">
                                                        <div class="name">
                                                            <a href="#" title="">Apple iPad Mini G2356</a>
                                                        </div>
                                                        <div class="price">
																<span class="sale">
																	$90.00
																</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="image">
                                                        <img src="/frontend/images/product/other/06.jpg" alt="">
                                                    </div>
                                                    <div class="info-product">
                                                        <div class="name">
                                                            <a href="#" title="">Razer RZ02-01071500-R3M1</a>
                                                        </div>
                                                        <div class="price">
																<span class="sale">
																	$50.00
																</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="image">
                                                        <img src="/frontend/images/product/other/5.jpg" alt="">
                                                    </div>
                                                    <div class="info-product">
                                                        <div class="name">
                                                            <a href="#" title="">Apple iPad Mini G2356</a>
                                                        </div>
                                                        <div class="price">
																<span class="sale">
																	$24.00
																</span>
                                                            <span class="regular">
																	$2,999.00
																</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="image">
                                                        <img src="/frontend/images/product/other/s08.jpg" alt="">
                                                    </div>
                                                    <div class="info-product">
                                                        <div class="name">
                                                            <a href="#" title="">Beats Snarkitecture Headphones</a>
                                                        </div>
                                                        <div class="price">
																<span class="sale">
																	$90.00
																</span>
                                                            <span class="regular">
																	$2,999.00
																</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- /.box-suggestions -->
                                        <div class="box-cat">
                                            <div class="cat-list-search">
                                                <div class="title">
                                                    Categories
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#">Networking & Internet Devices</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Laptops, Desktops & Monitors</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Hard Drives & Memory Cards</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Printers & Ink</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Networking & Internet Devices</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Computer Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Software</a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.cat-list-search -->
                                        </div><!-- /.box-cat -->
                                    </div><!-- /.search-suggestions -->
                                </div><!-- /.box-search -->
                            </form><!-- /.form-search -->
                        </div><!-- /.top-search -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-3">
                        <div class="box-cart">
                            <div class="inner-box">
                                <ul class="menu-compare-wishlist">
                                    <li class="compare">
                                        <a href="compare.html" title="">
                                            <img src="/frontend/images/icons/compare.png" alt="">
                                        </a>
                                    </li>
                                    <li class="wishlist">
                                        <a href="wishlist.html" title="">
                                            <img src="/frontend/images/icons/wishlist.png" alt="">
                                        </a>
                                    </li>
                                </ul><!-- /.menu-compare-wishlist -->
                            </div><!-- /.inner-box -->
                            <div class="inner-box">
                                <a href="#" title="">
                                    <div class="icon-cart">
                                        <img src="/frontend/images/icons/cart.png" alt="">
                                        <span>4</span>
                                    </div>
                                    <div class="price">
                                        $0.00
                                    </div>
                                </a>
                                <div class="dropdown-box">
                                    <ul>
                                        <li>
                                            <div class="img-product">
                                                <img src="/frontend/images/product/other/img-cart-1.jpg" alt="">
                                            </div>
                                            <div class="info-product">
                                                <div class="name">
                                                    Samsung - Galaxy S6 4G LTE <br />with 32GB Memory Cell Phone
                                                </div>
                                                <div class="price">
                                                    <span>1 x</span>
                                                    <span>$250.00</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <span class="delete">x</span>
                                        </li>
                                        <li>
                                            <div class="img-product">
                                                <img src="/frontend/images/product/other/img-cart-2.jpg" alt="">
                                            </div>
                                            <div class="info-product">
                                                <div class="name">
                                                    Sennheiser - Over-the-Ear Headphone System - Black
                                                </div>
                                                <div class="price">
                                                    <span>1 x</span>
                                                    <span>$250.00</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <span class="delete">x</span>
                                        </li>
                                    </ul>
                                    <div class="total">
                                        <span>Subtotal:</span>
                                        <span class="price">$1,999.00</span>
                                    </div>
                                    <div class="btn-cart">
                                        <a href="shop-cart.html" class="view-cart" title="">View Cart</a>
                                        <a href="shop-checkout.html" class="check-out" title="">Checkout</a>
                                    </div>
                                </div>
                            </div><!-- /.inner-box -->
                        </div><!-- /.box-cart -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-middle -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-2">
                        <div id="mega-menu">
                            <div class="btn-mega"><span></span>ALL CATEGORIES</div>
                            <ul class="menu">
                                <li>
                                    <a href="#" title="" class="dropdown">
											<span class="menu-img">
												<img src="/frontend/images/icons/menu/01.png" alt="">
											</span>
                                        <span class="menu-title">
												Laptops & Mac
											</span>
                                    </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <ul class="banner">
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Headphones
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-01.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            TV & Audio
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-02.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Computers
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-03.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <ul class="banner">
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Headphones
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-01.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            TV & Audio
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-02.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Computers
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-03.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <ul class="banner">
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Headphones
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-01.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            TV & Audio
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-02.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Computers
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-03.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" title="" class="dropdown">
											<span class="menu-img">
												<img src="/frontend/images/icons/menu/02.png" alt="">
											</span>
                                        <span class="menu-title">
												Mobile & Tablet
											</span>
                                    </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Laptop And Computer
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Networking & Internet Devices</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Laptops, Desktops & Monitors</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Hard Drives & Memory Cards</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Printers & Ink</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Networking & Internet Devices</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Computer Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Software</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Audio & Video
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Headphones & Speakers</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Home Entertainment Systems</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">MP3 & Media Players</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <ul class="banner">
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Headphones
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-01.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            TV & Audio
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-02.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Computers
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-03.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" title="" class="dropdown">
											<span class="menu-img">
												<img src="/frontend/images/icons/menu/03.png" alt="">
											</span>
                                        <span class="menu-title">
												Home Devices
											</span>
                                    </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Home Devices
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Internet Devices</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Desktops & Monitors</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Hard Drives & Memory Cards</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Networking</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Software</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Audio
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Home Entertainment Systems</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">MP3 & Media Players</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Software</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <ul class="banner">
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Headphones
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-01.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            TV & Audio
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-02.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Computers
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-03.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" title="">
											<span class="menu-img">
												<img src="/frontend/images/icons/menu/04.png" alt="">
											</span>
                                        <span class="menu-title">
												Software
											</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
											<span class="menu-img">
												<img src="/frontend/images/icons/menu/05.png" alt="">
											</span>
                                        <span class="menu-title">
												TV & Audio
											</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
											<span class="menu-img">
												<img src="/frontend/images/icons/menu/06.png" alt="">
											</span>
                                        <span class="menu-title">
												Sports & Fitness
											</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="" class="dropdown">
											<span class="menu-img">
												<img src="/frontend/images/icons/menu/07.png" alt="">
											</span>
                                        <span class="menu-title">
												Games & Toys
											</span>
                                    </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Games & Toys
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Internet Devices</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Desktops & Monitors</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Hard Drives & Memory Cards</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Networking</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Software</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Audio
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Home Entertainment Systems</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">MP3 & Media Players</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Software</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <ul class="banner">
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Headphones
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-01.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            TV & Audio
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-02.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Computers
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-03.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" title="">
											<span class="menu-img">
												<img src="/frontend/images/icons/menu/08.png" alt="">
											</span>
                                        <span class="menu-title">
												Video Cameras
											</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="" class="dropdown">
											<span class="menu-img">
												<img src="/frontend/images/icons/menu/09.png" alt="">
											</span>
                                        <span class="menu-title">
												Accessories
											</span>
                                    </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Accessories
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Internet Devices</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Desktops & Monitors</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Hard Drives & Memory Cards</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Networking</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Software</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Audio
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Home Entertainment Systems</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">MP3 & Media Players</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Software</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <ul class="banner">
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Headphones
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-01.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            TV & Audio
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-02.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Computers
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-03.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" title="" class="dropdown">
											<span class="menu-img">
												<img src="/frontend/images/icons/menu/10.png" alt="">
											</span>
                                        <span class="menu-title">
												Security
											</span>
                                    </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Security
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Internet Devices</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Desktops & Monitors</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Hard Drives & Memory Cards</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Networking</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Software</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">
                                                Audio
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Home Entertainment Systems</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">MP3 & Media Players</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Software</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Hard Drives & Memory Cards</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">Networking</a>
                                                </li>
                                            </ul>
                                            <div class="show">
                                                <a href="#" title="">Shop All</a>
                                            </div>
                                        </div>
                                        <div class="one-third">
                                            <ul class="banner">
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Headphones
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-01.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            TV & Audio
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-02.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="banner-text">
                                                        <div class="banner-title">
                                                            Computers
                                                        </div>
                                                        <div class="more-link">
                                                            <a href="#" title="">Shop Now <img src="/frontend/images/icons/right-2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="banner-img">
                                                        <img src="/frontend/images/banner_boxes/menu-03.png" alt="">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-9 col-10">
                        <div class="nav-wrap">
                            <div id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li class="column-1">
                                        <a href="index.html" title="">Home</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="index.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 01</a>
                                            </li>
                                            <li>
                                                <a href="index-v2.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 02</a>
                                            </li>
                                            <li>
                                                <a href="index-v3.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 03</a>
                                            </li>
                                            <li>
                                                <a href="index-v4.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 04</a>
                                            </li>
                                            <li>
                                                <a href="index-v5.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 05</a>
                                            </li>
                                            <li>
                                                <a href="index-v6.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 06</a>
                                            </li>
                                            <li>
                                                <a href="index-v7.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 07</a>
                                            </li>
                                            <li>
                                                <a href="index-v8.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 08</a>
                                            </li>
                                            <li>
                                                <a href="index-v9.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 09</a>
                                            </li>
                                            <li>
                                                <a href="index-v10.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 10</a>
                                            </li>
                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                    <li class="column-1">
                                        <a href="shop.html" title="">Shop</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="shop.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Shop left sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-v2.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Shop right sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Shop list view</a>
                                            </li>
                                            <li>
                                                <a href="shop-v4.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Shop full width</a>
                                            </li>
                                            <li>
                                                <a href="shop-v5.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Shop 03 column</a>
                                            </li>
                                            <li>
                                                <a href="shop-cart.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Shop cart</a>
                                            </li>
                                            <li>
                                                <a href="shop-checkout.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Shop checkout</a>
                                            </li>
                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                    <li class="column-1">
                                        <a href="#" title="">Features</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Theater Systems</a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Receivers & Amplifiers</a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Speakers</a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>CD Players & Turntables</a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>High-Resolution Audio</a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>4K Ultra HD TVs</a>
                                            </li>
                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                    <li class="has-mega-menu">
                                        <a href="#" title="">Electronic</a>
                                        <div class="submenu">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <h3 class="cat-title">Accessories</h3>
                                                    <ul class="submenu-child">
                                                        <li>
                                                            <a href="#" title="">Electronics</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Furniture</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Divided</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Everyday Fashion</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Modern Classic</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Party</a>
                                                        </li>
                                                    </ul>
                                                    <div class="show">
                                                        <a href="#" title="">Shop All</a>
                                                    </div>
                                                </div><!-- /.col-lg-3 col-md-12 -->
                                                <div class="col-lg-3 col-md-12">
                                                    <h3 class="cat-title">Laptop And Computer</h3>
                                                    <ul class="submenu-child">
                                                        <li>
                                                            <a href="#" title="">Networking & Internet Devices</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Laptops, Desktops & Monitors</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Hard Drives & Memory Cards</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Printers & Ink</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Networking & Internet Devices</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Computer Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Software</a>
                                                        </li>
                                                    </ul>
                                                    <div class="show">
                                                        <a href="#" title="">Shop All</a>
                                                    </div>
                                                </div><!-- /.col-lg-3 col-md-12 -->
                                                <div class="col-lg-4 col-md-12">
                                                    <h3 class="cat-title">Audio & Video</h3>
                                                    <ul class="submenu-child">
                                                        <li>
                                                            <a href="#" title="">Headphones & Speakers</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Home Entertainment Systems</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">MP3 & Media Players</a>
                                                        </li>
                                                    </ul>
                                                    <div class="show">
                                                        <a href="#" title="">Shop All</a>
                                                    </div>
                                                </div><!-- /.col-lg-4 col-md-12 -->
                                                <div class="col-lg-2 col-md-12">
                                                    <h3 class="cat-title">Home Audio</h3>
                                                    <ul class="submenu-child">
                                                        <li>
                                                            <a href="#" title="">Home Theater Systems</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Receivers & Amplifiers</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Speakers</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">CD Players & Turntables</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">High-Resolution Audio</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">4K Ultra HD TVs</a>
                                                        </li>
                                                    </ul>
                                                    <div class="show">
                                                        <a href="#" title="">Shop All</a>
                                                    </div>
                                                </div><!-- /.col-lg-2 col-md-12 -->
                                            </div><!-- /.row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="banner">
                                                        <div class="inner-box">
                                                            <a href="#" title="">
                                                                <img src="/frontend/images/banner_boxes/submenu-01.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="banner-box">
                                                        <div class="inner-box">
                                                            <a href="#" title="">
                                                                <img src="/frontend/images/banner_boxes/submenu-02.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.row -->
                                        </div><!-- /.submenu -->
                                    </li><!-- /.has-mega-menu -->
                                    <li class="column-1">
                                        <a href="#" title="">Pages</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="about.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>About</a>
                                            </li>
                                            <li>
                                                <a href="404.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>404 Page</a>
                                            </li>
                                            <li>
                                                <a href="brands.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Brands Page</a>
                                            </li>
                                            <li>
                                                <a href="categories.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Categories 01</a>
                                            </li>
                                            <li>
                                                <a href="categories-v2.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Categories 02</a>
                                            </li>
                                            <li>
                                                <a href="element.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Element</a>
                                            </li>
                                            <li>
                                                <a href="faq.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>FAQ</a>
                                            </li>
                                            <li>
                                                <a href="order-tracking.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Order Tracking</a>
                                            </li>
                                            <li>
                                                <a href="term-condition.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Terms & Conditions</a>
                                            </li>
                                            <li>
                                                <a href="single-product.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Single Product 01</a>
                                            </li>
                                            <li>
                                                <a href="single-product-v2.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Single Product 02</a>
                                            </li>
                                            <li>
                                                <a href="single-product-v3.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Single Product 03</a>
                                            </li>
                                            <li>
                                                <a href="single-product-v4.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Single Product 04</a>
                                            </li>
                                            <li>
                                                <a href="single-product-v5.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Single Product 05</a>
                                            </li>
                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                    <li class="column-1">
                                        <a href="blog.html" title="">Blog</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="blog.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog left sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-v2.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog right sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-v3.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog list</a>
                                            </li>
                                            <li>
                                                <a href="blog-v4.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog 02 column</a>
                                            </li>
                                            <li>
                                                <a href="blog-v5.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog full width</a>
                                            </li>
                                            <li>
                                                <a href="blog-single.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog single</a>
                                            </li>
                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                    <li class="column-1">
                                        <a href="contact.html" title="">Contact</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="contact.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Contact 01</a>
                                            </li>
                                            <li>
                                                <a href="contact-v2.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Contact 02</a>
                                            </li>
                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                </ul><!-- /.menu -->
                            </div><!-- /.mainnav -->
                        </div><!-- /.nav-wrap -->
                        <div class="today-deal">
                            <a href="#" title="">TODAY DEALS</a>
                        </div><!-- /.today-deal -->
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                    </div><!-- /.col-md-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-bottom -->
    </section><!-- /#header -->

    @yield('content1')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget-ft widget-about">
                        <div class="logo logo-ft">
                            <a href="index.html" title="">
                                <img src="/frontend/images/logos/logo-3.png" alt="">
                            </a>
                        </div><!-- /.logo-ft -->
                        <div class="widget-content">
                            <div class="icon">
                                <img src="/frontend/images/icons/call.png" alt="">
                            </div>
                            <div class="info">
                                <p class="questions">Got Questions ? Call us 24/7!</p>
                                <p class="phone">Call Us: (888) 1234 56789</p>
                                <p class="address">
                                    PO Box CT16122 Collins Street West, Victoria 8007,<br />Australia.
                                </p>
                            </div>
                        </div><!-- /.widget-content -->
                        <ul class="social-list">
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul><!-- /.social-list -->
                    </div><!-- /.widget-about -->
                </div><!-- /.col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="widget-ft widget-categories-ft">
                        <div class="widget-title">
                            <h3>Find By Categories</h3>
                        </div>
                        <ul class="cat-list-ft">
                            <li>
                                <a href="#" title="">Desktops</a>
                            </li>
                            <li>
                                <a href="#" title="">Laptops & Notebooks</a>
                            </li>
                            <li>
                                <a href="#" title="">Components</a>
                            </li>
                            <li>
                                <a href="#" title="">Tablets</a>
                            </li>
                            <li>
                                <a href="#" title="">Software</a>
                            </li>
                            <li>
                                <a href="#" title="">Phones & PDAs</a>
                            </li>
                            <li>
                                <a href="#" title="">Cameras</a>
                            </li>
                        </ul><!-- /.cat-list-ft -->
                    </div><!-- /.widget-categories-ft -->
                </div><!-- /.col-lg-3 col-md-6 -->
                <div class="col-lg-2 col-md-6">
                    <div class="widget-ft widget-menu">
                        <div class="widget-title">
                            <h3>Customer Care</h3>
                        </div>
                        <ul>
                            <li>
                                <a href="#" title="">
                                    Contact us
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    Site Map
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    My Account
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    Wish List
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    Delivery Information
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    Terms & Conditions
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.widget-menu -->
                </div><!-- /.col-lg-2 col-md-6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="widget-ft widget-newsletter">
                        <div class="widget-title">
                            <h3>Sign Up To New Letter</h3>
                        </div>
                        <p>Make sure that you never miss our interesting <br />
                            news by joining our newsletter program
                        </p>
                        <form action="#" class="subscribe-form" method="get" accept-charset="utf-8">
                            <div class="subscribe-content">
                                <input type="text" name="email" class="subscribe-email" placeholder="Your E-Mail">
                                <button type="submit"><img src="/frontend/images/icons/right-2.png" alt=""></button>
                            </div>
                        </form><!-- /.subscribe-form -->
                        <ul class="pay-list">
                            <li>
                                <a href="#" title="">
                                    <img src="/frontend/images/logos/ft-01.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <img src="/frontend/images/logos/ft-02.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <img src="/frontend/images/logos/ft-03.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <img src="/frontend/images/logos/ft-04.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <img src="/frontend/images/logos/ft-05.png" alt="">
                                </a>
                            </li>
                        </ul><!-- /.pay-list -->
                    </div><!-- /.widget-newsletter -->
                </div><!-- /.col-lg-4 col-md-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="widget widget-apps">
                        <div class="widget-title">
                            <h3>Mobile Apps</h3>
                        </div>
                        <ul class="app-list">
                            <li class="app-store">
                                <a href="#" title="">
                                    <div class="img">
                                        <img src="/frontend/images/icons/app-store.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>App Store</h4>
                                        <p>Available now on the</p>
                                    </div>
                                </a>
                            </li><!-- /.app-store -->
                            <li class="google-play">
                                <a href="#" title="">
                                    <div class="img">
                                        <img src="/frontend/images/icons/google-play.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Google Play</h4>
                                        <p>Get in on</p>
                                    </div>
                                </a>
                            </li><!-- /.google-play -->
                        </ul><!-- /.app-list -->
                    </div><!-- /.widget-apps -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer><!-- /footer -->

    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright"> All Rights Reserved © Techno Store 2017</p>
                    <p class="btn-scroll">
                        <a href="#" title="">
                            <img src="/frontend/images/icons/top.png" alt="">
                        </a>
                    </p>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.footer-bottom -->

</div><!-- /.boxed -->


@include('frontend.fragement.footerjs')
</body>
</html>
