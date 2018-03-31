@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6 offset-sm-3">
      <form method="post" class="form-horizontal" role="form">
        <p class="info"> Interested? Sign up!  </p>
        <div class="form-group row">
          <label class="col-2 control-form-label">Email:</label>
          <div class="col-10">
            <input type="text" class="form-control" name="email" autocomplete="off" id="email" placeholder="Enter your email">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-2 control-form-label">Firstname:</label>
          <div class="col-10">
            <input type="text" class="form-control" name="fn" placeholder="Enter your firstname">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-2 control-form-label">Lastname:</label>
          <div class="col-10">
            <input type="text" class="form-control" name="ln" placeholder="Enter your lastname">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-2 control-form-label" for="pwd">Password:</label>
          <div class="col-10"> 
            <input type="password" class="form-control" name="pwd" id="loginPwd" placeholder="Enter your password">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-2 control-form-label" for="pwd"></label>
          <div class="col-10"> 
            <input type="password" class="form-control" name="pwd" id="confirmPwd" placeholder="Confirm your password">
          </div>
        </div>
        <div class="form-group row"> 
          <div class="offset-sm-2 col-sm-10">
            <button type="submit" name="login" class="btn btn-outline-info">Sign Up</button>
          </div>
        </div>
        <p> If you have signed up already, please <a href="/login" class="other">Login</a></p>
      </form>
    </div>
  </div>
</div>
@endsection