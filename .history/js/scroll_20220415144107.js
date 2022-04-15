$('a.welcomeSection').on('click', function () {
    const goToSection = "#" + (this).attr('class');
    $('body, html').animate({
        scrollTop: $(goToSection).offset().top
    }, 1500)
})