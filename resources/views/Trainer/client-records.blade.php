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
                            <li class="breadcrumb-item"><a href="/Trainer/index" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sessions</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="container-fluid">
                <div class="mt-1 row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-primary float-end" onclick="history.back()"> Go Back</a>
                                <h4 class="card-title">Training sessions attended by {{ $client->Name }}</h4>
                                <h6 class="card-subtitle">{{ $client->Name }}'s training sessions</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Program</th>
                                            <th scope="col">Day</th>
                                            <th scope="col">Duration</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Attendance</th>
                                            {{-- <th scope="col">Price</th> --}}
                                            {{-- <th scope="col">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clientrecords as $records)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><a href="{{ route('show.program',$records->ProgramId)}}" >{{$records->session}}</a></td>
                                                <td>{{$records->Date }}</td>
                                                <td>{{ $records->Duration }} min</td>
                                                @if ($records->Status == 'Pending')
                                                    <td>
                                                        <button class="btn btn-outline-warning" disabled><i class="m-r-10 mdi mdi-thumb-up"></i>
                                                            {{ $records->Status }}
                                                    </td>
                                                @else
                                                <td>
                                                    <button class="btn btn-outline-primary" disabled><i class="m-r-10 mdi mdi-thumb-up"></i>
                                                        {{ $records->Status }}
                                                </td>                                                    
                                                @endif
                                                
                                                @if ($records->Attendance == 'Absent')
                                                    <td>
                                                        <button class="btn btn-outline-danger" disabled><i class="m-r-10 mdi mdi-thumb-up"></i>
                                                            {{ $records->Attendance }}
                                                    </td>
                                                @else
                                                    <td>
                                                        <button class="btn btn-outline-info" disabled><i class="m-r-10 mdi mdi-thumb-up"></i>
                                                            {{ $records->Attendance }}
                                                    </td>
                                                @endif
                                                
                                                {{-- <td>Kshs {{ $records->Price }}</td> --}}
                                                {{-- <td>
                                                    <form method="POST" action="{{ route('delete.program',$program->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                    <a href="{{ route('show.program',$program->id)}}" class="btn btn-success"><i class="bi bi-eye"></i></a> &nbsp; 

                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td> --}}
                                                
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
