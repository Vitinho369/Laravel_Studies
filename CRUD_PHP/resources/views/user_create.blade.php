@extends("master")

@section("content")

<h2>Create</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name='name' placeholder="Your name">
    <input type="text" name='password' placeholder="Your password">
    <input type="text" name='email' placeholder="Youur email">
    <button type="submit">Create</button>
</form>
@endsection