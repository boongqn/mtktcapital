var React = require('react');

import { exportFile, host } from '../actions/index';


var customer_modal_info = React.createClass({

	files(props) {

		let str = props.file || ' ';

		if(props.file.indexOf('stuff/file/') === 0) {
			str = props.file.replace( 'stuff/file/', '');
		}

		if(props.file) {
			return (
				<span> {str} <a href={`http://${host}/export/${str}`} className="btn btn-default btn-sm" 
					style={{ background : 'white' }} 
				>  Export</a> </span>
			)
		}
	},

	info(props) {
		if(props.role_id === 'career') {
			return (
				<div>
					<p><strong>Name :  </strong> {props.full_name} </p>
					<p><strong>Email : </strong> {props.email } </p>
					<p><strong>File : </strong> 
						{this.files(props)}
					</p>
				</div>
			);
		} else {
			return (
				<div>
					<p><strong>Name :  </strong> {props.full_name} </p>
					<p><strong>Business : </strong> {props.business } </p>
					<p><strong>Industry : </strong> {props.industry } </p>
					<p><strong>Phone : </strong> {props.phone } </p>
					<p><strong>Email : </strong> {props.email } </p>
					<p><strong>State : </strong> {props.state } </p>
					<p><strong>How much monney do you need : </strong> {props.q_money } </p>
					<p><strong>What is the main purpose for the funds : </strong> {props.q_fund } </p>
					<p><strong>Personal credit score range : </strong> {props.q_credit } </p>
					<p><strong>Note : </strong></p>
					<p>
						{props.note }
					</p>
				</div>
			);
		}
	},

	render() {
		
		


		const props = this.props.infoCustomer;

		return (
			<div className="modal fade" id="modal-customer-info">
				<div className="modal-dialog" >
					<div className="modal-content">
						<div className="modal-header" style={{ border: 'none' }}>
							<button type="button" className="close" data-dismiss="modal" 
							aria-hidden="true">&times;</button>
						</div>
						<div className="modal-body">
							{this.info(props)}
						</div>
						<div className="modal-footer">
							<h4 style={{ float: 'left', textTransform : 'uppercase' }}>INFO {
								(props.role_id === 'career') ? 'CAREERS' : 'APPLY - NOW'
							}</h4>
							<button type="button" className="btn btn-info btn-sm icon-info"
								data-dismiss="modal"
							>  close
							</button>
						</div>
					</div>
				</div>
			</div>
		);
	}

});

module.exports = customer_modal_info;