@extends('layouts.app')

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $user->name }}" required>
    <input type="email" name="email" placeholder="Email" value="{{ $user->email }}" required>
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Update User</button>
</form>
@endsection
