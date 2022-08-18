@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row">
        <h1 class="col-8 display-4 fw-bold mb-5 mt-5 text-center">Phonebook</h1>
        <div class="col-4 mt-5">
            <a href="{{ route('contact')}}" class="btn btn-end btn-primary mt-3" title="Add Contact"><i class="fa-solid fa-plus"></i> add contact</a>
        </div>
</div>

<div class="container-fluid">
        <table class="table w-100">
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Username</th>
            <th></th>
            <th></th>
        </thead>     
        <tbody>
            @forelse($phonebook_list as $phonebook_details)
            <tr>
            <td> {{ $phonebook_details->first_name }}</td>
            <td> {{ $phonebook_details->last_name }}</td>
            <td> {{ $phonebook_details->address }}</td>
            <td> {{ $phonebook_details->contact_number }}</td>
            <td> {{ $phonebook_details->username }}</td>
            <td>
            <form action="{{ route('destroy', $phonebook_details->id) }}" method="post">
                    @csrf
                    @method('DELETE')
            <td>
            <a href="{{ route('profile', $phonebook_details->id) }}" class="btn btn-info btn-sm" title="Contact Profile"><i class="fa-solid fa-magnifying-glass"></i></a>
            </td>
            <td>
            <a href="{{ route('edit', $phonebook_details->id) }}" class="btn btn-warning btn-sm" title="Edit Phonebook"><i class="fa-solid fa-edit"></i></a>
            <button type="submit" class="btn btn-danger btn-sm" title="Delete Task"><i class="fa-solid fa-trash"></i></button>
            </td>
               
                   
                </form>
            </td>
            </tr>
            @empty
            @endforelse
        </tbody>


   </table>
</div>
@endsection