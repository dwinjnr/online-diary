@extends('layouts/app')

@section('content')
  <div class="container" style="margin-top: 40px;">
    <div class="row">
      @guest
        <div class="col-sm-4 offset-sm-4">
          <a href="/register" class="btn btn-outline-info my-link" id="register">Register</a>
          <a href="/login" class="btn btn-outline-success my-link" id="login">Login</a>
        </div>
      @else
        <p>Go to <a href='/dashboard'>dashboard</a></p>
      @endguest
    </div>
  </div>
@endsection
