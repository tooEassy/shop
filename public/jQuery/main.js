$(document).ready(()=> {
    let $cartProd = JSON.parse(localStorage.getItem('Cart'));
    if (!$cartProd) $cartProd = [];
    let $productQuont = 1;
    $(".single_add_to_cart_button").click((event) => {
        $cartProd.push($(event.target).attr("name"));
        localStorage.setItem("Cart",  JSON.stringify($cartProd));
    });
    $(".shopcart-icon").click((event) => {
        $.ajax({
            url: "http://localhost/blabla",
            type: "POST",
            data: {
                'data': $cartProd,
            },
            success: ($cartItem) => {
                let $cartProducts = JSON.parse($cartItem);
                let $cartProductsHtml;
                console.log($cartProducts);
                $.each($cartProducts, ($i, $cartProduct) => {
                    $cartProductsHtml += `<li class="product-cart mini_cart_item" >
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
                                                ${$productQuont}
                                                </span>
                                                <div class="product-remove">
                                                <i class="fa fa-trash-o" aria-hidden="true" data-id="${$cartProduct['title']}"></i>
                                            </div>
                                            </div>
                                            </li>`;
                });

                $(".minicart-items").html($cartProductsHtml);

                $(".fa-trash-o").click(function(event) {
                    let $cartProducts = JSON.parse(localStorage.getItem('Cart'));
                    let $removeItem = $(event.target).attr('data-id');
                    console.log($cartProducts);
                    $cartProducts = $.grep($cartProducts, ($i, $product) => {
                        return $product != $removeItem;
                    });
                    localStorage.setItem("Cart",  JSON.stringify($cartProducts));
                    console.log($cartProducts);
                });

            },
        });
    });
});

