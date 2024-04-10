<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProgramsRequest;
use App\Http\Requests\UpdateProgramsRequest;
use App\Models\Programs;
use App\Models\Clients;
use App\Models\Sessions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Controllers;
use App\Models\Counsellors;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $programs = Programs::join('counsellors', 'programs.CounsellorId', '=','counsellors.id')
        ->select('counsellors.id As counsellorId', 'counsellors.Name as counsellor','programs.id','programs.Name As program','programs.Day','programs.Duration','programs.Price') 
        ->get();

        $get_counsellor_id = Counsellors::select('id')
        ->where('UserId',Auth::user()->id)
        ->first();

        return view('Counsellor/Programs', compact('programs','get_counsellor_id'));
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
     * @param  \App\Http\Requests\StoreProgramsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ProgramName' => 'required',
            'Day' => 'required',
            'Duration' => 'required',
            'Price' => 'required',

        ]);

        $program = new Programs;

        $program->Name=$request->input('ProgramName');
        $program->CounsellorId=$request->input('CounsellorId');
        $program->Day=$request->input('Day');
        $program->Duration=$request->input('Duration');
        $program->Price=$request->input('Price');


        //Log::info($program);
        $program->save();

        return redirect('Counsellor/Programs')->with('success','Program added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Log::info($id);

        $approved = Sessions::join('clients','sessions.ClientId','=','clients.id')
        ->join('programs','sessions.ProgramId','=','programs.id')
        ->select('clients.Name as Name','sessions.Duration','sessions.Date','programs.Name as program','programs.id','sessions.Status','sessions.Attendance')
        ->where('programs.id',$id)
        ->where('sessions.Status','Approved')        
        ->get();

        $pending = Sessions::join('clients','sessions.ClientId','=','clients.id')
        ->join('programs','sessions.ProgramId','=','programs.id')
        ->select('clients.Name as Name','sessions.Duration','sessions.Date','programs.Name as program','programs.id','sessions.Status','sessions.Attendance')
        ->where('programs.id',$id)
        ->where('sessions.Status','Pending')        
        ->get();

        $program = Programs::find($id)
        ->join('counsellors','programs.CounsellorId','=','counsellors.id')
        ->select('programs.id','programs.Name As name','programs.Day','programs.Duration','programs.Price')
        ->where('programs.id',$id)
        ->limit(1)
        ->first();

        return view('Counsellor.show_program', compact('program', 'approved','pending'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function edit(Programs $programs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgramsRequest  $request
     * @param  \App\Models\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgramsRequest $request, Programs $programs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Programs::find($id)->delete();

        return redirect()->back();
    }
}
