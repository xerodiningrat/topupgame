<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class CekPesananController extends Controller
{

public function index()
{
    return view('navbar.cekpesanan');
}

}
