@include('Trainer/Layouts.header')
@include('Trainer/Layouts.sidebar')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center mb-3">
                <div class="col-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="/index" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$program->name}}</li>
                        </ol>
                    </nav>
                    <h1 class="mb-0 fw-bold">Dashboard</h1>
                </div>
                
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- title -->
                        <div class="d-md-flex">
                            <div>
                                <h4 class="card-title">{{$program->name}} Sessions</h4>
                                <h5 class="card-subtitle">Overview of clients sessions</h5>
                            </div>                           
                        </div>
                        <!-- title -->
                        <div class="table-responsive">
                            <table class="table mb-0 table-hover align-middle text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">Duration (Min)</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $clients)

                                    <tr>
                                        <td>{{ $clients->Name }}</td>
                                        <td>{{ $clients->Date }}</td>
                                        <td>{{ $clients->Duration }}</td>
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


@include('Trainer/Layouts.footer')
