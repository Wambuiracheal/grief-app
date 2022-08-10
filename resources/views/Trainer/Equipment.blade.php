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
                            <li class="breadcrumb-item active" aria-current="page">Equipments</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action= " " method="POST">
                                <fieldset>
                                    <legend>Equipment details:</legend>
                                    <div class="row p-2 mb-4">
                                        <div class="col-md-3">
                                            <div class="mb-0 p-2">
                                                <label for="Unit" class="form-label"> Name</label>
                                                <input type="text" name="unit" class="form-control" placeholder="Dumbbell"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-0 p-2">
                                                <label for="Name" class="form-label">Use</label>
                                                <input type="text" name="unit" class="form-control" placeholder="Weight lifting"/>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="mb-0 p-2">
                                                <label for="Name" class="form-label">Weight</label>
                                                <input type="number" name="unit" class="form-control" placeholder="45 kg"/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-0 p-2">
                                                <label for="Name" class="form-label">Price</label>
                                                <input type="number" name="unit" class="form-control" placeholder="6500"/>
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 ">
                                            <button type="submit" value="Upload" class="btn btn-success text-white" style="width:20%;">
                                                <i class="bi bi-cloud-upload"></i> Submit
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                              </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="mt-1 row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <u><h4 class="card-title text-center"><i  class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>Equipments</h4></u>
                                {{-- <h6 class="card-subtitle"><code>Top Gym's</code> Programs aligned with their respective Days of the week.</h6> --}}
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Zumba</td>
                                            <td>Mrs.Wambui</td>
                                            <td>April 20th, 2022</td>
                                            <td>40 min</td>
                                        </tr>
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
