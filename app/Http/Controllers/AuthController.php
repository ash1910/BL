<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
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
    public function registration(): view
    {
        return view('registration');
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
        'password' => Hash::make($udata['password'])
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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        //return redirect("login")->withError('Oppes! You have entered invalid credentials');
        return redirect()->route('login')->withErrors(['email' => 'Oops! You have entered invalid credentials.',]);
    }

    /*public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email', // Added email validation rule
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                             ->with('success', 'You have successfully logged in.');
        }
  
        return redirect()->route('login')->withErrors([
            'email' => 'Oops! You have entered invalid credentials.',
        ]);
    }*/

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withStatus('Oops! You do not have the Access!');
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
