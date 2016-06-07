import React from 'react';
import ReactCSSTransitionGroup from 'react/lib/ReactCSSTransitionGroup';


var customer_table = React.createClass({
	getInitialState() {
		return {
			fillter : { all : true, career : false, apply : false},
			loading : ''
		}
	},


	show(nextProps) {
		let state = this.state.fillter;
		let props = nextProps.customers.data;

		if(state.all) {
			return Object.keys(props).map((i)=>{
				return (
					tagTrTd(props, nextProps, i)
				);
			});
		}
		
		if(state.apply) {
			return Object.keys(props).map((i)=>{
				if(props[i].role_id === 'apply') {
					return (
						tagTrTd(props, nextProps, i)
					);
				}
			});
		}

		if(state.career) {
			return Object.keys(props).map((i)=>{
				if(props[i].role_id === 'career') {
					return (
						tagTrTd(props, nextProps, i)
					);
				}
			});
		}

	},
	
	render() {


		const props = this.props;

		if(!props.customers.data) {
			return (
				<h1>Loading .... </h1>
			);
		}

		return (
			<div>
				
				<div>
					<ul className="fillter">
						<li>
							<a className="btn btn-info btn-sm"
								onClick={ ()=>this.setState({ fillter : { all : true, career : false, apply : false } }) }
							>Tất cả</a>
						</li>
						<li>
							<a className="btn btn-info btn-sm"
								onClick={ ()=>this.setState({ fillter : { all : false, career : true, apply : false } }) }
							>Lọc thông tin tuyển dụng</a>
						</li>
						<li>
							<a className="btn btn-info btn-sm"
								onClick={ ()=>this.setState({ fillter : { all : false, career : false, apply : true } }) }
							>Lọc thông tin khách hàng</a>
						</li>
					</ul>
				</div>
				
				<br />

				<table className="table table-hover table_customer" style={{ width: '100%' }}>
					<thead>
						<tr>
							<th>STT</th>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>PAGE</th>
							<th>DATE</th>
							<th>INFO</th>
							<th>UPDATE</th>
							<th>DELETE</th>
						</tr>
					</thead>
					<tbody>
						{this.show(props)}
					</tbody>
				</table>

			</div>
		);
	}

});

function tagTrTd(props, nextProps, i) {
	return <tr key={props[i].id}>
		<td>{ props[i].id }</td>
		<td>{ props[i].full_name}</td>
		<td>{ props[i].email }</td>
		<td style={{ color: 'brown' }}>{ (props[i].role_id === 'apply') ? 'APPLY-NOW' : 'CAREERS' }</td>
		<td>{ props[i].created_at }</td>
		<td >
			<a type="button" className="btn btn-success btn-sm icon-info"
				data={props[i]} data-toggle="modal" href='#modal-customer-info'
				onClick={()=>nextProps.infoCustomer(props[i])}
			/>
		</td>
		<td>
			<a type="button" className="btn btn-warning btn-sm icon-check"
				data-toggle="modal" href='#modal-customer-update'
				onClick={()=>nextProps.infoCustomer(props[i])}
			/>
		</td>
		<td>
			<button type="button" className="btn btn-danger btn-sm icon-close btn_flash"
				onClick={()=>nextProps.delete(props[i].id)}
			/>
		</td>
	</tr>
}

module.exports = customer_table;