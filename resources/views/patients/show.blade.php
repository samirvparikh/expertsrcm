@extends('layouts.app')

@section('content')
<div class="page-content">

    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Patient Information</h2>
    </div>

    <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
          <div class="card rounded">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h6 class="card-title mb-0">{{ $patient->first_name }} {{ $patient->last_name }}</h6>
                </div>              
                <div class="row">
                    <div class="table-responsive">
                        <table class="table">                        
                            <tbody>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($patient->dob)->format('m/d/Y') }} 
                                        ({{ \Carbon\Carbon::parse($patient->dob)->diffInYears(\Carbon\Carbon::now()) }} Years old)    
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{{ ucfirst($patient->gender ?? 'N/A') }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $patient->email ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td>Cell Phone</td>
                                    <td>{{ $patient->cell_phone ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td>Responsible Party</td>
                                    <td>{{ $patient->responsible_party ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td>Primary Dentist</td>
                                    <td>{{ $patient->primary_dentist ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td>Fee Schedule</td>
                                    <td>{{ $patient->fee_schedule ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td>Preferred Clinic</td>
                                    <td>{{ $patient->preferred_clinic ?? 'N/A' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-6 middle-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                <div class="card rounded">
                    <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p>Appointment History</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Larry</td>
                                        <td>Jellybean</td>
                                        <td>@lajelly</td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>@lakitkat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                            <div class="ms-2">
                                <p>Procedure History</p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date of Service (DOS)</th>
                                            <th>Procedure Code</th>
                                            <th>Provider ID</th>
                                            <th>Tooth</th>
                                            <th>Surface</th>
                                            <th>Quadrant</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($procedures as $key => $procedure)
                                            <tr>
                                                <td>{{ \Carbon\Carbon::parse($procedure->dos)->format('m/d/Y') }}</td>
                                                <td>{{ $procedure->procedure_code }}</td>
                                                <td>{{ $procedure->provider->first_name }} {{ $procedure->provider->last_name }}</td>
                                                <td>{{ $procedure->tooth }}</td>
                                                <td>{{ $procedure->surface }}</td>
                                                <td>{{ $procedure->quadrant }}</td>
                                                <td>${{ number_format($procedure->amount, 2) }}</td>
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
        <!-- middle wrapper end -->
        <!-- right wrapper start -->
        <div class="d-none d-xl-block col-xl-3">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card rounded">
                <div class="card-body">
                  <h6 class="card-title">Insurance Information</h6>
                  <div class="row ms-0 me-0">
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                      <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                      </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                      <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                      </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                      <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                      </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                      <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                      </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                      <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                      </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                      <figure class="mb-2">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                      </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                      <figure class="mb-0">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                      </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                      <figure class="mb-0">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                      </figure>
                    </a>
                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                      <figure class="mb-0">
                        <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                      </figure>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 grid-margin">
              <div class="card rounded">
                <div class="card-body">
                  <h6 class="card-title">suggestions for you</h6>
                  <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                    <div class="d-flex align-items-center hover-pointer">
                      <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                      <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                      </div>
                    </div>
                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                  </div>
                  <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                    <div class="d-flex align-items-center hover-pointer">
                      <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                      <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                      </div>
                    </div>
                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                  </div>
                  <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                    <div class="d-flex align-items-center hover-pointer">
                      <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                      <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                      </div>
                    </div>
                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                  </div>
                  <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                    <div class="d-flex align-items-center hover-pointer">
                      <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                      <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                      </div>
                    </div>
                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                  </div>
                  <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                    <div class="d-flex align-items-center hover-pointer">
                      <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                      <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                      </div>
                    </div>
                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center hover-pointer">
                      <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                      <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                      </div>
                    </div>
                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- right wrapper end -->
    </div>
</div>
@endsection

