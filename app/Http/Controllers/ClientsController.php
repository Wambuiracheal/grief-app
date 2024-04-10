<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Sessions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Counsellors;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function profile()
    {
        $get_counsellor_id = Clients::select('id')
        ->where('UserId',Auth::user()->id)
        ->first();

        $profile = Clients::where('UserId',Auth::user()->id)->first();


        return view('profile', compact('profile'));

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function showrecords($id)
    {
        $client = Clients::select('Name')
        ->where('id',$id)
        ->first();

        $clientrecords = Sessions::join('clients','sessions.ClientId','clients.id')
        ->join('programs','sessions.ProgramId','programs.id')
        ->select('sessions.ClientId as clientId','clients.Name as client','sessions.id','programs.Name as session','sessions.Duration','sessions.Date','sessions.Status','sessions.Attendance','sessions.ProgramId')
        ->where('sessions.ClientId',$id)
        // ->where('sessions.Status','Approved')
        // ->where('sessions.Attendance','Present')
        ->orderby('sessions.created_at','desc')
        ->get();

        return view('/Counsellor/client-records', compact('clientrecords','client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(Clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clients $clients)
    {
        //
    }
}
