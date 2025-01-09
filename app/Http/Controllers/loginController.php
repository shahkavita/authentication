<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class loginController extends Controller
{
    //
    public function login()
    {
        return view('admin.auth.login');
    }
    public function logout()
    {
        Auth::logout(); // Logs out the user
        return redirect('/login'); // Redirects to the homepage or another route
    }
    public function register(Request $request)
    {
    // Validate the input
                $validated = $request->validate([
                    'name' => 'required',
                    'email' => 'required|email',
                    'password' => 'required|string|min:6|confirmed'
                ]);

                // Store user with hashed password
                $user =user::create([
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'password' => Hash::make($validated['password']), // Hash the password
                ]);
                return response()->json(
                    [
                'success' => true, 
                'message' => 'User created successfully',
                'redirect' => route('login'),
            ]);
            }
    public function user_login(Request $request)
    {
       $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)) {
            // Authentication passed
            return response()->json([
                'success' => true,
                'message' => 'Welcome back!',
            ]);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials.',
            ], 401); // 401 Unauthorized if login fails
        }
       
    }
}
