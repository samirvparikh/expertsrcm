@extends('layouts.app')

@section('content')
<div class="page-content">

    

    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Eligibility Information</h2>
        
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0" data-bs-toggle="modal" data-bs-target="#varyingModal">
                <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                Import Data
            </button>
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
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="search_appt_date" class="form-label">Search Appt. Date</label>
                            <input type="text" id="search_appt_date" class="form-control" placeholder="MM/DD/YYYY">
                        </div>
                        <div class="col-md-4">
                            <label for="search_clinic" class="form-label">Filter by Clinic</label>
                            <select id="search_clinic" class="form-select">
                                <option value="">All Clinics</option>
                                @foreach ($eligibilities->pluck('office.name')->unique() as $clinic)
                                    <option value="{{ \Illuminate\Support\Str::limit($clinic, 7) }}">{{ $clinic }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableExample" data-display-length="100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="text-end">Actions</th>
                                    <th>Clinic</th>
                                    <th>Provider</th>
                                    <th>Patient Name</th>
                                    <th>Date of Birth {{ $date }}</th>
                                    <th>Appt. Date</th>
                                    <th>Appt. Time</th>
                                    {{-- <th>Prim. Subscriber</th> --}}
                                    <th>Prim. Carrier Name</th>
                                    {{-- <th>Prim. Subscriber ID</th> --}}
                                    <th>Sec. Carrier Name</th>
                                    {{-- <th>Sec. Subscriber ID</th> --}}
                                    <th>Eligible?</th>
                                    <th>Verified By</th>
                                    <th>Verified Date</th>
                                    {{-- <th>Created Date</th> --}}
                                    {{-- <th class="text-end">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($eligibilities as $eligibility)
                                <tr class="{{ $eligibility->is_eligible == 'Yes' ? 'bg-success bg-opacity-10' : ($eligibility->is_eligible == 'No' ? 'bg-danger bg-opacity-10' : '') }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="d-flex justify-content-between">
                                        <a alt="Edit" href="{{ route('eligibilities.form', ['patientId' => $eligibility->patient_id, 'insuranceId' => $eligibility->primary_insurance_id]) }}" class="btn btn-inverse-warning btn-icon border btn-xs me-2"><i data-feather="edit"></i></a>                                        
                                        @if(isset($eligibility->id))
                                            <a href="{{ route('eligibility.export', $eligibility->patient_id) }}" class="btn btn-inverse-success btn-icon border btn-xs me-2"><i data-feather="download"></i></a>
                                        @endif                                        
                                    </td> 
                                    <td>{{ \Illuminate\Support\Str::limit($eligibility->office->name, 7) }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($eligibility->provider->name, 7) }}</td>
                                    <td>{{ $eligibility->patient->name }}</td>
                                    <td>{{  \Carbon\Carbon::parse($eligibility->patient->dob)->format('m/d/Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($eligibility->appt_date)->format('m/d/Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($eligibility->appt_time)->format('g:i A') }}</td>
                                    {{-- <td>{{ $eligibility->prim_subscriber ?? '' }}</td> --}}
                                    <td>{{ $eligibility->primaryInsurance->name ?? '' }}</td>
                                    {{-- <td>{{ $eligibility->prim_subscriber_id ?? '' }}</td> --}}
                                    <td>{{ $eligibility->secondayInsurance->name ?? '' }}</td>
                                    {{-- <td>{{ $eligibility->sec_subscriber_id ?? '' }}</td> --}}
                                    <td>{{ $eligibility->is_eligible }}</td>
                                    <td>{{ $eligibility->verified_by }}</td>
                                    <td>{{ $eligibility->verified_date ? $eligibility->verified_date->format('m/d/Y') : '' }}</td>
                                    {{-- <td>{{ $eligibility->created_at->format('m/d/Y h:i:s') }}</td> --}}
                                    {{-- <td class="text-end">
                                        @if(isset($eligibility->id))
                                        <a href="{{ route('eligibility.export', $eligibility->patient_id) }}" class="btn btn-inverse-danger btn-xs">Export</a>
                                        @endif
                                        <a href="{{ route('eligibilities.form', ['patientId' => $eligibility->patient_id, 'insuranceId' => $eligibility->primary_insurance_id]) }}" class="btn btn-inverse-warning btn-xs">Edit</a>
                                        
                                    </td> --}}
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        @if($errors->any())
            var modal = new bootstrap.Modal(document.getElementById('varyingModal'));
            modal.show();
        @endif
    });
</script>

@endsection

