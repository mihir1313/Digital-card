<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


// use App\Http\Controllers\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
  
  
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        // if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        // {
        //         redirect()->route('admin.home');
          
        // }
        
if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
    return redirect()->route('admin.home'); // Use 'return' to redirect
}else{
        
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }

    public function signin(Request $request)
    {
        if (!$request->isMethod('post')) {
            return view('auth.login');

        }
        if ($request->isMethod('post')) {
            echo '<pre>';
            print_r('heyyyy');
            die;
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
