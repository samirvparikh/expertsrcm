@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Create Options</h4>
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
                    <form action="{{ route('options.store') }}" method="POST" id="myForm" class="forms-sample">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}">
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Key</label>
                            <input type="text" name="key" class="form-control @error('key') is-invalid @enderror" value="{{ old('key') }}">
                            @error('key')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Value</label>
                            <input type="text" name="value" class="form-control @error('value') is-invalid @enderror" value="{{ old('value') }}">
                            @error('value')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                        <button type="button" class="btn btn-secondary" onclick="window.location='{{ route('options.index') }}'">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
