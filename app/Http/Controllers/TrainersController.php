<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainersRequest;
use App\Http\Requests\UpdateTrainersRequest;
use App\Models\Trainers;
use Illuminate\Support\Facades\Auth;
use App\Models\Sessions;

class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_trainer_id = Trainers::select('id')
        ->where('UserId',Auth::user()->id)
        ->first();

        $bookings = Sessions::join('trainers','sessions.TrainerId','=','trainers.id')
        ->join('clients','sessions.ClientId','clients.id')
        ->join('programs','sessions.ProgramId','=','programs.id')
        ->select('trainers.Name as trainer','clients.Name as client','sessions.ClientId as clientid','programs.Name as session','sessions.Duration','sessions.Date')
        ->where('ClientId',$get_trainer_id->id)
        ->where('sessions.Status','Pending')
        ->take(3)
        ->get();

        $sessions = Sessions::join('trainers','sessions.TrainerId','=','trainers.id')
        ->join('clients','sessions.ClientId','=','clients.id')
        ->select('trainers.Name as trainer','sessions.ClientId as clientId','clients.Name as client','sessions.id','programs.Name as session','sessions.Duration','sessions.Date','sessions.Status','sessions.Attendance')
        ->where('TrainerId',$get_trainer_id->id)
        ->where('sessions.Status','Approved')
        ->where('sessions.Attendance','Present')
        ->orderby('sessions.created_at','desc')
        ->paginate(5);

        return view('Trainer/index', compact('bookings','sessions'));

    }

    public function profile()
    {
        $get_trainer_id = Trainers::select('id')
        ->where('UserId',Auth::user()->id)
        ->first();

        //$profile = Trainers::select('Name')->where('id',$get_trainer_id)->get();

        $profile = Trainers::where('UserId',Auth::user()->id)->first();


        return view('Trainer/Profile', compact('profile'));

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
     * @param  \App\Http\Requests\StoreTrainersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function show(Trainers $trainers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainers $trainers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrainersRequest  $request
     * @param  \App\Models\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainersRequest $request, Trainers $trainers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainers $trainers)
    {
        //
    }
}
