var transitionToNewContent = function(container, new_content)
{
    container.fadeOut(500, function()
    {
        $(this).empty().append(new_content).fadeIn(300);
    });
};

function validationObserver(formSelector, buttonSelector, messagesSelector)
{
    jQuery(formSelector).validate();

    jQuery(buttonSelector).click(function()
    {
        if (jQuery(formSelector).valid())
        {
            validateFormOnServer(formSelector, messagesSelector)
        }
    });
}

function validateFormOnServer(formSelector, messagesSelector)
{
    var href = jQuery(formSelector).attr('action') + '/validate';

    if ($('.summernote').length)
    {
        $('.summernote').val($('.summernote').code());
    }

    success = jQuery.post(href, jQuery(formSelector).serialize())
    .done(function(data)
    {
        jQuery(formSelector).submit();
    })
    .fail(function(data) {
        displayErrorMessages(data, messagesSelector);
    });
}

function displayErrorMessages(data, messagesSelector)
{
    newContent = '';

    jQuery.each(data.responseJSON, function(entry)
    {
        message = data.responseJSON[entry];

        newContent += '<div class="alert alert-danger fade in"><button class="close" data-dismiss="alert">	×</button><i class="fa-fw fa fa-times"></i> '+message+'</div>';
    });

    transitionToNewContent(jQuery(messagesSelector), newContent);

    jQuery('a[dismissable]').unbind('click');

    jQuery('a[dismissable]').click(function(evnt)
    {
        jQuery(this).hide('fast');
    });

    jQuery("html, body").animate({ scrollTop: 0 }, "slow");
}
