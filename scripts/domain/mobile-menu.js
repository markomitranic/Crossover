(function() {
    const $menuButton = $('#mobile-menu-button');
    const $menu = $('#header').find('nav');

    $menuButton.on('click', () => {
        $menu.toggleClass('mobile-show');
        $menuButton.toggleClass('active');
    });

})(jQuery);