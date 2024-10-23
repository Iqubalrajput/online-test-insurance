<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 
use App\Models\Insurance; 

class AuthController extends Controller
{
    public function show()
    {
        try {
            $user = Auth::user(); 

           
            $planIds = \DB::table('insurance_purchases')
                ->where('user_id', $user->id) 
                ->pluck('insurance_plan_id')->unique();

            $totalPrice = \DB::table('insurance_purchases')
            ->where('user_id', $user->id) 
                ->sum('price');
           $plans = Insurance::whereIn('id', $planIds)
                ->with('insurancePurchases') 
                ->get();
               
            return view('profile', compact('user','plans','totalPrice'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to fetch user details.');
        }
    }

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email',
                'password' => 'required|string|min:6',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('home')->with('success', 'You are logged in successfully!');
            }

            return redirect()->back()->with('error', 'Invalid credentials')->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Login failed. Please try again.');
        }
    }

    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);
            return redirect()->route('home')->with('success', 'Congrats, your account has been created!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }

    public function update(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'last_name' => 'string|max:255',
                'email' => 'required|email|unique:users,email,' . auth()->id(),
                'mobile_no' => 'required|numeric|digits:10',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $user = auth()->user();
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->mobile_no = $request->mobile_no;
            $user->save();

            return response()->json(['success' => 'User details updated successfully!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to update user details.'], 500);
        }
    }

    public function updatePassword(Request $request)
    {
        try {
            // Validate the input
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|min:8|confirmed|different:old_password', // Ensure new password matches confirm password and is different
            ]);


            if (!Hash::check($request->old_password, Auth::user()->password)) {
                return response()->json(['errors' => ['old_password' => ['Old password is incorrect.']]], 422);
            }

            Auth::user()->update(['password' => Hash::make($request->new_password)]);

            return response()->json(['success' => 'Password updated successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to update password.'], 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            Auth::logout();
            return redirect('/')->with('success', 'You have been logged out.');
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Logout failed. Please try again.');
        }
    }
}
