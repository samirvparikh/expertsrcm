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

                            <div class="alert alert-fill-light" role="alert">
                                Required Preauth/X-Rays
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Extraction</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="option" id="option">
                                        <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Crown</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="option" id="option">
                                        <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">RCT</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="option" id="option">
                                        <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Periodontal</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="option" id="option">
                                        <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Denture</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="option" id="option">
                                        <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            

                            

                            


                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header">
                            Required Preauth/X-Rays
                        </div>
                        <div class="card-body">
                            
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Extraction</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="option" id="option">
                                        <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Crown</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="option" id="option">
                                        <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">RCT</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="option" id="option">
                                        <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Periodontal</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="option" id="option">
                                        <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Denture</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="option" id="option">
                                        <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-header">
                        Coverage %
                    </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Diagnostic - X-RAY</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Preventive</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Oral / Facial photographic images - D0350</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Basic Restorative - D2391/Downgrade</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Major Restorative -  D2950</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Major Restorative -  D2740/Downgrade</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Endo - D3310</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Perio - D4341</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Perio - D4346</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Perio - D4381</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Oral & Maxillofacial Surgery - D7210</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Bonegraft - D7953</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Prostho - D5110</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Implants - D6010</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Ortho - D8090</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Nightguard - D9944</label>
                                <div class="col-sm-6"><input type="text" class="form-control"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-header">
                        Frequency & History
                    </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Periodic Exam -  D0120</label>
                                <div class="col-sm-3"><input type="text" class="form-control"></div>
                                <div class="col-sm-3"><input type="text" class="form-control"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>

    </div>
@endsection
