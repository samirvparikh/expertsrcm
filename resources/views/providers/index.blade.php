@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Providers</h2>
        <div>
            <a href="{{ route('providers.create') }}" class="btn btn-primary">
                <i class="btn-icon-prepend" data-feather="plus"></i> Add New Provider
            </a>
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

                    <div class="table-responsive">
                        <table class="table" id="dataTableExample">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Date of Birth</th>
                                    <th>Cell Phone</th>
                                    <th>Gender</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($providers as $provider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $provider->first_name }}</td>
                                    <td>{{ $provider->last_name }}</td>
                                    <td>{{ $provider->email }}</td>
                                    <td>{{ $provider->dob }}</td>
                                    <td>{{ $provider->cell_phone }}</td>
                                    <td>{{ ucfirst($provider->gender) }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('providers.edit', $provider->id) }}" class="btn btn-inverse-warning btn-xs">Edit</a>
                                        <a href="{{ route('providers.show', $provider->id) }}" class="btn btn-inverse-info btn-xs">View</a>
                                        <form action="{{ route('providers.destroy', $provider->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-inverse-danger btn-xs" onclick="return confirm('Are you sure you want to delete this provider?');">
                                                Delete
                                            </button>
                                        </form>
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
