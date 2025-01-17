@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Insurances</h4>                
        </div>
        <div>
            <a href="{{ route('insurances.create') }}" class="btn btn-primary"><i class="btn-icon-prepend" data-feather="plus"></i> Add New Insurance</a>
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
                                        <a href="{{ route('insurances.edit', $insurance->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('insurances.destroy', $insurance->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
