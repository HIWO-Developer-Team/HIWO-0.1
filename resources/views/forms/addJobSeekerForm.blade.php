@extends('main')
@section('title', '| JobSeeker Profile')
@section('styles')

<link href="{{ asset('css/styleForm.css') }}" rel="stylesheet">

@endsection
@section('content')
      <div class="grad1">
      <div class="row_main_1" >
                <div class="fheading ">
                  <h1> <center><b>JobSeeker Profile</b></center></h1>  <hr class="style1"></div>
                    <form class="" method="post" action="{{ route('jobseeker.store') }}">
                        {{ csrf_field() }}

                                 <div class="form-group-1">
                            <label for="first_name" class="cols-sm-2 control-label">First Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="first_name" id="first_name"  placeholder="Enter your First Name"/>
                                </div>
                            </div>
                        </div>


                        <div class="form-group-1">
                            <label for="middle_name" class="cols-sm-2 control-label">Middle Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-industry fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="middle_name" id="middle_name"  placeholder="Enter your Middle Name"/>
                                </div>
                            </div>
                        </div>

              
                        <div class="form-group-1">
                            <label for="last_name" class="cols-sm-2 control-label">Last Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="last_name" id="last_name"  placeholder="Enter your Last Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group-1">
                            <label for="company" class="cols-sm-2 control-label">Company</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-card-o fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="company" id="company"  placeholder="Enter your Company Name"/>
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group-1">
                            <label for="description" class="cols-sm-2 control-label">Bio</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-book-o fa-lg" aria-hidden="true"></i></span>
                                    <textarea class="form-control" name="description" id="description" cols="20" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="qualifications" class="cols-sm-2 control-label">Qualification</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-etsy fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="qualifications" id="qualifications"  placeholder="Enter your Qualifications"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="skills" class="cols-sm-2 control-label">Skills</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-etsy fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="skills" id="skills"  placeholder="Enter your Skills"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="exp_company" class="cols-sm-2 control-label">Company</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-etsy fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="exp_company" id="exp_company"  placeholder="Enter the company you worked for"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="exp_title" class="cols-sm-2 control-label">Job Title</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-etsy fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="exp_title" id="exp_title"  placeholder="Enter your designation"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="exp_duration" class="cols-sm-2 control-label">Duration</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-etsy fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="exp_duration" id="exp_duration"  placeholder="Enter the duration"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="projects" class="cols-sm-2 control-label">Projects</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-etsy fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="projects" id="projects"  placeholder="List the projects you've worked on"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="address" class="cols-sm-2 control-label">Address</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-location-arrow fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="address" id="address"  placeholder="Enter your Address"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-1">
                            <label for="phone" class="cols-sm-2 control-label">Contact Number</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                    <input type="tel" class="form-control" name="phone" id="phone"  placeholder="Enter your Contact Number"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group-1">
                            <label for="email" class="cols-sm-2 control-label">Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <input type="email" value="{{ Auth::user()->email }}" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group-1 ">
                            <input type="submit"  class="btn btn-primary btn-lg btn-block login-button" value="Submit">
                        </div>
                        
                    </form>
             
        </div>

            </div>
@endsection
@section('scripts', @include('b4Scripts'))

