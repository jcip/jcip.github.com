$(function() {
    $('header.navbar').load('/include/jcip-header.html', function() {
        var path = location.pathname.split('/').slice(-1)[0];
        if (path === "faq.html") {
            $('#faq-link').addClass('active');
            $('#faq-link a').addClass('disabled');
        } else {
            $('#faq-link a').removeClass('disabled');
        }
    });
    $('.footer').load('/include/jcip-footer.html');
});
