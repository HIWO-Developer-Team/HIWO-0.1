@extends('main')
@section('title', '| User Registration')
@section('styles')
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


<link href="{{ asset('css/styleForm.css') }}" rel="stylesheet">
<link href="{{ asset('icon/css/font-awesome.min.css') }}" rel="stylesheet">
   
@endsection
@section('content')
      <div class="grad1">
<div class="row_main_1">
                <div class="main-login ">
                  <h1> <center><b>REGISTER</b></center></h1>  <hr class="style1"></div>
                <div class="panel-body">
                    <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        
                        <div class="form-group-1{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="cols-sm-2 control-label">E-Mail Address</label>
                              <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                        
                        <div class="form-group-1{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="username" class="cols-sm-2 control-label">Username</label>

                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input id="username" type="text" class="form-control" name="username" placeholder="Enter Username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>


                        <div class="form-group-1{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                             <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input id="password" type="password" class="form-control" name="password"  placeholder="Enter Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>

                        <div class="form-group-1">
                            <label for="password-confirm" class="cols-sm-2 control-label">Confirm Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password" required>
                            </div>
                        </div>
                        </div>

                        <center>
                           
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">
                                    Register
                                </button>
                            
                        </center>
                    </form>
                </div>
            </div>
   
@endsection
