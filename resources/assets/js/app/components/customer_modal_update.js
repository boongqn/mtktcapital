var React = require('react');

var customer_modal_update = React.createClass({

	getInitialState(){
		return {
			email : '', phone : '', id : '',
			full_name : '', role_id : '' 
		}
	},

	componentWillReceiveProps(nextProps) {

		const props = nextProps.infoCustomer;

		this.setState({ 
			email: props.email,
			phone: props.phone,
			full_name: props.full_name,
			role_id: props.role_id,
			id: props.id
		});
	},


	updateCustomer(e) {
		e.preventDefault();

		let rows = {
			phone : this.state.phone,
			email : this.state.email,
			first_name: this.state.first_name,
			last_name : this.state.last_name,
			full_name : this.state.full_name
		}

		this.props.updateCustomer(this.state.id, rows);
	},

	render() {
		
		console.log(this.state.role_id);

		if(!this.props.infoCustomer) {
			return null;
		}

		return (
			<div className="modal fade" id="modal-customer-update">
				<div className="modal-dialog">
					<div className="modal-content">
						<div className="modal-header" style={{ border: 'none' }}>
							<button type="button" className="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						{( (this.state.role_id === 'apply') ?
						<form onSubmit={ (e) => this.updateCustomer(e) }>
							<div className="modal-body">
								
								<div className="form-group form-sm">
									<input type="text" className="form-control form-sm" 
										value={this.state.full_name}
										onChange={(e)=>this.setState({ full_name : e.target.value })}
									/>
								</div>

								<div className="form-group form-sm">
									<input type="text" className="form-control form-sm" 
										value={this.state.email}
										onChange={(e)=>this.setState({ email : e.target.value })}
									/>
								</div>

								<div className="form-group form-sm">
									<input type="text" className="form-control form-sm" 
										value={this.state.phone}
										onChange={(e)=>this.setState({ phone : e.target.value })}
									/>
								</div>
								
							</div>
							<div className="modal-footer">
								<h4 style={{ float: 'left' }}>INFO APPLY - NOW</h4>
								<button type="submit" className="btn btn-warning btn-sm icon-check">  update
								</button>
							</div>
						</form>
						:
						<form onSubmit={ (e) => this.updateCustomer(e) }>
							<div className="modal-body">

								<div className="form-group form-sm">
									<input type="text" className="form-control form-sm" 
										value={this.state.full_name}
										onChange={(e)=>this.setState({ full_name : e.target.value })}
									/>
								</div>


								<div className="form-group form-sm">
									<input type="text" className="form-control form-sm" 
										value={this.state.email}
										onChange={(e)=>this.setState({ email : e.target.value })}
									/>
								</div>
								
							</div>

							<div className="modal-footer">
								<h4 style={{ float: 'left' }}>INFO CAREERS </h4>
								<button type="submit" className="btn btn-warning btn-sm icon-check">  update
								</button>
							</div>
						</form>	
							
						)}
					</div>
				</div>
			</div>
		);
	}

});

module.exports = customer_modal_update;