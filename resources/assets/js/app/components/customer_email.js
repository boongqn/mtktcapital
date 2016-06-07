var React = require('react');

var customer_email = React.createClass({

	updateTemplateEmail(e) {
		e.preventDefault();

		let row = { template : this.refs.template.value };

		this.props.updateTemplateEmail(row).then((response)=>{
			this.props.showFlash();
		});

	},

 	render() {

		return (
			<div>
				<div className="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
					<div className="media">
						<form onSubmit={(e)=>this.updateTemplateEmail(e)}>
							<div class="form-group">
								<textarea name="template" ref="template" id="summernote"  class="summernote form-control" 
									rows="3" value={this.props.emailCheck} 
								/>
							</div>
							<button type="submit" class="btn btn-info" style={{ marginBottom : 10 }}>Submit</button>
						</form>
						
					</div>
				</div>
			</div>
		);
	}

});

module.exports = customer_email;