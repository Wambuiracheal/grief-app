<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSessionsRequest;
use App\Http\Requests\UpdateSessionsRequest;
use App\Models\Clients;
use App\Models\Sessions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_client_id = Clients::select('id')
        ->where('UserId',Auth::user()->id)
        ->first();

        $bookings = Sessions::join('trainers','sessions.TrainerId','=','trainers.id')
        ->select('trainers.Name as trainer','sessions.ClientId as client','sessions.Name as session','sessions.Duration','sessions.Date')
        ->where('ClientId',$get_client_id->id)
        ->where('sessions.Status','Approved')
        ->paginate(3);

        $present_sessions = Sessions::join('trainers','sessions.TrainerId','=','trainers.id')
        ->select('trainers.Name as trainer','sessions.ClientId as client','sessions.Name as session','sessions.Duration','sessions.Date')
        ->where('ClientId',$get_client_id->id)
        ->where('sessions.Attendance','Present')
        ->get();

        return view('index', compact('bookings','present_sessions'));
    }

    public function sessions()
    {
        $get_client_id = Clients::select('id')
        ->where('UserId',Auth::user()->id)
        ->first();

        $Allsessions = Sessions::join('trainers','sessions.TrainerId','=','trainers.id')
        ->select('trainers.Name as trainer','sessions.ClientId as client','sessions.Name as session','sessions.Duration','sessions.Date','sessions.Status','sessions.Attendance')
        ->where('ClientId',$get_client_id->id)
        ->get();

        return view('sessions', compact('Allsessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSessionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'SessionName' => 'required',
            'Trainer' => 'required',
            'Date' => 'required',
            'Duration' => 'required',

        ]);

        $session = new Sessions;

        $session->ClientId=$request->input('ClientId');
        $session->Name=$request->input('SessionName');
        $session->TrainerId=$request->input('Trainer');
        $session->Date=$request->input('Date');
        $session->Duration=$request->input('Duration');

        //Log::info($session);
        $session->save();

        return redirect('index')->with('success','Session booked successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sessions  $sessions
     * @return \Illuminate\Http\Response
     */
    public function show(Sessions $sessions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sessions  $sessions
     * @return \Illuminate\Http\Response
     */
    public function edit(Sessions $sessions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSessionsRequest  $request
     * @param  \App\Models\Sessions  $sessions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSessionsRequest $request, Sessions $sessions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sessions  $sessions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sessions $sessions)
    {
        //
    }
}
