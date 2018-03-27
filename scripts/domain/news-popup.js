(function($) {
    $(document).ready(function() {

        const $popupWrapper = $('#news-popup'),
            $curtain = $popupWrapper.find('#curtain'),
            $exit = $popupWrapper.find('#exit-button'),
            cookieName = 'news-popup-closed_' + $popupWrapper.data('cookie-version');

        $exit.on('click', closePopup);
        $curtain.on('click', closePopup);

        if (!isClosedInCookie()) {
            setTimeout(function () {
                $popupWrapper.fadeIn('slow');
            }, 2000);
        }

        function closePopup() {
            $popupWrapper.fadeOut('slow', function() {
                $popupWrapper.remove();
            });
            agCookie.create(cookieName, true, 2);
        }

        function isClosedInCookie() {
            return ('true' === agCookie.read(cookieName));
        }


    });
})(jQuery);