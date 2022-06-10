<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

use App\Enums\User as EnumUser;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.registerNew');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \APP\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     *
     */
    public function store(\App\Http\Requests\Auth\RegisterRequest $request)
    {


        $user = User::create([
            EnumUser::NAME      => $request->name,
            EnumUser::LAST_NAME => $request->last_name,
            EnumUser::EMAIL     => $request->email,
            EnumUser::PASSWORD  => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
