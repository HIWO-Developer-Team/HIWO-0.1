@extends('layouts.app')
@section('styles')

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


<link href="{{ asset('css/styleForm.css') }}" rel="stylesheet">
<link href="{{ asset('icon/css/font-awesome.min.css') }}" rel="stylesheet">
   
@endsection
@section('content')
 <div class="row_main_1">
                <div class="main-login ">
                 <h1> <center><b>Sign Up</center></h1>  <hr></div>
                    <form class=""method="POST" action="{{ route('register') }}">
                        
                                 <div class="form-group-1">
                            <label for="username" class="cols-sm-2 control-label">Username</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                                </div>
                            </div>
                        </div>


                        <div class="form-group-1">
                            <label for="email" class="cols-sm-2 control-label">Your Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-1-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                </div>
                            </div>
                        </div>

              
                        <div class="form-group-1">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group-1">
                                    <span class="input-group-1-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group-1">
                            <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group-1 ">
                            <a href="#" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Register</a>
                        </div>
                        
                    </form>
             
        
            </div>
@endsection