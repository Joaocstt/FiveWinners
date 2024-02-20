@extends('layout.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Alunos</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Sebastião Pedrosa</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            @if(session('success'))
            <div class="d-flex align-items-center">
                <div class="font-35 text-success"><i class='bx bxs-check-circle'></i>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-success">{{session('success')}}</h6>
                </div>
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                        <div class="position-relative">
                            <input type="text" class="form-control ps-5 radius-30" placeholder="Pesquisar"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                        </div>
                        <div class="ms-auto"><a href="{{route('admin.sebastiao-pedrosa.create')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Adicionar Aluno</a></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>Avatar</th>
                                <th>Nome</th>
                                <th>Permissão</th>
                                <th>Pontuação</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users->sortBy('name') as $user)
                            <tr>
                                <td>
                                    <img src="{{asset('storage/' . $user->avatar)}}" class="user-img" alt="user avatar">
                                </td>
                                <td>{{$user->name}}</td>
                                <td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'>
                                        </i>{{$user->role === 'student' ? 'Estudante' : 'Admin'}}
                                    </div>
                                </td>
                                <td>
                                    @foreach($user->score as $points)
                                        {{$points->scores}}
                                    @endforeach

                                </td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('admin.sebastiao-pedrosa.edit', $user->id)}}" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="{{route('admin.sebastiao-pedrosa.delete', $user->id)}}" class="ms-3"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{$users->links()}}

        </div>
    </div>
@endsection
