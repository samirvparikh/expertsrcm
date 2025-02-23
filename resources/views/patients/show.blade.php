@extends('layouts.app')

@section('content')
<div class="page-content">

    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Patient Information</h2>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('eligibilities.form', ['patientId' => $patient->id]) }}" class="btn btn-primary  btn-sm  mb-2 mb-md-0 ms-3">
              Eligibility
            </a>            
            <a href="{{ route('patients.create') }}" class="btn btn-primary  btn-sm  mb-2 mb-md-0 ms-3">
                Billing
            </a>
        </div>
    </div>

    <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
          <div class="card rounded">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h6 class="card-title mb-0">Contact Details</h6>
                </div>              
                <div class="row">
                    <div class="table-responsive">
                        <table class="table">                        
                            <tbody>
                                <tr>
                                  <td>Patient Name</td>
                                  <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                              </tr>
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
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Appointment History</h6>
                        <div class="dropdown mb-2">
                          <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7" style="">
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm me-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> <span class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm me-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> <span class="">Download</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-hover mb-0">
                          <thead>
                            <tr>
                              <th class="pt-0">#</th>
                              <th class="pt-0">Appt. Date</th>
                              <th class="pt-0">Appt. Time</th>
                              <th class="pt-0">Provider</th>
                              <th class="pt-0">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($appointments as $appointment)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ viewDate($appointment->appt_date) }}</td>
                                <td>{{ setTimeFormat($appointment->appt_time) }}</td>
                                <td></td>
                                <td><span class="badge bg-success">Active</span></td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div> 
                  </div>
                </div>

                <div class="col-md-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Appointment History</h6>
                        <div class="dropdown mb-2">
                          <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7" style="">
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm me-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> <span class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm me-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> <span class="">Download</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-hover mb-0">
                          <thead>
                            <tr>
                                <th>Date of Service</th>
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
                                    <td>{{ $procedure->provider->first_name ?? '' }} {{ $procedure->provider->last_name ?? '' }}</td>
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

