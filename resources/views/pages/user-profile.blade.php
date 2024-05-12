@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
{{--@if (!request()->is('profile*'))
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
@endif--}}
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{ $user->firstname ?? 'Firstname' }} {{ $user->lastname ?? 'Lastname' }}
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        Tutor
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>


<div id="alert">
    @include('components.alert')
</div>
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form role="form" method="POST" action={{ route('user-profile-update') }} enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Editar perfil</p>
                            <button type="submit" class="btn btn-primary btn-sm ms-auto">Salvar</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informação de usuário</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username" class="form-control-label">Nome</label><span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="username" id="username" value="{{ old('username', $user->username) }}" required>
                                    @error('username') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-control-label">Email</label><span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                                    @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="document" class="form-control-label">CPF</label><span class="text-danger">*</span></label>
                                    <input class="form-control document" maxlength="14" type="text" name="document" id="document" value="{{ old('document', $user->document) }}" required>
                                    @error('document') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Informações de contato</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="street" class="form-control-label">Endereço</label>
                                    <input class="form-control" type="text" name="street" id="street"
                                        value="{{ old('street', $user->street) }}" required readonly>
                                        @error('street') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="number" class="form-control-label">Número</label>
                                    <input class="form-control" type="text" name="number" id="number" value="{{ old('number', $user->number) }}" required>
                                    @error('number') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="district" class="form-control-label">Estado</label>
                                    <input class="form-control" type="text" name="district" id="district" value="{{ old('district', $user->district) }}" required readonly>
                                    @error('district') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="city" class="form-control-label">Cidade</label>
                                    <input class="form-control" type="text" name="city" id="city" value="{{ old('city', $user->city) }}" required readonly>
                                    @error('city') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="state" class="form-control-label">Estado</label>
                                    <input class="form-control" type="text" name="state" id="state" value="{{ old('state', $user->state) }}" required readonly>
                                    @error('state') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="zipcode" class="form-control-label">CEP</label>
                                    <input class="form-control zipcode" type="text" name="zipcode" id="zipcode" value="{{ old('zipcode', $user->zipcode) }}" required maxlength="9">
                                    @error('zipcode') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="complement">Complemento</label>
                                    <textarea class="form-control" id="complement" name="complement" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone" class="form-control-label">Telefone</label></label>
                                    <input class="form-control phone" type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}" maxlength="15">
                                    @error('phone') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('layouts.footers.auth.footer')
@endsection
