@extends('layouts.app')

@section('content')
<div class="page-content">
    <!-- <h2>Eligibility</h2> -->
    <h2>P: {{ $patient->name }} => {{ $patient->dob }}</h2>
    <form action="{{ route('eligibilities.store') }}" method="POST">
        @csrf

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h6 class="card-title">Horizontal Form</h6>

                    <form class="forms-sample">
                        <div class="row mb-3">
                            <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Policy Holder Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Policy Holder DOB</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Insurace Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="network_status" class="col-sm-4 col-form-label">In Network / Out of Network</label>
                            <div class="col-sm-8">
                                <select name="network_status" id="network_status"
                                    class="form-control @error('network_status') is-invalid @enderror">
                                    <option value="In Network" {{ old('network_status') == 'In Network' ? 'selected' : '' }}>In Network
                                    </option>
                                    <option value="Out of Network" {{ old('network_status') == 'Out of Network' ? 'selected' : '' }}>Out of
                                        Network</option>
                                </select>
                                @error('network_status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Member ID</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Group Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Group Number</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Effective Date</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Claims Filling Limit</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Life Time</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Waiting Period</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="patient_id" class="form-label">Patient {{$patientId}}</label>
            <select name="patient_id" id="patient_id" class="form-control @error('patient_id') is-invalid @enderror">
                <option value="">Select a patient</option>
                @foreach ($patients as $patient)
                <option value="{{ $patient->id }}"
                    {{ old('patient_id', $patientId) == $patient->id ? 'selected' : '' }}>
                    {{ $patient->name }}
                </option>
                @endforeach
            </select>
            @error('patient_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="insurance_name" class="form-label">Insurance Name</label>
            <input type="text" name="insurance_name" id="insurance_name"
                class="form-control @error('insurance_name') is-invalid @enderror" value="{{ old('insurance_name') }}">
            @error('insurance_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection