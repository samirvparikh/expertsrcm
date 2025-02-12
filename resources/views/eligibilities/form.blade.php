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
                            <input type="hidden" name="patient_id" id="patient_id" class="form-control" value="{{ $patient->id }}">
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
                                            <label for="is_eligible" class="col-sm-4 col-form-label">Eligible?</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="is_eligible" id="is_eligible">
                                                    <option value="Yes" {{ old('is_eligible', 'Yes') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                    <option value="No" {{ old('is_eligible', 'No') == 'No' ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="policy_holder_name" class="col-sm-4 col-form-label">Policy Holder Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="policy_holder_name" name="policy_holder_name" class="form-control" value="{{ old('policy_holder_name', $eligibility->policy_holder_name ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="policy_holder_dob" class="col-sm-4 col-form-label">Policy Holder DOB</label>
                                            <div class="col-sm-8">
                                                <input id="policy_holder_dob" name="policy_holder_dob" value="{{ old('policy_holder_dob', optional($eligibility)->policy_holder_dob ? \Carbon\Carbon::parse($eligibility->policy_holder_dob)->format('m/d/Y') : '') }}" class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-placeholder="*" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="insurance_id" class="col-sm-4 col-form-label">Insurance Name</label>
                                            <div class="col-sm-8">
                                                <select id="insurance_id" name="insurance_id" class="js-example-basic-single form-select" data-width="100%">
                                                    <option value="">Select Insurance</option>
                                                    @foreach ($insurances as $insurance)
                                                    <option value="{{ $insurance->id }}" 
                                                        {{ (old('insurance_id') == $insurance->id || ($eligibility->insurance_id ?? null) == $insurance->id || ($insuranceId ?? null) == $insurance->id) ? 'selected' : '' }}>
                                                        {{ $insurance->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('insurance_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="network_status" class="col-sm-4 col-form-label">In Network / Out of Network</label>
                                            <div class="col-sm-8">
                                                <select name="network_status" id="network_status" class="form-control @error('network_status') is-invalid @enderror">
                                                    <option value="1" {{ old('network_status', $eligibility->network_status ?? '') == '1' ? 'selected' : '' }}>In Network</option>
                                                    <option value="0" {{ old('network_status', $eligibility->network_status ?? '') == '0' ? 'selected' : '' }}>Out of Network</option>
                                                </select>
                                                @error('network_status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="member_id" class="col-sm-4 col-form-label">Member ID</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="member_id" name="member_id" class="form-control" value="{{ old('member_id', $eligibility->member_id ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="group_name" class="col-sm-4 col-form-label">Group Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="group_name" name="group_name" class="form-control" value="{{ old('group_name', $eligibility->group_name ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="group_number" class="col-sm-4 col-form-label">Group Number</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="group_number" name="group_number" class="form-control" value="{{ old('group_number', $eligibility->group_number ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="effective_date" class="col-sm-4 col-form-label">Effective Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="effective_date" name="effective_date" class="form-control" value="{{ old('effective_date', optional($eligibility)->effective_date ? \Carbon\Carbon::parse(optional($eligibility)->effective_date)->format('m/d/Y') : '') }}" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="mm/dd/yyyy" inputmode="numeric">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="end_date" class="col-sm-4 col-form-label">Effective Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="end_date" name="end_date" class="form-control" value="{{ old('end_date', optional($eligibility)->end_date ? \Carbon\Carbon::parse(optional($eligibility)->end_date)->format('m/d/Y') : '') }}" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="mm/dd/yyyy" inputmode="numeric">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="claims_filing_limit" class="col-sm-4 col-form-label">Claims Filing Limit</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="claims_filing_limit" name="claims_filing_limit" class="form-control" value="{{ old('claims_filing_limit', $eligibility->claims_filing_limit ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="life_time" class="col-sm-4 col-form-label">Life Time</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="life_time" name="life_time" class="form-control" value="{{ old('life_time', $eligibility->life_time ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="waiting_period" class="col-sm-4 col-form-label">Waiting Period</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="waiting_period" name="waiting_period" class="form-control" value="{{ old('waiting_period', $eligibility->waiting_period ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="missing_tooth_clause" class="col-sm-4 col-form-label">Missing Tooth Clause</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="missing_tooth_clause" name="missing_tooth_clause" class="form-control" value="{{ old('missing_tooth_clause', $eligibility->missing_tooth_clause ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="ortho_maximum" class="col-sm-4 col-form-label">Ortho Maximum</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="ortho_maximum" name="ortho_maximum" class="form-control" value="{{ old('ortho_maximum', $eligibility->ortho_maximum ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="ortho_remaining_maximum" class="col-sm-4 col-form-label">Ortho Remaining Maximum</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="ortho_remaining_maximum" name="ortho_remaining_maximum" class="form-control" value="{{ old('ortho_remaining_maximum', $eligibility->ortho_remaining_maximum ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="ortho_age_limit" class="col-sm-4 col-form-label">Ortho Age Limit</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="ortho_age_limit" name="ortho_age_limit" class="form-control" value="{{ old('ortho_age_limit', $eligibility->ortho_age_limit ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="annual_maximum" class="col-sm-4 col-form-label">Annual Maximum</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="annual_maximum" name="annual_maximum" class="form-control" value="{{ old('annual_maximum', $eligibility->annual_maximum ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="remaining_maximum" class="col-sm-4 col-form-label">Remaining Maximum</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="remaining_maximum" name="remaining_maximum" class="form-control" value="{{ old('remaining_maximum', $eligibility->remaining_maximum ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="plan_year" class="col-sm-4 col-form-label">Plan Year</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="plan_year" name="plan_year" class="form-control" value="{{ old('plan_year', $eligibility->plan_year ?? '') }}">
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
                                                        @foreach(getEligibilityFormFieldsArray()['deductiblesData'] as $key => $label)
                                                            <tr>
                                                                <td>{{ $label }}</td>
                                                                <td>
                                                                    <input type="text" id="{{ $key }}_individual" name="{{ $key }}_individual" class="form-control" value="{{ old($key.'_individual', $deductiblesData[$key]['individual'] ?? '') }}">
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="{{ $key }}_family" name="{{ $key }}_family" class="form-control" value="{{ old($key.'_family', $deductiblesData[$key]['family'] ?? '') }}">
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="{{ $key }}_ortho" name="{{ $key }}_ortho" class="form-control" value="{{ old($key.'_ortho', $deductiblesData[$key]['ortho'] ?? '') }}">
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="deductible_applies_to" class="col-sm-4 col-form-label">Deductible Applies To</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="deductible_applies_to" name="deductible_applies_to" class="form-control" value="{{ old('deductible_applies_to', $eligibility->deductible_applies_to ?? '') }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="preventive_waived" class="col-sm-4 col-form-label">Preventive Waived</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="preventive_waived" id="preventive_waived">
                                                    <option value="1" {{ old('preventive_waived', '1') == '1' ? 'selected' : '' }}>Yes</option>
                                                    <option value="0" {{ old('preventive_waived', '0') == '0' ? 'selected' : '' }}>No</option>
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
                                                        @foreach(getEligibilityFormFieldsArray()['examData'] as $key => $label)
                                                            <tr>
                                                                <td>{{ $label }}</td>
                                                                <td>
                                                                    <input type="text" id="{{ $key }}_frequency" name="{{ $key }}_frequency" class="form-control"
                                                                        value="{{ old($key.'_frequency', $examData[$key]['frequency'] ?? '') }}">
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="{{ $key }}_history" name="{{ $key }}_history" class="form-control"
                                                                        value="{{ old($key.'_history', $examData[$key]['history'] ?? '') }}">
                                                                </td>
                                                            </tr>
                                                        @endforeach
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
                                    <div class="row mb-3">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <tbody>
                                                @foreach(getEligibilityFormFieldsArray()['coverageData'] as $key => $data)
                                                        <tr>
                                                            <td>{{ $data['coverage'] }}</td>
                                                            <td>
                                                                <input type="text" id="{{ $key }}" name="{{ $key }}" class="form-control" value="{{ old($key, $coverageData[$key]['coverage'] ?? '') }}">
                                                            </td>
                                                            <td>
                                                            @if($data['remarks'])
                                                                <input type="text" id="{{ $key }}_ramarks" name="{{ $key }}_ramarks" class="form-control ms-2"
                                                                    placeholder="Enter Remarks" value="{{ old($key.'_ramarks', $coverageData[$key]['remarks'] ?? '') }}">
                                                            @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <div>
                                        <div class="d-flex align-items-center p-2 border-bottom tx-16">
                                            <span data-feather="image" class="icon-md me-2"></span>
                                            Required Preauth/X-Rays
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        @foreach(getEligibilityFormFieldsArray()['requiredPreauthXrayArray'] as $field => $label)
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label">{{ $label }}</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="{{ $field }}" id="{{ $field }}">
                                                        @foreach(getEligibilityFormFieldsArray()['options'] as $value => $option)
                                                            <option value="{{ $value }}" {{ old($field, $requiredPreauthXrayData[$field] ?? 'yes') == $value ? 'selected' : '' }}>
                                                                {{ $option }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div>
                                        <div class="d-flex align-items-center p-2 border-bottom tx-16">
                                            <span data-feather="clipboard" class="icon-md me-2"></span>Share History?
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @php
                                            $fields = [
                                                'exam_codes' => 'D0150/D0120/D0140/D9310',
                                                'cleaning_codes' => 'D1110/D4910',
                                                'xray_codes' => 'D0210/D0330',
                                            ];
                                        @endphp

                                        @foreach($fields as $key => $label)
                                            <div class="row mb-3">
                                                <label for="{{ $key }}" class="col-sm-4 col-form-label">{{ $label }}</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="{{ $key }}" name="{{ $key }}" value="{{ old($key, $fluorideSealantsData[$key] ?? '') }}">
                                                </div>
                                            </div>
                                        @endforeach
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
                                                    @php
                                                        $fluorideFields = [
                                                            'D1208_D1206' => 'D1208, D1206',
                                                            'D1351' => 'D1351',
                                                        ];
                                                    @endphp

                                                    @foreach($fluorideFields as $key => $label)
                                                        <tr>
                                                            <td>{{ $label }}</td>
                                                            <td>
                                                                <input type="text" id="{{ $key }}_frequency" name="{{ $key }}_frequency" class="form-control" value="{{ old($key.'_frequency', $fluorideSealantsData[$key]['frequency'] ?? '') }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="{{ $key }}_history" name="{{ $key }}_history" class="form-control" value="{{ old($key.'_history', $fluorideSealantsData[$key]['history'] ?? '') }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="{{ $key }}_age_limit" name="{{ $key }}_age_limit" class="form-control" value="{{ old($key.'_age_limit', $fluorideSealantsData[$key]['age_limit'] ?? '') }}">
                                                            </td>
                                                        </tr>
                                                    @endforeach
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
                                                <input type="text" id="verified_date" name="verified_date" class="form-control" value="{{ old('verified_date', optional($eligibility)->verified_date ? $eligibility->verified_date->format('m/d/Y') : '') }}" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="mm/dd/yyyy" inputmode="numeric">
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
                                <a href="{{ route('eligibilities.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
