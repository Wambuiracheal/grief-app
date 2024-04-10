<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSessionsRequest;
use App\Http\Requests\UpdateSessionsRequest;
use App\Models\Clients;
use App\Models\Sessions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Programs;
use App\Models\Counsellors;

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

        $bookings = Sessions::join('counsellors','sessions.CounsellorId','=','counsellors.id')
        ->join('programs','sessions.ProgramId','=','programs.id')
        ->select('counsellors.Name as counsellor','sessions.ClientId as client','programs.Name as session','sessions.Duration','sessions.Date')
        //->where('ClientId',$get_client_id->id)
        //->where('sessions.Status','Approved')
        ->paginate(3);

        // $present_sessions = Sessions::join('counsellors','sessions.CounsellorId','=','counsellors.id')
        // ->join('programs','sessions.ProgramId','=','programs.id')
        // ->select('counsellors.Name as counsellor','sessions.ClientId as client','programs.Name as session','sessions.Duration','sessions.Date')
        // ->where('ClientId',$get_client_id->id)
        // //->where('sessions.Status','Present')
        // ->get();

        $programs = Programs::join('counsellors','programs.CounsellorId','=','counsellors.id')
        ->select('counsellors.id As CounsellorId','counsellors.Name As counsellor','programs.Name As program','programs.Day','programs.Duration','programs.Price')
        ->paginate(3);

        return view('index', compact('bookings',
        //'present_sessions',
        'programs'
    ));
    }

    public function booksession()
    {
        $programs = Programs::join('counsellors','programs.CounsellorId','=','counsellors.id')
        ->select('counsellors.id As CounsellorId','counsellors.Name As Counsellor','programs.id','programs.Name As program','programs.Day','programs.Duration','programs.Price')
        ->get();

        $get_client_id = Clients::select('id')
        ->where('UserId',Auth::user()->id)
        ->first();

        $counsellors = Counsellors::select('id','Name')->get();
        Log::info($counsellors);

        return view('/book-session', compact('programs','get_client_id','counsellors'));
    }

    public function sessions()
    {
        $get_client_id = Clients::select('id')
        ->where('UserId',Auth::user()->id)
        ->first();

        $Allsessions = Sessions::join('counsellors','sessions.CounsellorId','=','counsellors.id')
        ->join('programs','sessions.ProgramId','=','programs.id')
        ->select('counsellors.Name as counsellor','sessions.ClientId as client','programs.Name as session','sessions.Duration','sessions.Date','sessions.Status','sessions.Attendance')
        ->where('ClientId',$get_client_id->id)
        ->get();

        return view('sessions', compact('Allsessions'));
    }

    public function approvedsessions()
    {
        $get_counsellor_id = Counsellors::select('id')
        ->where('UserId',Auth::user()->id)
        ->first();

        $Allsessions = Sessions::join('counsellors','sessions.Id','=','counsellors.id')
        ->join('clients','sessions.ClientId','=','clients.id')
        ->join('programs','sessions.ProgramId','=','programs.id')
        ->select('counsellors.Name as counsellor','sessions.ClientId as clientId','clients.Name as client','sessions.id','programs.Name as session','sessions.Duration','sessions.Date','sessions.Status',
        'sessions.ProgramId',
        'sessions.Attendance'
        )
        ->where('sessions.Id',$get_counsellor_id->id)
        ->where('sessions.Status','Approved')
        ->orderby('sessions.created_at','DESC')
        ->get();

        return view('Counsellor/Sessions', compact('Allsessions'));

    }

    public function mark_attendance(Request $request, Sessions $id)
    {

        $session = Sessions::where('id',$id->id)
        ->update([
            'Attendance'=>$request->Attendance
        ]);

        return redirect()->back()->with('success','Attendance Updated');
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
        Log::info($request);

        $this->validate($request,[
            'Program' => 'required',
            'Counsellor' => 'required',
            'Date' => 'required',
            'Duration' => 'required',

        ]);

        $session = new Sessions;

        $session->ClientId=$request->input('ClientId');
        $session->ProgramId=$request->input('Program');
        $session->CounsellorId=$request->input('Counsellor');
        $session->Date=$request->input('Date');
        $session->Duration=$request->input('Duration');

        //Log::info($session);
        $session->save();

        return redirect('bookings')->with('success','Session booked successfully');
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
