<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Flasher\Laravel\Facade\Flasher;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function check(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Get the authenticated user
        $user = auth()->user();

        // Check if the user has verified their email
        if (!$user->hasVerifiedEmail()) {
            // Redirect to the email verification page with a flasher message
            Flasher::addInfo('You must verify your email before proceeding.');

            return redirect()->route('verification.notice');
        }

        // Check the user's role and redirect accordingly
        switch ($user->role) {
            case 'Admin':
                Flasher::addSuccess('Login Success');
                return redirect()->route('dashboard');

            case 'User':
                Flasher::addSuccess('Login Success');
                return redirect()->route('home');

            default:
                Auth::logout();
                return redirect()->route('login')->withErrors(['role' => 'Invalid user role.']);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
