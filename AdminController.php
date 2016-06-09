<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer, App\User;
use App\Http\Requests;
use App\Http\Controllers\FileEmailHelper as Template;



class AdminController extends Controller
{   
   
    public function index() {
    	return view('pages.admin');
    }



    /**
     * @param  Request $request [description]
     * get all data convert resonse json => render ajax request
     */
    public function infoCustomer(Request $request) {

        //  => Helpers/helper.php
        validateReactToken($request); 

        $customers = Customer::orderBy('created_at', 'DESC')->paginate(20);
        $users     = user::all();

    	return response()->json([
            'customers'  => $customers,
            'users'      => $users,
            'emailCheck' => Template::show()
    	]);
    }




    /**
     * @param  [type] $id 
     * get request ajax [delete customers]
     */
    public function deleteCustomer($id) {

    	Customer::find($id)->delete();

    	return response()->json([
    		'delete' => 'success'
    	]);
    }




    /**
     * @param  [type]  $id     
     * @param  Request $request 
     * get request ajax [ update info customers ]
     */
    public function updateCustomer($id, Request $request) {
        
        $customer = Customer::find($id);
        $update   = $customer->update($request->all());

        return response()->json([
            'update' => $customer
        ]);
    }



    /**
     * @param  Request $request 
     * get request ajax [ update email template ]
     */
    public function updateTemplateEmail(Request $request) {

        if(Template::check(base_path(Template::CHECK))) {
            Template::put($request->template);
        }

        return response()->json([
            'template' => $request->template
        ]);
    }


    public function export($str) {

        if(Template::check(base_path('stuff/file/'.$str))) {
            return \Response::download('stuff/file/'.$str);
        }

    }


    function updateAccount(Request $request) {

        if(\Auth::check()) {
        
            $validate =  $this->validate($request, [
                'name' => 'required', 'password' => 'required'
            ]);

            if($validate) {

                return response()->json([
                    'validate' => $validate
                ], 422);

            } else {

                \Auth::user()->update($request->all());

                return response()->json([
                    'update' => true
                ]);
            }
        } 
    }



}
