@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Edit Office</h4>
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
                    <form action="{{ route('offices.update', $office->id) }}" method="POST" id="myForm" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Office Name:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $office->name) }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone:</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $office->phone) }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Extension:</label>
                            <input type="text" name="phone_ext" class="form-control @error('phone_ext') is-invalid @enderror" value="{{ old('phone_ext', $office->phone_ext) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fax:</label>
                            <input type="text" name="fax" class="form-control @error('fax') is-invalid @enderror" value="{{ old('fax', $office->fax) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fax Extension:</label>
                            <input type="text" name="fax_ext" class="form-control @error('fax_ext') is-invalid @enderror" value="{{ old('fax_ext', $office->fax_ext) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Website:</label>
                            <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('website', $office->website) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $office->email) }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address Line 1:</label>
                            <input type="text" name="address1" class="form-control @error('address1') is-invalid @enderror" value="{{ old('address1', $office->address1) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address Line 2:</label>
                            <input type="text" name="address2" class="form-control @error('address2') is-invalid @enderror" value="{{ old('address2', $office->address2) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City:</label>
                            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city', $office->city) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">State:</label>
                            <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" value="{{ old('state', $office->state) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Zip Code:</label>
                            <input type="text" name="zipcode" class="form-control @error('zipcode') is-invalid @enderror" value="{{ old('zipcode', $office->zipcode) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country:</label>
                            <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ old('country', $office->country) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NPI:</label>
                            <input type="text" name="npi" class="form-control @error('npi') is-invalid @enderror" value="{{ old('npi', $office->npi) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">TIN:</label>
                            <input type="text" name="tin" class="form-control @error('tin') is-invalid @enderror" value="{{ old('tin', $office->tin) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Taxonomy Number:</label>
                            <input type="text" name="taxonomy_number" class="form-control @error('taxonomy_number') is-invalid @enderror" value="{{ old('taxonomy_number', $office->taxonomy_number) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Logo:</label>
                            <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo:</label>
                            <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update Changes</button>
                        <button type="button" class="btn btn-secondary" onclick="window.location='{{ route('offices.index') }}'">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
