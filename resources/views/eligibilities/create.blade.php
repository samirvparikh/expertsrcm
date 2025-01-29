@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="main-content d-flex justify-content-between flex-wrap">
            <h2 class="page-title">Patient: {{ $patient->name }} => {{ $patient->dob }}</h2>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('eligibilities.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Policy Holder
                                    Name</label>
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
                                <label for="network_status" class="col-sm-4 col-form-label">In Network / Out of
                                    Network</label>
                                <div class="col-sm-8">
                                    <select name="network_status" id="network_status"
                                        class="form-control @error('network_status') is-invalid @enderror">
                                        <option value="In Network"
                                            {{ old('network_status') == 'In Network' ? 'selected' : '' }}>In Network
                                        </option>
                                        <option value="Out of Network"
                                            {{ old('network_status') == 'Out of Network' ? 'selected' : '' }}>Out of
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
                                    <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'datetime'"
                                        data-inputmask-inputformat="mm/dd/yyyy" inputmode="numeric">
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
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Missing Tooth Clause</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Ortho Maximum</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Ortho Remianing
                                    Maximum</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Ortho Age Limit</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Annual Maximum</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Remianing Maximum</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Plan Year</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                123
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Deductible Applies
                                    To</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Preventive Waived</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="option" id="option">
                                        <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes
                                        </option>
                                        <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                Required Preauth/X-Rays
                            </div>


                            <div class="row">
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Required Preauth/X-Rays</h6>
                                            
                                            <div class="input-group flatpickr" id="flatpickr-date">
                                                <input type="text" class="form-control flatpickr-input"
                                                    placeholder="Select date" data-input="" readonly="readonly">
                                                <span class="input-group-text input-group-addon" data-toggle=""><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-calendar">
                                                        <rect x="3" y="4" width="18" height="18" rx="2"
                                                            ry="2"></rect>
                                                        <line x1="16" y1="2" x2="16"
                                                            y2="6"></line>
                                                        <line x1="8" y1="2" x2="8"
                                                            y2="6"></line>
                                                        <line x1="3" y1="10" x2="21"
                                                            y2="10"></line>
                                                    </svg></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-secondary">Cancel</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
