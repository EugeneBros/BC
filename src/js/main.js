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

//Collapse section
// var collapseBtn = $(".collapse_btn"),
//     collapseSection = $(".collapse_section");
//     $(".collapse_section").height();
// collapseBtn.click(function(a) {
//     a.preventDefault(), collapseSection.hasClass("in") ? (collapseBtn.removeClass("active"), collapseSection.removeClass("in")) : (collapseBtn.addClass("active"), collapseSection.addClass("in"))
// });