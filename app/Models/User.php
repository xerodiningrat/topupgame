<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Membership;
use App\Models\Referral;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'no_hp',
        'role',
        'level',
        'payment_status',
        'referral_code', 
        'referral_id',
        'invitations', 
    ];

    // ... other properties ...

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function membership()
    {
        return $this->hasOne(Membership::class);
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function referrals()
    {
        return $this->hasMany(Referral::class, 'user_id');
    }

    public function referredBy()
    {
        return $this->belongsTo(Referral::class, 'referral_id');
    }

    public static function generateReferralCode()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $referralCode = '';

        for ($i = 0; $i < 8; $i++) {
            $referralCode .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $referralCode;
    }
}
