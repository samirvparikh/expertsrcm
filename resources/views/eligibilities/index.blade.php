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
                                    <th>Patient Name</th>
                                    <th>Date of Birth</th>
                                    <th>Gender</th>
                                    <th>Verified By</th>
                                    <th>Check Date</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($eligibilities as $eligibility)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $eligibility->patient->name }}</td>
                                    <td> {{ \Carbon\Carbon::parse($eligibility->patient->dob)->format('m/d/Y') }}</td>
                                    <td>{{ $eligibility->patient->gender }}</td>
                                    <td>{{ $eligibility->verified_by }}</td>
                                    <td>{{ $eligibility->updated_at->format('m/d/Y h:i:s') }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('eligibilities.edit', $eligibility->id) }}" class="btn btn-inverse-warning btn-xs">Edit</a>
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
