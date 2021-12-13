$(function(){
    $('#short_generator_form').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            beforeSend: function() {
                $('#error_block').html('');
            },
            success: function(shortUrl) {
                let $shortedUrlBlock = $('#shorted_url_block')

                if ($shortedUrlBlock.hasClass('d-none')) {
                    $shortedUrlBlock.removeClass('d-none').addClass('d-block')
                }

                $('#shorted_url').html(shortUrl)
            },
            error: function(response) {
                let errors = response.responseJSON.errors
                let $errorBlock = $('#error_block')
                for (const error_index in errors) {
                    $errorBlock.append(errors[error_index] + '<br>')
                }
            }
        })
    })
})