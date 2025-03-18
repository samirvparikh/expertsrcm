@extends('layouts.app')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Edit Permission</h2>
        <div>
            <a href="{{ route('permissions.index') }}" class="btn btn-secondary">
                <i class="btn-icon-prepend" data-feather="arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
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

                    <form class="row g-3" action="{{ route('update.permission') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $permission->id }}">
                        <div class="mb-3">
                            <label for="input1" class="form-label">Permission Name </label>
                            <input type="text" name="name" class="form-control" value="{{ $permission->name }}" value="{{ old('name', $permission->name) }}" required>

                        </div>
                        <div class="mb-3">
                            <label for="input1" class="form-label">Permission Group </label>
                            <select name="group_name" class="form-select mb-3"
                                aria-label="Default select example">
                                <option selected="">Select Group </option>
                                <option value="Eligibility" {{ old('group_name', $permission->group_name) == 'Eligibility' ? 'selected' : '' }}>Eligibility</option>
                                <option value="Role and Permission" {{ old('group_name', $permission->group_name) == 'Role and Permission' ? 'selected' : '' }}>Role and Permission</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                <a href="{{ route('permissions.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection