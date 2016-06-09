import React from 'react';

import { updateAccount } from '../actions/index';

var account_modal = React.createClass({
	getInitialState(){
		return {
			success : 'form-group', errors : { name : '', password : '' }
		}
	},

	updateAdmin(e) {
		e.preventDefault();

		let name     = this.refs.name.value;
		let password = this.refs.password.value;
		let rows = {name : name, password : password};

		updateAccount(rows).then((response)=>{

			this.setState({ success : 'form-group has-success', errors : { name : '', password : '' } });

			setTimeout(()=>{
				window.location.reload(true);
			}, 600);

		}).catch((response)=>{
			
			this.setState({ errors : { name : response.data.name, password : response.data.password } });
		
		});

	},
	render() {
		return (
			<div className="modal fade" id="modal-account-admin">
				<div className="modal-dialog">
					<div className="modal-content">
						<div className="modal-header" style={{ border: 'none' }}>
							<button type="button" className="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<br/>
						</div>
						
						<div className="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<form onSubmit={ (e) => this.updateAdmin(e) }>

								<div className={(this.state.errors.name ) ? 'form-group has-error' : this.state.success }>
									<input type="text" className="form-control" 
										ref="name" placeholder="username"
									/>
									{this.state.errors.name}
								</div>


								<div className={(this.state.errors.password) ? 'form-group has-error' : this.state.success }>
									<input type="password" className="form-control" 
										ref="password" placeholder="password"
									/>
									{this.state.errors.password}
								</div>

								<div className="form-group">
									<button type="submit" className="btn btn-warning">Update</button>
								</div>
							</form>	
							
						</div>
					
					</div>
				</div>
			</div>
		);
	}

});

module.exports = account_modal;
