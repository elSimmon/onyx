<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use Auth;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //display registered trainees
        $trainees = Training::all()->get();
        return view('training.trainees')->withTrainees($trainees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //display training registration form
      return view('training.registration_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create new training entry
        $training = new Training();
        $training->user_id = Auth::user()->id;
        $training->course = $request['course'];
        $training->center = $request['center'];
        $training->address = $request['address'];
        $training->qualification = $request['qualification'];
        if($request['payment_status'] == "on"){
          $training->payment_status = 1;
        }else {
          $training->payment_status = 0;
        }
        $training->preferred_start_date = now();

        $training->save();

        return view('training.registration_form')->withSuccess('success');
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
