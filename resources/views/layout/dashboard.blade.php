<!--start page wrapper -->
<div class="page-wrapper {{!auth()->user() ? 'bg-white' : ''}}">
    <div class="page-content">
        <div class="jumbotron rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-center">{{ auth()->user() ? 'Bem-vindo, ' . auth()->user()->name : 'Bem vindo, Aluno' }}</h1>
                @if(auth()->user())
                    <p class="lead text-center">Agora que você logou! Explore e visualize sua colocação no ranking.</p>
                @endif
                @guest
                <p class="lead text-center">Que bom ter você por aqui! Estamos animados para começar esta jornada de aprendizado juntos.</p>
                <p class="lead text-center">Visualize sua colocação no ranking.</p>
                <div class="text-center">
                    <a href="{{route('site.login')}}" class="btn btn-primary">Iniciar sessão</a>
                </div>
                @endguest
            </div>
        </div>
        @guest
        <div class="container">
            <div class="row align-items-center">
                <div class="col mx-auto text-center">
                    <img class="img-fluid" src="{{ asset('assets/images/undraw_My_personal_files_re_3q0p.png') }}" width="630" alt="Imagem Responsiva">
                </div>
            </div>
        </div>
        @endguest
        @auth
            <div class="card radius-10 mt-4">
                <div class="card-header">
                    <div class="d-flex align-items-center p-2">
                        <div>
                            <h6 class="mb-0">Premiação Final</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>Produto</th>
                                <th>Foto</th>
                                <th>Preço</th>
                                <th>Data de Entrega</th>
                                <th>Chance de bonificação</th>
                            </tr>
                            </thead>
                            <tbody><tr>
                                <td>Em breve </td>
                                <td><img src="{{asset('assets/images/present.png')}}" class="product-img-2" alt="product img"></td>
                                <td>Em breve</td>
                                <td>Dezembro de 2024</td>
                                <td><div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 90%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Em breve</td>
                                <td><img src="{{asset('assets/images/present.png')}}" class="product-img-2" alt="product img"></td>
                                <td>Em breve</td>
                                <td>Dezembro de 2024</td>
                                <td>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-gradient-blooker" role="progressbar" style="width: 70%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Em breve </td>
                                <td><img src="{{asset('assets/images/present.png')}}" class="product-img-2" alt="product img"></td>
                                <td>Em breve</td>
                                <td>Dezembro de 2024</td>
                                <td><div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-gradient-bloody" role="progressbar" style="width: 50%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Em breve</td>
                                <td><img src="{{asset('assets/images/present.png')}}" class="product-img-2" alt="product img"></td>
                                <td>Em breve</td>
                                <td>Dezembro de 2024</td>
                                <td><div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 40%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Em breve</td>
                                <td><img src="{{asset('assets/images/present.png')}}" class="product-img-2" alt="product img"></td>
                                <td>Em breve</td>
                                <td>Dezembro de 2024</td>
                                <td><div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-gradient-blooker" role="progressbar" style="width: 20%"></div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12  d-flex">
                    <div class="card w-100 radius-10">
                        <div class="card-header bg-transparent">
                            <div class="d-flex align-items-center p-2">
                                <div>
                                    <h6 class="mb-0">Top 10 Ranking Global</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush align-middle">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Escola</th>
                                        <th>Pontuação</th>
                                    </tr>
                                    </thead>
                                    {{--                                <tr>--}}
                                    {{--                                    <td>João Vinicius</td>--}}
                                    {{--                                    <td>Boa União</td>--}}
                                    {{--                                    <td>75</td>--}}
                                    {{--                                    <td><span class="" id="chart8"></span></td>--}}
                                    {{--                                </tr>--}}
                                </table>
                            </div>

                        </div>
                    </div>
                    @endauth
                </div>
            </div><!--end row-->
    </div>
</div>
