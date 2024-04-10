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
                            <li class="breadcrumb-item active" aria-current="page">Programs</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="container-fluid">
                <div class="mt-1 row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Counselling sessions</h4>
                                <h6 class="card-subtitle">All counselling sessions</h6>
                            </div>
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
                                            <th scope="col">Attendance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Allsessions as $session)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $session->session }}</td>
                                                <td>{{ $session->counsellor }}</td>
                                                <td>{{ $session->Date }}</td>
                                                <td>{{ $session->Duration }}</td>
                                                @if ($session->Status == 'Approved')
                                                    <td>
                                                        <button class="btn btn-outline-primary" disabled><i class="m-r-10 mdi mdi-thumb-up"></i>{{ $session->Status }}
                                                    </td>
                                                @else
                                                    <td>
                                                        <button class="btn btn-outline-warning" disabled><i class="m-r-10 mdi mdi-clock"></i>{{ $session->Status }}
                                                    </td>
                                                @endif

                                                @if ($session->Attendance == 'Present')
                                                    <td>
                                                        <button class="btn btn-outline-success" disabled><i class="m-r-10 mdi mdi-human-handsup"></i>{{ $session->Attendance }}
                                                    </td>
                                                @else
                                                    <td>
                                                        <button class="btn btn-outline-danger" disabled><i class="m-r-10 mdi mdi-account-minus"></i>{{ $session->Attendance }}
                                                    </td>
                                                @endif

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


@include('layouts.footer')
