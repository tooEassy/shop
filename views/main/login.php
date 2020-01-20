<body class="inblog-page">
<div class="header-device-mobile">
    <div class="wapper">
        <div class="item mobile-logo">
            <div class="logo">
                <a href="#">
                    <img src="assets/images/logo.png" alt="img">
                </a>
            </div>
        </div>
        <div class="item item mobile-search-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-search" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="header-searchform-box">
                    <form class="header-searchform">
                        <div class="searchform-wrap">
                            <input type="text" class="search-input" placeholder="Enter keywords to search...">
                            <input type="submit" class="submit button" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="item mobile-settings-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="block-sub-item">
                    <h5 class="block-item-title">Currency</h5>
                    <form class="currency-form nozari-language">
                        <ul class="nozari-language-wrap">
                            <li class="active">
                                <a href="#">
											<span>
												English (USD)
											</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
											<span>
												French (EUR)
											</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
											<span>
												Japanese (JPY)
											</span>
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="item menu-bar">
            <a class=" mobile-navigation  menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>
<div class="main-content main-content-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="/">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Authentication
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <h3 class="custom_blog_title">
                        Authentication
                    </h3>
                    <div class="customer_login">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="login-item">
                                    <h5 class="title-login">Login your Account</h5>
                                    <form action="/enter/" method="post" class="loginForm">
                                        <div class="social-account">
                                            <h6 class="title-social">Login with social account</h6>
                                            <a href="#" class="mxh-item facebook">
                                                <i class="icon fa fa-facebook-square" aria-hidden="true"></i>
                                                <span class="text">FACEBOOK</span>
                                            </a>
                                            <a href="#" class="mxh-item twitter">
                                                <i class="icon fa fa-twitter" aria-hidden="true"></i>
                                                <span class="text">TWITTER</span>
                                            </a>
                                        </div>
                                        <p class="form-row form-row-wide">
                                            <label class="text">Username</label>
                                            <input type="email" placeholder="Email" name="email" class="input-text"  required>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label class="text">Password</label>
                                            <input type="password" placeholder="Password" name="password" class="input-text" required>
                                        </p>
                                        <span><?php echo "$wrongInfo $wrongEmail $wrongPassword"; ?></span>
                                        <p class="lost_password">
												<span class="inline">
													<input type="checkbox" id="cb1">
													<label for="cb1" class="label-text">Remember me</label>
												</span>
                                            <a href="#" class="forgot-pw">Forgot password?</a>
                                        </p>
                                        <p class="form-row">
                                            <input type="submit" name="login" class="button-submit" value="login">
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="login-item">
                                    <h5 class="title-login">Don’t have an Account? Register now!</h5>
                                    <form class="register" action="register" method="post">
                                        <p class="form-row form-row-wide">
                                            <label class="text">First name</label>
                                            <input placeholder="First name" title="firstName" type="text" class="input-text" name="firstName">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label class="text">Last name</label>
                                            <input placeholder="Last name" title="lastName" type="text" class="input-text" name="lastName">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label class="text">Username</label>
                                            <input placeholder="Username" title="username" type="text" class="input-text" name="username">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label class="text">Your email</label>
                                            <input placeholder="Email" title="email" type="email" class="input-text" name="email">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label class="text">Password</label>
                                            <input placeholder="Password" title="pass" type="password" class="input-text" name="password">
                                        </p>
<!--                                        <p class="form-row">-->
<!--												<span class="inline">-->
<!--													<input type="checkbox" id="cb2">-->
<!--													<label for="cb2" class="label-text">I agree to <span>Terms & Conditions</span></label>-->
<!--												</span>-->
<!--                                        </p>-->
                                        <p class="">
                                            <input type="submit" class="button-submit" value="REGISTER NOW" name="register">
                                        </p>
                                    </form>
                                    <?php
                                       ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer style7">
    <div class="container">
        <div class="container-wapper">
            <div class="row">
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="widget-box">
                        <div class="single-img">
                            <a href="index.html"><img src="assets/images/logo-light.png" alt="img"></a>
                        </div>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#"><span class="flaticon-placeholder"></span>45 Grand Central Terminal New
                                    York,NY 1017 United State USA</a>
                            </li>
                            <li class="menu-item">
                                <a href="#"><span class="fa fa-phone"></span>(+123) 456 789 - (+123) 666 888</a>
                            </li>
                            <li class="menu-item">
                                <a href="#"><span class="fa fa-envelope-o"></span>Contact@yourcompany.com</a>
                            </li>
                            <li class="menu-item">
                                <a href="#"><span class="flaticon-clock"></span>Mon-Sat 9:00pm - 5:00pm Sun : Closed</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="nozari-custommenu default">
                        <h2 class="widgettitle">Quick Menu</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">New arrivals</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Life style</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Trousers</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Bags</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Shoes</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="nozari-custommenu default">
                        <h2 class="widgettitle">Information</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">FAQs</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Track Order</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Delivery</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Contact Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Return</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="nozari-newsletter style1">
                        <div class="newsletter-head">
                            <h3 class="title">Newsletter</h3>
                        </div>
                        <div class="newsletter-form-wrap">
                            <div class="list">
                                Get notified of new products, limited releases, and more.
                            </div>
                            <input type="email" class="input-text email email-newsletter"
                                   placeholder="Your email letter">
                            <button class="button btn-submit submit-newsletter">SUBSCRIBE</button>
                        </div>
                    </div>
                    <div class="nozari-socials">
                        <ul class="socials">
                            <li>
                                <a href="#" class="social-item" target="_blank">
                                    <i class="icon fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-item" target="_blank">
                                    <i class="icon fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-item" target="_blank">
                                    <i class="icon fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 border-custom">
                    <span></span>
                </div>
            </div>
            <div class="footer-end">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="coppyright">
                            Copyright © 2019
                            <a href="#">Nozari</a>
                            . All rights reserved
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="nozari-payment">
                            <img src="assets/images/payments.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="index.html">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Home
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="#">
					<span class="icon">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</span>
                Wishlist
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="#">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
							0
						</span>
					</span>
                <span class="text">Cart</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">
            <a href="#">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                Account
            </a>
        </div>
    </div>
</div>
<a href="#" class="backtotop">
    <i class="pe-7s-angle-up"></i>
</a>