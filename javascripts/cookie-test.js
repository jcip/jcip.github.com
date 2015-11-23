/*
 * cookie-test.js - Test whether cookies are enabled
 */
$(function() {

    /*
     * Show alert if cookies are not enabled.
     * Depends on existence of alert div with id 'cookie-alert' on
     * the page.
     */

    var test_cookie = 'test_cookie',
        cookieAlert = $('#cookie-alert');

    if (cookieAlert.length > 0) {
        $.cookie(test_cookie, true);
        if ($.cookie(test_cookie)) {
            $.removeCookie(test_cookie);  // delete the test cookie
        } else {
            cookieAlert.hide().removeClass('hidden').show();
        }
    }
});
