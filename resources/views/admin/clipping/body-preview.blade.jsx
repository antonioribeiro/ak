var BodyPreview = React.createClass(
{
    getInitialState: function()
    {
        return {
            value: ''
        };
    },

    _changed: function(data)
    {
        $.ajax(
        {
            type: "POST",

            url: 'http://local.ak.com/api/v1/markdown/tohtml',

            data: { markdown: data.value },

            success: function(response)
            {
                console.log(response);

                this.setState({
                    value: response.html
                });
            }.bind(this)
        });
    },

    componentDidMount: function()
    {
        EventSystem.listen('clipping.body.changed', this._changed);
    },

    render: function() {
        return <div>
                <textarea
                    className="form-control"
                    rows="3"
                    value={this.state.value}
                    disabled="disabled">
                </textarea>
        </div>;
    }
});

React.render(<BodyPreview />, document.getElementById('body-preview-react'));
