@extends('layouts.app')

@section('content')
<h1>Information</h1>
<table class="table table-striped" border="1px solid gray">
<tr><td>Name:</td><td>{{$user->name}}</td></tr>
<tr><td>Skill:</td><td>{{$user->skill}}</td></tr>
<tr><td>Phone Number:</td><td>{{$user->phone}}</td></tr>
<tr><td>Address:</td><td>{{$user->address}}</td></tr>
<tr><td>Fee:</td><td>{{$user->fee}}</td></tr>
<tr><td>Experience:</td><td>{{$user->experience}}</td></tr>
<!-- Name: {{$user->name}} -->
</table>

@endsection
