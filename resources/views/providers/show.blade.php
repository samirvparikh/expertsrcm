@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Provider Details</h2>
        <div>
            <a href="{{ route('providers.index') }}" class="btn btn-secondary">
                <i class="btn-icon-prepend" data-feather="arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- First Name -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">First Name</label>
                            <p>{{ $provider->first_name }}</p>
                        </div>

                        <!-- Middle Name -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Middle Name</label>
                            <p>{{ $provider->middle_name ?? 'N/A' }}</p>
                        </div>

                        <!-- Last Name -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Last Name</label>
                            <p>{{ $provider->last_name }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Date of Birth -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Date of Birth</label>
                            <p>{{ $provider->dob }}</p>
                        </div>

                        <!-- Age -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Age</label>
                            <p>{{ $provider->age }}</p>
                        </div>

                        <!-- Gender -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Gender</label>
                            <p>{{ ucfirst($provider->gender) }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Email -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Email</label>
                            <p>{{ $provider->email }}</p>
                        </div>

                        <!-- Cell Phone -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Cell Phone</label>
                            <p>{{ $provider->cell_phone }}</p>
                        </div>

                        <!-- Created By -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Created By</label>
                            <p>{{ $provider->created_by ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Updated By -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Updated By</label>
                            <p>{{ $provider->updated_by ?? 'N/A' }}</p>
                        </div>

                        <!-- Created At -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Created At</label>
                            <p>{{ $provider->created_at }}</p>
                        </div>

                        <!-- Updated At -->
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Updated At</label>
                            <p>{{ $provider->updated_at }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-end">
                            <a href="{{ route('providers.edit', $provider->id) }}" class="btn btn-inverse-warning btn-xs">Edit</a>
                            <form action="{{ route('providers.destroy', $provider->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-inverse-danger btn-xs" onclick="return confirm('Are you sure you want to delete this provider?');">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
