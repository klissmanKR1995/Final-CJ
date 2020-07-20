<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Juzgados;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/oficial';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }



    public function index(Request $request)
    {
        
        if($request->ajax()){
            return DB::table('users')->paginate(5);
        }else{
            return view('home', compact('users'));
        }
    }


        public function store(Request $request)
    {
        $users = new users();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->role_id = $request->role_id;
        $users->user_id = auth()->id();
        $users->save();

        return $users;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'id_juzgado' => $data['id_juzgado'],
        ]);

       $user->roles()->attach(Role::where('name', 'admin')->first());

       $user->roles()->attach(Role::where('name', 'oficial')->first());

       $user->roles()->attach(Role::where('name', 'contralor')->first());

       $user->roles()->attach(Role::where('name', 'diligenciario')->first());

       $user->roles()->attach(Role::where('name', 'secretario')->first());

       $user->roles()->attach(Role::where('name', 'ingeniero')->first());
      
       $user->roles()->attach(Role::where('name', 'juez')->first());

       return $user;
    }



        public function update(Request $request, $id)
    {
        $users = users::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->passwords = $request->passwords;
        $users->role_id = $request->role_id;
        $users->id_juzgado = $request->id_juzgado;
        $users->save();
        return $users;
    }


    public function destroy($id)
        {
            $users = users::find($id);
            $users->delete();
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

