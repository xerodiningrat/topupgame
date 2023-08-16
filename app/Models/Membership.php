<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Membership extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // ... other attributes, relationships, and methods

    public function successfulPayment(Request $request)
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Find or create the user's membership record
        $membership = Membership::where('user_id', $user->id)->first();

        if (!$membership) {
            $membership = new Membership();
            $membership->user_id = $user->id;
        }

        // Set the membership level (for example, 'silver')
        $membership->level = 'silver'; // Update this based on your logic

        // Save the membership record
        $membership->save();

        // ... additional logic if needed

        return $membership; // Return the updated membership record
    }
}
