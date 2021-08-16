<?php

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Socialite Routes
|--------------------------------------------------------------------------
*/

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();

    $user =  User::where(['email' => $googleUser->getEmail()])->first();

    if (!$user) {
        $user = User::create([
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'image' => $googleUser->getAvatar(),
            'provider' => 'google',
            'provider_id' => $googleUser->getId(),
        ]);
    }
    Auth::login($user);
    return redirect()->route('home');
});
