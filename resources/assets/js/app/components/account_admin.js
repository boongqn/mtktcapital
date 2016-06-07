var React = require('react');
import AdminAccountModal from '../components/account_modal';

var account_admin = React.createClass({

	render() {

		const user = this.props.users[0];

		if(!user) {
			return (
				<h1>Loading .... </h1>
			);
		}

		return (

			<div> <br/> <br/>
				<AdminAccountModal />

				<a data-toggle="modal" href='#modal-account-admin'className="btn btn-default"
					style={{ background:'white' }}
				>Change Account Admin</a>
				
			</div>	
		);
	}

});

module.exports = account_admin;