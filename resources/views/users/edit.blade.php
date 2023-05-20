<!-- edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Form fields for editing user details -->
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $user->name }}" required>

        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $user->email }}" required>

        <button type="submit">Update User</button>
    </form>
@endsection
