<<<<<<< HEAD
@extends('layouts.app')
=======
@extends('layouts.app-login')

>>>>>>> obras

@section('content')
<div class="container">
    <div class="row justify-content-center">
<<<<<<< HEAD
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}
=======

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirma la contraseña') }}</div>

                <div class="card-body">
                    {{ __('Por favor, confirma tu contraseña antes de cintinuar') }}
>>>>>>> obras

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
=======
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
>>>>>>> obras

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    {{ __('Confirm Password') }}
=======
                                    {{ __('Confirma la contraseña') }}
>>>>>>> obras
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
<<<<<<< HEAD
                                        {{ __('Forgot Your Password?') }}
=======
                                        {{ __('Has olvidado tu contraseña?') }}
>>>>>>> obras
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
@endsection
