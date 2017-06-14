<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Session;

class JobController extends Controller
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('forms.addJobForm');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        // validate the data
        $this->validate($request, array(
          'jobTitle'  => 'required|max:50',
          'industry'  => 'required',
          'vacancies' => 'numeric|required',
          'experience'=> 'numeric|required',
          'salary'    => 'numeric|required',
          'location'  => 'required',
          'phone'     => 'numeric|required',
          'email'     => 'email|required'
        ));
//      
      //store in the database
      $job = new job;

      $job->jobTitle = $request->jobTitle;
      $job->industry = $request->industry;
      $job->vacancies = $request->vacancies;
      $job->company = $request->company;
      $job->description = $request->description;
      $job->salary = $request->salary;
      $job->experience = $request->experience;
      $job->location = $request->location;
      $job->phone = $request->phone;
      $job->email = $request->email;

      $job->save();
      
      Session::flash('success', 'The job was successfully posted!');
      
      //redirect to another page
      return redirect()->route('job.show', $job->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('home');
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
