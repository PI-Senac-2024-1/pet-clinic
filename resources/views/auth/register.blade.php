@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.navbar')
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('https://cdn11.bigcommerce.com/s-q6irxmxs7o/images/stencil/original/carousel/17/thumbnail_adobestock_634378721__70459.jpg?c=2'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Bem-vindo!</h1>
                        {{-- <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Cadastre-se</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register.perform') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="street" class="form-control-label">Dados pessoais</label>
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="username" class="form-control" placeholder="Nome" aria-label="Nome" value="{{ old('username') }}" maxlength="255">
                                            @error('username') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="document" class="form-control document" placeholder="CPF" aria-label="CPF" value="{{ old('document') }}" maxlength="14">
                                            @error('document') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="phone" class="form-control phone" placeholder="Telefone" aria-label="Telefone" value="{{ old('phone') }}" maxlength="15">
                                            @error('phone') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail" value="{{ old('email') }}" maxlength="255">
                                            @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control" placeholder="Senha" aria-label="Senha" maxlength="255">
                                            @error('password') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="form-check form-check-info text-start">
                                            <input class="form-check-input" type="checkbox" name="terms" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Eu concordo com os <a href="javascript:;" class="text-dark font-weight-bolder">Termos e Condições</a>
                                            </label>
                                            @error('terms') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="street" class="form-control-label">Endereço</label>
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="zipcode" id="zipcode" class="form-control zipcode" placeholder="CEP" aria-label="Rua" value="{{ old('zipcode') }}" maxlength="255">
                                            @error('zipcode') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="street" id="street" class="form-control" placeholder="Rua" aria-label="Rua" value="{{ old('street') }}" maxlength="255" readonly>
                                            @error('street') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="number" id="number" class="form-control document" placeholder="Número" aria-label="Número" value="{{ old('number') }}" maxlength="14">
                                            @error('number') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="district" id="district" class="form-control" placeholder="Bairro" aria-label="Bairro" value="{{ old('district') }}" maxlength="15" readonly>
                                            @error('district') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="city" id="city" class="form-control" placeholder="Cidade" aria-label="Cidade" value="{{ old('city') }}" maxlength="255" readonly>
                                            @error('city') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="state" id="state" class="form-control" placeholder="Estado" aria-label="Estado" value="{{ old('state') }}" maxlength="255" readonly>
                                            @error('state') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <div class="form-group">
                                                <label for="complement">Complemento</label>
                                                <textarea class="form-control" id="complement" name="complement" rows="3">@if (!empty(old('complement'))){{ trim(old('complement')) }}@endif</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Cadastrar</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Já tem uma conta? <a href="{{ route('login') }}"
                                        class="text-dark font-weight-bolder">Clique aqui para efetuar o login ;)</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div hidden>
        @include('layouts.navbars.auth.sidenav')
    </div>
    @include('layouts.footers.guest.footer')
@endsection
