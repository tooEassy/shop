$(document).ready(()=> {
    let $loginInfo = JSON.parse(localStorage.getItem('loginInfo'));
    if ($loginInfo) {
        $(".header-user-links>li:first-child>span").html("Hey, " + $loginInfo['email'] + " | <a class='logout' href='/'>Log out</a>");
        $(".block-account").remove();
        $(".logout").click((event) => {
            localStorage.removeItem('loginInfo');
        });
    }
    let $cartProd = JSON.parse(localStorage.getItem('Cart'));
    if (!$cartProd) $cartProd = [];
    let $productQuont = 1;
    let $allPrice = 0;
    $(".single_add_to_cart_button").click((event) => {
        $cartProd.push($(event.target).attr("name"));
        localStorage.setItem("Cart",  JSON.stringify($cartProd));
    });
    $(".shopcart-icon").click((event) => {
        let $allPrice = 0;
        $cartProd = JSON.parse(localStorage.getItem('Cart'));
        $.ajax({
            url: "http://localhost/cart",
            type: "POST",
            data: {
                'data': $cartProd,
            },
            success: ($cartItem) => {
                let $cartProducts = JSON.parse($cartItem);
                let $cartProductsHtml;
                $.each($cartProducts, ($i, $cartProduct) => {
                        $allPrice += parseInt($cartProduct['sale_price']);
                        $cartProductsHtml += `<li class="product-cart mini_cart_item product-cart-${$cartProduct['id']}" >
                                                <a href="#" class="product-media">
                                                <img src="/images/${$cartProduct['main_image']}" alt="img">
                                                </a>
                                                <div class="product-details">
                                                <h5 class="product-name">
                                                <a href="#">${$cartProduct['title']}</a>
                                            </h5>
                                            <div class="variations">
                                                <span class="attribute_color">
                                                <a href="#">Black</a>
                                                </span>
                                                ,
                                            <span class="attribute_size">
                                                <a href="#">300ml</a>
                                            </span>
                                            </div>
                                            <span class="product-price">
                                                <span class="price">
                                                <span>${$cartProduct['sale_price']}</span>
                                                </span>
                                                </span>
                                                <span class="product-quantity">
                                                x${$productQuont}
                                                </span>
                                                <div class="product-remove" data-id="${$cartProduct['id']}">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            </li>`;
                    $(".total-price").html(
                        `<span class="Price-amount">
                        ${parseInt($allPrice)}
                    </span>`
                    );
                });

                $(".minicart-items").html($cartProductsHtml);
                $(".product-remove").click(function(event) {
                    let $cartProducts = JSON.parse(localStorage.getItem('Cart'));
                    let $removeItem = $(event.currentTarget).data('id');
                    $cartProducts = $.grep($cartProducts, ($product) => {
                        return $product != $removeItem;
                    });
                    $allPrice -= $removeItem['sale_price'];
                    $(".product-cart-" + $removeItem).remove();
                    localStorage.setItem("Cart",  JSON.stringify($cartProducts));
                });

            },
        });
    });
    $(".loginButton").click((event) => {
        let $email = $(".input-email").val();
        let $password = $(".input-password").val();
        let $loginData = {
            'email': $email,
            'password':  $password,
        };
        $.ajax({
           url: "http://localhost/enter",
           type: "POST",
           data: $loginData,
           success: ($loginInformation) => {
               if ($loginInformation == "OK") {
                   localStorage.setItem('loginInfo',
                       JSON.stringify($loginData),
                   );
                   $(".header-user-links>li:first-child>span").html("Hey, " + $loginData['email'] + " | <a class='logout' href='/'>Log out</a>");
                   $(".block-account").remove();
               }
               else {
                   $(".errorBlock").html($loginInformation);
               }
            },
        });
    });
    $(".categoryCheckbox").on('change', ()=> {
        let $allAttributes = [];
        $(".categoryCheckbox:checked").each(($i, $checkbox) => {
            $allAttributes.push($checkbox.id.split('cb')[1]);
        });
        if (!$allAttributes[0]) {
            $(".categoryCheckbox").each(($i, $checkbox) => {
                $allAttributes.push($checkbox.id.split('cb')[1]);
            });
        }
        console.log($allAttributes);
        $.ajax({
            url: "http://localhost/category",
            type: "POST",
            data: {
                'checked': $allAttributes,
            },
            success: ($productByAttribute) => {
                console.log($productByAttribute);
                let $selectedProducts = JSON.parse($productByAttribute);
                $(".product-item").remove();
                $.each($selectedProducts, ($i, $selectedProduct) => {
                    $(".list-products").append(`<li class="product-item product-type-variable col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1">
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
                                            <a href="#" class="">
                                                <img src="/images/${$selectedProduct['main_image']}" alt="<?= $val->title ?>">
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
                                                        "<?= $infoCounter++ ?>" name="${$selectedProduct['id']}">Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="#" class="title-in-info">${$selectedProduct['title']}</a>
                                        </h5>
                                            <span>${$selectedProduct['desc']}</span>
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
                                                    $${$selectedProduct['sale_price']}
                                                </del>
                                                <ins>
                                                    $${($selectedProduct['sale_price'] - ($selectedProduct['sale_price']/20))}
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>`);
                });
                $(".single_add_to_cart_button").click((event) => {
                    $cartProd.push($(event.target).attr("name"));
                    localStorage.setItem("Cart",  JSON.stringify($cartProd));
                });
            }
        });
    });
});

