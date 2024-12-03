<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username', 'password', 'phone', 'bank_account', 'account_name', 'email', 'saldo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',        // Password is hidden in serialization
        'remember_token',  // Remember token is hidden in serialization
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime', // Cast the email_verified_at field to a datetime instance
    ];

    /**
     * Override the method to get the authentication identifier name.
     * This will allow authentication to work with the `username` field.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'username'; // Use the username as the authentication identifier
    }

    /**
     * Handle password hashing before saving the user
     */
    public static function boot()
    {
        parent::boot();

        // Automatically hash the password before saving the model
        static::creating(function ($user) {
            if ($user->password) {
                $user->password = bcrypt($user->password); // Hash the password before storing it
            }
        });

        static::updating(function ($user) {
            if ($user->password) {
                $user->password = bcrypt($user->password); // Hash the password before updating it
            }
        });
    }
}
