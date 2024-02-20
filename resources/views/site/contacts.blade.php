@extends('layout.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">Todos os alunos</h6>
            <hr/>
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                @foreach($users->sortBy('name') as $user)
                <div class="col">
                    <div class="card radius-15">
                        <div class="card-body text-center">
                            <div class="p-4 border radius-15">
                                <img src="{{asset('storage/' . $user->avatar)}}" width="110" height="110" class="rounded-circle shadow" alt="">
                                <h5 class="mb-0 mt-4">{{$user->name}}</h5>
                                <p class="mb-3">{{$user->school->name}}</p>
                                <div class="list-inline contacts-social mt-3 mb-3">
                                    <a href="https://github.com/{{ $user->github }}" target="_blank" class="list-inline-item bg-twitter text-white border-0"><i class="bx bxl-github"></i></a>
                                    <a href="https://www.instagram.com/{{ $user->instagram }}" target="_blank" class="list-inline-item bg-google text-white border-0"><i class="bx bxl-instagram"></i></a>
                                </div>
                                <div class="d-grid"> <a href="{{route('site.detailProfile', $user->id)}}" class="btn btn-outline-primary radius-15">Visualizar Perfil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            {{$users->links()}}
            <!--end row-->

        </div>
    </div>
@endsection
