var React     = require('react');
var ReactDOM  = require('react-dom');

var Customers = require('./containers/customer');

var myAdmin     = document.querySelector('.myAdmin');

if(myAdmin) {
	ReactDOM.render( <Customers />,  myAdmin);
}

