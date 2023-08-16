<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function showPaymentPage()
    {
        // Your logic for displaying the payment page
        return view('member.membership');
    }

    public function successfulPayment(Request $request)
    {
        // Ensure user is logged in
        if (Auth::check()) {
            $user = Auth::user(); // Retrieve the authenticated user
            $membership = Membership::where('user_id', $user->id)->first();

            if (!$membership) {
                $membership = new Membership();
                $membership->user_id = $user->id;
            }

            // Set the payment status to 'pending' before actual payment
            $membership->payment_status = 'pending';
            $membership->save();

            // Simulate a successful payment process here
            // You can update the payment status after actual payment is confirmed

            // Redirect with success message or return a response
            return redirect()->route('upgrade.success')->with('success', 'Membership upgrade is pending payment');
        } else {
            // Redirect to login page if user is not logged in
            return redirect()->route('login');
        }
    }

    // Other methods in your PaymentController
}
