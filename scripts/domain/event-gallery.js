(function() {
    const $gallery = $('main section#gallery ul');

    $gallery.slick({
        dots: true,
        infinite: true,
        centerMode: true,
        variableWidth: true,
        adaptiveHeight: true
    });

    $(window).resize(() => {
        $gallery.slick('resize');
    });

    $(window).on('orientationchange', () => {
        $gallery.slick('resize');
    });
})(jQuery);
