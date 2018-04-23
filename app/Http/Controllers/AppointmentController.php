<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Appointment;
use DB;

class AppointmentController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $user_id = Auth()->User()->id;
        $appointments = DB::table('appointments')->where('user_id', $user_id)->orderBy('created_at', 'desc')->paginate(4);
        return view('appointments.index')->with('appointments', $appointments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'with' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);

        $appointment = new Appointment;
        $appointment->title = $request->input('title');
        $appointment->description = $request->input('description');
        $appointment->with = $request->input('with');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->user_id = auth()->user()->id;       
        $appointment->save();

        return redirect('/appointments')->with('success', 'Appointment Created');
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
        $appointment = Appointment::find($id);
        if(auth()->user()->id !== $appointment->user_id){
            return redirect('dashboard')->with('error', 'Unauthorized Access');
        }
        return view('appointments.edit')->with('appointment', $appointment);        
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
        
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'with' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);

        $appointment = Appointment::find($id);
        $appointment->title = $request->input('title');
        $appointment->description = $request->input('description');
        $appointment->with = $request->input('with');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');      
        $appointment->save();

        return redirect('/appointments')->with('success', 'Appointment Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        if(auth()->user()->id !== $appointment->user_id){
            return redirect('dashboard')->with('error', 'Unauthorized Access');
        }
        $appointment->delete();
        return redirect('/appointments')->with('success', 'Appointment Deleted');
    }
}
