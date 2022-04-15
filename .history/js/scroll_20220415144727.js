$('a.welcomeSection').on('click', function () {
    const goToSection = "#" + (this).attr('class');
    console.log(go)
    $('body, html').animate({
        scrollTop: $(goToSection).offset().top
    }, 1500)
})