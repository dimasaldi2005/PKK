<?php

use App\Models\User;

return [

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    */
    'guards' => [

        // 🔵 ADMIN (kabupaten)
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        // 🟢 KECAMATAN
        'pengguna' => [
            'driver' => 'session',
            'provider' => 'users_mobile',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    */
    'providers' => [

        // 🔵 ADMIN
        'users' => [
            'driver' => 'eloquent',
            'model' => User::class,
        ],

        // 🟢 KECAMATAN
        'users_mobile' => [
            'driver' => 'eloquent',
            'model' => App\Models\UserMobile::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    */
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    */
    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];