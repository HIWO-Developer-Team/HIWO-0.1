<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\JobSeeker;
use Session;

class JobSeekerController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.addJobSeekerForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate the data
        $this->validate($request, array(
          'first_name' => 'required|max:50',
          'last_name'  => 'required|max:50',
          'company'    => 'max:50',
          'industry'   => 'max:50',
          'address'     => 'required',
          'phone'      => 'numeric|required',
          'email'      => 'email|required'
        ));  
      //store in the database
      $jobseeker = new jobseeker;

      $jobseeker->first_name = $request->first_name;
      $jobseeker->middle_name = $request->middle_name;
      $jobseeker->last_name = $request->last_name;
      $jobseeker->description = $request->description;
      $jobseeker->qualifications =$request->qualifications;
      $jobseeker->skills =$request->skills;
      $jobseeker->exp_company =$request->exp_company;
      $jobseeker->exp_title =$request->exp_title;
      $jobseeker->exp_duration =$request->exp_duration;
      $jobseeker->projects =$request->projects;
      $jobseeker->address = $request->address;
      $jobseeker->phone = $request->phone;
      $jobseeker->email = $request->email;
      $jobseeker->user_id = Auth::id();

      $jobseeker->save();
      
      Session::flash('success', 'The Profile was successfully submitted!');
      
      //redirect to another page
      return redirect()->route('jobseeker.show', $jobseeker->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
