@extends('layouts.app')

@section('title', 'Edit Phonebook')

@section('content')
    <h3 class="display-4 fw-bold mb-5 mt-5">Contact Profile</h3>

    <label for="first_name">First Name</label>
    <h3 class="display">{{ $phonebook_details->first_name }}</h3>
    <br>

    <label for="last_name">Last Name</label>
    <h3 class="display">{{ $phonebook_details->last_name }}</h3>
    <br>

    <label for="address">Address</label>
    <h3 class="display">{{ $phonebook_details->address }}</h3>
    <br>

    <label for="contact_number">Contact Number</label>
    <h3 class="display">{{ $phonebook_details->contact_number }}</h3>
    <br>

    <label for="username">Username</label>
    <h3 class="display">{{ $phonebook_details->username }}</h3>
    <br>

    <a href="{{ route('index', $phonebook_details->id) }}" class="btn btn-info" title="index">Back To Phonebook</a>
    <a href="{{ route('edit', $phonebook_details->id) }}" class="btn btn-warning" title="edit">Go To Edit Contact</a>



    


@endsection