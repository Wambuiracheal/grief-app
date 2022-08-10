@include('Trainer/Layouts.header')
@include('Trainer/Layouts.sidebar')

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
                            <li class="breadcrumb-item active" aria-current="page">Client Bookings</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="container-fluid">
                <div class="mt-1 row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <i  class="m-r-5 font-18 mdi mdi-numeric-2-box-multiple-outline"></i>Training requests</h4>
                                <h6 class="card-subtitle">Client training request bookings</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Session Name</th>
                                            <th scope="col">Client</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Duration</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <th scope="row">{{ $booking->id }}</th>
                                                <td>{{ $booking->session}}</td>
                                                <td>{{ $booking->client }}</td>
                                                <td>{{ $booking->Date }}</td>
                                                <td>{{ $booking->Duration }}</td>
                                                <td>

                                                    <form action="/Trainer/Bookings/{{ $booking->id }}" method="POST"  >
                                                        @csrf
                                                        @if ($booking->Status !== 'Approved')
                                                            <button value="Approved" name="Status" id="Status" type="submit" class="btn btn-outline-primary " >
                                                                <i class="mdi mdi-thumb-up"></i> &nbsp;Approve
                                                            </button>&nbsp;
                                                        @else
                                                            <button value="Pending" name="Status" id="Status" type="submit" class="btn btn-success" disabled>
                                                                <i class="mdi mdi-dumbbell"></i> Approved
                                                            </button>&nbsp;
                                                        @endif
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>


@include('Trainer/Layouts.footer')
