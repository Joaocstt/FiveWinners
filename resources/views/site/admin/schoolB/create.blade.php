@extends('layout.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Gerenciar</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Boa União</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary px-4">Voltar</button>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            @if($errors->any())
                <div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-danger"><i class='bx bxs-message-square-x'></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-danger">{{$errors->first()}}</h6>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Adicionar Aluno</h5>
                    <hr/>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card-body p-4">
                                    <form class="row g-3" method="POST" action="{{route('admin.boa-uniao.store')}}">
                                        @csrf
                                        <div class="col-md-12">
                                            <label for="input25" class="form-label">Nome</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class='bx bx-user'></i></span>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="input27" class="form-label">E-mail</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class='bx bx-envelope'></i></span>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="input27" class="form-label">Senha</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class='bx bx-check'></i></span>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Digite a senha">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="input33" class="form-label">Escola</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class='bx bxs-city'></i></span>
                                                <select class="form-select" id="school" name="school">
                                                    <option selected value="1">Boa União</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="input31" class="form-label">Pontuação</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class='bx bx-pin'></i></span>
                                                <input type="text" class="form-control" id="score" name="score" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-md-flex d-grid align-items-center gap-3">
                                                <button type="submit" class="btn btn-primary px-4">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img width="470px" src="{{asset('assets/images/undraw_My_personal_files_re_3q0p.png')}}">
                            </div>
                        </div><!--end row-->
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
