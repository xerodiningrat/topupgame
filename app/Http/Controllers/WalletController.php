<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class WalletController extends Controller
{

public function index()
{
    // Pastikan pengguna sudah login
    if (!Auth::check()) {
        abort(404, 'Not Found');
    }


    $user = User::find(Auth::id());

    return view('navbar.wallet', compact('user'));
}
}
