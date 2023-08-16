<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Payment\TripayController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MlController extends Controller
{
    public function index()
    {
        $tripay = new TripayController();
        $chanels = $tripay->getPaymentChanels();

        return view('game.ml', ['channels' => $chanels]);
    }

}
