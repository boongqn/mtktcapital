<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    //protected $redirectTo = '/';

    protected $redirectTo          = '/admin/mtkt';
    protected $redirectAfterLogout = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth')
        //$this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }


    public function getIndex() {
        return view('pages.admin');
    }

    // Code news
    public function getLogins() {
        return $this->showLoginForm();
    }


    public function postLogins(Request $request) {
       return $this->postLogin($request);
    }

    public function updateUserAdmin(Request $request) {
        
        $this->validate($request, ['name' => 'required', 'password' => 'required']);

        Auth::user()->update([
            'name'     => $request->name,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->back()->with([ 'alert' => 'success', 'msg' => 'UPDATE ACCOUNT SUCCESS !' ]);
        
    }


    public function getLogouts() {
        Auth::logout();
        return redirect()->route('/');
    }
 

}
