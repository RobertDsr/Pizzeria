jQuery('.welcomeSection').on('click', function () {
    const goToSection = "#" + (this).attr('class');
    console.log(goToSection);
    jQuery('body, html').animate({
        scrollTop: jQui(goToSection).offset().top
    }, 1500)
})