@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Offices</h2>
        <div>
            <a href="{{ route('offices.create') }}" class="btn btn-primary">
                <i class="btn-icon-prepend" data-feather="plus"></i> Add New
            </a>
        </div>
    </div>  

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table" id="dataTableExample">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offices as $office)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $office->name }}</td>
                                    <td>{{ $office->email }}</td>
                                    <td>{{ $office->phone }}</td>
                                    <td>{{ $office->city }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('offices.edit', $office->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('offices.destroy', $office->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this office?')">Delete</button>
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
