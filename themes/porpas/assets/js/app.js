(function ($) {
    $(document).ready(function () {
        $('#MoviesFilter').on('change', 'input, select', function () {
            var $form = $(this).closest('form');
            $form.request();
        });

        $('.contact-form').on('ajaxError', function (event, message) {
            $('.flash').removeClass('active');
            $('.flash.error').addClass('active');
        });

        $('.contact-form').on('ajaxSuccess', function (event, message) {
            $('.flash').removeClass('active');
            $('.flash.success').addClass('active');
        });
    })
})(jQuery);