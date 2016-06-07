import React from 'react';
import axios from 'axios';

import {showFlash, elementFlash} from '../components/flash';

// Components
import Paginate from '../components/paginate';
import CustomerTable from '../components/customer_table';
import CustomerNavbar from '../components/customer_navbar';
import CustomerModalInfo from '../components/customer_modal_info';
import CustomerModalUpdate from '../components/customer_modal_update';
import CustomerEmail from '../components/customer_email';
import AdminAccount from '../components/account_admin';



// Fetch data
import { fetchDataCustomer, destroyCustomer,
	updateCustomer , fetchPaginate , updateEmail
} from '../actions/index';


var customer = React.createClass({

	getInitialState() {
		return {
			customers : [], users : [], infoCustomer : '', urlPaginate : '',
			template:  { emailCheck : '' },
			loading : ''
		}
	},

	componentDidMount() {
		this.fetchCustomer();

		this.interVal = setTimeout(()=>{
			this.fetchCustomer();
		}, 2000);

		elementFlash();
	},

	fetchCustomer() {
		fetchDataCustomer().then((response)=>{

			let next_page_url = response.customers.next_page_url;

			this.setState({ 
				customers : response.customers,
				users : response.users,
				urlPaginate : (next_page_url) ? next_page_url.split('=')[0].trim() : next_page_url,
				template : {
					emailCheck : response.emailCheck
				}
			});

		});
	},

	infoCustomer(infoCustomer) { this.setState({ infoCustomer: infoCustomer }); },

	updateCustomer($id, $rows) {
		updateCustomer($id, $rows).then((response)=>{
			this.infoCustomer(response.update);
			setTimeout(()=>{
				this.fetchCustomer();
			}, 600);

			showFlash();
		});
	},

	delete(id) {
		destroyCustomer(parseInt(id)).then(()=>{

			this.fetchCustomer();

			showFlash();
		});
	},

	showPaginate(data) {
		this.setState({ customers : data });
	},


	render() {
		

		return (
			<div >

				<div className="loading"></div>
				
				<CustomerModalInfo infoCustomer={this.state.infoCustomer}/> 

				<CustomerModalUpdate 
					infoCustomer={this.state.infoCustomer} 
					updateCustomer ={this.updateCustomer}
				/>

				<a href="/auth/logout" className="btn btn-info pull-right"> Log out </a>

				<div role="tabpanel">
					
					<CustomerNavbar />
				
					<div className="tab-content">
						<div role="tabpanel" className="tab-pane active" id="table_customer">
							<br />

							<CustomerTable 
								delete       ={this.delete}
								customers    ={this.state.customers}
								infoCustomer ={this.infoCustomer}
								loading      = {this.state.loading}
							/>

							<Paginate 
								urlPaginate   ={this.state.urlPaginate}
								customers     ={this.state.customers}
								fetchPaginate ={fetchPaginate}
								showPaginate  ={this.showPaginate}
							/>

						</div>
						
						<div role="tabpanel" className="tab-pane" id="table_template">
							<br /> <br /> <br />
							<CustomerEmail 
								emailCheck          ={this.state.template.emailCheck}
								updateTemplateEmail ={updateEmail}
								showFlash           ={showFlash}
							/>
						</div>

						<div role="tabpanel" className="tab-pane" id="account_admin">
							<AdminAccount users = {this.state.users} />
						</div>
					</div>

					
				</div>

			</div>
		);
	}

});

module.exports = customer;