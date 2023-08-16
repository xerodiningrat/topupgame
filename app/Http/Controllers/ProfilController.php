<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{

public function index()
{
    // Pastikan pengguna sudah login
    if (!Auth::check()) {
        abort(404, '<!-- Custom not found design -->
        <h1>Not Found</h1>
        <p>Sorry, the page you are looking for does not exist.</p>
        <!-- Add your custom design here -->
        ');
    }

    $user = User::find(Auth::id());

    return view('navbar.profil', compact('user'));
}
}
