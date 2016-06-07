var React = require('react');

var paginate = React.createClass({

	clickPaginate(e) {
		let props = this.props;
		let id    = e.currentTarget.id;
		let page  = this.props.urlPaginate+'='+id;
		
		props.fetchPaginate(page).then((response)=>{
			props.showPaginate(response.customers);
		});
	},

	numberPaginate() {
		let state    = this.props.customers;
		let per_page = state.per_page; 
		let total    = state.total;
		let numPage  = Math.ceil(total/per_page);
		let html     = [];

		if(state.last_page === 1) {
			html.push(
				<li key="1"><a>1</a></li>
			);
		} else {
			for (var i = 1; i <= numPage; i++) {

				html.push(
					<li key={i} id={i} onClick={ (e)=>this.clickPaginate(e) }><a>{i}</a></li>
				);
			}
		}

		return html;
	},

	render: function() {
		return (
			<ul className="pagination" >
				{ this.numberPaginate() }
			</ul>

		);
	}

});

module.exports = paginate;