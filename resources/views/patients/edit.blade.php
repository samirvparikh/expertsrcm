@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Edit Patient</h2>
        <div>
            <a href="{{ route('patients.index') }}" class="btn btn-secondary">
                <i class="btn-icon-prepend" data-feather="arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('patients.update', $patient->id) }}" method="POST" class="forms-sample">
                        @csrf
                        @method('PUT') <!-- Specify PUT method for updates -->

                        <div class="row">
                            <!-- First Name -->
                            <div class="col-md-4 mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name', $patient->first_name) }}">
                                @error('first_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Middle Name -->
                            <div class="col-md-4 mb-3">
                                <label for="middle_name" class="form-label">Middle Name</label>
                                <input type="text" name="middle_name" id="middle_name" class="form-control" value="{{ old('middle_name', $patient->middle_name) }}">
                            </div>

                            <!-- Last Name -->
                            <div class="col-md-4 mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name', $patient->last_name) }}">
                                @error('last_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Date of Birth -->
                            <div class="col-md-4 mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" name="dob" id="dob" class="form-control @error('dob') is-invalid @enderror" value="{{ old('dob', $patient->dob) }}">
                                @error('dob')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Age -->
                            <div class="col-md-4 mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" name="age" id="age" class="form-control" value="{{ old('age', $patient->age) }}">
                            </div>

                            <!-- Gender -->
                            <div class="col-md-4 mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="male" {{ old('gender', $patient->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender', $patient->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ old('gender', $patient->gender) == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $patient->email) }}">
                            </div>

                            <!-- Cell Phone -->
                            <div class="col-md-6 mb-3">
                                <label for="cell_phone" class="form-label">Cell Phone</label>
                                <input type="text" name="cell_phone" id="cell_phone" class="form-control" value="{{ old('cell_phone', $patient->cell_phone) }}">
                            </div>
                        </div>

                        <div class="row">
                            <!-- Responsible Party -->
                            <div class="col-md-6 mb-3">
                                <label for="responsible_party" class="form-label">Responsible Party</label>
                                <input type="text" name="responsible_party" id="responsible_party" class="form-control" value="{{ old('responsible_party', $patient->responsible_party) }}">
                            </div>

                            <!-- Primary Dentist -->
                            <div class="col-md-6 mb-3">
                                <label for="primary_dentist" class="form-label">Primary Dentist</label>
                                <input type="text" name="primary_dentist" id="primary_dentist" class="form-control" value="{{ old('primary_dentist', $patient->primary_dentist) }}">
                            </div>
                        </div>

                        <div class="row">
                            <!-- Fee Schedule -->
                            <div class="col-md-6 mb-3">
                                <label for="fee_schedule" class="form-label">Fee Schedule</label>
                                <input type="text" name="fee_schedule" id="fee_schedule" class="form-control" value="{{ old('fee_schedule', $patient->fee_schedule) }}">
                            </div>

                            <!-- Preferred Clinic -->
                            <div class="col-md-6 mb-3">
                                <label for="preferred_clinic" class="form-label">Preferred Clinic</label>
                                <input type="text" name="preferred_clinic" id="preferred_clinic" class="form-control" value="{{ old('preferred_clinic', $patient->preferred_clinic) }}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Patient</button>
                        <a href="{{ route('patients.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
