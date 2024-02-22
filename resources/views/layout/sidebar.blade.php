<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
{{--            <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">--}}
        </div>
        <div>
            <h4 class="logo-text">FiveWin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('site.home')}}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Página Inicial</div>
            </a>
        </li>

        <li class="menu-label">Pontuações</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-repeat"></i>
                </div>
                <div class="menu-title">Escolas</div>
            </a>
            <ul>
                <li> <a href="{{route('site.school', ['sebastiao-pedrosa'])}}"><i class='bx bx-radio-circle'></i>Sebastião Pedrosa</a>
                </li>
                <li> <a href="{{route('site.school', ['boa-uniao'])}}"><i class='bx bx-radio-circle'></i>Boa União</a>
                </li>
            </ul>
        </li>

        @auth()
        <li class="menu-label">Perfil</li>
        <li>
            <a href="{{route('site.profile')}}">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Meu Perfil</div>
            </a>
        </li>
            <li>
                <a href="{{route('site.contacts')}}">
                    <div class="parent-icon"><i class="bx bxs-contact"></i>
                    </div>
                    <div class="menu-title">Membros</div>
                </a>
            </li>
        @endauth
        @auth
        <li class="menu-label">Outros</li>
        <li>
            <a href="{{route('site.faq')}}">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Dúvidas</div>
            </a>
        </li>
        <li>
            <a href="{{route('site.slide')}}">
                <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                </div>
                <div class="menu-title">Slides</div>
            </a>
        </li>
        <li>
            <a href="{{route('site.guide')}}">
                <div class="parent-icon"> <i class="bx bx bx-book-alt"></i>
                </div>
                <div class="menu-title">Guia</div>
            </a>
        </li>
        @endauth
        @auth
            @if(auth()->user()->role === 'admin')

        <li class="menu-label">Admin</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-lock"></i>
                </div>
                <div class="menu-title">Gerenciar Escolas</div>
            </a>
            <ul>
                <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Sebastião Pedrosa</a>
                    <ul>
                        <li><a href="{{route('admin.sebastiao-pedrosa.users')}}" ><i class='bx bx-radio-circle'></i>Alunos</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Boa União</a>
                    <ul>
                        <li><a href="{{route('admin.boa-uniao-users')}}"><i class='bx bx-radio-circle'></i>Alunos</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-lock"></i>
                </div>
                <div class="menu-title">Gerenciar Site</div>i
            </a>
            <ul>
                <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Página Inicial</a>
                    <ul>
                        <li><a href="#" target="_blank"><i class='bx bx-radio-circle'></i>Mensagem Global</a></li>
                        <li><a href="#" target="_blank"><i class='bx bx-radio-circle'></i>Produtos</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Outros</a>
                    <ul>
                        <li><a href="#" target="_blank"><i class='bx bx-radio-circle'></i>Slides</a></li>
                        <li><a href="#" target="_blank"><i class='bx bx-radio-circle'></i>Guia</a></li>
                    </ul>
                </li>
            </ul>
        </li>
            @endif
        @endauth
    </ul>
</div>
