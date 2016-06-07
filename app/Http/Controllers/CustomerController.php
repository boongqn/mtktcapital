<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests;
use App\Events\SendMailEvent, Event;



class CustomerController extends Controller
{
    protected $customer;

    public function __construct(Customer $customer) {
        $this->customer = $customer;
    }

    public function applyNow() {
    	return view('pages.apply');
    }

    public function careers() {
        return view('pages.career');
    }

    /**
     * [storeApplyNow description]
     * @param  Request $request [description]
     * handle form submit Page Apply-Now from customers
     * Event::fire : 
     *     [ confirm email customers ] 
     *     [ callback notify email customer registration ]
     */
    public function storeApplyNow(Request $request) {
        
    	$validator = $this->validate($request, [
            'first_name' => 'required', 'last_name' => 'required',
            'email'      => 'required|email', 'phone' => 'required|numeric',
            'business'   => 'required', 'industry' => 'required',
            'q_money'    => 'required', 'q_fund'   => 'required',
            'q_credit'   => 'required', 'state' => 'required'
    	]);
        
    	if($validator) {

    		return redirect()->back();

    	} else {

            $create   = $this->customer->create($request->all());
            $fullname = $create->fixFullName($request);
           
    		if($create) {
                // listen event send mail 
	    		Event::fire(new SendMailEvent($create));
	        }

    		return redirect()->back()->with([ 'msg' => 'success']);
    	}
    }
    
    
    /**
     * [storeCareers description]
     * @param  Request $request [description]
     * Handle form Page Careers
     */
    public function storeCareers(Request $request) {

        $validate =  $this->validate($request, [
            'full_name' => 'required', 'email' => 'required|email'
        ]);

        if($validate) {
            return redirect()->back();
        }

        $create = $this->customer->create($request->all());

        if($request->hasFile('file')) {
            $create->setUploadFile($request->file('file'));   
        }

        return redirect()->back()->with([ 'msg' => 'success' ]);
    }
/*

    public function createCareer($request, $customer) {
        if($request->get('full_name')) {
            $customer->fixFullName($request);
        }
    }
*/
}
