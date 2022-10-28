@extends('layouts.auth-master')
@section('content')
<form method="post" action="{{ route('logout.perform') }}">
    @csrf
<button class="w-100 btn btn-lg btn-primary" type="submit" value="IfkwvVUuGXoaXkcUkqocsX55BGfD216VclqUVKq7a8q5gzvBlaUjBdif2svK">Logout</button>
@include('auth.partials.copy')
</form>
@endsection
