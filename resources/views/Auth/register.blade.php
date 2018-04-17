@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <form id="registerForm" method="POST" action="{{ route('register') }}">
                @csrf
                <p class="info"> Interested? Sign up!  </p>
                <div class="form-group row">
                    <label for="fname" class="col-3 control-form-label col-form-label-sm">{{ __('Firstname') }}</label>

                    <div class="col-9">
                        <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

                        @if ($errors->has('fname'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('fname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lname" class="col-3 control-form-label col-form-label-sm">{{ __('Lastname') }}</label>

                    <div class="col-9">
                        <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required autofocus>

                        @if ($errors->has('lname'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('lname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-3 control-form-label col-form-label-sm">{{ __('Email') }}</label>

                    <div class="col-9">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-3 control-form-label col-form-label-sm">{{ __('Password') }}</label>

                    <div class="col-9">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-3 control-form-label col-form-label-sm">{{ __('Confirm Password') }}</label>

                    <div class="col-9">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-outline-info link-btn">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                <p> If you have signed up already, please <a href="/login" class="other">Login</a></p>                         
            </form>
        </div>
    </div>
</div>
@endsection
