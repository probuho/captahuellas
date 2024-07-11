@extends('layouts.app')

@section('content')
<section class="user">
    <div class="user_options-container">
        <div class="user_options-text">
            <div class="user_options-unregistered">
                <h2 class="user_unregistered-title">¿No tienes una cuenta?</h2>
                <p class="user_unregistered-text">Si no tienes una cuenta, <br> puedes registrar los datos y puede ser aprobada en las siguientes 72 horas.</p>
                <button class="user_unregistered-signup" id="signup-button">Regístrate</button><br>
                <small>solo aplica para roles gerenciales y supervisorios previamente registrados en el sistema</small>
            </div>

            <div class="user_options-registered">
                <h2 class="user_registered-title">¿Tienes una cuenta?</h2>
                <p class="user_registered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
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
                            <input type="email" name="email" placeholder="Correo electrónico" class="forms_field-input" required autofocus />
                        </div>
                        <div class="forms_field">
                            <input type="password" name="password" placeholder="Contraseña" class="forms_field-input" required />
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
                            <input type="text" name="name" placeholder="Nombre completo" class="forms_field-input" required />
                        </div>
                        <div class="forms_field">
                            <input type="email" name="email" placeholder="Correo electrónico" class="forms_field-input" required />
                        </div>
                        <div class="forms_field">
                            <input type="password" name="password" placeholder="Contraseña" class="forms_field-input" required />
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
<section class="user">
    <div class="user_options-container">
        <div class="user_options-text">
            <div class="user_options-unregistered">
                <h2 class="user_unregistered-title">¿No tienes una cuenta?</h2>
                <p class="user_unregistered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer
                    whatever street art fap.</p>
                <button class="user_unregistered-signup" id="signup-button">Regístrate</button>
            </div>

            <div class="user_options-registered">
                <h2 class="user_registered-title">¿Tienes una cuenta?</h2>
                <p class="user_registered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever
                    street art fap.</p>
                <button class="user_registered-login" id="login-button">Iniciar sesión</button>
            </div>
        </div>

        <div class="user_options-forms" id="user_options-forms">
            <div class="user_forms-login">
                <h2 class="forms_title">Iniciar sesión</h2>
                <form class="forms_form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <fieldset class="forms_fieldset">
                        <div class="forms_field">
                            <input id="email" type="email" placeholder="Correo electrónico" class="forms_field-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="forms_field">
                            <input id="password" type="password" placeholder="Contraseña" class="forms_field-input @error('password') is-invalid @enderror" name="password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
                <form class="forms_form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <fieldset class="forms_fieldset">
                        <div class="forms_field">
                            <input id="name" type="text" placeholder="Nombre completo" class="forms_field-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="forms_field">
                            <input id="email" type="email" placeholder="Correo electrónico" class="forms_field-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="forms_field">
                            <input id="password" type="password" placeholder="Contraseña" class="forms_field-input @error('password') is-invalid @enderror" name="password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="forms_field">
                            <input id="password-confirm" type="password" placeholder="Confirmar contraseña" class="forms_field-input" name="password_confirmation" required>
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
@endsection --}}

