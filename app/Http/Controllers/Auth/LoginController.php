<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo(){
            
        // User role
        $role = Auth::user()->role_id;
        
        // Check user role
        switch ($role) {
            case 1:
                    return '/home';
                break;
            case 2:
                    return '/oficial';
                break; 
            case 3:
                    return '/contralor';
                break; 
            case 4:
                    return '/diligenciario';
                break; 
            case 5:
                    return '/secretario';
                break; 
            case 6:
                    return '/ingeniero';
                break;   
            case 7:
                    return '/juez';
                break;         
            default:
                    return '/login'; 
                break;
        }
    }
}
