@extends('layouts.app')

@section('content')
<div class="page-content">
    
    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Patient Eligibility</h2>
    </div>

    <div class="modal fade @if($errors->any()) show @endif" id="varyingModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true" @if($errors->any()) style="display: block;" @endif>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="varyingModalLabel">Import CSV File</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <form action="{{ route('import.create') }}" method="POST" id="myForm" class="forms-sample" enctype="multipart/form-data">
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
                                        <a href="#" class="btn btn-inverse-success btn-xs">Action</a>
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
