<body class="productsgrid-page">
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
<div class="main-content main-content-product left-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Grid Products Left Sidebar
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area shop-grid-content no-banner col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="site-main">
                    <h3 class="custom_blog_title">
                        Grid Products Left Sidebar
                    </h3>
                        <div class="shop-top-control">
                            <form class="select-item select-form">
                                <span class="title">Sort</span>
                                <select data-placeholder="12 Products/Page" class="chosen-select">
                                    <option value="1">12 Products/Page</option>
                                    <option value="2">9 Products/Page</option>
                                    <option value="3">10 Products/Page</option>
                                    <option value="4">8 Products/Page</option>
                                    <option value="5">6 Products/Page</option>
                                </select>
                            </form>
                            <form class="filter-choice select-form">
                                <span class="title">Sort by</span>
                                <select data-placeholder="Price: Low to High" class="chosen-select">
                                    <option value="1">Price: Low to High</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by average rating</option>
                                    <option value="4">Sort by newness</option>
                                    <option value="5">Sort by price: low to high</option>
                                </select>
                            </form>
                            <div class="grid-view-mode">
                                <div class="inner">
                                    <a href="products/list" class="modes-mode mode-list">
                                        <span></span>
                                        <span></span>
                                    </a>
                                    <a href="#" class="modes-mode mode-grid  active">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="row list-products auto-clear equal-container product-grid">
                            <?php
                            $infoCounter = 1;
                            foreach($allProducts as $val): ?>
                            <li class="product-item product-type-variable col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1">
                                <div class="product-inner equal-element">
                                    <div class="product-top">
                                        <div class="flash">
                                                <span class="onnew">
                                                    <span class="text">
                                                        new
                                                    </span>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#" class="main-image">
                                                <img src="/images/<?= $val->main_image ?>" alt="<?= $val->title ?>">
                                            </a>
                                            <div class="thumb-group">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button">
                                                        <a href="">Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <a href="#" class="button quick-wiew-button">Quick View</a>
                                                <div class="loop-form-add-to-cart">
                                                    <button class="single_add_to_cart_button button" value=
                                                        "<?= $infoCounter++ ?>" name="<?= $val->id ?>">Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="#" class="title-in-info"><?= $val->title ?></a>
                                        </h5>
                                            <span><?= $val->desc?></span>
                                        <div class="group-info">
                                            <div class="stars-rating">
                                                <div class="star-rating">
                                                    <span class="star-3"></span>
                                                </div>
                                                <div class="count-star">
                                                    (3)
                                                </div>
                                            </div>
                                            <div class="price">
                                                <del>
                                                    $<?= $val->sale_price ?>
                                                </del>
                                                <ins>
                                                    $<?= (($val->sale_price) -20) ?>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    <div class="pagination clearfix style3">
                        <div class="nav-link">
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-left"
                                                                aria-hidden="true"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers current">3</a>
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-right"
                                                                aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="wrapper-sidebar shop-sidebar">
                    <div class="widget woof_Widget">
                        <div class="widget widget-categories">
                            <h3 class="widgettitle">Categories</h3>
                            <ul class="list-categories">
                                <?php
                                $idCoiunter = 1;
                                foreach ($allCategories as $category):
                                ?>
                                <li>
                                    <input type="checkbox" class="categoryCheckbox" id="cb<?= $category->id ?>">
                                    <label for="cb<?= $category->id ?>" class="label-text">
                                        <?= $category->title ?>
                                    </label>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="widget widget_filter_price">
                            <h4 class="widgettitle">
                                Price
                            </h4>
                            <div class="price-slider-wrapper">
                                <div data-label-reasult="Range:" data-min="0" data-max="3000" data-unit="$"
                                     class="slider-range-price " data-value-min="0" data-value-max="1000">
                                </div>
                                <div class="price-slider-amount">
                                    <span class="from">$45</span>
                                    <span class="to">$215</span>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-brand">
                            <h3 class="widgettitle">Brand</h3>
                            <ul class="list-brand">
                                <li>
                                    <input id="cb7" type="checkbox">
                                    <label for="cb7" class="label-text">New Arrivals</label>
                                </li>
                                <li>
                                    <input id="cb8" type="checkbox">
                                    <label for="cb8" class="label-text">Shoes</label>
                                </li>
                                <li>
                                    <input id="cb9" type="checkbox">
                                    <label for="cb9" class="label-text">Tables</label>
                                </li>
                                <li>
                                    <input id="cb10" type="checkbox">
                                    <label for="cb10" class="label-text">Trousers</label>
                                </li>
                                <li>
                                    <input id="cb11" type="checkbox">
                                    <label for="cb11" class="label-text">Accessories</label>
                                </li>
                                <li>
                                    <input id="cb12" type="checkbox">
                                    <label for="cb12" class="label-text">Bags</label>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_filter_size">
                            <h4 class="widgettitle">Size</h4>
                            <ul class="list-size">
                                <li>
                                    <a href="#">xs</a>
                                </li>
                                <li>
                                    <a href="#">s</a>
                                </li>
                                <li class="active">
                                    <a href="#">m</a>
                                </li>
                                <li>
                                    <a href="#">l</a>
                                </li>
                                <li>
                                    <a href="#">xl</a>
                                </li>
                                <li>
                                    <a href="#">xxl</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-color">
                            <h4 class="widgettitle">
                                Color
                            </h4>
                            <div class="list-color">
                                <a href="#" class="color1"></a>
                                <a href="#" class="color2 "></a>
                                <a href="#" class="color3 active"></a>
                                <a href="#" class="color4"></a>
                                <a href="#" class="color5"></a>
                                <a href="#" class="color6"></a>
                                <a href="#" class="color7"></a>
                            </div>
                        </div>
                        <div class="widget widget-tags">
                            <h3 class="widgettitle">
                                Popular Tags
                            </h3>
                            <ul class="tagcloud">
                                <li class="tag-cloud-link">
                                    <a href="#">Fashion</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a href="#">Trousers</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a href="#">Hat</a>
                                </li>
                                <li class="tag-cloud-link active">
                                    <a href="#">Accessories</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a href="#">Hot</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a href="#">Bags</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a href="#">Shoes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget newsletter-widget">
                        <div class="newsletter-form-wrap ">
                            <h3 class="title">Subscribe to Our Newsletter</h3>
                            <div class="subtitle">
                                More special Deals, Events & Promotions
                            </div>
                            <input type="email" class="email" placeholder="Your email letter">
                            <button type="submit" class="button submit-newsletter">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<script src="/assets/js/jquery-1.12.4.min.js"></script>
<script src="/assets/js/jquery.plugin-countdown.min.js"></script>
<script src="/assets/js/jquery-countdown.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/magnific-popup.min.js"></script>
<script src="/assets/js/isotope.min.js"></script>
<script src="/assets/js/jquery.scrollbar.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>
<script src="/assets/js/mobile-menu.js"></script>
<script src="/assets/js/chosen.min.js"></script>
<script src="/assets/js/slick.js"></script>
<script src="/assets/js/jquery.elevateZoom.min.js"></script>
<script src="/assets/js/jquery.actual.min.js"></script>
<script src="/assets/js/fancybox/source/jquery.fancybox.js"></script>
<script src="/assets/js/lightbox.min.js"></script>
<script src="/assets/js/owl.thumbs.min.js"></script>
<script src="/assets/js/jquery.scrollbar.min.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script src="/assets/js/frontend-plugin.js"></script>
</body>
</html>