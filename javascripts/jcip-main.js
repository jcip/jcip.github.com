$(function() {
    $('header.navbar').load('/include/jcip-header.html', function() {
        var path = location.pathname.split('/').slice(-1)[0];
        
        function initLink(page, id) {
            var linkSelector = '#' + id,
                aSelector = linkSelector + ' a'
                ;
            if (path === page) {
                $(linkSelector).addClass('active');
                $(aSelector).addClass('disabled');
            }
        }
        
        initLink("faq.html");
        initLink("authors.html");
    });
    $('.footer').load('/include/jcip-footer.html');
});
