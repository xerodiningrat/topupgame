<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AffiliateController extends Controller
{
    public function index()
    {
        $referralCode = Auth::user()->referral_code;
        return view('affiliate', compact('referralCode'));
    }
}
