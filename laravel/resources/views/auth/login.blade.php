@extends('layouts.app')

@section('content')
    <div>
        <div class="row py-0" style="background-color: white;">
            <div class="col-7" style="padding-top: 15%; padding-left: 10%; padding-right: 10%">
                <img src="/svg/communify-logo.jpg" style="height: 300px"/>
                <div>
                    <h1>Communify</h1>
                    <p>
                        Bei Communify vernetzt du dich mit anderen in verschiedenen Communitys und tauschst dich so zu
                        den unterschiedlichsten Themen aus! Es warten viele spannende und lustige Inhalte auf dich, es
                        lohnt sich dabei zu sein!
                    </p>
                </div>
            </div>


            <div class="col-5" style="background-color: #F7931E; padding-top: 20%; padding-bottom: 40%">
                <div class="mx-auto" style="width: 70%">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right text-white">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right text-white">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-light" style="margin-bottom: 10px">
                                    {{ __('Login') }}
                                </button>

                                <br>

                                @if (Route::has('password.request'))
                                    <a class="text-white-50" style="padding-top: 5px" href="{{ route('password.request') }}">
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
@endsection
