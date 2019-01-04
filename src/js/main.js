//Header navigation on mobile devices
var headerNav = $(".header_nav_list"),
    headerHamburger = $(".hamburger");
    headerHamburger.click(function() {
        headerNav.slideToggle(500), headerHamburger.toggleClass("is-active")
    });
    $(window).resize(function() {
        var headerHamburger = $(window).width();
        headerHamburger > 768 ? headerNav.css("display", "flex") : headerHamburger < 768 && headerNav.css("display", "none")
});

// Add buttons to quantity
var quantityCart = $('.woocommerce form.cart div.quantity');
var quantityProd = $('.woocommerce .cart_item .product-quantity .quantity');
quantityCart.append('<span class="q_inc">+</span>');
quantityCart.prepend('<span class="q_dec">-</span>');
quantityProd.append('<span class="q_inc">+</span>');
quantityProd.prepend('<span class="q_dec">-</span>');

quantityCart.on('click', '>span', function(e) {
    "use strict";
    var f = jQuery(this).siblings('input');
    if (jQuery(this).hasClass('q_inc')) {
        f.val(Math.max(0, parseInt(f.val()))+1);
    } else {
        f.val(Math.max(1, Math.max(0, parseInt(f.val()))-1));
    }
    jQuery('.actions .button').removeAttr('disabled');
    e.preventDefault();
    return false;
});

quantityProd.on('click', '>span', function(e) {
    "use strict";
    var f = jQuery(this).siblings('input');
    if (jQuery(this).hasClass('q_inc')) {
        f.val(Math.max(0, parseInt(f.val()))+1);
    } else {
        f.val(Math.max(1, Math.max(0, parseInt(f.val()))-1));
    }
    jQuery('.actions .button').removeAttr('disabled');
    e.preventDefault();
    return false;
});