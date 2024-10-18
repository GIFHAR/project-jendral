$(function() {
    var form = $('#contact-form');

    $(form).submit(function(e) {
        e.preventDefault();

        var formData = $(form).serialize();

        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
        .done(function(response) {
            // Reload the page to show success message
            window.location.reload();
        })
        .fail(function(data) {
            $('.ajax-response').removeClass('success').addClass('error').text('Oops! An error occurred and your message could not be sent.');
        });
    });
});
