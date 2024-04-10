<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCounsellorsRequest;
use App\Http\Requests\UpdateCounsellorsRequest;
use App\Models\Clients;
use App\Models\Counsellors;
use Illuminate\Support\Facades\Counsellor;
use App\Models\Sessions;

class CounsellorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_counsellor_id = Counsellors::select('id')
        ->where('UserId',Auth::user()->id)
        ->first();

        $bookings = Sessions::join('counsellors','sessions.CounsellorId','=','counsellors.id')
        ->join('clients','sessions.ClientId','clients.id')
        ->join('programs','sessions.ProgramId','=','programs.id')
        ->select('counsellors.Name as counsellor','clients.Name as client','sessions.ClientId as clientid','programs.Name as session','sessions.Duration','sessions.Date')
        ->where('counsellors.id',$get_counsellor_id->id)
        ->where('sessions.Status','Pending')
        ->take(3)
        ->get();

        $sessions = Sessions::join('counsellors','sessions.CounsellorId','=','counsellors.id')
        ->join('clients','sessions.ClientId','=','clients.id')
        ->join('programs','sessions.ProgramId','=','programs.id')
        ->select('counsellors.Name as counsellor','sessions.ClientId as clientId','clients.Name as client','sessions.id','programs.Name as session','sessions.Duration','sessions.Date','sessions.Status','sessions.Attendance')
        ->where('sessions.CounsellorId',$get_counsellor_id->id)
        ->where('sessions.Status','Approved')
        ->where('sessions.Attendance','Present')
        ->orderby('sessions.created_at','desc')
        ->paginate(5);

        return view('Counsellor/index', compact('bookings','sessions'));

    }

    public function profile()
    {
        $get_counsellor_id = Counsellors::select('id')
        ->where('UserId',Auth::user()->id)
        ->first();

        $counsellinghours = Sessions::select('sessions.Duration')
        ->where('sessions.CounsellorId',$get_counsellor_id->id)
        ->where('sessions.Status','Approved')
        ->where('sessions.Attendance','Present')
        ->sum('sessions.Duration');

        // $counsellorclients = Sessions::select('sessions.ClientId')
        // ->where('sessions.CounsellorId',$get_counsellor_id->id)
        // //->distinct()
        // ->count();

        // $counsellorclients = Clients::join('sessions','clients.id','=','sessions.ClientId')
        // ->select('clients.id')->where('sessions.CounsellorId',$get_counsellor_id->id)->count();

        //Log::info($counsellinghours);
        //Log::info($counsellorclients);

        $profile = Counsellors::where('UserId',Auth::user()->id)->first();


        return view('Counsellor/Profile', compact('profile','counsellinghours'));

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
     * @param  \App\Http\Requests\StoreCounsellorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCounsellorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counsellors  $counsellors
     * @return \Illuminate\Http\Response
     */
    public function show(Counsellors $counsellors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counsellors  $counsellors
     * @return \Illuminate\Http\Response
     */
    public function edit(Counsellors $counsellors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCounsellorsRequest  $request
     * @param  \App\Models\Counsellors  $counsellors
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCounsellorsRequest $request, Counsellors $counsellors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counsellors  $counsellors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counsellors $counsellors)
    {
        //
    }
}
