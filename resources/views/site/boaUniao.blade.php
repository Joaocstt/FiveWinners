@extends('layout.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <h6 class="mb-0  ">Verifique a colocação abaixo:</h6>
            {{--            <h6 class="mb-0  ">Sua colocação atual é: 3</h6>--}}
            <hr/>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Posição</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Pontuação</th>
                            @auth
                                @if(auth()->user()->role === 'admin')
                                    <th scope="col">Adicionar Pontos</th>
                                @endif
                            @endauth
                        </tr>
                        </thead>
                        <tbody>

                        @php
                            $position = ($allStudents->currentPage() - 1) * $allStudents->perPage() + 1;
                        @endphp

                        @foreach($allStudents as $student)
                            <tr>
                                <td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-4"><i class='bx bxs-circle me-1'></i>{{ $position }}</div></td>
                                <td>{{ $student->name }}</td>
                                <td>
                                    @foreach($student->score as $points)
                                        {{ $points->scores }}
                                    @endforeach
                                </td>
                                @auth
                                    @if(auth()->user()->role === 'admin')
                                        <td>
                                            <input class="form-control" type="number">
                                        </td>
                                    @endif
                                @endauth
                            </tr>
                            @php
                                $position++;
                            @endphp
                        @endforeach
                        </tbody>
                    </table>
                    <div class="card-body">
                        <hr>
                        {{ $allStudents->links() }} <!-- Adicione essa linha para exibir a paginação -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
