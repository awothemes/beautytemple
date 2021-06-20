// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

jQuery(document).ready(function($){

    $('.main-nav__toogle').click(function(){
        $('.main-nav__toogle').toggleClass('active');
        $('.side-nav').toggleClass('active');
        $('.content-overlay').toggleClass('active');
        $('.menu-item-has-children.active').toggleClass('active');

    });

    $('.menu-item-has-children a').click(function(event){
        event.preventDefault();
        var activeChild = $(this).parent('.menu-item-has-children').find('.active');
        $(activeChild).toggleClass('active');
        $(this).parent().toggleClass('active');
    });
});