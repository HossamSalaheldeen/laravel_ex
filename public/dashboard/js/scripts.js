$(document).ready(function () {
    var _id = 0;
    $(document).on('click', '.delete-ajax', function () {
        console.log($(this).data('ajax'));
        _id = $(this).data('ajax');
    });
    $(document).on('click', '#ajax_delete_content #delete', function () {
        $.ajax({
            url:  '{{url("")}}/locations/' + _id,
            type: 'delete',
            data: {
                _token: $('#ajax_delete_content [name=_token]').val(),
            },
            success: function (data) {
                toastr.success(data.success, 'Success Alert', {timeOut: 10000, closeButton: true, progressBar: true});
                $('#ajax_delete').modal('toggle');

                $('.buttons-reload').trigger("click");
            }
        });
    });
});
