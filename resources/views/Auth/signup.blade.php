@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6 offset-sm-3">
      <form id="signupForm" method="post" role="form">
        <p class="info"> Interested? Sign up!  </p>
        <div class="form-group row">
          <label class="col-3 control-form-label col-form-label-sm">Email</label>
          <div class="col-9">
            <input type="text" class="form-control" name="email" autocomplete="off" id="email">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 control-form-label col-form-label-sm">Firstname</label>
          <div class="col-9">
            <input type="text" class="form-control" name="fn">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 control-form-label col-form-label-sm">Lastname</label>
          <div class="col-9">
            <input type="text" class="form-control" name="ln">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 control-form-label col-form-label-sm" for="pwd">Password</label>
          <div class="col-9"> 
            <input type="password" class="form-control" name="pwd" id="loginPwd">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 control-form-label" for="pwd"></label>
          <div class="col-9"> 
            <input type="password" class="form-control" name="pwd" id="confirmPwd" placeholder="Confirm your password">
          </div>
        </div>
        <div class="form-group row"> 
          <div class="offset-sm-2 col-sm-10">
            <button type="submit" name="login" class="btn btn-outline-info link-btn">Sign Up</button>
          </div>
        </div>
        <p> If you have signed up already, please <a href="/login" class="other">Login</a></p>
      </form>
    </div>
  </div>
</div>
@endsection





@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6 offset-sm-3">
      <form id="loginForm" method="post" role="form">
        <p class="info"> Log in with your email and password </p>
        <div class="form-group row">
          <label class="col-3 control-form-label col-form-label-sm">Email</label>
          <div class="col-9">
            <input type="text" class="form-control" name="email" autocomplete="off" id="email">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 control-form-label col-form-label-sm" for="pwd">Password</label>
          <div class="col-9"> 
            <input type="password" class="form-control" name="pwd" id="loginPwd">
          </div>
        </div>
        <div class="form-group row"> 
          <div class="offset-sm-2 col-sm-10">
            <button type="submit" name="login" class="btn btn-outline-success link-btn">Log in</button>
          </div>
        </div>
        <p> If you haven't signed up yet, please <a href="/signup" class="other">Sign Up</a></p>
      </form>
    </div>
  </div>
</div>
@endsection