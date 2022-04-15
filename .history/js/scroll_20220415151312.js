jQuery('.welcomeSection').on('click', function () {
    const goToSection = "#" + jQuery(this).attr('class');
    console.log(goToSection);
    jQuery('body, html').animate({
        scrollTop: jQuery(goToSection).offset().top
    }, 1500)
})