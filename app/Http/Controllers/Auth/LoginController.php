<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showReactivationForm()
    {
        return view('auth.reactivate');
    }

    public function checkReactivation(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        // Update user status to 'Reactive'
        $user->update(['status' => 'reactive']);

        // Generate a new secret key
        $google2fa = app('pragmarx.google2fa');
        $secretKey = $google2fa->generateSecretKey();

        // Update the user's secret key and status
        $user->update([
            'google2fa_secret' => $secretKey,
            'status' => 'reactive',
        ]);

        // Generate the QR code image
        $QR_Image = $google2fa->getQRCodeInline(
            config('app.name'),
            $user->email,
            $secretKey
        );

        // Store relevant data in session
        session(['QR_Image' => $QR_Image, 'secret' => $secretKey, 'email' => $user->email]);

        return view('auth.reactivate', ['QR_Image' => $QR_Image, 'secret' => $secretKey, 'email' => $user->email]);
    }
}
