<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\EditUserRequest;
use App\Models\Score;
use App\Models\User;
use App\Services\getStudent;
use Illuminate\View\View;

class UserControllerBU extends Controller
{
    protected getStudent $getStudentSchool;

    public function __construct(getStudent $getStudentSchool)
    {
        $this->getStudentSchool = $getStudentSchool;
    }

    public function index(): View
    {
        $users = $this->getStudentSchool->getBestScoresBoaUniao();
        return view('site.admin.schoolB.users', compact('users'));
    }

    public function create(): View
    {
        return view('site.admin.schoolB.create');
    }

    public function store(CreateUserRequest $request)
    {
        $request->validated();

        $user = new User();

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->school_id = $request->get('school');
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

        return redirect()->route('admin.boa-uniao-users')->with('success', 'O aluno foi cadastrado com sucesso!');

    }

    public function edit(string $id)
    {
        $user = User::query()->findOrFail($id);
        return view('site.admin.schoolB.edit', compact('user'));
    }

    public function update(EditUserRequest $request, string $id)
    {
        $user = User::query()->findOrFail($id);
        $data = $request->except(['_token']);

        // Verifique se a senha está presente nos dados enviados
        // Se não estiver presente, mantenha a senha atual no banco de dados
        if (!isset($data['password'])) {
            $data['password'] = $user->password;
        }

        $user->update($data);

        $score = Score::query()->where('user_id', $id)->first();

        $score->save();

        return redirect()->route('admin.boa-uniao-users')->with('success', 'O aluno foi editado com sucesso!');
    }


    public function delete(string $id)
    {
        $user = User::query()->findOrFail($id);
        return view('site.admin.schoolB.delete', compact('user'));
    }

    public function destroy(string $id)
    {
        $user = User::query()->findOrFail($id);

        $user->delete();

        return redirect()->route('admin.boa-uniao-users')->with('success', 'O aluno foi deletado com sucesso!');
    }
}

