@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h2 class="mb-3 mt-5">Add Contact</h2>

<div class="row">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control">
                            @error('first_name')
                            <p class="small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control">
                            @error('last_name')
                            <p class="small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="address" id="address" placeholder="Address" class="form-control">
                            @error('address')
                            <p class="small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="number" name="contact_number" id="contact_number" placeholder="Contact Number" class="form-control">
                            @error('contact_number')
                            <p class="small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                            @error('username')
                            <p class="small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary w-100">Add Contact</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <a href="{{ route('index') }}" class="btn btn-success w-100">Cancel Adding</a>
                        </div>

                    </div>

            
                    </div>
                </form>
            </div>

@endsection