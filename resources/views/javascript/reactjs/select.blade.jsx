var Select = React.createClass(
{
    getInitialState: function()
    {
        return {
            items: []
        };
    },

    componentDidMount: function()
    {
        this._loadSelect();
    },

    _loadSelect: function ()
    {
        var first = this.props.first != undefined ? this.props.first : '';
        var last = this.props.last != undefined ? this.props.last : '';

        jQuery.ajax(
        {
            type: "GET",

            url: '{{ route("api.select.allFrom") }}/' + this.props.model + '/' + first + '/' + last,

            success: function(response)
            {
                //console.log(response);
                this.setState({
                    items: response.items
                });
            }.bind(this)
        });
    },

    render: function()
    {
        var items = this.state.items;

        var optionNodes = Object.keys(items).map(function(value, index)
        {
            return <option value={value}>{items[value]}</option>;
        });

        return (
            <div>
                <select value={this.state.items} className="form-control">
                    { optionNodes }
                </select>
            </div>
        );
    }
});
