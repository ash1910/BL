<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bl;
use App\Models\AirBL;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Redirect;

class AuthController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    // public function showUsers()
    // {
    //     //
        
    //     //return view('dashboard');
    //     $user_name = Auth::user()->name;

    //     $data = User::all();
    //     return view('users', ['datas' => $data], compact('user_name'));
    // }
    public function showUsers()
    {
        if (Auth::check() && Auth::user()->role == "SuperAdmin") {
            $user = Auth::user();
            $data = User::all();
            // Return the view with the user's data
            return view('users', ['datas' => $data, 'user' => $user]);
        }
        
    return Redirect::route("dashboard")->withStatus('Oops! You do not have the Access.');
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration(): RedirectResponse|view
    {
        //if(Auth::check()){
            if (Auth::check() && Auth::user()->role == "SuperAdmin") {
                return view('add-user');
            }
        
        //}
  
    return Redirect::route("dashboard")->withStatus('Oops! You do not have the Access.');
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
            'password' => 'required|min:6|confirmed',
            'role' => 'required',
            'status' => 'required',
        ]);
           
        $udata = $request->all();
        $user = $this->create($udata);
            
        //Auth::login($user); 

        return redirect("add-user")->withSuccess('Great! You have Successfully Added an User.');
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
        'role' => $udata['role'],
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
    /*public function postLogin(Request $request): RedirectResponse
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
        /*if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
  
        //return redirect("login")->withError('Oppes! You have entered invalid credentials');
        return redirect()->route('login')->withErrors(['email' => 'Oops! You have entered invalid credentials.',]);
    }*/
      

      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request): RedirectResponse
    {
        // Validate the incoming request data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Retrieve the authenticated user
            $user = Auth::user();
    
            // Check the user's account status
            if ($user->status == 1) {
                // Regenerate the session to prevent session fixation attacks
                $request->session()->regenerate();
    
                // Redirect to the intended page
                return redirect()->intended('dashboard');
            } else {
                // Log out the user if their account is disabled
                Auth::logout();
    
                // Redirect to the login page with an error message
                return redirect()->route('login')->withErrors([
                    'email' => 'Your account is disabled. Please contact Administrator.',
                ]);
            }
        }
    
        // Redirect to the login page with an error message if authentication fails
        return redirect()->route('login')->withErrors([
            'email' => 'Oops! You have entered invalid credentials.',
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            $user = Auth::user();

            // Get the total number of rows
            $totalBL = Bl::count();
            $totalAirBL = AirBL::count();
            $totalUser = User::count();
        

            return view('dashboard', compact('user', 'totalBL', 'totalAirBL', 'totalUser'));
        }
  
        return Redirect::route("login");
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
    public function profileEdit()
    {
        //
    // Retrieve the authenticated user's information
    $user = Auth::user();
    
    // Return the view with the user's data
    return view('profile', ['user' => $user]);
     }

     public function userEdit(User $id)
     {
         //
         return view('user-profile', ['user' => $id]); 
      }


      public function userUpdate(Request $request, $id)
      {
        // Find the user or fail if not found
        $user = User::findOrFail($id);

        // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required',
            'status' => 'required',
        ]);

        // Update user details
        $user->update($request->only(['name', 'email', 'role', 'status']));

        // Redirect with success message
        return Redirect::route('user-profile.edit', $id)->with('success', 'User Updated Successfully.');

      }

      public function userpassUpdate(Request $request, $id)
      {
          // Find the user or fail if not found
          $user = User::findOrFail($id);
      
          // Validate the request
          $request->validate([
              'password' => 'required|string|min:6|confirmed',
          ]);
      
          if ($request->filled('password')) {
              // Hash and update the user's password
              $user->password = Hash::make($request->input('password'));
              $user->save();
          }
      
          // Redirect with success message
          return Redirect::route('user-profile.edit', $id)->with('success', 'Password Updated Successfully.');
      }

      public function profilepassUpdate(Request $request, $id)
      {
          // Find the user or fail if not found
          $user = User::findOrFail($id);
      
          // Validate the request
          $request->validate([
              'current_password' => 'required|current_password',
              'password' => 'required|string|min:6|confirmed',
          ]);
      
          if ($request->filled('password')) {
              // Hash and update the user's password
              $user->password = Hash::make($request->input('password'));
              $user->save();
          }
      
          // Redirect with success message
          return Redirect::route('profile.edit')->with('success', 'Password Updated Successfully.');
      }

      public function profileUpdate(Request $request, $id)
      {

       
        // Find the user or fail if not found
        $user = Auth::user();

        // Validate the request
        $request->validate([
            'name' => 'required',
        ]);

        // Update user details
        $user->update($request->only(['name', 'email']));

        // Redirect with success message
        return Redirect::route('profile.edit')->with('success', 'Profile Updated Successfully.');
    

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
  
        return Redirect::route('login')->withSuccess('You have Successfully Logged Out!');
    }
    
}
