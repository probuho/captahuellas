@extends('layouts.app')

@extends('layouts.app')

@section('content')
    <section class="user">
        <div class="user_options-container">
            <div class="user_options-text">
                <div class="user_options-unregistered">
                    <h2 class="user_unregistered-title">¿No tienes una cuenta?</h2>
                    <p class="user_unregistered-text">Recuerda la informacion de este sistema es sencible solo es permitido crear usuarios para supervisores y gerentes</p>
                    <button class="user_unregistered-signup" id="signup-button">Regístrate</button>
                </div>

                <div class="user_options-registered">
                    <h2 class="user_registered-title">¿Tienes una cuenta?</h2>
                    <p class="user_registered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer
                        whatever street art fap.</p>
                    <button class="user_registered-login" id="login-button">Iniciar sesión</button>
                </div>
            </div>

            <div class="user_options-forms" id="user_options-forms">
                <div class="user_forms-login">
                    <h2 class="forms_title">Iniciar sesión</h2>
                    <form method="POST" action="{{ route('login') }}" class="forms_form">
                        @csrf
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">
                                <input type="email" name="email" placeholder="Correo electrónico"
                                    class="forms_field-input" required autofocus />
                            </div>
                            <div class="forms_field">
                                <input type="password" name="password" placeholder="Contraseña" class="forms_field-input"
                                    required />
                            </div>
                        </fieldset>
                        <div class="forms_buttons">
                            @if (Route::has('password.request'))
                                <button type="button" class="forms_buttons-forgot">
                                    <a href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                </button>
                            @endif
                            <input type="submit" value="Iniciar sesión" class="forms_buttons-action">
                        </div>
                    </form>
                </div>
                <div class="user_forms-signup">
                    <h2 class="forms_title">Regístrate</h2>
                    <form method="POST" action="{{ route('register') }}" class="forms_form">
                        @csrf
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">
                                <input type="text" name="name" placeholder="Nombre completo" class="forms_field-input"
                                    required />
                            </div>
                            <div class="forms_field">
                                <input type="email" name="email" placeholder="Correo electrónico"
                                    class="forms_field-input" required />
                            </div>
                            <div class="forms_field">
                                <input type="password" name="password" placeholder="Contraseña" class="forms_field-input"
                                    required />
                            </div>
                        </fieldset>
                        <div class="forms_buttons">
                            <input type="submit" value="Regístrate" class="forms_buttons-action">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
