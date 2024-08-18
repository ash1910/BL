<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Info;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function showUsers()
    {
        //
        
        //return view('dashboard');
        $user_name = Auth::user()->name;

        $data = User::all();
        return view('users', ['datas' => $data], compact('user_name'));
    }
    //
    public function accountInfo()
    {
        //
        return view('account');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addUser(): view
    {
        return view('add-user');
    }
      

    /**public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);  

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);

        return redirect('/registration')->with('status','User Created Successfully!');
    }*/


        /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request): RedirectResponse
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'status' => 'required',
        ]);
           
        $udata = $request->all();
        $user = $this->create($udata);
            
        Auth::login($user); 

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

        /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $udata)
    {
      return User::create([
        'name' => $udata['name'],
        'email' => $udata['email'],
        'password' => Hash::make($udata['password']),
        'status' => $udata['status'],
      ]);
      
    }

     /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(): View
    {
        return view('login');
    }  
      

      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request): RedirectResponse
    {   
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
   
        /*$credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }*/
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
  
        //return redirect("login")->withError('Oppes! You have entered invalid credentials');
        return redirect()->route('login')->withErrors(['email' => 'Oops! You have entered invalid credentials.',]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $user_name = Auth::user()->name;

            // Get the total number of rows
            $totalBL = Info::count();
            $totalUser = User::count();
        

            return view('dashboard', compact('user_id', 'user_name', 'totalBL', 'totalUser'));
        }
  
        return redirect("login")->withStatus('Oops! You do not have the Access. Please Login.');
    }

    /*public function list()
    {
        if(Auth::check()){
            $data = Info::all(); // Fetch the data you want to pass to the view
            return view('list', ['datas' => $data]);
        }

        return redirect("login")->withStatus('Oops! You do not have the Access. Please Login.');
    }*/

    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect('/dashboard'); // Adjust the route as needed
        }

        return view('login');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    /**public function postRegistration(Request $request): RedirectResponse
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $user = $this->create($data);
            
        Auth::login($user); 

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }**/

    //
    public function profileInfo()
    {
        //
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;
        return view('profile', compact('user_name', 'user_email'));
     }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('login')->withSuccess('You have Successfully Logged Out!');
    }
    
}
