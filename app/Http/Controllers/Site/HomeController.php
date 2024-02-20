<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('site.home');
    }

    public function login(): View
    {
        return view('site.auth.login');
    }

    public function profile()
    {
        $user = Auth::user();

        return view('site.profile', compact('user'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $user->github = $request->input('github');
        $user->instagram = $request->input('instagram');

        if($request->get('about')) {
            $user->about = $request->get('about');
        }

        if ($request->hasFile('avatar')) {
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $fileName = 'avatar_' . $user->id . '_' . time() . '.' . $extension;
            $user->avatar = $request->file('avatar')->storeAs('users/avatar', $fileName);
        }

        $user->save();

        return redirect()->back()->with('success', 'Dados foram salvos com sucesso!');
    }

    public function contact()
    {
        $users = User::query()->paginate(8);
        return view('site.contacts', compact('users'));
    }

    public function detailProfile(string $id)
    {
        $user = User::query()->findOrFail($id);

        return view('site.detail', compact('user'));
    }

    public function guide()
    {
        return view('site.guide');
    }

    public function faq()
    {
        return view('site.faq');
    }

    public function slide()
    {
        return view('site.slide');
    }
}
