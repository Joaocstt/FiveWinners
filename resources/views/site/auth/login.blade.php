@include('layout.assets')
    <div class="wrapper">
        <div class="section-authentication-cover">
            <div class="">
                <div class="row g-0">

                    <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
                            <div class="card-body">
                                <img src="{{asset('assets/images/login-images/login-cover.svg')}}" class="img-fluid auth-img-cover-login" width="650" alt="logo"/>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
                        <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                            <div class="card-body p-sm-5">
                                <div class="">
                                    @if($errors->first())
                                        <div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
                                            <div class="d-flex align-items-center">
                                                <div class="font-35 text-danger"><i class='bx bxs-message-square-x'></i>
                                                </div>
                                                <div class="ms-3">
                                                    <h6 class="mb-0 text-danger">{{$errors->first()}}</h6>

                                                </div>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="mb-3 text-center">
                                        <img src="{{asset('assets/images/logo-icon.png')}}" width="60" alt="">
                                    </div>
                                    <div class="text-center mb-4">
                                        <h5 class="">FiveWin</h5>
                                        <p class="mb-0">Por favor faça login na sua conta</p>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{route('site.login.do')}}">
                                            @csrf
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">E-mail</label>
                                                <input type="email" class="form-control" id="email" placeholder="joao@gmail.com" name="email" value="{{old('email')}}">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Senha</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="password" name="password"  placeholder="Digite sua senha"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Lembre de mim</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-end">	<a href="#">Esqueceu sua senha ?</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">Entrar</button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center ">
                                                    <p class="mb-0">Não possui uma conta? <a href="authentication-signup.html">Entre em contato com seu professor</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="login-separater text-center mb-5"> <span>OU ENTRAR COM</span>
                                        <hr>
                                    </div>
                                    <div class="list-inline contacts-social text-center">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i class="bx bxl-github"></i></a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end row-->
            </div>
        </div>
    </div>

@include('layout.scripts')
