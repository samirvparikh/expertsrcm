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
                    <h6 class="card-title mb-0">Firstname, Lastname</h6>
                </div>              
                <div class="row">
                    <div class="table-responsive">
                        <table class="table">                        
                            <tbody>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>November 15, 2015 (41 Years)</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>me@nobleui.com</td>
                                </tr>
                                <tr>
                                    <td>Cell Phone</td>
                                    <td>+91 989 818 3457</td>
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
                      <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
                      <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">1 min ago</p>
                      </div>
                    </div>
                    <div class="dropdown">
                      <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="meh" class="icon-sm me-2"></i> <span class="">Unfollow</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="corner-right-up" class="icon-sm me-2"></i> <span class="">Go to post</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="share-2" class="icon-sm me-2"></i> <span class="">Share</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="copy" class="icon-sm me-2"></i> <span class="">Copy link</span></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
                  <img class="img-fluid" src="https://via.placeholder.com/689x430" alt="">
                </div>
                <div class="card-footer">
                  <div class="d-flex post-actions">
                    <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                      <i class="icon-md" data-feather="heart"></i>
                      <p class="d-none d-md-block ms-2">Like</p>
                    </a>
                    <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                      <i class="icon-md" data-feather="message-square"></i>
                      <p class="d-none d-md-block ms-2">Comment</p>
                    </a>
                    <a href="javascript:;" class="d-flex align-items-center text-muted">
                      <i class="icon-md" data-feather="share"></i>
                      <p class="d-none d-md-block ms-2">Share</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card rounded">
                <div class="card-header">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                      <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
                      <div class="ms-2">
                        <p>Mike Popescu</p>
                        <p class="tx-11 text-muted">5 min ago</p>
                      </div>
                    </div>
                    <div class="dropdown">
                      <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="meh" class="icon-sm me-2"></i> <span class="">Unfollow</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="corner-right-up" class="icon-sm me-2"></i> <span class="">Go to post</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="share-2" class="icon-sm me-2"></i> <span class="">Share</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="copy" class="icon-sm me-2"></i> <span class="">Copy link</span></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <img class="img-fluid" src="https://via.placeholder.com/689x430" alt="">
                </div>
                <div class="card-footer">
                  <div class="d-flex post-actions">
                    <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                      <i class="icon-md" data-feather="heart"></i>
                      <p class="d-none d-md-block ms-2">Like</p>
                    </a>
                    <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                      <i class="icon-md" data-feather="message-square"></i>
                      <p class="d-none d-md-block ms-2">Comment</p>
                    </a>
                    <a href="javascript:;" class="d-flex align-items-center text-muted">
                      <i class="icon-md" data-feather="share"></i>
                      <p class="d-none d-md-block ms-2">Share</p>
                    </a>
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
                  <h6 class="card-title">latest photos</h6>
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
      
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table" id="dataTableExample">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Date of Birth</th>
                                    <th>Cell Phone</th>
                                    <th>Gender</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $patient->first_name }}</td>
                                    <td>{{ $patient->last_name }}</td>
                                    <td>{{ $patient->email }}</td>
                                    <td>{{ $patient->dob }}</td>
                                    <td>{{ $patient->cell_phone }}</td>
                                    <td>{{ ucfirst($patient->gender) }}</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-inverse-success btn-xs">View</a>
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
@endsection
