/*
 * navbar-search.js - Set up navbar search handling
 */
$(function() {
    var searchSite = "www.seatyourself.biz",
        baseUrl = 'https://www.google.com/#q=site:' + searchSite + '+'
        ;
        
    $('#navbar-search-form').submit(function (event) {
        var searchText = $('#navbar-search-text').val(),
            encodedText = encodeURIComponent(searchText).replace('%20', '+');
            targetUrl = baseUrl + encodedText;
            ;
        event.preventDefault();
        if (searchText !== '') {
            window.location.href = targetUrl;
        }
    });

    function NavbarSearchModel() {
        var self = this;
        self.searchText = ko.observable("");
        self.noSearchText = ko.computed(function () {
            var text = self.searchText();
            //console.log("Search text is '" + text + "'");
            return text === null || text === "";
        });
    }
    ko.applyBindings(new NavbarSearchModel(), document.getElementById('navbar-search-form'));
});