<style>
    .user {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        background: #ccc;
        background-size: cover;
    }

    .user_options-container {
        position: relative;
        width: 80%;
    }

    .user_options-text {
        display: flex;
        justify-content: space-between;
        width: 100%;
        background-color: rgba(34, 34, 34, 0.85);
        border-radius: 3px;
    }

    .user_options-registered,
    .user_options-unregistered {
        width: 50%;
        padding: 75px 45px;
        color: #fff;
        font-weight: 300;
    }

    .user_registered-title,
    .user_unregistered-title {
        margin-bottom: 15px;
        font-size: 1.66rem;
        line-height: 1em;
    }

    .user_unregistered-text,
    .user_registered-text {
        font-size: .83rem;
        line-height: 1.4em;
    }

    .user_registered-login,
    .user_unregistered-signup {
        margin-top: 30px;
        border: 1px solid #ccc;
        border-radius: 3px;
        padding: 10px 30px;
        color: #000000;
        text-transform: uppercase;
        line-height: 1em;
        letter-spacing: .2rem;
        transition: background-color .2s ease-in-out, color .2s ease-in-out;
    }

    .user_registered-login:hover,
    .user_unregistered-signup:hover {
        color: rgba(34, 34, 34, 0.85);
        background-color: #ccc;
    }

    .user_options-forms {
        position: absolute;
        top: 50%;
        left: 30px;
        width: calc(50% - 30px);
        min-height: 420px;
        background-color: #fff;
        border-radius: 3px;
        box-shadow: 2px 0 15px rgba(0, 0, 0, .25);
        overflow: hidden;
        transform: translate3d(100%, -50%, 0);
        transition: transform .4s ease-in-out;
    }

    .user_forms-login {
        transition: opacity .4s ease-in-out, visibility .4s ease-in-out;
    }

    .forms_title {
        margin-bottom: 45px;
        font-size: 1.5rem;
        font-weight: 500;
        line-height: 1em;
        text-transform: uppercase;
        color: #e8716d;
        letter-spacing: .1rem;
    }

    .forms_field {
        &:not(:last-of-type) {
            margin-bottom: 20px;
        }

        .forms_field-input {
            width: 100%;
            border-bottom: 1px solid #ccc;
            padding: 6px 20px 6px 6px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            font-weight: 300;
            color: darken(#ccc, 30%);
            letter-spacing: .1rem;
            transition: border-color .2s ease-in-out;

            &:focus {
                border-color: darken(#ccc, 30%);
            }
        }
    }

    .forms_buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 35px;

        &-forgot {
            font-family: 'Montserrat', sans-serif;
            letter-spacing: .1rem;
            color: #ccc;
            text-decoration: underline;
            transition: color .2s ease-in-out;

            &:hover {
                color: darken(#ccc, 10%);
            }
        }

        &-action {
            background-color: #e8716d;
            border-radius: 3px;
            padding: 10px 35px;
            font-size: 1rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: .1rem;
            transition: background-color .2s ease-in-out;

            &:hover {
                background-color: darken(#e8716d, 10%);
            }
        }
    }

    .user_forms-signup,
    .user_forms-login {
        position: absolute;
        top: 70px;
        left: 40px;
        width: calc(100% - 80px);
        opacity: 0;
        visibility: hidden;
        transition: opacity .4s ease-in-out, visibility .4s ease-in-out, transform .5s ease-in-out;
    }

    .user_forms-signup {
        transform: translate3d(120px, 0, 0);
    }

    .user_forms-login {
        transform: translate3d(0, 0, 0);
        opacity: 1;
        visibility: visible;
    }

    .user_options-forms.bounceLeft {
        animation: bounceLeft 1s forwards;
    }

    .user_forms-signup.showSignUp {
        animation: showSignUp 1s forwards;
    }

    .user_forms-login.bounceRight {
        animation: bounceRight 1s forwards;
    }

    @keyframes bounceLeft {
        0% {
            transform: translate3d(100%, -50%, 0);
        }

        50% {
            transform: translate3d(-30px, -50%, 0);
        }

        100% {
            transform: translate3d(0, -50%, 0);
        }
    }

    @keyframes bounceRight {
        0% {
            transform: translate3d(0, -50%, 0);
        }

        50% {
            transform: translate3d(calc(100% + 30px), -50%, 0);
        }

        100% {
            transform: translate3d(100%, -50%, 0);
        }
    }

    @keyframes showSignUp {
        100% {
            opacity: 1;
            visibility: visible;
            transform: translate3d(0, 0, 0);
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const signupButton = document.getElementById('signup-button'),
            loginButton = document.getElementById('login-button'),
            userForms = document.getElementById('user_options-forms');

        signupButton.addEventListener('click', () => {
            userForms.classList.remove('bounceRight');
            userForms.classList.add('bounceLeft');
        }, false);

        loginButton.addEventListener('click', () => {
            userForms.classList.remove('bounceLeft');
            userForms.classList.add('bounceRight');
        }, false);
    });

</script>


{{-- backup codigo --}}

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio de sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
