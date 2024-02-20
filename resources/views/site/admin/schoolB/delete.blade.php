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
                            <li class="breadcrumb-item active" aria-current="page">Sebastião Pedrosa</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('admin.boa-uniao-users')}}" class="btn btn-primary px-4">Voltar</a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            {{--            @if($errors->any())--}}
            {{--                <div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">--}}
            {{--                    <div class="d-flex align-items-center">--}}
            {{--                        <div class="font-35 text-danger"><i class='bx bxs-message-square-x'></i>--}}
            {{--                        </div>--}}
            {{--                        <div class="ms-3">--}}
            {{--                            <h6 class="mb-0 text-danger">{{$errors->first()}}</h6>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
            {{--                </div>--}}
            {{--            @endif--}}
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Você tem certeza que deseja excluir: <span class="text-danger">{{$user->name}}</span></h5>
                    <hr/>
                    <div class="form-body">
                            <div class="col-lg-8">
                                <div class="card-body p-1">
                                    <form class="row g-3" method="POST" action="{{route('admin.boa-uniao.destroy', $user->id)}}">
                                        @csrf
                                        @method('delete')
                                        <div class="col-md-10">
                                                <button type="submit" class="btn btn-danger px-4">Excluir</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
