@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Patient Details</h2>
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
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>First Name</th>
                                <td>{{ $patient->first_name }}</td>
                            </tr>
                            <tr>
                                <th>Middle Name</th>
                                <td>{{ $patient->middle_name ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Last Name</th>
                                <td>{{ $patient->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>{{ \Carbon\Carbon::parse($patient->dob)->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td>{{ $patient->age ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ ucfirst($patient->gender) }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $patient->email ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Cell Phone</th>
                                <td>{{ $patient->cell_phone ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Responsible Party</th>
                                <td>{{ $patient->responsible_party ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Primary Dentist</th>
                                <td>{{ $patient->primary_dentist ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Fee Schedule</th>
                                <td>{{ $patient->fee_schedule ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Preferred Clinic</th>
                                <td>{{ $patient->preferred_clinic ?? 'N/A' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
