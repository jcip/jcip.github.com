/*
 * nav-tab-hash.js - Set up tab navigation handling
 */
$(function() {

    // Handle clicks from *other* buttons that change tab/pill state.
    $(document).on('click.bs.tab.data-api', '.tab-pane a[data-toggle="tab"], .tab-pane a[data-toggle="pill"]', function (e) {
        e.preventDefault();
        var href = $(this).attr('href'),
            deferred = $.Deferred();
        deferred.then(function() {
            $('ul.nav li a[href="' + href + '"]').tab('show');
        }).then(function() {
            $(href + ' .page-header').focus();
        });
        deferred.resolve();
    });

    var prevHash = ''; // holds previous hash in history

    // Remember the hash in the URL without jumping.
    $('.nav-tabs a[data-toggle="tab"], .nav-pills a[data-toggle="pill"]').on('shown.bs.tab', function(e) {
        var hash = '#' + $(e.target).attr('href').substr(1);
        if (prevHash !== hash) {
            prevHash = hash;
            if (history.pushState) {
                history.pushState(null, null, hash);
            } else {
                location.hash = hash;
            }
        }
    });

    function refreshHash() {
        $('ul.nav li a[href="' + location.hash + '"]').tab('show');
    }

    // Might need a polyfill for this event
    $(window).bind('hashchange', refreshHash);

    // On page reload:
    if (location.hash !== ''){
        refreshHash();
    }
});
