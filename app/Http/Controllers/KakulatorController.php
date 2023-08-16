<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KakulatorController extends Controller
{
    public function index()
{
    return view('navbar.kalkulator');
}
}
