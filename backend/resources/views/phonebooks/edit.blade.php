@extends('layouts.app')

@section('title', 'Edit Phonebook')

@section('content')
    <h3 class="display-4 fw-bold mb-5 mt-5">Edit Contact</h3>

    <form action="{{ route('update', $phonebook_details->id) }}" method="post">
        @csrf
        @method('PATCH')

        <div class="row mb-3 gx-2">
                        <div class="col-md-6">
                            <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control" value="{{ old('phonebook', $phonebook_details->first_name) }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control" value="{{ old('phonebook', $phonebook_details->last_name) }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="address" id="address" placeholder="Address" class="form-control" value="{{ old('phonebook', $phonebook_details->address) }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="number" name="contact_number" id="contact_number" placeholder="Contact Number" class="form-control" value="{{ old('phonebook', $phonebook_details->contact_number) }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="username" id="username" placeholder="Username" class="form-control" value="{{ old('phonebook', $phonebook_details->username) }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary w-100">Edit Contact</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <a href="{{ route('index') }}" class="btn btn-success w-100">Cancel Edit</a>
                        </div>

                    </div>

                    <div class="row mb-3">
                        @error('phonebook')
                            <p class="small text-danger">{{ $message }}</p>
                        @enderror
    </form>


@endsection