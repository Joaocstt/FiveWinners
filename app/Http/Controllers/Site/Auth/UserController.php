<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('site.auth.login');
    }

    public function attempt(UserRequest $request): RedirectResponse
    {
        $request->validated();

        $credentials = $request->except('_token');

        if(Auth::attempt($credentials)){
            Session::regenerateToken();
            return redirect()->route('site.home');
        }

        return back()->withErrors([
            'message' => 'Os dados informados não conferem!'
        ])->withInput($request->only('email'));

    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();

        return redirect()->route('site.login');
    }
}
