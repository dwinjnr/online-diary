@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6 offset-sm-3">
      <form method="post" class="form-horizontal" role="form">
        <p class="info"> Log in with your email and password </p>
        <div class="form-group row">
          <label class="col-2 control-form-label">Email:</label>
          <div class="col-10">
            <input type="text" class="form-control" name="email" autocomplete="off" id="email" placeholder="Enter your email">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-2 control-form-label" for="pwd">Password:</label>
          <div class="col-10"> 
            <input type="password" class="form-control" name="pwd" id="loginPwd" placeholder="Enter your password">
          </div>
        </div>
        <div class="form-group row"> 
          <div class="offset-sm-2 col-sm-10">
            <button type="submit" name="login" class="btn btn-outline-success">Log in</button>
          </div>
        </div>
        <p> If you haven't signed up yet, please <a href="/signup" class="other">Sign Up</a></p>
      </form>
    </div>
  </div>
</div>
@endsection