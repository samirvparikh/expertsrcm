@extends('layouts.app')

@section('content')
    <div class="page-content">

        <div class="row inbox-wrapper">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 border-end-lg">
                                <div>
                                    <div class="d-flex align-items-center p-2 border-bottom tx-16">
                                        <span data-feather="user-plus" class="icon-md me-2"></span>
                                        Patient: {{ $patient->name }} => (DOB: {{ \Carbon\Carbon::parse($patient->dob)->format('m/d/Y') }})
                                        ({{ \Carbon\Carbon::parse($patient->dob)->age }} Year Old)
                                        
                                    </div>
                                </div>
                                <div class="p-3 pb-0">
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
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>&nbsp;</th>
                                                        <th class="pt-0 text-center text-danger">Individual</th>
                                                        <th class="pt-0 text-center text-danger">Family</th>
                                                        <th class="pt-0 text-center text-danger">Ortho</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Deductibles</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Deductible REMAIN</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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

                                    <div>
                                        <div class="d-flex align-items-center p-2 border-bottom tx-16">
                                            <span data-feather="alert-circle" class="icon-md me-2"></span>
                                            Frequency & History
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>&nbsp;</th>
                                                        <th class="pt-0 text-center text-danger ">Frequency</th>
                                                        <th class="pt-0 text-center text-danger ">History</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Periodic Exam -  D0120</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Comp. Exam - D0150</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Consultation - D9310</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fac. photographic images-D0350</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Prophy - D1110, D1120</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>BW - D0274</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>FMX & Pano - D0210 & D0330</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Crowns - D2740</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dentures - D5110</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nightguard - D9944</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Perio SRP - D4341</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Perio Maintenance - D4910</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>D4381</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="d-flex align-items-center p-2 border-bottom tx-16">
                                        <span data-feather="alert-circle" class="icon-md me-2"></span>
                                        Coverage %
                                    </div>
                                </div>
                                <div class="p-3 pb-0">
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Diagnostic -
                                            X-RAY</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Preventive</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Oral / Facial
                                            photographic
                                            images - D0350</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Basic Restorative -
                                            D2391/Downgrade</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Major Restorative -
                                            D2950</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Major Restorative -
                                            D2740/Downgrade</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Endo - D3310</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Perio -
                                            D4341</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Perio -
                                            D4346</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Perio -
                                            D4381</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Oral & Maxillofacial
                                            Surgery - D7210</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Bonegraft -
                                            D7953</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Prostho -
                                            D5110</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Implants -
                                            D6010</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Ortho -
                                            D8090</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-6 col-form-label">Nightguard - D9944</label>
                                        <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    </div>

                                </div>

                                <div>
                                    <div class="d-flex align-items-center p-2 border-bottom tx-16">
                                        <span data-feather="image" class="icon-md me-2"></span>
                                        Required Preauth/X-Rays
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Extraction</label>
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
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Crown</label>
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
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">RCT</label>
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
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Periodontal</label>
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
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Denture</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="option" id="option">
                                                <option value="yes" {{ old('option', 'no') == 'yes' ? 'selected' : '' }}>Yes
                                                </option>
                                                <option value="no" {{ old('option', 'no') == 'no' ? 'selected' : '' }}>No
                                                </option>
                                            </select>
                                        </div>
                                    </div>
            
                                </div>

                                <div>
                                    <div class="d-flex align-items-center p-2 border-bottom tx-16">
                                        <span data-feather="clipboard" class="icon-md me-2"></span>
                                        Share History?
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">D0150/D0120/D0140/D9310</label>
                                        <div class="col-sm-8"><input type="text" class="form-control"></div>
                                    </div>            
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">D1110/D4910</label>
                                        <div class="col-sm-8"><input type="text" class="form-control"></div>
                                    </div>            
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">D0210/D0330</label>
                                        <div class="col-sm-8"><input type="text" class="form-control"></div>
                                    </div>            
                                </div>

                                <div>
                                    <div class="d-flex align-items-center p-2 border-bottom tx-16">
                                        <span data-feather="alert-circle" class="icon-md me-2"></span>
                                        Fluoride & Sealants
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th class="pt-0 text-center text-danger ">Frequency</th>
                                                    <th class="pt-0 text-center text-danger ">History</th>
                                                    <th class="pt-0 text-center text-danger ">Age Limit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>D1208, D1206</td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>D1351</td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>D1351</td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div>
                                    <div class="d-flex align-items-center p-2 border-bottom tx-16">
                                        <span data-feather="clipboard" class="icon-md me-2"></span>
                                        Verification Details
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Date</label>
                                        <div class="col-sm-8"><input type="text" class="form-control"></div>
                                    </div>            
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Verified By</label>
                                        <div class="col-sm-8"><input type="text" class="form-control" value="{{ auth()->check() ? auth()->user()->name : 'Guest' }}"></div>
                                    </div>            
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Insurance Rep. Name</label>
                                        <div class="col-sm-8"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Insurance Reference Number</label>
                                        <div class="col-sm-8"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Additional Notes </label>
                                        <div class="col-sm-8"><input type="text" class="form-control"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save Patient</button>
                            <a href="{{ route('patients.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
