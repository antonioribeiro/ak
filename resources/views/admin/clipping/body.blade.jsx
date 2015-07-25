var Body = React.createClass(
{
    getInitialState: function()
    {
        return {
            value: 'Hello!'
        };
    },

    componentDidMount: function()
    {
        autosize(document.querySelectorAll('textarea'));
    },

    _handleChange: function(event)
    {
        this.setState({
            value: event.target.value
        });

        EventSystem.fire('clipping.body.changed', { value: event.target.value });
    },

    render: function() {
        return <div>
                <textarea
                    className="form-control"
                    rows="3"
                    onChange={this._handleChange}>
                </textarea>
        </div>;
    }
});

React.render(<Body />, document.getElementById('body-react'));
