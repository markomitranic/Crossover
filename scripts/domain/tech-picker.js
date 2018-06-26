(function() {
    $(document).ready(function() {

        const endpoint = 'https://crossover.rs/api-technology-picker/';
        const $parentSection = $('#technology-picker');
        const $buttons = $parentSection.find('.choices li');
        const $resultList = $parentSection.find('.timetable .table-content');
        const $itemError = $resultList.find('li.error').clone();
        const $itemTemplate = $resultList.find('li.template').clone();

        $resultList.empty();
        $resultList.append($itemTemplate);

        if ($resultList.length) {
            $.post(endpoint, {category: $buttons[0].dataset.category}, replaceList, 'json');
        }

        $buttons.on('click', (e) => {
            const category = e.delegateTarget.dataset.category;
            $.post(endpoint, {category: category}, replaceList, 'json');
        });

        function replaceList(data) {
            $resultList.empty();

            if (data.length <= 0) {
                $resultList.append($itemError);
                return;
            }

            data.forEach((item, key) => {
                const $clone = $itemTemplate.clone();
                $clone.find('.title').text(data[key].name).attr('href', data[key].link);
                $clone.find('.date').text(data[key].date);

                $resultList.append($clone);
            });
        }

    });
})(jQuery);
