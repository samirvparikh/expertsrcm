@extends('layouts.app')

@section('content')
<div class="page-content">

    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Eligibility Information</h2>
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
                                    <th>Clinic</th>
                                    <th>Provider</th>
                                    <th>Patient Name</th>
                                    <th>Date of Birth</th>
                                    <th>Appt. Date</th>
                                    <th>Appt. Time</th>
                                    {{-- <th>Prim. Subscriber</th> --}}
                                    <th>Prim. Carrier Name</th>
                                    <th>Prim. Subscriber ID</th>
                                    <th>Sec. Carrier Name</th>
                                    <th>Sec. Subscriber ID</th>
                                    <th>Verified By</th>
                                    <th>Verified Date</th>
                                    <th>Created Date</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($eligibilities as $eligibility)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $eligibility->office->name }}</td>
                                    <td>{{ $eligibility->provider->name }}</td>
                                    <td>{{ $eligibility->patient->name }}</td>
                                    <td> {{ \Carbon\Carbon::parse($eligibility->patient->dob)->format('m/d/Y') }}</td>
                                    <td> {{ \Carbon\Carbon::parse($eligibility->appt_date)->format('m/d/Y') }}</td>
                                    <td> {{ \Carbon\Carbon::parse($eligibility->appt_time)->format('g:i A') }}</td>
                                    {{-- <td>{{ $eligibility->prim_subscriber ?? '' }}</td> --}}
                                    <td>{{ $eligibility->primaryInsurance->name ?? '' }}</td>
                                    <td>{{ $eligibility->prim_subscriber_id ?? '' }}</td>
                                    <td>{{ $eligibility->secondayInsurance->name ?? '' }}</td>
                                    <td>{{ $eligibility->sec_subscriber_id ?? '' }}</td>
                                    <td>{{ $eligibility->verified_by }}</td>
                                    <td>{{ $eligibility->verified_date ? $eligibility->verified_date->format('m/d/Y') : '' }}</td>
                                    <td>{{ $eligibility->created_at->format('m/d/Y h:i:s') }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('eligibilities.form', ['patientId' => $eligibility->patient_id]) }}" class="btn btn-inverse-warning btn-xs">Edit</a>
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
