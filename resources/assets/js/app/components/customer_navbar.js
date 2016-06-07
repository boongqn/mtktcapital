var React = require('react');

var customer_navbar = React.createClass({

	render: function() {
		return (
			<ul className="nav nav-tabs" role="tablist">
				<li role="presentation" className="active">
					<a href="#table_customer" aria-controls="table-customer" 
						role="tab" data-toggle="tab">Thông tin khách hàng - tuyển dụng</a>
				</li>
				<li role="presentation">
					<a href="#table_template" aria-controls="tab" role="tab" 
					data-toggle="tab"> Mẫu xác nhận E-mail </a>
				</li>
				<li role="presentation">
					<a href="#account_admin" aria-controls="tab" role="tab" 
					data-toggle="tab"> Tài khoản Admin </a>
				</li>
			</ul>
		);
	}

});

module.exports = customer_navbar;
