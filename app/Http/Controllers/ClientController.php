<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Client;
use Session;

class ClientController extends Controller
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
        return view('forms.addClientForm');
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
          'first_name' => 'required|max:50',
          'last_name'  => 'required|max:50',
          'company'    => 'max:50',
          'industry'   => 'max:50',
          'address'     => 'required',
          'phone'      => 'numeric|required',
          'email'      => 'email|required'
        ));
//      
      //store in the database
      $client = new client;

      $client->first_name = $request->first_name;
      $client->middle_name = $request->middle_name;
      $client->last_name = $request->last_name;
      $client->company = $request->company;
      $client->description = $request->description;
      $client->industry = $request->industry;
      $client->address = $request->address;
      $client->phone = $request->phone;
      $client->email = $request->email;
      $client->user_id = Auth::id();

      $client->save();
      
      Session::flash('success', 'The Profile was successfully submitted!');
      
      //redirect to another page
      return redirect()->route('client.show', $client->id);
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
