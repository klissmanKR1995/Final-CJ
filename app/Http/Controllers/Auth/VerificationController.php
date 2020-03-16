<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
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
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
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
