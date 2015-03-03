// main.js

(function($) {
    var hoverTimeout;
    $('#menu-primary-menu li').hover(function() {
        clearTimeout(hoverTimeout);
        $(this).addClass('hover');
    }, function() {
        var $self = $(this);
        hoverTimeout = setTimeout(function() {
            $self.removeClass('hover');
        }, 1000);
    });
})( jQuery );