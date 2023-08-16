<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Membership;
use App\Models\Referral;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('profil');
            }
        } else {
            return back()->withErrors(['message' => 'Login failed. Please check your credentials.']);
        }
    }

    public function showRegistrationForm(Request $request)
    {
        $referralCode = $request->query('referral_code');
        return view('auth.register', compact('referralCode'));
    }

    public function register(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Generate a unique referral code for the user
    $referralCode = User::generateReferralCode();

    // Create a new user
    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
        'role' => 'member',
        'referral_code' => $referralCode,
    ]);

    // Find the user who referred the new user (if referral code provided)
    $referrer = null;
    if ($referralCode) {
        $referrer = User::where('referral_code', $referralCode)->first();
    }

    // Create or update the user's referral relationship
    if ($referrer) {
        $referral = new Referral();
        $referral->user_id = $user->id;
        $referral->referred_by = $referrer->id;
        $referral->save();

        // Update the number of invitations for the referrer
        $referral->increment('invitations');
    }

    $membership = new Membership();
    $membership->user_id = $user->id;
    $membership->level = 'bronze';
    $membership->save();

    Auth::login($user);

    return redirect()->route('profil');
}

    
    public function logout()
    {
        Auth::logout();
        return redirect('/home');
    }
}
