@extends('layouts.top')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><h3>Hello Johnny</h3></div>

                <div class="card-body">
                    <div class="upcoming-classes">
                        <div class="up-title">
                            <h5>Upcomming Classes</h5>
                        </div>
                        &nbsp;
                        <div class="">
                            <ul class="classes-time">
                                <li><img src="/images/stopwatch.png" alt=""> Yoga <span>14:00 - 15:00</span></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="">
                            <ul class="classes-time">
                                <li><img src="/images/stopwatch.png" alt=""> Gym Fitness <span>15:00 - 16:00</span></li>
                            </ul>
                        </div>
                        <hr><div class="">
                            <ul class="classes-time">
                                <li><img src="/images/stopwatch.png" alt=""> Pilates <span>16:00 - 17:00</span></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="">
                            <ul class="classes-time">
                                <li><img src="/images/stopwatch.png" alt=""> Gym Fitness <span>11:00 - 12:00</span></li>
                            </ul>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
        </div>

        <!------------------------------------ Sidebar for active sessions ------------------------------>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">My Active Sessions</div>
                    <div class="card-body">
                        <h5>Zumba</h5>
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5>Cardio</h5>
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5>Weight-Loss</h5>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
