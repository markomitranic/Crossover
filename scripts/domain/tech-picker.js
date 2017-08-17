(function() {

    const endpoint = 'http://crossover.rs/new/app/api-technology-picker/';
    const $parentSection = $('#technology-picker');
    const $buttons = $parentSection.find('.choices li');
    const $resultList = $parentSection.find('.timetable .table-content');
    const $itemTemplate = $resultList.find('li').clone();

    $.post(endpoint, {category: $buttons[0].dataset.category}, replaceList, 'json');

    $buttons.on('click', (e) => {
        const category = e.delegateTarget.dataset.category;
        $.post(endpoint, {category: category}, replaceList, 'json');
    });

    function replaceList(data) {
        $resultList.empty();

        data.forEach((item, key) => {
            const $clone = $itemTemplate.clone();
            $clone.find('.title').text(data[key].name).attr('href', data[key].link);
            $clone.find('.date').text(data[key].date);

            $resultList.append($clone);
        });
    }

})(jQuery);
