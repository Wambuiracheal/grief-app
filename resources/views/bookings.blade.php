@include('layouts.header')
@include('layouts.sidebar')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-1 d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="/index" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bookings</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="container-fluid">
                <div class="mt-1 row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Counselling requests</h4>
                                <h6 class="card-subtitle">Your previous counselling requests and reservations</h6>
                            </div>
                            @if ($bookingscount == 0)
                                <div class="card-body text-center">
                                    <h4 class="card-title">all your counselling requests have been approved</h4>
                                    <a href="/sessions" class="text-white btn btn-info">View them here</a>
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Session Name</th>
                                                <th scope="col">Counsellor</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $booking)

                                                <tr>
                                                    <td>{{ $loop->iteration }}
                                                    <td>{{ $booking->session }}</td>
                                                    <td>{{ $booking->counsellor }}</td>
                                                    <td>{{ $booking->Date }}</td>
                                                    <td>{{ $booking->Duration }}</td>
                                                    <td>
                                                        <button class="btn btn-outline-warning" disabled><i class="m-r-10 mdi mdi-clock"></i>{{ $booking->Status }}
                                                    </td>
                                                </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            @endif



                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>


@include('layouts.footer')
