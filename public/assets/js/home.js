function triggerProcess(controlName, value) {
    console.log(controlName,value);
    $.post('/process', {
        controlName: controlName,
        value: value
    });
}

(function () {

    $('.onoffswitch-label').click(function () {
        var checkbox = $(this).siblings('input');
        checkbox.prop('checked', !checkbox.prop('checked')).change();
    });

    $('.led-box').click(function () {
        var checkbox = $(this).find('input');
        if (checkbox.is(':enabled')) {
            checkbox.prop('checked', !checkbox.prop('checked')).change();
        }
    });

    $('.onoffswitch-checkbox').change(function (e, value) {
        var $checkbox = $(this),
            onProcessName;
        onProcessName = $(this).attr('data-process-on-name');
        if ($checkbox.is(':checked')) {
            $("[data-active-on='" + onProcessName + "']").removeAttr("disabled");
        }
        else {
            $("[data-active-on='" + onProcessName + "']").attr("disabled", true);
        }
    });

    // handle button click
    $('button.btn-shutter').click(function (e) {
        e.preventDefault();

        var controlName = $(this).data('name');
        var action = $(this).data('action');
        triggerProcess(controlName, action);
    });

    // handle checkbox click
    $('input[type="checkbox"][data-process-on-name]').change(function (e) {
        var $checkbox = $(this);
        if ($checkbox.is(':checked')) {
            triggerProcess($checkbox.data('name'), 'On');
        }
        else {
            triggerProcess($checkbox.data('name'), 'Off');
        }
    });

    window.setTimeout(function(){
        location.reload();
    }, 5000);

})();
