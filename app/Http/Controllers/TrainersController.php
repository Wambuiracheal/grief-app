<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainersRequest;
use App\Http\Requests\UpdateTrainersRequest;
use App\Models\Trainers;

class TrainersController extends Controller
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
