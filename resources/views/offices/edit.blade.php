@extends('layouts.app')

@section('content')
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Edit User</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('users.update', $user->id) }}" class="forms-sample">
                        @csrf
                        @method('PUT')

                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $user->name) }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $user->email) }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password (Leave blank to keep current password)</label>
                            <input type="password" id="password" name="password"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Status Field -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" name="status"
                                class="form-control @error('status') is-invalid @enderror">
                                <option value="1" {{ old('status', $user->status) == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $user->status) == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                        <button type="button" class="btn btn-secondary" onclick="window.location='{{ URL::previous() }}'">Cancel</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
