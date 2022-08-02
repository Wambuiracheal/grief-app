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
                        <ol class="breadcrumb mb-0 d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="/index" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Book Session</li>
                        </ol>
                    </nav>
                    <h1 class="mb-0 fw-bold">Book Session</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action= " " method="POST">
                                <div class="row p-2 mb-4">
                                    <div class="col-md-4">
                                        <div class="mb-0 p-2">
                                            <label for="Unit" class="form-label">Session</label>
                                            <Select name="unit_id" type="text"  class="form-select" id="Unit " aria-describedby="Unit " required>
                                                <option value=""> Zumba</option>
                                                <option value="">Cardio</option>
                                            </Select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-0 p-2">
                                            <label for="Name" class="form-label">Trainer</label>
                                            <Select name="unit_id" type="text"  class="form-select" id="Unit " aria-describedby="Unit " required>
                                                <option value=""> Zumba</option>
                                                <option value="">Cardio</option>
                                            </Select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-0 p-2">
                                            <label for="Name" class="form-label">Date</label>
                                            <input  name="assignmentname" type="date" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-0 p-2">
                                            <label for="Name" class="form-label">Duration</label>
                                            <Select name="unit_id" type="text"  class="form-select" id="Unit " aria-describedby="Unit " required>
                                                <option value=""> Zumba</option>
                                                <option value="">Cardio</option>
                                            </Select>
                                        </div>
                                    </div>

                                    <div class="d-grid gap-2 ">
                                        <button type="submit" value="Upload" class="btn btn-success text-white" style="width:20%;">
                                            <i class="bi bi-cloud-upload"></i> Submit
                                        </button>
                                    </div>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


@include('layouts.footer')
