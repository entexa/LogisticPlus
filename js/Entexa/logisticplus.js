window.onload = function () {

    $('logisticplus_box_volume').readonly = true;

    Event.observe($('logisticplus_box'), 'input', function (event) {

        var box_length = $('logisticplus_box_length').getValue();
        var box_width = $('logisticplus_box_width').getValue();
        var box_height = $('logisticplus_box_height').getValue();

        Validation.validate($('logisticplus_box_length'));
        Validation.validate($('logisticplus_box_width'));
        Validation.validate($('logisticplus_box_height'));

        var box_volume = box_length * box_width * box_height / 1000000;
        $('logisticplus_box_volume').setValue(box_volume);
    });
};


