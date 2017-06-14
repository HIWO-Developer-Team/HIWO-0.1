@extends('main')
@section('title', '| Employer Registration')
@section('styles')

<link href="{{ asset('css/styleForm.css') }}" rel="stylesheet">

@endsection
@section('content')
      <div class="grad1">
      <div class="row_main_1" >
                <div class="fheading ">
                  <h1> <center><b>JOB DETAILS</b></center></h1>  <hr class="style1"></div>
                    <form class="" method="post" action="{{ route('job.store') }}">
                        {{ csrf_field() }}

                                 <div class="form-group-1">
                            <label for="jobTitle" class="cols-sm-2 control-label">Job Title</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="jobTitle" id="jobTitle"  placeholder="Enter your Job Title"/>
                                </div>
                            </div>
                        </div>


                        <div class="form-group-1">
                            <label for="industry" class="cols-sm-2 control-label">Industry</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-industry fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="industry" id="industry"  placeholder="Enter your Industry"/>
                                </div>
                            </div>
                        </div>

              
                        <div class="form-group-1">
                            <label for="company" class="cols-sm-2 control-label">Company</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="company" id="text"  placeholder="Enter your Company"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group-1">
                            <label for="vacancies" class="cols-sm-2 control-label">Number of Vancancies</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-card-o fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="vacancies" id="vacancies"  placeholder="Enter your Vancancies"/>
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group-1">
                            <label for="description" class="cols-sm-2 control-label">Description</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-book-o fa-lg" aria-hidden="true"></i></span>
                                    <textarea class="form-control" name="description" id="description" cols="20" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="experience" class="cols-sm-2 control-label">Experience</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-etsy fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="experience" id="experience"  placeholder="Enter your Experience"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="salary" class="cols-sm-2 control-label">Salary</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="salary" id="salary"  placeholder="Enter your Salary"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="location" class="cols-sm-2 control-label">Location</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-location-arrow fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="location" id="location"  placeholder="Enter your Location"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="phone" class="cols-sm-2 control-label">Contact Number</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <input type="tel" class="form-control" name="phone" id="phone"  placeholder="Enter your Contact Number"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="email" class="cols-sm-2 control-label">Your Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}"  placeholder="Enter your Email"/>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="form-group-1 ">
                            <input type="submit"  class="btn btn-primary btn-lg btn-block login-button" value="Register">
                        </div>
                        
                    </form>
             
        </div>

            </div>
@endsection
@section('scripts', @include('b4Scripts'))

