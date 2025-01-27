@extends('layouts.app')

@section('content')
<div class="page-content">
    <h2>Create Eligibility</h2>
    <form action="{{ route('eligibilities.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="patient_id" class="form-label">Patient {{$patientId}}</label>
            <select name="patient_id" id="patient_id" class="form-control @error('patient_id') is-invalid @enderror">
                <option value="">Select a patient</option>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" 
                        {{ old('patient_id', $patientId) == $patient->id ? 'selected' : '' }}>
                        {{ $patient->name }}
                    </option>
                @endforeach
            </select>
            @error('patient_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="insurance_name" class="form-label">Insurance Name</label>
            <input type="text" name="insurance_name" id="insurance_name" class="form-control @error('insurance_name') is-invalid @enderror" value="{{ old('insurance_name') }}">
            @error('insurance_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="network_status" class="form-label">Network Status</label>
            <select name="network_status" id="network_status" class="form-control @error('network_status') is-invalid @enderror">
                <option value="In Network" {{ old('network_status') == 'In Network' ? 'selected' : '' }}>In Network</option>
                <option value="Out of Network" {{ old('network_status') == 'Out of Network' ? 'selected' : '' }}>Out of Network</option>
            </select>
            @error('network_status')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
