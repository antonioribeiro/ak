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
        this.setState({
            value: data.value
        });

        //$.post
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
                    value={this.state.value}>
                </textarea>
        </div>;
    }
});

React.render(<BodyPreview />, document.getElementById('body-preview-react'));
