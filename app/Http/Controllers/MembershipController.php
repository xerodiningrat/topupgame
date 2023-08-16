<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    public function upgradeMembership(Request $request)
    {
        // Get the currently logged-in user
        $user = Auth::user();

        // Get the selected membership level from the form submission
        $selectedLevel = $request->input('membership_level');

        // Check if the user has a membership
        $membership = Membership::where('user_id', $user->id)->first();

        if (!$membership) {
            // If the user doesn't have a membership, create a new one
            $membership = new Membership();
            $membership->user_id = $user->id;
            $membership->level = $selectedLevel; // Set the selected membership level
        } else {
            // If the user already has a membership, upgrade the level if applicable
            if ($selectedLevel === 'silver' || $selectedLevel === 'gold') {
                $membership->level = $selectedLevel;
            }
        }

        // Update the payment status to 'paid'
        $membership->payment_status = 'paid';

        // Save the changes
        $membership->save();

        // Redirect or show success message
        return redirect()->route('profil')->with('success', 'Membership upgraded successfully!');
    }
}
