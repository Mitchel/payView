<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\sendActivationNotification;
use App\Notifications\sendSuccessActivationNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Ramsey\Uuid\Uuid;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        if($request->isMethod('post')) {
            $attributes = request()->validate([
                'email'                  => ['email', 'required'],
                'password'               => ['required'],
            ]);

            if (auth()->attempt($attributes)) {

                if(auth()->user()->activation_token) {
                    Auth::logout();
                    return redirect()->back()->with('error', __('payview.auth.activate.error'));
                }

                session()->regenerate();

                return redirect()->route('app.dashboard')->with('success', __('payview.auth.login.dashboard'));
            }

            throw ValidationException::withMessages([
                'email' => __('payview.auth.login.details')
            ]);
        }

        return view('auth.login');
    }

    public function register(Request $request)
    {
        if($request->isMethod('post')) {
            $this->validate($request, [
                'firstname'         => ['required', 'min:3', 'max:255'],
                'lastname'          => ['required', 'min:3', 'max:255'],
                'email'             => ['email', 'required', 'unique:users,email', 'min:3', 'max:255'],
                'password'          => ['required', 'min:7', 'max:255'],
            ]);

            $user = User::create($request->all() + [
                'activation_token' => Uuid::uuid4()
            ]);

            $user->notify(new sendActivationNotification($user));

            return redirect()->route('auth.login')->with('success', __('payview.auth.register.success'));
        }

        return view('auth.register');
    }

    public function activate(Request $request, $uuid)
    {
        if($request->isMethod('post')) {
            $user = User::userByUuid($request->uuid);

            $user->activateUser($request->uuid);

            $user->notify(new sendSuccessActivationNotification($user));

            return redirect()->route('auth.login')->with('success', __('payview.auth.activate.success'));
        }

        $user = User::userByUuid($uuid);
        abort_if(!$user, 403);

        return view('auth.activate', compact('user'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('index')->with('success', __('payview.auth.logout.success'));
    }
}
