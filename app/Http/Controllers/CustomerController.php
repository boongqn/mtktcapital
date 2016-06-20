<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests;
use App\Events\SendMailEvent, Event;
use App\Http\Controllers\FileEmailHelper as Template;


class CustomerController extends Controller
{
    protected $customer;


    public function __construct(Customer $customer) {
        $this->customer = $customer;
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
            'full_name' => 'required', 'email' => 'required|email', 'file' => 'required'
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



    // Info Customer
    public function showInfoCustomer() {
        $customers =  $this->customer->whereRoleId('apply')
                           ->orderBy('created_at', 'desc')
                           ->paginate(30);

        return view('layouts.table_customer', ['customers' => $customers ]);
    }




    public function storeInfoCustomer($id) {
        $customer = $this->customer->find($id);
        $customer->setActive();
        return view('layouts.edit_customer', ['customer' => $customer]);
    }




    public function editInfoCustomer(Request $request, $id) {
        
        $customer = $this->customer->findOrFail($id);

        if($request->hasFile('file')) {  Template::delete($customer->file);  }

        $customer->update($request->all());

        if($request->hasFile('file')) {  $customer->setUploadFile($request->file('file'));  }

        return redirect()->back()->with([ 'alert' => 'success', 'msg' => 'UPDATE SUCCESS !' ]);
    }





    public function deleteCustomer($id) {
        $customer = $this->customer->findOrFail($id);

        if(strlen($customer->file) > 0 && $customer->file != '') {  Template::delete($customer->file);  }

        $customer->delete();

        return redirect()->back()->with([ 'alert' => 'success', 'msg' => 'DELETE SUCCESS !' ]);
    }
    // End Info Customer
    




    public function showInfoCareer() {
        $customers =  $this->customer->whereRoleId('career')
                           ->orderBy('created_at', 'desc')
                           ->paginate(30);
        return view('layouts.table_career', ['customers' => $customers ]);
    }

    public function storeCareer($id) {
        $customer = $this->customer->find($id);
        $customer->setActive();
        return view('layouts.edit_career', ['customer' => $customer]);
    }

    public function showContentEmail() {

         return view('layouts.table_email', [
            'email_confirm' => Template::showMailConfirm()
         ]);
    }

    
    public function updateTemplateEmail(Request $request) {

        if(Template::check(base_path(Template::EMAIL_CONFIRM))) {
            Template::put($request->template);
        }

        return redirect()->back()->with([ 'alert' => 'success', 'msg' => 'UPDATE EMAIL TEMPLATE SUCCESS !' ]);
    }


    public function export(Request $request) {

        if(Template::check(public_path($request))) {
            return response()->download(public_path($request->template));
        }

        return redirect()->back();
    }


    public function showAccountAdmin() {
        return view('layouts.table_account');
    }
}
