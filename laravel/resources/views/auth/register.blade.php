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

            <div class="col-5" style="background-color: #0000B4; padding-top: 20%; padding-bottom: 40%">
                <div class="mx-auto" style="width: 70%">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div style="width: 100%">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       placeholder="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div style="width: 100%">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       placeholder="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div style="width: 100%">
                                <input id="password" type="password"
                                       placeholder="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required
                                       autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div style="width: 100%">
                                <input id="password-confirm" type="password" class="form-control"
                                       placeholder="password confirm"
                                       required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
@endsection
