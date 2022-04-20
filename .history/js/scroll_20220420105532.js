jQuery('a.welcomeSection').on('click', function () {
    const goToSection = "#" + jQuery(this).attr('class');
    jQuery('body, html').animate({
        scrollTop: jQuery(goToSection).offset().top
    }, 1500)
})

// jQuery('a.menuSection').on('click', function () {
//     const goToSection = "#" + jQuery(this).attr('class');
//     jQuery('body, html').animate({
//         scrollTop: jQuery(goToSection).offset().top
//     }, 1500)
// })