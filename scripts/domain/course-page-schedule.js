(function() {
    const $timetable = $('#class-schedule');
    const $scheduleButton = $timetable.find('.heading');
    const $scheduleBody = $timetable.find('.timetable');

    $scheduleButton.on('click', () => {
        $timetable.toggleClass('active');
        $scheduleBody.slideToggle();
    });

})(jQuery);