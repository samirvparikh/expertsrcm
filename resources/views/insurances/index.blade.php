@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="main-content d-flex justify-content-between flex-wrap">
        <h2 class="page-title">Insurances</h2>
        <div>
            <a href="{{ route('insurances.create') }}" class="btn btn-primary">
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
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($insurances as $insurance)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $insurance->name }}</td>
                                    <td>{{ $insurance->phone }}</td>
                                    <td>{{ $insurance->email }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('insurances.edit', $insurance->id) }}" class="btn btn-inverse-warning btn-xs">Edit</a>
                                        <form action="{{ route('insurances.destroy', $insurance->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-inverse-danger btn-xs" onclick="return confirm('Are you sure you want to delete this?');">
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
