var axios           = require('axios');
const routeCustomer = '/admin/token';
const token         = 'dcc14441052fab9aa84ce78d7fd657d6'; // md5('token_ajax') validate connect with controller
export const host          = document.location.host;

export function fetchDataCustomer() {
	return axios.get(routeCustomer, {params : { token : token} }).then((response) => {
	    return response.data;
	});
}

export function destroyCustomer($id) {
	return axios.delete(routeCustomer+'/'+`${$id}`+'/delete').then((response) => {
 		return response.data;
	});
}


export function updateCustomer($id, $rows) {
	return axios.put(routeCustomer+'/'+`${$id}`+'/update', $rows).then((response) => {
 		return response.data;
	});
}


export function fetchPaginate(path) {
	return axios.get(`${path}`, {params : { token : token} }).then((response) => {
 		return response.data;
	});
}

export function updateEmail($rows) {
	return axios.put(routeCustomer+'/template/email', $rows).then((response) => {
 		return response.data;
	});
}

export function updateAccount($rows) {
	return axios.put(routeCustomer+'/account', $rows).then((response) => {
 		return response.data;
	});
}