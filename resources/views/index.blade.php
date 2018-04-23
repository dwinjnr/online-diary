@extends('layouts/app')

@section('content')
  <div class="container" style="margin-top: 40px;">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <blockquote class="blockquote">
            <p>
              Very often, gleams of light come in a few minutes sleeplessness, in a second perhaps; you must fix them. 
              To entrust them to relaxed brain is like writing on water; there is every chance that on the morrow there will be
              no slightest trace left of any happening.
            </p>
            <div class="blockquote-footer">Antonin Sertillanges</div>
          </blockquote>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
        @guest
            <a href="/register" class="btn btn-outline-info my-link" id="register">Register</a>
            <a href="/login" class="btn btn-outline-success my-link" id="login">Login</a>
        @else
          <a href="/dashboard" class="btn btn-outline-success my-link" id="dashboard">Dashboard</a>
        @endguest
        </div>
      </div>
  </div>
@endsection
