@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form id="resetForm" method="POST" action="{{ route('password.email') }}">
                @csrf
                <p class="info"> Reset password </p>
                <div class="form-group row">
                    <label for="email" class="col-3 col-form-label col-form-label-sm">{{ __('E-Mail Address') }}</label>

                    <div class="col-9">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-outline-info link-btn">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
