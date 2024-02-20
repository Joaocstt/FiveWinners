@extends('layout.main')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <h6 class="mb-0 text-uppercase">Guia de estudo</h6>
            <hr/>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3">
                <div class="col">
                    <div class="card">
                        <img src="{{asset('assets/images/photo-1456513080510-7bf3a84b82f8.avif')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">UC Instalação e Manutenção de Redes SOHO</h5>
                            <p class="card-text">Segue abaixo um video aula no youtube e contéudos falando mais sobre..</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="https://www.youtube.com/watch?v=Xh85MpQBm6k" target="_blank">Fundamentos de Redes de Computadores</a></li>
                            <li class="list-group-item">Conceitos básicos sobre redes: <a target="_blank" href="https://www.controle.net/faq/rede-de-computadores">Ver artigo</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
