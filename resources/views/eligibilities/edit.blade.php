@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="row inbox-wrapper">
            <div class="col-lg-12">
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
                        <form action="{{ route('eligibility.store') }}" method="POST" class="forms-sample">
                        @csrf
                        <input type="hidden" name="patient_id" id="patient_id" class="form-control" value="{{ $eligibility->patient_id }}">
                        
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
                                            <label for="policy_holder_name" class="col-sm-4 col-form-label">Policy Holder Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="policy_holder_name" name="policy_holder_name" class="form-control" value="{{ old('policy_holder_name', $eligibility->policy_holder_name) }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="policy_holder_dob" class="col-sm-4 col-form-label">Policy Holder DOB</label>
                                            <div class="col-sm-8">
                                                <input id="policy_holder_dob" name="policy_holder_dob" value="{{ old('policy_holder_dob') }}" class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-placeholder="*" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="insurance_name" class="col-sm-4 col-form-label">Insurance Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="insurance_name" name="insurance_name" class="form-control @error('insurance_name') is-invalid @enderror" value="{{ old('insurance_name') }}">
                                                @error('insurance_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="network_status" class="col-sm-4 col-form-label">In Network / Out of Network</label>
                                            <div class="col-sm-8">
                                                <select name="network_status" id="network_status" class="form-control @error('network_status') is-invalid @enderror">
                                                    <option value="In Network" {{ old('network_status') == 'In Network' ? 'selected' : '' }}>In Network</option>
                                                    <option value="Out of Network" {{ old('network_status') == 'Out of Network' ? 'selected' : '' }}>Out of Network</option>
                                                </select>
                                                @error('network_status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="member_id" class="col-sm-4 col-form-label">Member ID</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="member_id" name="member_id" class="form-control" value="{{ old('member_id') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="group_name" class="col-sm-4 col-form-label">Group Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="group_name" name="group_name" class="form-control" value="{{ old('group_name') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="group_number" class="col-sm-4 col-form-label">Group Number</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="group_number" name="group_number" class="form-control" value="{{ old('group_number') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="effective_date" class="col-sm-4 col-form-label">Effective Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="effective_date" name="effective_date" class="form-control" value="{{ old('effective_date') }}" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="mm/dd/yyyy" inputmode="numeric">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="claims_filing_limit" class="col-sm-4 col-form-label">Claims Filing Limit</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="claims_filing_limit" name="claims_filing_limit" class="form-control" value="{{ old('claims_filing_limit') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="life_time" class="col-sm-4 col-form-label">Life Time</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="life_time" name="life_time" class="form-control" value="{{ old('life_time') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="waiting_period" class="col-sm-4 col-form-label">Waiting Period</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="waiting_period" name="waiting_period" class="form-control" value="{{ old('waiting_period') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="missing_tooth_clause" class="col-sm-4 col-form-label">Missing Tooth Clause</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="missing_tooth_clause" name="missing_tooth_clause" class="form-control" value="{{ old('missing_tooth_clause') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="ortho_maximum" class="col-sm-4 col-form-label">Ortho Maximum</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="ortho_maximum" name="ortho_maximum" class="form-control" value="{{ old('ortho_maximum') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="ortho_remaining_maximum" class="col-sm-4 col-form-label">Ortho Remaining Maximum</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="ortho_remaining_maximum" name="ortho_remaining_maximum" class="form-control" value="{{ old('ortho_remaining_maximum') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="ortho_age_limit" class="col-sm-4 col-form-label">Ortho Age Limit</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="ortho_age_limit" name="ortho_age_limit" class="form-control" value="{{ old('ortho_age_limit') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="annual_maximum" class="col-sm-4 col-form-label">Annual Maximum</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="annual_maximum" name="annual_maximum" class="form-control" value="{{ old('annual_maximum') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="remaining_maximum" class="col-sm-4 col-form-label">Remaining Maximum</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="remaining_maximum" name="remaining_maximum" class="form-control" value="{{ old('remaining_maximum') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="plan_year" class="col-sm-4 col-form-label">Plan Year</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="plan_year" name="plan_year" class="form-control" value="{{ old('plan_year') }}">
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
                                                            <td><input type="text" id="deductible_individual" name="deductible_individual" class="form-control" value="{{ old('deductible_individual') }}"></td>
                                                            <td><input type="text" id="deductible_family" name="deductible_family" class="form-control" value="{{ old('deductible_family') }}"></td>
                                                            <td><input type="text" id="deductible_ortho" name="deductible_ortho" class="form-control" value="{{ old('deductible_ortho') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Deductible REMAIN</td>
                                                            <td><input type="text" id="deductible_remain_individual" name="deductible_remain_individual" class="form-control" value="{{ old('deductible_remain_individual') }}"></td>
                                                            <td><input type="text" id="deductible_remain_family" name="deductible_remain_family" class="form-control" value="{{ old('deductible_remain_family') }}"></td>
                                                            <td><input type="text" id="deductible_remain_ortho" name="deductible_remain_ortho" class="form-control" value="{{ old('deductible_remain_ortho') }}"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="deductible_applies_to" class="col-sm-4 col-form-label">Deductible Applies To</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="deductible_applies_to" name="deductible_applies_to" class="form-control" value="{{ old('deductible_applies_to') }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="preventive_waived" class="col-sm-4 col-form-label">Preventive Waived</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="preventive_waived" id="preventive_waived">
                                                    <option value="yes" {{ old('preventive_waived', 'Yes') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                    <option value="no" {{ old('preventive_waived', 'No') == 'No' ? 'selected' : '' }}>No</option>
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
                                                            <th class="pt-0 text-center text-danger">Frequency</th>
                                                            <th class="pt-0 text-center text-danger">History</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Periodic Exam - D0120</td>
                                                            <td><input type="text" id="periodic_exam_frequency" name="periodic_exam_frequency" class="form-control" value="{{ old('periodic_exam_frequency') }}"></td>
                                                            <td><input type="text" id="periodic_exam_history" name="periodic_exam_history" class="form-control" value="{{ old('periodic_exam_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Comp. Exam - D0150</td>
                                                            <td><input type="text" id="comp_exam_frequency" name="comp_exam_frequency" class="form-control" value="{{ old('comp_exam_frequency') }}"></td>
                                                            <td><input type="text" id="comp_exam_history" name="comp_exam_history" class="form-control" value="{{ old('comp_exam_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Consultation - D9310</td>
                                                            <td><input type="text" id="consultation_frequency" name="consultation_frequency" class="form-control" value="{{ old('consultation_frequency') }}"></td>
                                                            <td><input type="text" id="consultation_history" name="consultation_history" class="form-control" value="{{ old('consultation_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fac. photographic images - D0350</td>
                                                            <td><input type="text" id="fac_photographic_frequency" name="fac_photographic_frequency" class="form-control" value="{{ old('fac_photographic_frequency') }}"></td>
                                                            <td><input type="text" id="fac_photographic_history" name="fac_photographic_history" class="form-control" value="{{ old('fac_photographic_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prophy - D1110, D1120</td>
                                                            <td><input type="text" id="prophy_frequency" name="prophy_frequency" class="form-control" value="{{ old('prophy_frequency') }}"></td>
                                                            <td><input type="text" id="prophy_history" name="prophy_history" class="form-control" value="{{ old('prophy_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>BW - D0274</td>
                                                            <td><input type="text" id="bw_frequency" name="bw_frequency" class="form-control" value="{{ old('bw_frequency') }}"></td>
                                                            <td><input type="text" id="bw_history" name="bw_history" class="form-control" value="{{ old('bw_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>FMX & Pano - D0210 & D0330</td>
                                                            <td><input type="text" id="fmx_pano_frequency" name="fmx_pano_frequency" class="form-control" value="{{ old('fmx_pano_frequency') }}"></td>
                                                            <td><input type="text" id="fmx_pano_history" name="fmx_pano_history" class="form-control" value="{{ old('fmx_pano_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Crowns - D2740</td>
                                                            <td><input type="text" id="crowns_frequency" name="crowns_frequency" class="form-control" value="{{ old('crowns_frequency') }}"></td>
                                                            <td><input type="text" id="crowns_history" name="crowns_history" class="form-control" value="{{ old('crowns_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dentures - D5110</td>
                                                            <td><input type="text" id="dentures_frequency" name="dentures_frequency" class="form-control" value="{{ old('dentures_frequency') }}"></td>
                                                            <td><input type="text" id="dentures_history" name="dentures_history" class="form-control" value="{{ old('dentures_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nightguard - D9944</td>
                                                            <td><input type="text" id="nightguard_frequency" name="nightguard_frequency" class="form-control" value="{{ old('nightguard_frequency') }}"></td>
                                                            <td><input type="text" id="nightguard_history" name="nightguard_history" class="form-control" value="{{ old('nightguard_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Perio SRP - D4341</td>
                                                            <td><input type="text" id="perio_srp_frequency" name="perio_srp_frequency" class="form-control" value="{{ old('perio_srp_frequency') }}"></td>
                                                            <td><input type="text" id="perio_srp_history" name="perio_srp_history" class="form-control" value="{{ old('perio_srp_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Perio Maintenance - D4910</td>
                                                            <td><input type="text" id="perio_maintenance_frequency" name="perio_maintenance_frequency" class="form-control" value="{{ old('perio_maintenance_frequency') }}"></td>
                                                            <td><input type="text" id="perio_maintenance_history" name="perio_maintenance_history" class="form-control" value="{{ old('perio_maintenance_history') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>D4381</td>
                                                            <td><input type="text" id="d4381_frequency" name="d4381_frequency" class="form-control" value="{{ old('d4381_frequency') }}"></td>
                                                            <td><input type="text" id="d4381_history" name="d4381_history" class="form-control" value="{{ old('d4381_history') }}"></td>
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
                                            <label class="col-sm-6 col-form-label">Diagnostic - X-RAY</label>
                                            <div class="col-sm-6"><input type="text" id="diagnostic_xray" name="diagnostic_xray" class="form-control" value="{{ old('diagnostic_xray') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Preventive</label>
                                            <div class="col-sm-6"><input type="text" id="preventive" name="preventive" class="form-control" value="{{ old('preventive') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Oral / Facial photographic images - D0350</label>
                                            <div class="col-sm-6"><input type="text" id="oral_facial_images" name="oral_facial_images" class="form-control" value="{{ old('oral_facial_images') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Basic Restorative - D2391/Downgrade</label>
                                            <div class="col-sm-6"><input type="text" id="basic_restorative" name="basic_restorative" class="form-control" value="{{ old('basic_restorative') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Major Restorative - D2950</label>
                                            <div class="col-sm-6"><input type="text" id="major_restorative_d2950" name="major_restorative_d2950" class="form-control" value="{{ old('major_restorative_d2950') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Major Restorative - D2740/Downgrade</label>
                                            <div class="col-sm-6"><input type="text" id="major_restorative_d2740" name="major_restorative_d2740" class="form-control" value="{{ old('major_restorative_d2740') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Endo - D3310</label>
                                            <div class="col-sm-6"><input type="text" id="endo" name="endo" class="form-control" value="{{ old('endo') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Perio - D4341</label>
                                            <div class="col-sm-6"><input type="text" id="perio_d4341" name="perio_d4341" class="form-control" value="{{ old('perio_d4341') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Perio - D4346</label>
                                            <div class="col-sm-6"><input type="text" id="perio_d4346" name="perio_d4346" class="form-control" value="{{ old('perio_d4346') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Perio - D4381</label>
                                            <div class="col-sm-6"><input type="text" id="perio_d4381" name="perio_d4381" class="form-control" value="{{ old('perio_d4381') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Oral & Maxillofacial Surgery - D7210</label>
                                            <div class="col-sm-6"><input type="text" id="oral_surgery" name="oral_surgery" class="form-control" value="{{ old('oral_surgery') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Bonegraft - D7953</label>
                                            <div class="col-sm-6"><input type="text" id="bonegraft" name="bonegraft" class="form-control" value="{{ old('bonegraft') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Prostho - D5110</label>
                                            <div class="col-sm-6"><input type="text" id="prostho" name="prostho" class="form-control" value="{{ old('prostho') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Implants - D6010</label>
                                            <div class="col-sm-6"><input type="text" id="implants" name="implants" class="form-control" value="{{ old('implants') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Ortho - D8090</label>
                                            <div class="col-sm-6"><input type="text" id="ortho" name="ortho" class="form-control" value="{{ old('ortho') }}"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-6 col-form-label">Nightguard - D9944</label>
                                            <div class="col-sm-6"><input type="text" id="nightguard" name="nightguard" class="form-control" value="{{ old('nightguard') }}"></div>
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
                                            <label class="col-sm-4 col-form-label">Extraction</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="extraction" id="extraction">
                                                    <option value="yes" {{ old('extraction', 'Yes') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                    <option value="no" {{ old('extraction', 'No') == 'No' ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">Crown</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="crown" id="crown">
                                                    <option value="yes" {{ old('crown', 'Yes') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                    <option value="no" {{ old('crown', 'No') == 'No' ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">RCT</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="rct" id="rct">
                                                    <option value="yes" {{ old('rct', 'Yes') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                    <option value="no" {{ old('rct', 'No') == 'No' ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">Periodontal</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="periodontal" id="periodontal">
                                                    <option value="yes" {{ old('periodontal', 'Yes') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                    <option value="no" {{ old('periodontal', 'No') == 'No' ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label">Denture</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="denture" id="denture">
                                                    <option value="yes" {{ old('denture', 'Yes') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                    <option value="no" {{ old('denture', 'No') == 'No' ? 'selected' : '' }}>No</option>
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
                                            <label for="exam_codes" class="col-sm-4 col-form-label">D0150/D0120/D0140/D9310</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="exam_codes" name="exam_codes" value="{{ old('exam_codes') }}" placeholder="Enter value">
                                            </div>
                                        </div>            

                                        <div class="row mb-3">
                                            <label for="cleaning_codes" class="col-sm-4 col-form-label">D1110/D4910</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="cleaning_codes" name="cleaning_codes" value="{{ old('cleaning_codes') }}" placeholder="Enter value">
                                            </div>
                                        </div>            

                                        <div class="row mb-3">
                                            <label for="xray_codes" class="col-sm-4 col-form-label">D0210/D0330</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="xray_codes" name="xray_codes" value="{{ old('xray_codes') }}" placeholder="Enter value">
                                            </div>
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
                                                        <th class="pt-0 text-center text-danger">Frequency</th>
                                                        <th class="pt-0 text-center text-danger">History</th>
                                                        <th class="pt-0 text-center text-danger">Age Limit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>D1208, D1206</td>
                                                        <td><input type="text" class="form-control" id="frequency_1" name="frequency[]" value="{{ old('frequency.0') }}"></td>
                                                        <td><input type="text" class="form-control" id="history_1" name="history[]" value="{{ old('history.0') }}"></td>
                                                        <td><input type="text" class="form-control" id="age_limit_1" name="age_limit[]" value="{{ old('age_limit.0') }}"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>D1351</td>
                                                        <td><input type="text" class="form-control" id="frequency_2" name="frequency[]" value="{{ old('frequency.1') }}"></td>
                                                        <td><input type="text" class="form-control" id="history_2" name="history[]" value="{{ old('history.1') }}"></td>
                                                        <td><input type="text" class="form-control" id="age_limit_2" name="age_limit[]" value="{{ old('age_limit.1') }}"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>D1351</td>
                                                        <td><input type="text" class="form-control" id="frequency_3" name="frequency[]" value="{{ old('frequency.2') }}"></td>
                                                        <td><input type="text" class="form-control" id="history_3" name="history[]" value="{{ old('history.2') }}"></td>
                                                        <td><input type="text" class="form-control" id="age_limit_3" name="age_limit[]" value="{{ old('age_limit.2') }}"></td>
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
                                            <label for="date" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="date" name="date" value="{{ old('date') }}">
                                            </div>
                                        </div>            
                                        <div class="row mb-3">
                                            <label for="verified_by" class="col-sm-4 col-form-label">Verified By</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="verified_by" name="verified_by" value="{{ old('verified_by', auth()->check() ? auth()->user()->name : 'Guest') }}">
                                            </div>
                                        </div>            
                                        <div class="row mb-3">
                                            <label for="insurance_rep_name" class="col-sm-4 col-form-label">Insurance Rep. Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="insurance_rep_name" name="insurance_rep_name" value="{{ old('insurance_rep_name') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="insurance_reference_number" class="col-sm-4 col-form-label">Insurance Reference Number</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="insurance_reference_number" name="insurance_reference_number" value="{{ old('insurance_reference_number') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="additional_notes" class="col-sm-4 col-form-label">Additional Notes</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="additional_notes" name="additional_notes" value="{{ old('additional_notes') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center22">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ route('patients.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
