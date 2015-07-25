var BodyPreview = React.createClass(
{
    _changed: function(data)
    {
        if ( ! data.value)
        {
            jQuery('.body-preview-summernote').code('    ');

            return;
        }

        jQuery.ajax(
        {
            type: "POST",

            url: 'http://local.ak.com/api/v1/markdown/tohtml',

            data: { markdown: data.value },

            success: function(response)
            {
                console.log(response);

                jQuery('.body-preview-summernote').code(response.html);
            }.bind(this)
        });
    },

    componentDidMount: function()
    {
        jQuery('.body-preview-summernote').summernote({
            airMode: true
        });

        EventSystem.listen('clipping.body.changed', this._changed);
    },

    render: function() {
        return (
            <div>
                <div className="body-preview-summernote"></div>
            </div>
        );
    }
});

React.render(<BodyPreview />, document.getElementById('body-preview-react'));
