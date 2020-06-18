<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class UserloginController extends Controller
{

    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $redirectTo = '';

    public function __construct()
    {
        $this->middleware('guest:userlogin');
    }
//    public function testLogin()
//    {
//        $userlogins = new userlogins;
//        $userlogins->name = 'joe';
//       // $user->lname = 'joe';
//        $userlogins->email = 'joe@gmail.com';
//        $userlogins->password = Hash::make('123456');
//
//        if ( ! ($userlogins->save()))
//        {
//            dd('user is not being saved to database properly - this is the problem');
//        }
//
//        if ( ! (Hash::check('123456', Hash::make('123456'))))
//        {
//            dd('hashing of password is not working correctly - this is the problem');
//        }
//
//        if ( ! (Auth::attempt(array('email' => 'joe@gmail.com', 'password' => '123456'))))
//        {
//            dd('storage of user password is not working correctly - this is the problem');
//        }
//
//        else
//        {
//            dd('everything is working when the correct data is supplied - so the problem is related to your forms and the data being passed to the function');
//        }
//    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if(Auth::guard('userlogin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
          dd(session());
return redirect()->intended(route('user.home'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }




    public function showLoginForm()
    {
        return view('front/login');
    }
}
