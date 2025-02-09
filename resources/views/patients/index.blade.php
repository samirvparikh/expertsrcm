@extends('layouts.app')

@section('content')
<div class="page-content">
    
    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Patients</h2>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0 ms-3" data-bs-toggle="modal" data-bs-target="#varyingModal">
                <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                Import Data
            </button>

            <a href="{{ route('patients.create') }}" class="btn btn-primary  mb-2 mb-md-0 ms-3">
                <i class="btn-icon-prepend" data-feather="plus"></i> Add New Patient
            </a>
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
                                    <th>Status</th>
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
                                    <td>{{ ymdtomdy($patient->dob) }}</td>
                                    <td>{{ $patient->cell_phone }}</td>
                                    <td>{{ ucfirst($patient->gender) }}</td>
                                    <td>
                                        @if ($patient->eligibility_id)
                                            <span class="badge bg-success">Eligibility</span>
                                        @else
                                            
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-inverse-warning btn-xs">Edit</a>
                                        <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-inverse-info btn-xs">View</a>
                                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-inverse-danger btn-xs" onclick="return confirm('Are you sure you want to delete this?');">
                                                Delete
                                            </button>
                                        </form>
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
