@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0" data-bs-toggle="modal" data-bs-target="#varyingModal">
                    <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                    Import Data
                  </button>
            </div>
        </div>

        <div class="modal fade @if($errors->any()) show @endif" id="varyingModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true" @if($errors->any()) style="display: block;" @endif>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="varyingModalLabel">Import CSV File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
              </div>
              <form action="{{ route('import.eligibility.patient.create') }}" method="POST" id="myForm" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                      <div class="mb-3">                          
                          <input type="file" name="file" class="form-control" required>
                          @error('file')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Import</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow-1">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">New Patient</h6>
                        <div class="dropdown mb-2">
                          <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-12 col-xl-5">
                          <h3 class="mb-2">3,897</h3>
                          <div class="d-flex align-items-baseline">
                            <p class="text-success">
                              <span>+3.3%</span>
                              <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                            </p>
                          </div>
                        </div>
                        <div class="col-6 col-md-12 col-xl-7">
                          <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">New Orders</h6>
                        <div class="dropdown mb-2">
                          <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-12 col-xl-5">
                          <h3 class="mb-2">35,084</h3>
                          <div class="d-flex align-items-baseline">
                            <p class="text-danger">
                              <span>-2.8%</span>
                              <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                            </p>
                          </div>
                        </div>
                        <div class="col-6 col-md-12 col-xl-7">
                          <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">Growth</h6>
                        <div class="dropdown mb-2">
                          <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-12 col-xl-5">
                          <h3 class="mb-2">89.87%</h3>
                          <div class="d-flex align-items-baseline">
                            <p class="text-success">
                              <span>+2.8%</span>
                              <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                            </p>
                          </div>
                        </div>
                        <div class="col-6 col-md-12 col-xl-7">
                          <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div> <!-- row -->

          <div class="row">
            <div class="col-lg-12 col-xl-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Patient Information</h6>
                    <div class="dropdown mb-2">
                      <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr>
                          <th class="pt-0">#</th>
                          <th class="pt-0">Project Name</th>
                          <th class="pt-0">Start Date</th>
                          <th class="pt-0">Due Date</th>
                          <th class="pt-0">Status</th>
                          <th class="pt-0">Assign</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>NobleUI jQuery</td>
                          <td>01/01/2022</td>
                          <td>26/04/2022</td>
                          <td><span class="badge bg-danger">Released</span></td>
                          <td>Leonardo Payne</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>NobleUI Angular</td>
                          <td>01/01/2022</td>
                          <td>26/04/2022</td>
                          <td><span class="badge bg-success">Review</span></td>
                          <td>Carl Henson</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>NobleUI ReactJs</td>
                          <td>01/05/2022</td>
                          <td>10/09/2022</td>
                          <td><span class="badge bg-info">Pending</span></td>
                          <td>Jensen Combs</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>NobleUI VueJs</td>
                          <td>01/01/2022</td>
                          <td>31/11/2022</td>
                          <td><span class="badge bg-warning">Work in Progress</span>
                          </td>
                          <td>Amiah Burton</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>NobleUI Laravel</td>
                          <td>01/01/2022</td>
                          <td>31/12/2022</td>
                          <td><span class="badge bg-danger">Coming soon</span></td>
                          <td>Yaretzi Mayo</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>NobleUI NodeJs</td>
                          <td>01/01/2022</td>
                          <td>31/12/2022</td>
                          <td><span class="badge bg-primary">Coming soon</span></td>
                          <td>Carl Henson</td>
                        </tr>
                        <tr>
                          <td class="border-bottom">3</td>
                          <td class="border-bottom">NobleUI EmberJs</td>
                          <td class="border-bottom">01/05/2022</td>
                          <td class="border-bottom">10/11/2022</td>
                          <td class="border-bottom"><span class="badge bg-info">Pending</span></td>
                          <td class="border-bottom">Jensen Combs</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div> 
              </div>
            </div>
          </div> <!-- row -->

    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
          @if($errors->any())
              var modal = new bootstrap.Modal(document.getElementById('varyingModal'));
              modal.show();
          @endif
      });
  </script>
@endsection
