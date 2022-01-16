$(document).ready(function () {
    $(window).on('resize', function(){
        if ($('table tbody td:last-child').width() < 169) {
            $('.dropdown').removeClass('d-none');
            $('.icons').addClass('d-none');
        }else {
            $('.dropdown').addClass('d-none');
            $('.icons').removeClass('d-none');
        }
    });
});
