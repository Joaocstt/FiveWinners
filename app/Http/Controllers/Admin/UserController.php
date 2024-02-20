<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\EditUserRequest;
use App\Http\Requests\Admin\UserRequest;
use App\Models\School;
use App\Models\Score;
use App\Models\User;
use App\Services\getStudent;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    protected getStudent $getStudentSchool;

    public function __construct(getStudent $getStudentSchool)
    {
        $this->getStudentSchool = $getStudentSchool;
    }

    public function index(): View
    {
        $users = $this->getStudentSchool->getBestScoresSebastiaoPedrosa();
        return view('site.admin.schoolp.users', compact('users'));
    }

    public function create(): View
    {
        return view('site.admin.schoolp.create');
    }

    public function store(CreateUserRequest $request)
    {
        $request->validated();

        $user = new User();

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->school_id = $request->get('school');
        $user->avatar = 'users/avatar/icon.png';

        if($request->get('password')) {
            $user->password = $request->get('password');
        }

        $user->save();

        $score = new Score();

        $score->user_id = $user->id;
        $score->school_id = $request->get('school');

        if($request->get('score')) {
            $score->scores = $request->get('score');
        }

        $score->scores = 0;


        $score->save();

        return redirect()->route('admin.sebastiao-pedrosa.users')->with('success', 'O aluno foi cadastrado com sucesso!');

    }

    public function edit(string $id)
    {
        $user = User::query()->findOrFail($id);
        return view('site.admin.schoolp.edit', compact('user'));
    }

    public function update(EditUserRequest $request, string $id)
    {
        $user = User::query()->findOrFail($id);
        $data = $request->except(['_token']);

        if (!isset($data['password'])) {
            $data['password'] = $user->password;
        }

        $user->update($data);

        $score = Score::query()->where('user_id', $id)->first();

        $score->scores = $request->get('score');
        $score->save();

        return redirect()->route('admin.sebastiao-pedrosa.users')->with('success', 'O aluno foi editado com sucesso!');
    }


    public function delete(string $id)
    {
        $user = User::query()->findOrFail($id);
        return view('site.admin.schoolp.delete', compact('user'));
    }

    public function destroy(string $id)
    {
        $user = User::query()->findOrFail($id);

        $user->delete();

        return redirect()->route('admin.sebastiao-pedrosa.users')->with('success', 'O aluno foi deletado com sucesso!');
    }
}

