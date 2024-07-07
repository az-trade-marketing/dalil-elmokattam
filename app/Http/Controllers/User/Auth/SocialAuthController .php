<?php
namespace App\Http\Controllers\User\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    // Redirect to Facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Handle Facebook callback
    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $this->_registerOrLoginUser($user);
            return redirect()->intended('dashboard');
        } catch (Exception $e) {
            return redirect('login');
        }
    }

    // Redirect to Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Google callback
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $this->_registerOrLoginUser($user);
            return redirect()->intended('dashboard');
        } catch (Exception $e) {
            return redirect('login');
        }
    }

    // Register or Login user
    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->photo = $data->avatar;
            $user->save();
        }

        Auth::login($user);
    }
}
